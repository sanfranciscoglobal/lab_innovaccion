function obtenerOdsInstitucionData(tipo) {
    $('#loading').show();
    $.ajax({
        type: 'POST',
        url: 'api/analitica/iniciativas-poblacion',
        data: $('#filter-iniciativas').serialize(),
        dataType: "json",
        success: function (data) {
            graficarOdsInstitucionData(data, tipo);
            $('#loading').hide();
        },
        error: function (request, status, error) {
            console.log(jQuery.parseJSON(request.responseText).Message);
        }
    });
}

function graficarOdsInstitucionData(data, tipo) {
    //if (tipo == 'barras') {
    barrasOdsInstitucion(data);
    //}

    // if (tipo == 'pastel') {
    //     pastelPoblacion(data);
    // }
    //
    // if (tipo == 'radar') {
    //     radarPoblacion(data);
    // }
}

function barrasOdsInstitucion(data) {
    // Themes end

// Create chart instance
    var chart = am4core.create("chartdiv", am4charts.XYChart);

// Add data
    chart.data = [{
        "year": "2003",
        "europe": 2.5,
        "namerica": 2.5,
        "asia": 2.1,
        "lamerica": 1.2,
        "meast": 0.2,
        "africa": 0.1
    }, {
        "year": "2004",
        "europe": 2.6,
        "namerica": 2.7,
        "asia": 2.2,
        "lamerica": 1.3,
        "meast": 0.3,
        "africa": 0.1
    }, {
        "year": "2005",
        "europe": 2.8,
        "namerica": 2.9,
        "asia": 2.4,
        "lamerica": 1.4,
        "meast": 0.3,
        "africa": 0.1
    }];

// Create axes
    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "year";
    categoryAxis.title.text = "Local country offices";
    categoryAxis.renderer.grid.template.location = 0;
    categoryAxis.renderer.minGridDistance = 20;
    categoryAxis.renderer.cellStartLocation = 0.1;
    categoryAxis.renderer.cellEndLocation = 0.9;

    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    valueAxis.min = 0;
    valueAxis.title.text = "Expenditure (M)";

// Create series
    function createSeries(field, name, stacked) {
        var series = chart.series.push(new am4charts.ColumnSeries());
        series.dataFields.valueY = field;
        series.dataFields.categoryX = "year";
        series.name = name;
        series.columns.template.tooltipText = "{name}: [bold]{valueY}[/]";
        series.stacked = stacked;
        series.columns.template.width = am4core.percent(95);
    }

    createSeries("europe", "Europe", false);
    createSeries("namerica", "North America", true);
    createSeries("asia", "Asia", false);
    createSeries("lamerica", "Latin America", true);
    createSeries("meast", "Middle East", true);
    createSeries("africa", "Africa", true);

    // Add legend
    chart.legend = new am4charts.Legend();

    chart.exporting.menu = new am4core.ExportMenu();
    chart.exporting.menu.items = [{
        "label": "DESCARGAR GRÁFICO",
        "menu": [
            {"type": "png", "label": "PNG"},
            {"type": "pdf", "label": "PDF"},
            // { "type": "json", "label": "JSON" },
            {"type": "print", "label": "IMPRIMIR"}
        ]
    }];
}

// function pastelPoblacion(data) {
//     // Themes end
//
//     // Create chart instance
//     var chart = am4core.create("chartdiv", am4charts.PieChart);
//
//     // // Add data
//     chart.data = data.items;
//
//     // Set inner radius
//     chart.innerRadius = am4core.percent(50);
//
//     // Add and configure Series
//     var pieSeries = chart.series.push(new am4charts.PieSeries());
//     pieSeries.dataFields.value = "value";
//     pieSeries.dataFields.category = "text";
//     pieSeries.slices.template.stroke = am4core.color("#fff");
//     pieSeries.slices.template.strokeWidth = 2;
//     pieSeries.slices.template.strokeOpacity = 1;
//
//     // This creates initial animation
//     pieSeries.hiddenState.properties.opacity = 1;
//     pieSeries.hiddenState.properties.endAngle = -90;
//     pieSeries.hiddenState.properties.startAngle = -90;
//
//     chart.exporting.menu = new am4core.ExportMenu();
//     chart.exporting.menu.items = [{
//         "label": "DESCARGAR GRÁFICO",
//         "menu": [
//             {"type": "png", "label": "PNG"},
//             {"type": "pdf", "label": "PDF"},
//             // { "type": "json", "label": "JSON" },
//             {"type": "print", "label": "IMPRIMIR"}
//         ]
//     }];
// }
//
// function radarPoblacion(data) {
//     // Themes begin
//     am4core.useTheme(am4themes_animated);
//
//     // Themes end
//     var chart = am4core.create("chartdiv", am4charts.RadarChart);
//
//     chart.data = data.items
//
//     chart.innerRadius = am4core.percent(40)
//
//     var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
//     categoryAxis.renderer.grid.template.location = 0;
//     categoryAxis.dataFields.category = "text";
//     categoryAxis.renderer.minGridDistance = 60;
//     categoryAxis.renderer.inversed = true;
//     categoryAxis.renderer.labels.template.location = 0.5;
//     categoryAxis.renderer.grid.template.strokeOpacity = 0.08;
//
//     var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
//     valueAxis.min = 0;
//     valueAxis.extraMax = 0.1;
//     valueAxis.renderer.grid.template.strokeOpacity = 0.08;
//
//     chart.seriesContainer.zIndex = -10;
//
//
//     var series = chart.series.push(new am4charts.RadarColumnSeries());
//     series.dataFields.categoryX = "text";
//     series.dataFields.valueY = "value";
//     series.tooltipText = "{valueY.value}"
//     series.columns.template.strokeOpacity = 0;
//     series.columns.template.radarColumn.cornerRadius = 5;
//     series.columns.template.radarColumn.innerCornerRadius = 0;
//
//     chart.zoomOutButton.disabled = true;
//
// // as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
//     series.columns.template.adapter.add("fill", (fill, target) => {
//         return chart.colors.getIndex(target.dataItem.index);
//     });
//
//     setInterval(() => {
//         am4core.array.each(chart.data, (item) => {
//             item.visits *= Math.random() * 0.5 + 0.5;
//             item.visits += 10;
//         })
//         chart.invalidateRawData();
//     }, 2000)
//
//     categoryAxis.sortBySeries = series;
//
//     chart.cursor = new am4charts.RadarCursor();
//     chart.cursor.behavior = "none";
//     chart.cursor.lineX.disabled = true;
//     chart.cursor.lineY.disabled = true;
//
//     chart.exporting.menu = new am4core.ExportMenu();
//     chart.exporting.menu.items = [{
//         "label": "DESCARGAR GRÁFICO",
//         "menu": [
//             {"type": "png", "label": "PNG"},
//             {"type": "pdf", "label": "PDF"},
//             // { "type": "json", "label": "JSON" },
//             {"type": "print", "label": "IMPRIMIR"}
//         ]
//     }];
// }
