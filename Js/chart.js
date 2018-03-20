$(document).ready(function(){
$.ajax(
  {
    url:"chart.php",
    method: "GET",
  
    success: function(data){
    console.log(data);
var player=[];
player[0]="YES";
player[1]="NO";
player[2]=" ";
player[3]=" ";
player[4]=" ";
player[5]=" ";
player[6]=" ";

// var score=[];
// var options = {
//     scales: {
//         xAxes: [{
//             barPercentage: 0.4
//         }]
//     }
// }


//var score=[];

// for(var i in data){
//   //player.push("player"+data[i].POLL1);
//   score.push(data[i].result);
//   //score.push(data[i].POLL2);
// }
var chartdata={

labels:player,
datasets: [
  {
    label: "CITIZEN POLLED DATA",
                   fill: false,
                   barPercentage: 0.4,
                   lineTension: 0.1,
                   backgroundColor: "rgba(75,192,192,0.4)",
                   borderColor: "rgba(75,192,192,1)",
                   borderCapStyle: 'butt',
                   borderDash: [],
                   borderDashOffset: 0.0,
                   borderJointStyle: 'miter',
                   pointBorderColor: "rgba(75,192,192,1",
                   pointBackgroundColor: "#fff",
                   pointBorderWidth: 1,
                   pointHoverRadius: 5,
                   pointHoverBackgroundColor: "rgba(75,192,192,1)",
                   pointHoverBorderColor: "rgba(220,220,220,1)",
                   pointHoverBorderWidth: 2,
                   pointRadius: 1,
                   pointHitRadius: 10,
                   data: [70,43,0,0,0,0,0],

  }
]


};

var ctx=$("#mycanvas");
var barGraph =new Chart(ctx, {
  type: 'bar',
  data: chartdata,
  options:  {
    scales: {
        yAxes: [{
            ticks: {
                suggestedMin:0,
                suggestedMax:100

            }
        }]
    }
}
});
// var ctx = document.getElementById("#mycanvas");
// var myChart = new Chart(ctx, {
//     type: 'bar',
//     data: chartdata,
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero: true
//                 }
//             }],
//             xAxes: [{
//                 // Change here
//             	barPercentage:
//             }]
//         }
//     }
// });
var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
            xAxes: [{
                // Change here
            	barPercentage: 0.2
            }]
        }
    }
});
},

error: function(data){
console.log(data);
  }





});

});
