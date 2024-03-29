var ChartsAmcharts = function() {
	
    var Transactions = function() {
        var inputs = document.getElementById('transactions_metrics').getElementsByTagName('input');
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
        
        if(x_length1>4)
           {
            x_length1=4;
           }
        else{
            x_length1=x_length1-1;
           }
           
           
        $(function () {
    $('#chart_1').highcharts({

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


    var revenue = function() {
    	var inputs = document.getElementById('revenue_metrics').getElementsByTagName('input');
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
        
        if(x_length1>5)
           {
            x_length1=5;
           }
        else{
            x_length1=x_length1-1;
           }
            
         $(function () {
    $('#chart_3').highcharts({

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

   var unitSold = function() {
   		var inputs = document.getElementById('unit_sold_metrics').getElementsByTagName('input');
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
    $('#chart_2').highcharts({

        chart: {

            type: 'line',

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
           name:"Units",
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

    var products = function() {
    	var inputs = document.getElementById('product_metrics').getElementsByTagName('input');
		var obj = jQuery.parseJSON(inputs[0].value);
		product_data = [];
        
        for (var i = obj.length - 1; i >= 0; i--) {
           product_data.push({name : obj[i].itemdesc, y : parseFloat(obj[i].prodhighsales)});
           //product_data_x.push({"prodhighsales" : obj[i].prodhighsales, "itemdesc" : obj[i].itemdesc});
            };
           
        $(function () {
    $('#chart_7').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
             options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: ''
        },
         exporting: { enabled: false },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: product_data,
        }]
    });
});
    }



    return {
        //main function to initiate the module

        init: function() {

            Transactions();
            revenue();
            unitSold();
            products();
            
        }

    };

}();

jQuery(document).ready(function() {    
   ChartsAmcharts.init(); 
});