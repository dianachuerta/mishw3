<h1 style="background-color: #E6E6FA; padding: 10px; border-radius: 5px;">Doctors</h1>
<div class="table-responsive">
  <table class="table border-primary">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Specialization</th>
        <th></th>
      </tr>
    </thead>
    <tbody>

<?php

while ($doctor = $doctors->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $doctor['doctor_id']; ?></td>
    <td><?php echo $doctor['doctor_name']; ?></td>
    <td><?php echo $doctor['specialization']; ?></td>
    <td><a href="clients-by-doctor.php?id=<?php echo $doctor['doctor_id']; ?>">Clients</a></td>
  </tr>
<?php
}
?>
   
    </tbody>
  </table>
</div>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Clients', 'Clients Per Day'],
          ['Michael Shelton',     112],
          ['Sidney Grennan',      23],
          ['Vivian Yeager',  22],
          ['Finn Huerta', 299],
        ]);

        var options = {
          title: 'Amount of Clients',
          pieSliceText: 'percentage',
          slices: {
            0: {offset: 0.1, color: '#FFB6C1'},  
            1: {offset: 0.1, color: '#FF69B4'},  
            2: {offset: 0.1, color: '#ADD8E6'},  
            3: {offset: 0.1, color: '#4682B4'}   
          },
          chartArea: {width: '80%', height: '80%'}, 
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 500px; height: 300px; margin: 0 auto;"></div>
  </body>
</html>
