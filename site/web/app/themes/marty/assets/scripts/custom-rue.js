//////////////////////////////////////////////////////////////
//////////////////////// Set-Up //////////////////////////////
//////////////////////////////////////////////////////////////

var margin = {top: 100, right: 100, bottom: 100, left: 100},
  legendPosition = {x: 25, y: 25},
  width = Math.min(700, window.innerWidth - 10) - margin.left - margin.right,
  height = Math.min(width, window.innerHeight - margin.top - margin.bottom - 20);

//////////////////////////////////////////////////////////////
//////////////////// Draw the Chart //////////////////////////
//////////////////////////////////////////////////////////////

var color = d3.scale.ordinal()
  .range(["#7647f9"]);

var radarChartOptions = {
  w: width,
  h: height,
  margin: margin,
  legendPosition: legendPosition,
  maxValue: 5,
  wrapWidth: 60,
  levels: 5,
  roundStrokes: false,
  color: color,
  axisName: "critere",
  areaName: "proposition",
  legendTooltip : "description",
  value: "score",
};
//Load the data and Call function to draw the Radar chart
d3.json("/app/themes/marty/assets/data-rue.json", function(error, data){
  RadarChart(".radarChart", data, radarChartOptions);
});
