function clear()
{
    $('#chart').empty();
}

function send()
{
    var func = $("#Function").val();
    
    $.ajax({
    url: "form.php",
    method:"POST",           
    data: {"Function": func,},                   
    success:
	function (tdata) {
	clear();
      var valid_data=JSON.parse(tdata);
	  console.log(valid_data[0].length);
      for (var i = 0; i < valid_data.length; i++) {
        for (var j = 0; j < valid_data[i].length; j++) {
        valid_data[i][j] = parseFloat(valid_data[i][j], 10);
        console.log(valid_data[i][j]);
    }}
		
      var plot2 = $.jqplot ('chart', [valid_data], {
      grid: {
            drawBorder: false,
            shadow: false,
            background: 'rgba(0,0,0,0)'
        },
        highlighter: { show: true },
        seriesDefaults: { 
            shadowAlpha: 0.1,
            shadowDepth: 2,
            fillToZero: true
        },
        seriesDefaults: {
            rendererOptions: {
                smooth: true,
                animation: {
                    show: true
                }
            },
            showMarker: false
        },
      series: [
            {
                color: 'rgba(198,88,88,.6)',
                negativeColor: 'rgba(100,50,50,.6)',
                showMarker: true,
                showLine: true,
                fill: false,
                fillAndStroke: true,
                markerOptions: {
                    style: 'filledCircle',
                    size: 8
                },
                rendererOptions: {
                    smooth: true
                }
            },
            {
                color: 'rgba(44,190,160,7)',
                showMarker: false,
                rendererOptions: {
                    smooth: true,
                },
                markerOptions: {
                    style: 'filledSquare',
                    size: 8
                },
            },
        ],

      axesDefaults: {
            rendererOptions: {
                baselineWidth: 1.5,
                baselineColor: '#444444',
                drawBaseline: true
            }
        }

    });


    },
    error: function(){
        alert('error');
    }
});

}




