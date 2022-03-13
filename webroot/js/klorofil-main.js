

$(function() {
    var data, options;
    var tab = JSON.parse($('#array').attr('contain'))

    // headline charts
    data = {
        labels: ['Mer', 'Jeu', 'Ven', 'Sam', 'Dim', 'Lun', 'Mar'],
        series: [
            [23, 29, 24, 40, 25, 24, 35],
            [14, 25, 18, 34, 29, 38, 10],
            tab
        ]
    };

    options = {
        height: 300,
        showArea: true,
        showLine: true,
        showPoint: true,
        fullWidth: true,
        axisX: {
            showGrid: true
        },
        lineSmooth: false,
    };

    new Chartist.Line('#headline-chart', data, options);


    // visits trend charts
    data = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        series: [{
            name: 'series-real',
            data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
        }, {
            name: 'series-projection',
            data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
        }]
    };

});