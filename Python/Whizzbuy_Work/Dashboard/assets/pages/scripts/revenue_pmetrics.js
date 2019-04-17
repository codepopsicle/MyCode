var ChartsAmcharts = function() {
	
    var revenue = function() {

    	var inputs = document.getElementById('revenue_metrics').getElementsByTagName('input');
		var obj = jQuery.parseJSON(inputs[0].value);
		revenue_data = [];
    	for (var i = obj.length - 1; i >= 0; i--) {
           revenue_data.push({"count" : obj[i].c, "year" : obj[i].revenue});
           };
        var chart = AmCharts.makeChart("chart_3", {
            "type": "serial",
            "theme": "light",

            "fontFamily": 'Open Sans',            
            "color":    '#888888',
            
            "pathToImages": "../" + App.getGlobalPluginsPath() + "amcharts/amcharts/images/",

            "dataProvider": revenue_data,
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
                "title": "Gross Revenue",
                "valueField": "count"
            }],
            
            "categoryField": "year",
           
        });

        $('#chart_3').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
        });
    }

    var revenue_metrics_month = function() {
    	var inputs = document.getElementById('revenue_metrics_month').getElementsByTagName('input');
		var obj = jQuery.parseJSON(inputs[0].value);
        var month_data_x = [];
        var month_data_c = [];
        for (var i = 0; i < obj[0].length; i++) {
            //transaction_data.push({"count" : obj[i].c, "year" : obj[i].transaction});
            month_data_x.push(obj[0][i]);
            if(obj[1][i][0].c==null)
            {
                obj[1][i][0].c=0;
            }
            month_data_c.push(parseInt(obj[1][i][0].c));
           };
         
        var x_length1=month_data_x.length;
        
        if(x_length1>10)
           {
            x_length1=10;
           }
        else{
            x_length1=x_length1-1;
           }
            
         $(function () {
    $('#chart_3_2').highcharts({

        chart: {
            type: 'area',
            zoomType: 'x'
        },
      title:{
    text:''
}, exporting: { enabled: false },
        credits: {
            enabled: false,
            position: {
                align: 'right',
                x: -10,
                verticalAlign: 'bottom',
                y: -5
            },
          
        },
   
        scrollbar: {
            enabled: true
        },
       
        legend: {
            shadow: true
        },
        tooltip: {
            useHTML: true,
            headerFormat: '<small>{point.key}</small><table>',
            pointFormat: '<tr><td style="color: {series.color}">{series.name}:{point.y} </td>',
            footerFormat: '</table>',
            valueDecimals: 0,
            crosshairs: [{
                width: 1,
                color: 'Gray'
            }, {
                width: 1,
                color: 'gray'
            }]
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0.5
            }
        },
        xAxis: {
            categories:month_data_x,
            min: 0,
            max:x_length1,
            allowDecimals: false

        },
         yAxis: {
            min: 0,
            title: {
                text: ''
            },
            allowDecimals: false
        },
        series: [{
           name:"Revenue",
            data: month_data_c,
        }], 
      scrollbar: {
                enabled: true,
                barBackgroundColor: '#44b6ae',
                barBorderRadius: 7,
                barBorderWidth: 0,
                buttonBackgroundColor: '#44b6ae',
                buttonBorderWidth: 0,
                buttonArrowColor: 'gray',
                buttonBorderRadius: 7,
                rifleColor: 'gray',
                trackBackgroundColor: 'white',
                trackBorderWidth: 1,
                trackBorderColor: 'silver',
                trackBorderRadius: 7
            }

        
           
        });
    });
    }

    var revenue_metrics_day = function() {
    	var inputs = document.getElementById('revenue_metrics_day').getElementsByTagName('input');
		var obj = jQuery.parseJSON(inputs[0].value);
        var day_data_x = [];
        var day_data_c = [];
        
         for (var i = 0; i < obj[0].length; i++) {
            //view_data.push({"day" : obj[0][i], "views" : obj[1][i][0].c});
            day_data_x.push(obj[0][i]);
            if(obj[1][i][0].c==null)
            {
                obj[1][i][0].c=0;
            }
            day_data_c.push(parseInt(obj[1][i][0].c));
                        
           };
           
           var x_length=day_data_x.length;
           if(x_length>15)
           {
            x_length=15;
           }
           else{
            x_length=x_length-1;
           }

        $(function () {
    $('#chart_3_3').highcharts({

        chart: {

            type: 'area',
            zoomType: 'x'
        },
      title:{
    text:''
    }, exporting: { enabled: false },
            credits: {
                enabled: false,
                position: {
                    align: 'right',
                    x: -10,
                    verticalAlign: 'bottom',
                    y: -5
                },
              
            },
       
        scrollbar: {
            enabled: true
        },
       
        legend: {
            shadow: true
        },
        tooltip: {
            useHTML: true,
            headerFormat: '<small>{point.key}</small><table>',
            pointFormat: '<tr><td style="color: {series.color}">{series.name}:{point.y} </td>',
            footerFormat: '</table>',
            valueDecimals: 0,
            crosshairs: [{
                width: 1,
                color: 'Gray'
            }, {
                width: 1,
                color: 'gray'
            }]
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0.5
            }
        },
        xAxis: {
            categories:day_data_x,
            min: 0,
            max:x_length,
            allowDecimals: false

        },
         yAxis: {
            min: 0,
            title: {
                text: '',
            },
            allowDecimals: false
        },
        series: [{
           name:"Revenue",
            data: day_data_c,
        }], 
      scrollbar: {
                enabled: true,
                barBackgroundColor: '#44b6ae',
                barBorderRadius: 7,
                barBorderWidth: 0,
                buttonBackgroundColor: '#44b6ae',
                buttonBorderWidth: 0,
                buttonArrowColor: 'gray',
                buttonBorderRadius: 7,
                rifleColor: 'gray',
                trackBackgroundColor: 'white',
                trackBorderWidth: 1,
                trackBorderColor: 'silver',
                trackBorderRadius: 7
            }

        
           
        });
    });
        
    }

    return {
        //main function to initiate the module

        init: function() {

            //revenue();
            revenue_metrics_month();
            revenue_metrics_day();
            
        }

    };

}();

jQuery(document).ready(function() {    
   ChartsAmcharts.init(); 
});