anychart.onDocumentReady(function() {
    // create column chart
    var chart = anychart.column();

    // set chart title
    chart.title('Resultados de Evaluaciones por Materia');

    // set chart data
    chart.data([
        {x: 'Español', value: 90},
        {x: 'Matematicas', value: 85},
        {x: 'Ciencias Sociales', value: 70},
        {x: 'Ciencias Naturales', value: 100},
        {x: 'Musica', value: 85}
    ]);
    
    // set container id for the chart
    chart.container('container');

    // initiate chart drawing
    chart.draw();
});