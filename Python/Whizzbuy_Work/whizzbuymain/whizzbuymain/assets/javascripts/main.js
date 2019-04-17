$(function() {
	$(".timestamp").each(function() {
		var ts = parseInt($(this).text());
		if (ts == 0) {
			$(this).text("");
		} else {
			var d = new Date(ts);
			var s = (d.getMonth() + 1) + "/" + (d.getDate()) + "/" + (d.getFullYear()) + "  " + (d.getHours()) + ":" + (d.getMinutes());
			$(this).text(s);
		}
	});
	
	$(".nToBr").each(function() {
		var html = $(this).html();
		html = html.replace(/\n/g, "<br/>");
		$(this).html(html);
	});
	
	$(".row-clickable").click(function() {
	    var id = $(this).find("input[name=id]").eq(0).val();
	    var href = $(this).data("href");
	    document.location.href = href + id;
	});
	
	$("button[type=submit]").click(function(e) {
		e.preventDefault(); //prevent default form submit
		
		var button = $(this);
		
		if (button.hasClass("show-confirm")) {
			$("#btnConfirmYes").off();
			$("#btnConfirmYes").click(function() {
				$("#modalConfirm").modal("hide");
				ajaxSubmit(button);
			});
			
			$("#modalConfirm").modal("show");
		} else
			ajaxSubmit(button);
	});
	
	$('[data-toggle="tooltip"]').tooltip();
	$('[data-toggle="popover"]').popover();
});

function ajaxSubmit(button) {
	var url = $(button).data("url");
	var msg = $(button).data("successmsg");
	var func = $(button).data("successfunc");
	var presend = $(button).data("presend");
	var redirect = $(button).data("redirect");	
	var fail = $(button).data("failfunc");	
	var resdiv = $(button).data("resultdiv");
	
	if (resdiv == undefined)
		resdiv = "#divJsonResult";
	
	$("#modalWait").modal("show");
	$(resdiv).hide();
	
	if (presend !== undefined) {
		var presendRet = window[presend](button);
		if (presendRet == false) {
			$("#modalWait").modal("hide");
			return;
		}
	}

	var form = $(button).closest("form");
	var arr = form.serializeArray();
	var obj = {};
	
	$.each(arr, function() {
		//if name appears more than once, it will just overwrite the previous values
		if (this.value == null)
			obj[this.name] = "";
		else
			obj[this.name] = this.value;
    });
		
	$.ajax({
		url: url,
	    type: "POST",
	    data: JSON.stringify(obj),
	    contentType: "application/json",
	    success: function(data, textStatus, jqXHR) {
	    	$("#modalWait").modal("hide");
	    	
	    	if (data.Code == "Success") {
	    		if (redirect === undefined || redirect == false) {
			    	if (msg !== undefined) {
			    		$(resdiv).show();
			    		$(resdiv).html(msg);
			    		$(resdiv).addClass("alert-success");
			    		$(resdiv).removeClass("alert-danger");
			    	}
			    	
			    	if (func !== undefined)
			    		window[func](data.Data.data);
			    	
	    		} else {
	    			$("#modalRedirect").modal("show");
	    			if (msg !== undefined)
	    				$("#modalRedirectMsg").html(msg);
	    			else
	    				$("#modalRedirectMsg").html("Success!");
	    			
	    			setTimeout(function() {
	    				location.href = data.Data.data;
	    			}, 1000);
	    		}
	    	} else {
	    		var str = "";
	    		for (var i = 0; i < data.ErrorMessages.length; i++)
	    			str += "<div>" + data.ErrorMessages[i] + "</div>";

	    		$(resdiv).show();
	    		$(resdiv).html(str);
	    		$(resdiv).addClass("alert-danger");
	    		$(resdiv).removeClass("alert-success");
	    		
	    		if (fail !== undefined)
	    			window[fail]();
	    	}
	    },
	    error: function(jqXHR, textStatus, errorThrown) {
	    	$("#modalWait").modal("hide");
	    	
    		$(resdiv).show();
    		$(resdiv).html("There was an error connecting to the server.");
    		$(resdiv).addClass("alert-danger");
    		$(resdiv).removeClass("alert-success");
    		
    		if (fail !== undefined)
    			window[fail]();
	    }
	});
}

function getQueryString(key) {
	key = key.toLowerCase();
	
	var qs = location.search.substring(1).split("&");
	for (var i = 0; i < qs.length; i++) {
		var kv = qs[i].split("=");
		if (key == kv[0].toLowerCase())
			return kv[1];
	}
	
	return null;
}

function contactus(){

   		    document.getElementById("msgbtn").blur();
    		var name = document.getElementById("name").value;
    		var email = document.getElementById("email").value;
    		var subject = document.getElementById("subject").value;
    		var comment = document.getElementById("comment").value;
    		
            if(name=="")
            {
                document.getElementById("sname").innerHTML="*This field is required";
                document.getElementById("sname").style.color="red";
            }
            if(email=="")
            {
                document.getElementById("semail").innerHTML="*This field is required";
                document.getElementById("semail").style.color="red";
            }
            if(subject=="")
            {
                document.getElementById("ssubject").innerHTML="*This field is required";
                document.getElementById("ssubject").style.color="red";
            }
            
            if(name!="" && email!="" && subject!="")
    		{
    		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                $('#contactusmodal').modal('show');
                var arr = JSON.parse(xmlhttp.response);
                $('#modalcontent').html(arr["msg"]);
                document.getElementById("sname").innerHTML="";
                document.getElementById("semail").innerHTML="";
                document.getElementById("ssubject").innerHTML="";
                document.getElementById("name").value="";
                document.getElementById("email").value="";
                document.getElementById("subject").value="";
                document.getElementById("comment").value="";
            }
        };
        xmlhttp.open("GET","contactus.php?name="+name+"&email="+email+"&subject="+subject+"&comment="+comment,true);
        xmlhttp.send();
    	
    	}
    }
