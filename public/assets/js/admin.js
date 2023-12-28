  if(jQuery(".admin-chart-02").length){
    const options = {
      series: [{
      name: 'Total Account',
      data: [42, 30, 25, 40, 57, 71, 86, 71, 108]
      }],
      colors: ["#50b5ff"],
        chart: {
        height: '100%',
        type: 'line',
        toolbar: {
          show: false
        },
      },
      forecastDataPoints: {
        count: 2,
      },
      stroke: {
        width: 3,
      },
      grid: {
        show:true,
        strokeDashArray: 7,
      },
      markers: {
        size: 6,
        colors:  '#FFFFFF',
        strokeColors: ["#50b5ff"],
        strokeWidth: 2,
        strokeOpacity: 0.9,
        strokeDashArray: 0,
        fillOpacity: 0,
        shape: "circle",
        radius: 2,
        offsetX: 0,
        offsetY: 0,
      },
      xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        axisBorder: {
          show: false,      
        },
        axisTicks: {
          show: false,     
        },
        tooltip: {
          enabled: false,
        }
      }
    };
  
    const chart = new ApexCharts(document.querySelector(".admin-chart-02"), options);
    chart.render();
    document.addEventListener('ColorChange', (e) => {
    const newOpt = {colors: [e.detail.detail1, e.detail.detail2],}
    chart.updateOptions(newOpt)
    })
  }
  if (document.querySelectorAll('#admin-chart-03').length) {
    const options = {
        series: [74, 60],
        chart: {
            height: 200,
            type: 'radialBar',
        },
    colors: ["#50b5ff", "#d592ff"],
    plotOptions: {
        radialBar: {
            inverseOrder: false,
            endAngle: 360,
            hollow: {
                margin: 5,
                size: '50%',
                background: 'transparent',
                imageWidth: 150,
                imageHeight: 150,
                imageClipped: true,
                position: 'front',
                dropShadow: {
                  enabled: false,
                  blur: 3,
                  opacity: 0.5
                }
            },
            track: {
                show: true,
                background: '#f2f2f2',
                strokeWidth: '70%',
                opacity: 1,
                margin: 6,
                dropShadow: {
                    enabled: false,
                    blur: 3,
                    opacity: 0.5
                }
            },
            dataLabels: {
                show: true,
                name: {
                    show: true,
                    fontSize: '16px',
                    fontWeight: 600,
                    offsetY: -10
                  },
                  value: {
                    show: true,
                    fontSize: '14px',
                    fontWeight: 400,
                    offsetY: 16,
                    formatter: function (val) {
                      return val + '%'
                    }
                },
            }
        }
    },
    labels: ['Male', 'Female'],
    };
    const chart = new ApexCharts(document.querySelector("#admin-chart-03"), options);
    chart.render();
    document.addEventListener('ColorChange', (e) => {
    const newOpt = {colors: [e.detail.detail1, e.detail.detail2],}
    chart.updateOptions(newOpt)
    })
}
if (document.querySelectorAll('#admin-chart-04').length) {
    var options = {
        series: [70],
        chart: {
        height:250,
        type: 'radialBar',
    },
    plotOptions: {
        radialBar: {
        hollow: {
            size: '68%',
        }
        },
    },
    labels: ['Cricket'],
    };

    var chart = new ApexCharts(document.querySelector("#admin-chart-04"), options);
    chart.render();
    document.addEventListener('ColorChange', (e) => {
    const newOpt = {colors: [e.detail.detail1, e.detail.detail2],}
    chart.updateOptions(newOpt)
    })
}
if (document.querySelectorAll('#admin-chart-06').length) {
  var options = {
    series: [65, 35],
    chart: {
    width: 290,
    type: 'pie',
  },
  legend: {
    show: true,
    position: 'bottom',
    horizontalAlign: 'center'
  },
  labels: ['Likes', 'Followers'],
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 200
      },
      legend: {
        show: false
      }
    }
  }]
  };

var chart = new ApexCharts(document.querySelector("#admin-chart-06"), options);
chart.render();
}

if($('#admin-chart-07').length) {
  const options = {
    series: [{
    name: 'Net Profit',
    data: [44, 55, 57, 56, 61, 58]
  }, {
    name: 'Revenue',
    data: [76, 85, 101, 98, 87, 105]
  }],
    chart: {
    type: 'bar',
    height: 200,
    sparkline:{
      enabled:true
    }
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '55%',
      borderRadius: 5,
    },
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    show: true,
    width: 2,
    curve: 'smooth',
    colors: ['transparent']
  },
  xaxis: {
    categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
  },
  yaxis: {
    title: {
      text: '$ (thousands)'
    }
  },
  fill: {
    opacity: 1,
    colors:['#50b5ff', '#d592ff']
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return "$ " + val + " thousands"
      }
    }
  }
  };  
  const chart = new ApexCharts(document.querySelector("#admin-chart-07"), options);
  chart.render();
  document.addEventListener('ColorChange', (e) => {
  const newOpt = {colors: [e.detail.detail1, e.detail.detail2],}
  chart.updateOptions(newOpt)
  })
}