var ChartsAmcharts = function() {
	
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

            products();
           
            
        }

    };

}();

jQuery(document).ready(function() {    
   ChartsAmcharts.init(); 
});