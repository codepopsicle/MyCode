var ChartsAmcharts = function() {
	
    /*var Transactions = function() {
     	var inputs = document.getElementById('transactions_metrics').getElementsByTagName('input');
    var obj = jQuery.parseJSON(inputs[0].value);
        transaction_data = [];
    	for (var i = obj.length - 1; i >= 0; i--) {
           	transaction_data.push({"count" : obj[i].c, "year" : obj[i].transaction});
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
            
            "dataProvider": transaction_data,
           
           
            "startDuration": 1,
            "graphs": [{
                "alphaField": "alpha",
                "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>",
                "dashLengthField": "dashLengthColumn",
                "fillAlphas": 1,
                "title": "Transactions",
                "type": "column",
                "valueField": "count"
            
            }],
            "categoryField": "year",
            "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "tickLength": 0
            }
        });

        $('#chart_1').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
        });
    }*/

    var Transactions_metrics_month = function() {
    	var inputs = document.getElementById('transactions_metrics_month').getElementsByTagName('input');
		var obj = jQuery.parseJSON(inputs[0].value);
        
        //transaction_data = [];
        var month_data_x = [];
        var month_data_c = [];
    	for (var i = 0; i < obj[0].length; i++) {
           	//transaction_data.push({"count" : obj[i].c, "year" : obj[i].transaction});
            month_data_x.push(obj[0][i]);
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
    $('#chart_1_2').highcharts({

        chart: {

            type: 'column',

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
           name:"Transactions",
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

    
    var Transactions_metrics_day= function() {
        var inputs = document.getElementById('transactions_metrics_day').getElementsByTagName('input');
        var obj = jQuery.parseJSON(inputs[0].value);
        //view_data = [];
        var day_data_x = [];
        var day_data_c = [];
        
         for (var i = 0; i < obj[0].length; i++) {
            //view_data.push({"day" : obj[0][i], "views" : obj[1][i][0].c});
            day_data_x.push(obj[0][i]);
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
    $('#chart_1_3').highcharts({

        chart: {

            type: 'column',

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
                text: ''
            },
            allowDecimals: false
        },
        series: [{
           name:"Transactions",
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

            //Transactions();
            Transactions_metrics_month();
            Transactions_metrics_day();
            
        }

    };

}();

jQuery(document).ready(function() {    
   ChartsAmcharts.init(); 
});