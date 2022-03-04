/*------cricle---------*/
var options = {
  series: [67],
  chart: {
    height: 250,
    type: 'radialBar',
    offsetY: -10
  },
  plotOptions: {
    radialBar: {
      startAngle: -135,
      endAngle: 135,
      dataLabels: {
        name: {
          fontSize: '16px',
          color: '#b6b6b6',
          offsetY: 70
        },

        value: {
          offsetY: 30,
          fontSize: '22px',
          color: '#b6b6b6',
          formatter: function(val) {
            return val + "%";
          }

        }

      }

    }

  },

  fill: {

    type: 'gradient',

    gradient: {

      shade: 'dark',

      shadeIntensity: 0.15,

      inverseColors: false,

      opacityFrom: 1,

      opacityTo: 1,

      stops: [0, 50, 65, 91]

    },

  },

  stroke: {

    dashArray: 4

  },

  labels: ['Series A'],

};



var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();
/*------cricle---------*/
/*------bar---------*/
var options = {
  series: [{
    name: "Series A",
    data: [44, 55, 41, 67, 22, 43, 36, 52, 24, 18, 36, 48]
  }, {
    name: "Series B",
    data: [13, 23, 20, 8, 13, 27, 18, 22, 10, 16, 24, 22]
  }, {
    name: "Series C",
    data: [11, 17, 15, 15, 21, 14, 11, 18, 17, 12, 20, 18]
  }],
  colors: ["#556ee6", "#f1b44c", "#34c38f"],
  chart: {
    type: 'bar',
    height: 400,
    stacked: true,
    toolbar: {
      show: true,
      tools: {
        download: false
      }
    }
  },
  dataLabels: {
    enabled: false,
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '20%',
      endingShape: "rounded"
    },
  },
  stroke: {
    width: 0,
    colors: ['#fff']
  },
  xaxis: {
    categories: ['Jun', 'Feb', 'Mar', 'April', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    labels: {
      formatter: function(val) {
        return val + " "
      }
    }
  },
  yaxis: {
    title: {
      text: undefined
    },
  },
  tooltip: {
    y: {
      formatter: function(val) {
        return val + "K"
      }
    }
  },
  fill: {
    opacity: 1
  },
  legend: {
    position: 'bottom',
    horizontalAlign: 'left',
    offsetX: 40
  }
};

var bars = new ApexCharts(document.querySelector("#bars"), options);
bars.render();
/*------bar---------*/



/*------loc---------*/

var options = {
  series: [14, 23, 21],
  chart: {
    type: 'polarArea',
  },
  stroke: {
    colors: ['#fff']
  },
  fill: {
    opacity: 0.8
  },
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 200
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
};

var loac = new ApexCharts(document.querySelector("#loac"), options);
loac.render();



/*------loc---------*/