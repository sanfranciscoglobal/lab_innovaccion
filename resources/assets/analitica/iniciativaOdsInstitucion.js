function obtenerOdsInstitucionData(tipo) {
    $('#loading').show();
    $.ajax({
        type: 'POST',
        url: 'api/analitica/iniciativas-ods-institucion',
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
    barrasOdsInstitucion(data);
}

function barrasOdsInstitucion(data) {
    var chart = am4core.create("chartdiv", am4charts.XYChart);

    chart.data = data.data;

    // Create axes
    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "year";
    categoryAxis.title.text = "Tipo Institución";
    categoryAxis.renderer.grid.template.location = 0;
    categoryAxis.renderer.minGridDistance = 20;
    categoryAxis.renderer.cellStartLocation = 0.1;
    categoryAxis.renderer.cellEndLocation = 0.9;

    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    valueAxis.min = 0;
    valueAxis.title.text = "Iniciativas (I)";

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

    $.each(data.categorias, function (i, dat) {
        createSeries(i, dat, true);
    });

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
