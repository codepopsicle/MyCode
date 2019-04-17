var ChartsAmcharts = function() {

    var viewsCount = function() {
        var inputs = document.getElementById('count_views').getElementsByTagName('input');
        var obj = jQuery.parseJSON(inputs[0].value);
        //view_data = [];
        view_data_x = [];
        view_data_c = [];
        
        for (var i = 0; i < obj[0].length; i++) {
            //view_data.push({"day" : obj[0][i], "views" : obj[1][i][0].c});
            view_data_x.push(obj[0][i]);
            view_data_c.push(parseInt(obj[1][i][0].c));
                        
           };
           

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
            categories:view_data_x,
            min: 0,
            max:9,
            allowDecimals: false

        },
         yAxis: {
            min: 0,
            title: {
                text: 'Number of viewers'
            },
            allowDecimals: false
        },
        series: [{
           name:"Views",
            data: view_data_c,
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

    var clickCount = function() {
        var inputs = document.getElementById('count_clicks').getElementsByTagName('input');
        var obj = jQuery.parseJSON(inputs[0].value);
        //click_data = [];
        click_data_x = [];
        click_data_c = [];
        for (var i = 0; i < obj[0].length; i++) {
            //click_data.push({"day" : obj[0][i], "clicks" : obj[1][i][0].c});
            click_data_x.push(obj[0][i]);
            click_data_c.push(parseInt(obj[1][i][0].c));
           };
        
$(function () {
    $('#chart_2').highcharts({

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
            categories:click_data_x,
            min: 0,
            max:9,
            allowDecimals: false

        },
         yAxis: {
            min: 0,
            title: {
                text: 'Number of clicks'
            },
            allowDecimals: false
        },
        series: [{
           name:"Clicks",
            data: click_data_c,
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
    

    var customerByAd = function() {
        var inputs = document.getElementById('count_purchase').getElementsByTagName('input');
        var obj = jQuery.parseJSON(inputs[0].value);
        purchase_data = [];
        purchase_data_x = [];
        purchase_data_c = [];
        for (var i = 0; i < obj[0].length; i++) {
            //purchase_data.push({"day" : obj[0][i], "count" : obj[1][i][0].c});
            purchase_data_x.push(obj[0][i]);
            purchase_data_c.push(parseInt(obj[1][i][0].c));
           };
           $(function () {
    $('#chart_3').highcharts({

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
            categories:purchase_data_x,
            min: 0,
            max:9,
            allowDecimals: false

        },
         yAxis: {
            min: 0,
            title: {
                text: 'Number of Viewers'
            },
            allowDecimals: false
        },
        series: [{
           name:"Viewers",
            data: purchase_data_c,
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

            viewsCount();
            clickCount();
            customerByAd();
            
        }

    };

}();

jQuery(document).ready(function() {    
   ChartsAmcharts.init(); 
});