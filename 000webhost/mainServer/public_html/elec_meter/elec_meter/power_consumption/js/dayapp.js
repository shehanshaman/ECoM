$(function() {
    $.ajax({

        url: 'day_data.php',
        type: 'GET',
        success: function(data) {
            chartData = data;
            var chartProperties = {
                "caption": "Last day power consumption",
                "xAxisName": "Time",
                "yAxisName": "Unit(KWH)",
                "rotatevalues": "1",
                "theme": "zune"
            };

            apiChartday = new FusionCharts({
                type: 'column2d',
                renderAt: 'chart-container-day',
                width: '1000',
                height: '350',
                dataFormat: 'json',
                dataSource: {
                    "chart": chartProperties,
                    "data": chartData
                }
            });
            apiChartday.render();
/*
            apiChartLine = new FusionCharts({
                type: 'line',
                renderAt: 'chart-container-day-line',
                width: '500',
                height: '350',
                dataFormat: 'json',
                dataSource: {
                    "chart": chartProperties,
                    "data": chartData
                }
            });
            //apiChartLine.render();*/

        }
    });
});