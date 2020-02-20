
$(function () {
    'use strict'
  
    var ticksStyle = {
      fontColor: '#ffffff',
      fontStyle: 'bold'
    }
  
    var mode      = 'index'
    var intersect = true
  
    var $salesChart = $('#panda')
    var salesChart  = new Chart($salesChart, {
      type   : 'bar',
      data   : {
        labels  : ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
        datasets: [
          {
            backgroundColor: '#36ddf7',
            borderColor    : '#1aa5ba',
            data           : [1000, 2000, 3000, 2500, 2700, 2500,1000, 2000, 3000, 2500, 2700, 2500, 3000]
          },
          {
            backgroundColor: '#9dff00',
            borderColor    : '#8be002',
            data           : [700, 1700, 2700, 2000, 1800,700, 1700, 2700, 2000, 1800, 1500, 2000]
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        tooltips           : {
          mode     : mode,
          intersect: intersect
        },
        hover              : {
          mode     : mode,
          intersect: intersect
        },
        legend             : {
          display: false
        },
        scales             : {
          yAxes: [{
            // display: false,
            gridLines: {
              display      : true,
              lineWidth    : '4px',
              color        : 'rgba(255,255,255)',
              zeroLineColor: 'transparent'
            },
            ticks    : $.extend({
              beginAtZero: true,
  
              // Include a dollar sign in the ticks
              callback: function (value, index, values) {
                if (value >= 1000) {
                  value /= 1000
                  value += 'k'
                }
                return 'RM' + value
              }
            }, ticksStyle)
          }],
          xAxes: [{
            display  : true,
            gridLines: {
              display: false
            },
            ticks    : ticksStyle
          }]
        }
      }
    })
  
   
  })
  