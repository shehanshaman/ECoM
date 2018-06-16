$(function() {
    $.ajax({

        url: 'week_data.php',
        type: 'GET',
        success: function(data) {
            chartData = data;
            var chartProperties = {
                "caption": "Last week power consumption",
                "xAxisName": "Day",
                "yAxisName": "Unit(KWH)",
                "rotatevalues": "1",
                "theme": "zune"
            };

            apiChartweek = new FusionCharts({
                type: 'column2d',
                renderAt: 'chart-container-week',
                width: '1000',
                height: '350',
                dataFormat: 'json',
                dataSource: {
                    "chart": chartProperties,
                    "data": chartData
                }
            });
            apiChartweek.render();
/*
            apiChartLine = new FusionCharts({
                type: 'line',
                renderAt: 'chart-container-week-line',
                width: '750',
                height: '350',
                dataFormat: 'json',
                dataSource: {
                    "chart": chartProperties,
                    "data": chartData
                }
            });
            apiChartLine.render();*/

        }
    });
});

