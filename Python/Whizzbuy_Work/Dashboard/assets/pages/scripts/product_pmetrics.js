var ChartsAmcharts = function() {
	
    var products = function() {
    	var inputs = document.getElementById('product_metrics').getElementsByTagName('input');
		var obj = jQuery.parseJSON(inputs[0].value);
		product_data = [];
    	for (var i = obj.length - 1; i >= 0; i--) {
           product_data.push({"prodhighsales" : obj[i].prodhighsales, "itembarcode" : obj[i].itembarcode	});
           };
        var chart = AmCharts.makeChart("chart_7", {
            "type": "pie",
            "theme": "light",

            "fontFamily": 'Open Sans',
            
            "color":    '#888',

            "dataProvider": product_data,
            "valueField": "prodhighsales",
            "titleField": "itembarcode",
            "outlineAlpha": 0.4,
            "depth3D": 15,
            "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
            "angle": 30,
            "exportConfig": {
                menuItems: [{
                    icon: '/lib/3/images/export.png',
                    format: 'png'
                }]
            }
        });

        jQuery('.chart_7_chart_input').off().on('input change', function() {
            var property = jQuery(this).data('property');
            var target = chart;
            var value = Number(this.value);
            chart.startDuration = 0;

            if (property == 'innerRadius') {
                value += "%";
            }

            target[property] = value;
            chart.validateNow();
        });

        $('#chart_7').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
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