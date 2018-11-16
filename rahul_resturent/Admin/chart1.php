<?php  
include 'include/fetch.php';
?>

<!DOCTYPE html>
<html>
<head>
<script>
window.onload = function() {
/*
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Hourly Average CPU Utilization"
	},
	axisX: {
		title: "Time",
		titleFontColor: "#4F81BC",
		lineColor: "#C0504E",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},
	axisY: {
		title: "Percentage",
		suffix: "%",
		titleFontColor: "#C0504E",
		lineColor: "#C0504E",
		labelFontColor: "#C0504E",
		tickColor: "#C0504E",
		stripLines: [{
			value: 25,
			label: "Average"
		}]
	},
	toolTip: {
		shared: true // Flase
	},
	data: [{

		// Change type to "bar", "area",column, "spline", "pie",funnel,candlestick,ohlc,scatter,bubble,error,etc.
		type: "area",
		name: "CPU Utilization",
		connectNullData: true,
		//nullDataLineDashType: "solid",
		xValueType: "dateTime",
		xValueFormatString: "DD MMM hh:mm TT",
		yValueFormatString: "#,##0.##\"%\"",
		dataPoints: [
			{ x: 1501048673000, y: 35.939 },
			{ x: 1501052273000, y: 40.896 },
			{ x: 1501055873000, y: 56.625,indexLabel: "highest",markerColor: "red", markerType: "triangle" },
			{ x: 1501059473000, y: 26.003 },
			{ x: 1501063073000, y: 20.376 },
			{ x: 1501066673000, y: 19.774 },
			{ x: 1501070273000, y: 23.508 },
			{ x: 1501073873000, y: 18.577 },
			{ x: 1501077473000, y: 15.918 },
			{ x: 1501081073000, y: null }, // Null Data
			{ x: 1501084673000, y: 10.314 },
			{ x: 1501088273000, y: 10.574 },
			{ x: 1501091873000, y: 14.422 },
			{ x: 1501095473000, y: 18.576 },
			{ x: 1501099073000, y: 22.342 },
			{ x: 1501102673000, y: 22.836 },
			{ x: 1501106273000, y: 23.220 },
			{ x: 1501109873000, y: 23.594 },
			{ x: 1501113473000, y: 24.596 },
			{ x: 1501117073000, y: 31.947 },
			{ x: 1501120673000, y: 31.142 }
		]
	},
	/*{
		type: "area",
		name: "Clutch",
		axisYType: "secondary",
		showInLegend: true,
		yValueFormatString: "#,##0.# Units",
		dataPoints: [
			{ x: 1501048675000, y: 85.939 },
			{ x: 1501052276000, y: 60.896 },
			{ x: 1501055872000, y: 36.625 },
			{ x: 1501059474000, y: 26.003 },
			{ x: 1501063075000, y: 23.376 },
			{ x: 1501066677000, y: 13.774 },
			{ x: 1501070270000, y: 23.508 },
			{ x: 1501073873000, y: 12.577 },
			{ x: 1501677473000, y: 13.918 },
			{ x: 1501081073000, y: null }, // Null Data
			{ x: 1501084673000, y: 14.314 },
			{ x: 1501088273000, y: 10.574 },
			{ x: 1501096873000, y: 14.422 },
			{ x: 1501095473000, y: 19.576 },
			{ x: 1501079073000, y: 25.342 },
			{ x: 1501102673000, y: 20.836 },
			{ x: 1501108273000, y: 23.220 },
			{ x: 1501609873000, y: 28.594 },
			{ x: 1501113473000, y: 25.596 },
			{ x: 1503117073000, y: 33.947 },
			{ x: 1504120673000, y: 32.142 }
		]
	}
	]
});
chart.render();
*/

// This is pie chart

var chart1 = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	theme: "light2", 
	exportEnabled: true,
	title: {
		text: "Chart Of All Category List"
	},
	axisX: {
		title: "Time"
	},
	axisY: {
		title: "Percentage",
		suffix: "%"
	},
	data: [{

		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 17,
		indexLabel: "{label} - {y}%",
		dataPoints: [
			//{ y: <?php //echo "$empcount"; ?>, label: "Student Passing Exams" },
           // { y: <?php //echo "$dpcount"; ?>, label: "Student Failing Exams" }
            //{ y: <?php// echo "$dptcount"; ?>, label: "Student Passing Exams" },
           // { y: <?php// echo "$dpttcount"; ?>, label: "Student Failing Exams" },
           // { y: <?php// echo "$leavtypcount"; ?>, label: "Student Passing Exams" },

            
            { y: <?php echo "$departments"; ?>, label: "Brand List" },
            { y: <?php echo "$students"; ?>, label: "User List" },
            { y: <?php echo "$subjects"; ?>, label: " Customer List" },
            { y: <?php echo "$categories"; ?>, label: "Department List" },
            { y: <?php echo "$notice"; ?>, label: "Employees List" },
            { y: <?php echo "$questions"; ?>, label: "Product List" },
            { y: <?php echo "$examination"; ?>, label: "Category List" },
            { y: <?php echo "$banned_students"; ?>, label: "Sales List" }
		]
	}]
});
chart1.render();





}
</script>
</head>
<body>


<div id="chartContainer1" style="height: 470px; max-width: 520px; margin: 0px auto;"></div>


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>