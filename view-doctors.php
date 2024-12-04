<h1 style="background-color: #E6E6FA; padding: 10px; border-radius: 5px;">Doctors</h1>

<div class="table-responsive">
  <table class="table">
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

<!-- Add a canvas element for the pie chart -->
<h2>Doctor Specialization Distribution</h2>
<canvas id="specializationPieChart" width="400" height="400"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  // Data passed from PHP to JavaScript
  const specializations = <?php echo $specializations; ?>;
  const counts = <?php echo $counts; ?>;

  // Create the pie chart
  const ctx = document.getElementById('specializationPieChart').getContext('2d');
  const specializationPieChart = new Chart(ctx, {
    type: 'pie',  // Chart type
    data: {
      labels: specializations,  // Labels for the pie chart (specializations)
      datasets: [{
        label: 'Doctors by Specialization',
        data: counts,  // Data for the pie chart (number of doctors)
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        tooltip: {
          callbacks: {
            label: function(tooltipItem) {
              return tooltipItem.label + ': ' + tooltipItem.raw + ' doctors';
            }
          }
        }
      }
    }
  });
</script>

