var ChartsAmcharts = function() {

    var viewsCount = function() {
        var inputs = document.getElementById('count_views').getElementsByTagName('input');
        var obj = jQuery.parseJSON(inputs[0].value);
        view_data = [];
        for (var i = 0; i < obj[0].length; i++) {
            view_data.push({"day" : obj[0][i], "views" : obj[1][i][0].c});
           };
        var chart = AmCharts.makeChart("chart_1", {
            "type": "serial",
            "theme": "light",
            "pathToImages": App.getGlobalPluginsPath() + "amcharts/amcharts/images/",
            "autoMargins": false,
            "marginLeft": 30,
            "marginRight": 8,
            "marginTop": 10,
            "marginBottom": 26,

            "fontFamily": 'Open Sans',            
            "color":    '#888',
            
            "dataProvider":view_data,
            "valueAxes": [{
                "axisAlpha": 0,
                "position": "left"
            }],
            "startDuration": 1,
            "graphs": [{
                "alphaField": "alpha",
                "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>",
                "dashLengthField": "dashLengthColumn",
                "fillAlphas": 1,
                "title": "Views",
                "type": "column",
                "valueField": "views"
            }],
            "categoryField": "day",
            "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "tickLength": 0
            }
        });

        $('#chart_1').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
        });
    }

    var clickCount = function() {
        var inputs = document.getElementById('count_clicks').getElementsByTagName('input');
        var obj = jQuery.parseJSON(inputs[0].value);
        click_data = [];
        for (var i = 0; i < obj[0].length; i++) {
            click_data.push({"day" : obj[0][i], "clicks" : obj[1][i][0].c});
           };
        var chart = AmCharts.makeChart("chart_2", {
            "type": "serial",
            "theme": "",
            "pathToImages": App.getGlobalPluginsPath() + "amcharts/amcharts/images/",
            "autoMargins": false,
            "marginLeft": 30,
            "marginRight": 8,
            "marginTop": 10,
            "marginBottom": 26,

            "fontFamily": 'Open Sans',            
            "color":    '#888',
            
            "dataProvider":click_data,
            "valueAxes": [{
                "axisAlpha": 0,
                "position": "left"
            }],
            "startDuration": 1,
            "graphs": [{
                "alphaField": "alpha",
                "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>",
                "dashLengthField": "dashLengthColumn",
                "fillAlphas": 1,
                "title": "Clicks",
                "type": "column",
                "valueField": "clicks"
            }],
            "categoryField": "day",
            "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "tickLength": 0
            }
        });

        $('#chart_2').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
        });
    }
    

    var customerByAd = function() {
        var inputs = document.getElementById('count_purchase').getElementsByTagName('input');
        var obj = jQuery.parseJSON(inputs[0].value);
        purchase_data = [];
        for (var i = 0; i < obj[0].length; i++) {
            purchase_data.push({"day" : obj[0][i], "count" : obj[1][i][0].c});
           };
        var chart = AmCharts.makeChart("chart_3", {
            "type": "serial",
            "theme": "light",

            "fontFamily": 'Open Sans',            
            "color":    '#888888',
            
            "pathToImages": "../" + App.getGlobalPluginsPath() + "amcharts/amcharts/images/",

            "dataProvider": purchase_data,
            "balloon": {
                "cornerRadius": 6
            },
            
            "graphs": [{
                "bullet": "square",
                "bulletBorderAlpha": 1,
                "bulletBorderThickness": 1,
                "fillAlphas": 0.3,
                "fillColorsField": "lineColor",
                "legendValueText": "[[value]]",
                "lineColorField": "lineColor",
                "title": "Purchase",
                "valueField": "count"
            }],
            
            "categoryField": "day",
           
        });

        $('#chart_3').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
        });
    }

    return {
        //main function to initiate the module

        init: function() {

            viewsCount();
            clickCount();
            customerByAd();
            
        }

    };

}();

jQuery(document).ready(function() {    
   ChartsAmcharts.init(); 
});