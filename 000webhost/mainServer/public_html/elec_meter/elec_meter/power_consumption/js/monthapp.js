$(function() {
    $.ajax({

        url: 'month_data.php',
        type: 'GET',
        success: function(data) {
            chartData = data;
            var chartProperties = {
                "caption": "Last month power consumption",
                "xAxisName": "date",
                "yAxisName": "Unit(KWH)",
                "rotatevalues": "1",
                "theme": "zune"
            };

            apiChartmonth = new FusionCharts({
                type: 'column2d',
                renderAt: 'chart-container-month',
                width: '1000',
                height: '350',
                dataFormat: 'json',
                dataSource: {
                    "chart": chartProperties,
                    "data": chartData
                }
            });
            apiChartmonth.render();
/*
            apiChartLine = new FusionCharts({
                type: 'line',
                renderAt: 'chart-container-month-line',
                width: '750',
                height: '350',
                dataFormat: 'json',
                dataSource: {
                    "chart": chartProperties,
                    "data": chartData
                }
            });
            apiChartLine.render();  */          
        }
    });
});