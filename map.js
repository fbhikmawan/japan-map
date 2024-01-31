document.addEventListener("DOMContentLoaded", function () {
  var width = 900,
    height = 960;

  var svg = d3.select("#map").append("svg").attr("width", width).attr("height", height);

  var projection = d3
    .geoMercator()
    .center([136, 35.5])
    .scale(2000)
    .translate([width / 2, height / 2]);

  var path = d3.geoPath().projection(projection);

  // Fetch the data from data.php
  fetch("/api/data.php")
    .then((response) => response.json())
    .then((data) => {
      // Data is now available here as 'data.pref' and 'data.category'
      // Convert pref IDs to the required format for matching
      var prefById = {};
      Object.keys(data.pref).forEach(function (key) {
        prefById[data.pref[key]] = key;
      });

      // Load and display the map
      d3.json("/data/pref.json")
        .then(function (japan) {
          var topo = japan.features;

          svg
            .selectAll(".pref")
            .data(topo)
            .enter()
            .append("path")
            .attr("class", function (d) {
              return "pref pref" + prefById[d.properties.name_local];
            })
            .attr("d", path);

          // Display category names and implement interactive coloring
          svg
            .selectAll("text")
            .data(data.category)
            .enter()
            .append("text")
            .attr("class", "category-label")
            .attr("x", width - 160)
            .attr("y", function (d, i) {
              return i * 20 + 220;
            })
            .text(function (d) {
              return d.name;
            })
            .on("mouseover", function (d) {
              for (var key in d.data) {
                var color = 255 - d.data[key];
                if (color < 0) {
                  color = 0;
                }
                d3.select(".pref" + key)
                  .transition()
                  .style("fill", "rgb(255, " + color + ", " + color + ")");
              }
              d3.select(this).style("fill", "#f66");
            })
            .on("mouseout", function (d) {
              for (var i = 1; i < 48; i++) {
                d3.select(".pref" + i)
                  .transition()
                  .style("fill", "#fff");
              }
              d3.select(this).style("fill", "black");
            });
        })
        .catch(function (error) {
          console.log("Error loading the map data:", error);
        });
    })
    .catch((error) => console.error("Error fetching data:", error));
});
