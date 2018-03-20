<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Poll1 Regions Percentage Voting",
		horizontalAlign: "left"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		mouseover: onMouseover,
		dataPoints: [
			{ y: 13, label: "Delhi" },
			{ y: 28, label: "Dehradun" },
			{ y: 10, label: "Amritsar" },
			{ y: 7, label: "Kanpur"},
			{ y: 15, label: "Jaipur"}
		]
	}]
});
chart.render();
function onMouseover(e){
	alert(  "yes : " + round(e.dataPoint.y*0.67) + ", no: "+ e.dataPoint.y*0.23 );
}

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
