function obtenerPoblacionData(tipo) {
    $('#loading').show();
    $.ajax({
        type: 'POST',
        url: 'api/analitica/iniciativas-poblacion',
        data: $('#filter-iniciativas').serialize(),
        dataType: "json",
        success: function (data) {
            graficarPoblacion(data, tipo);
            $('#loading').hide();
        },
        error: function (request, status, error) {
            console.log(jQuery.parseJSON(request.responseText).Message);
        }
    });
}

function graficarPoblacion(data, tipo) {
    if (tipo == 'barras') {
        barrasPoblacion(data);
    }

    if (tipo == 'pastel') {
        pastelPoblacion(data);
    }

    if (tipo == 'radar') {
        radarPoblacion(data);
    }
}

function barrasPoblacion(data) {
    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end

    var chart = am4core.create("chartdiv", am4charts.XYChart);
    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

    chart.data = data.items;
    console.log(data.items)

    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.renderer.grid.template.location = 0;
    categoryAxis.dataFields.category = "text";
    categoryAxis.renderer.minGridDistance = 40;
    categoryAxis.fontSize = 11;

    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    valueAxis.min = 0;
    valueAxis.max = data.total;
    valueAxis.strictMinMax = true;
    valueAxis.renderer.minGridDistance = 30;
    console.log(data.total);

    //// axis break
    var axisBreak = valueAxis.axisBreaks.create();
    axisBreak.startValue = 2100;
    axisBreak.endValue = 22900;

    //// fixed axis break
    var d = (axisBreak.endValue - axisBreak.startValue) / (valueAxis.max - valueAxis.min);
    axisBreak.breakSize = 0.05 * (1 - d) / d; // 0.05 means that the break will take 5% of the total value axis height

    // make break expand on hover
    var hoverState = axisBreak.states.create("hover");
    hoverState.properties.breakSize = 1;
    hoverState.properties.opacity = 0.1;
    hoverState.transitionDuration = 1500;

    axisBreak.defaultState.transitionDuration = 1000;

    var series = chart.series.push(new am4charts.ColumnSeries());
    series.dataFields.categoryX = "text";
    series.dataFields.valueY = "value";
    series.columns.template.tooltipText = "{valueY.value}";
    series.columns.template.tooltipY = 0;
    series.columns.template.strokeOpacity = 0;

    // as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
    series.columns.template.adapter.add("fill", function (fill, target) {
        return chart.colors.getIndex(target.dataItem.index);
    });

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

function pastelPoblacion(data) {
    // Themes end

    // Create chart instance
    var chart = am4core.create("chartdiv", am4charts.PieChart);

    // // Add data
    chart.data = data.items;

    // Set inner radius
    chart.innerRadius = am4core.percent(50);

    // Add and configure Series
    var pieSeries = chart.series.push(new am4charts.PieSeries());
    pieSeries.dataFields.value = "value";
    pieSeries.dataFields.category = "text";
    pieSeries.slices.template.stroke = am4core.color("#fff");
    pieSeries.slices.template.strokeWidth = 2;
    pieSeries.slices.template.strokeOpacity = 1;

    // This creates initial animation
    pieSeries.hiddenState.properties.opacity = 1;
    pieSeries.hiddenState.properties.endAngle = -90;
    pieSeries.hiddenState.properties.startAngle = -90;

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

function radarPoblacion(data) {
    // Themes begin
    am4core.useTheme(am4themes_animated);

    // Themes end
    var chart = am4core.create("chartdiv", am4charts.RadarChart);

    chart.data = data.items

    chart.innerRadius = am4core.percent(40)

    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.renderer.grid.template.location = 0;
    categoryAxis.dataFields.category = "text";
    categoryAxis.renderer.minGridDistance = 60;
    categoryAxis.renderer.inversed = true;
    categoryAxis.renderer.labels.template.location = 0.5;
    categoryAxis.renderer.grid.template.strokeOpacity = 0.08;

    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    valueAxis.min = 0;
    valueAxis.extraMax = 0.1;
    valueAxis.renderer.grid.template.strokeOpacity = 0.08;

    chart.seriesContainer.zIndex = -10;


    var series = chart.series.push(new am4charts.RadarColumnSeries());
    series.dataFields.categoryX = "text";
    series.dataFields.valueY = "value";
    series.tooltipText = "{valueY.value}"
    series.columns.template.strokeOpacity = 0;
    series.columns.template.radarColumn.cornerRadius = 5;
    series.columns.template.radarColumn.innerCornerRadius = 0;

    chart.zoomOutButton.disabled = true;

// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
    series.columns.template.adapter.add("fill", (fill, target) => {
        return chart.colors.getIndex(target.dataItem.index);
    });

    setInterval(() => {
        am4core.array.each(chart.data, (item) => {
            item.visits *= Math.random() * 0.5 + 0.5;
            item.visits += 10;
        })
        chart.invalidateRawData();
    }, 2000)

    categoryAxis.sortBySeries = series;

    chart.cursor = new am4charts.RadarCursor();
    chart.cursor.behavior = "none";
    chart.cursor.lineX.disabled = true;
    chart.cursor.lineY.disabled = true;

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
