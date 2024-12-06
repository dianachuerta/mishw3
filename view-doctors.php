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
    <td><?php echo $doctor ['doctor_id'];?></td>
    <td><?php echo $doctor ['doctor_name'];?></td>
    <td><?php echo $doctor ['specialization'];?></td>
    <td><a href="clients-by-doctor.php?id=<?php echo $doctor ['doctor_id'];?>">Clients</a></td>
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
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

