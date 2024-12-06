<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages': ['geochart'],
        'mapsApiKey': 'YOUR_API_KEY' // Optional for enhanced map features
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['City', 'Hospitals'],
          ['Oklahoma City', 25],
          ['Tulsa', 18],
          ['Norman', 10],
          ['Edmond', 8],
          ['Stillwater', 5]
        ]);

        var options = {
          region: 'US-OK', // Focuses on Oklahoma
          displayMode: 'markers',
          resolution: 'provinces',
          colorAxis: { colors: ['#e0f7fa', '#006064'] }, // Custom color gradient
          legend: { position: 'none' }
        };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
    <style>
      #regions_div {
        float: left; /* Positions the chart on the left side */
        width: 400px; /* Reduces chart width */
        height: 300px; /* Reduces chart height */
        margin-right: 20px; /* Adds space between the chart and other content */
        border: 1px solid #ccc; /* Optional border for clarity */
        padding: 10px; /* Adds padding inside the chart container */
        border-radius: 10px; /* Rounds the chart container edges */
        background-color: #f9f9f9; /* Light background color */
      }
    </style>
  </head>
  <body>
    <div id="regions_div"></div>
    <div style="margin-left: 420px; padding: 10px;">
      <h3>Hospitals in Oklahoma</h3>
      <p>
        Oklahoma has a diverse range of hospitals across major cities like Oklahoma City, Tulsa, and Norman. 
        These facilities provide essential healthcare services to the state's population.
      </p>
    </div>
  </body>
</html>
