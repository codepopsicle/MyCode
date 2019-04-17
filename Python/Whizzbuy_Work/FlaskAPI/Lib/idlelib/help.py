""" help.py: Implement the Idle help menu.
Contents are subject to revision at any time, without notice.


Help => About IDLE: diplay About Idle dialog

<to be moved here from aboutDialog.py>


Help => IDLE Help: Display help.html with proper formatting.
Doc/library/idle.rst (Sphinx)=> Doc/build/html/library/idle.html
(help.copy_strip)=> Lib/idlelib/help.html

HelpParser - Parse help.html and and render to tk Text.

HelpText - Display formatted help.html.

HelpFrame - Contain text, scrollbar, and table-of-contents.
(This will be needed for display in a future tabbed window.)

HelpWindow - Display HelpFrame in a standalone window.

copy_strip - Copy idle.html to help.html, rstripping each line.

show_idlehelp - Create HelpWindow.  Called in EditorWindow.help_dialog.
"""
from HTMLParser import HTMLParser
from os.path import abspath, dirname, isdir, isfile, join
from Tkinter import Tk, Toplevel, Frame, Text, Scrollbar, Menu, Menubutton
import tkFont as tkfont
from idlelib.configHandler import idleConf

use_ttk = False # until available to import
if use_ttk:
    from tkinter.ttk import Menubutton

## About IDLE ##


## IDLE Help ##

class HelpParser(HTMLParser):
    """Render help.html into a text widget.

    The overridden handle_xyz methods handle a subset of html tags.
    The supplied text should have the needed tag configurations.
    The behavior for unsupported tags, such as table, is undefined.
    """
    def __init__(self, text):
        HTMLParser.__init__(self)
        self.text = text         # text widget we're rendering into
        self.tags = ''           # current block level text tags to apply
        self.chartags = ''       # current character level text tags
        self.show = False        # used so we exclude page navigation
        self.hdrlink = False     # used so we don't show header links
        self.level = 0           # indentation level
        self.pre = False         # displaying preformatted text
        self.hprefix = ''        # prefix such as '25.5' to strip from headings
        self.nested_dl = False   # if we're in a nested <dl>
        self.simplelist = False  # simple list (no double spacing)
        self.toc = []            # pair headers with text indexes for toc
        self.header = ''         # text within header tags for toc

    def indent(self, amt=1):
        self.level += amt
        self.tags = '' if self.level == 0 else 'l'+str(self.level)

    def handle_starttag(self, tag, attrs):
        "Handle starttags in help.html."
        class_ = ''
        for a, v in attrs:
            if a == 'class':
                class_ = v
        s = ''
        if tag == 'div' and class_ == 'section':
            self.show = True    # start of main content
        elif tag == 'div' and class_ == 'sphinxsidebar':
            self.show = False   # end of main content
        elif tag == 'p' and class_ != 'first':
            s = '\n\n'
        elif tag == 'span' and class_ == 'pre':
            self.chartags = 'pre'
        elif tag == 'span' and class_ == 'versionmodified':
            self.chartags = 'em'
        elif tag == 'em':
            self.chartags = 'em'
        elif tag in ['ul', 'ol']:
            if class_.find('simple') != -1:
                s = '\n'
                self.simplelist = True
            else:
                self.simplelist = False
            self.indent()
        elif tag == 'dl':
            if self.level > 0:
                self.nested_dl = True
        elif tag == 'li':
            s = '\n* ' if self.simplelist else '\n\n* '
        elif tag == 'dt':
            s = '\n\n' if not self.nested_dl else '\n'  # avoid extra line
            self.nested_dl = False
        elif tag == 'dd':
            self.indent()
            s = '\n'
        elif tag == 'pre':
            self.pre = True
            if self.show:
                self.text.insert('end', '\n\n')
            self.tags = 'preblock'
        elif tag == 'a' and class_ == 'headerlink':
            self.hdrlink = True
        elif tag == 'h1':
            self.tags = tag
        elif tag in ['h2', 'h3']:
            if self.show:
                self.header = ''
                self.text.insert('end', '\n\n')
            self.tags = tag
        if self.show:
            self.text.insert('end', s, (self.tags, self.chartags))

    def handle_endtag(self, tag):
        "Handle endtags in help.html."
        if tag in ['h1', 'h2', 'h3']:
            self.indent(0)  # clear tag, reset indent
            if self.show:
                self.toc.append((self.header, self.text.index('insert')))
        elif tag in ['span', 'em']:
            self.chartags = ''
        elif tag == 'a':
            self.hdrlink = False
        elif tag == 'pre':
            self.pre = False
            self.tags = ''
        elif tag in ['ul', 'dd', 'ol']:
            self.indent(amt=-1)

    def handle_data(self, data):
        "Handle date segments in help.html."
        if self.show and not self.hdrlink:
            d = data if self.pre else data.replace('\n', ' ')
            if self.tags == 'h1':
                self.hprefix = d[0:d.index(' ')]
            if self.tags in ['h1', 'h2', 'h3'] and self.hprefix != '':
                if d[0:len(self.hprefix)] == self.hprefix:
                    d = d[len(self.hprefix):].strip()
                self.header += d
            self.text.insert('end', d, (self.tags, self.chartags))

    def handle_charref(self, name):
        self.text.insert('end', unichr(int(name)))


class HelpText(Text):
    "Display help.html."
    def __init__(self, parent, filename):
        "Configure tags and feed file to parser."
        uwide = idleConf.GetOption('main', 'EditorWindow', 'width', type='int')
        uhigh = idleConf.GetOption('main', 'EditorWindow', 'height', type='int')
        uhigh = 3 * uhigh // 4  # lines average 4/3 of editor line height
        Text.__init__(self, parent, wrap='word', highlightthickness=0,
                      padx=5, borderwidth=0, width=uwide, height=uhigh)

        normalfont = self.findfont(['TkDefaultFont', 'arial', 'helvetica'])
        fixedfont = self.findfont(['TkFixedFont', 'monaco', 'courier'])
        self['font'] = (normalfont, 12)
        self.tag_configure('em', font=(normalfont, 12, 'italic'))
        self.tag_configure('h1', font=(normalfont, 20, 'bold'))
        self.tag_configure('h2', font=(normalfont, 18, 'bold'))
        self.tag_configure('h3', font=(normalfont, 15, 'bold'))
        self.tag_configure('pre', font=(fixedfont, 12), background='#f6f6ff')
        self.tag_configure('preblock', font=(fixedfont, 10), lmargin1=25,
                borderwidth=1, relief='solid', background='#eeffcc')
        self.tag_configure('l1', lmargin1=25, lmargin2=25)
        self.tag_configure('l2', lmargin1=50, lmargin2=50)
        self.tag_configure('l3', lmargin1=75, lmargin2=75)
        self.tag_configure('l4', lmargin1=100, lmargin2=100)

        self.parser = HelpParser(self)
        with open(filename) as f:
            contents = f.read().decode(encoding='utf-8')
        self.parser.feed(contents)
        self['state'] = 'disabled'

    def findfont(self, names):
        "Return name of first font family derived from names."
        for name in names:
            if name.lower() in (x.lower() for x in tkfont.names(root=self)):
                font = tkfont.Font(name=name, exists=True, root=self)
                return font.actual()['family']
            elif name.lower() in (x.lower()
                                  for x in tkfont.families(root=self)):
                return name


class HelpFrame(Frame):
    "Display html text, scrollbar, and toc."
    def __init__(self, parent, filename):
        Frame.__init__(self, parent)
        text = HelpText(self, filename)
        self['background'] = text['background']
        scroll = Scrollbar(self, command=text.yview)
        text['yscrollcommand'] = scroll.set
        self.rowconfigure(0, weight=1)
        self.columnconfigure(1, weight=1)  # text
        self.toc_menu(text).grid(column=0, row=0, sticky='nw')
        text.grid(column=1, row=0, sticky='nsew')
        scroll.grid(column=2, row=0, sticky='ns')

    def toc_menu(self, text):
        "Create table of contents as drop-down menu."
        toc = Menubutton(self, text='TOC')
        drop = Menu(toc, tearoff=False)
        for lbl, dex in text.parser.toc:
            drop.add_command(label=lbl, command=lambda dex=dex:text.yview(dex))
        toc['menu'] = drop
        return toc


class HelpWindow(Toplevel):
    "Display frame with rendered html."
    def __init__(self, parent, filename, title):
        Toplevel.__init__(self, parent)
        self.wm_title(title)
        self.protocol("WM_DELETE_WINDOW", self.destroy)
        HelpFrame(self, filename).grid(column=0, row=0, sticky='nsew')
        self.grid_columnconfigure(0, weight=1)
        self.grid_rowconfigure(0, weight=1)


def copy_strip():
    "Copy idle.html to idlelib/help.html, stripping trailing whitespace."
    src = join(abspath(dirname(dirname(dirname(__file__)))),
               'Doc', 'build', 'html', 'library', 'idle.html')
    dst = join(abspath(dirname(__file__)), 'help.html')
    with open(src, 'r') as inn,\
         open(dst, 'w') as out:
        for line in inn:
            out.write(line.rstrip() + '\n')
    print('idle.html copied to help.html')

def show_idlehelp(parent):
    "Create HelpWindow; called from Idle Help event handler."
    filename = join(abspath(dirname(__file__)), 'help.html')
    if not isfile(filename):
        # try copy_strip, present message
        return
    HelpWindow(parent, filename, 'IDLE Help')

if __name__ == '__main__':
    from idlelib.idle_test.htest import run
    run(show_idlehelp)
