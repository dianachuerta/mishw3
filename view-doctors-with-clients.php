<h1 class="text-center mb-5" style="background: linear-gradient(to right, #ff7eb9, #ff65a3); color: white; padding: 15px; border-radius: 15px; font-family: 'Arial', sans-serif; font-weight: bold;">Doctors with Clients</h1>

<div class="card-group mb-5">
  <?php
  while ($doctor = $doctors->fetch_assoc()) {
  ?>
    <div class="card shadow-lg mb-3" style="border-radius: 15px; transition: transform 0.3s ease-in-out;">
      <div class="card-body">
        <h5 class="card-title" style="color: #4C4F69; font-weight: bold;"><?php echo $doctor['doctor_name']; ?></h5>
        <p class="card-text">
          <ul class="list-group">
            <?php
            $clients = selectClientsByDoctor($doctor['doctor_id']);
            while ($client = $clients->fetch_assoc()) {
            ?>
              <li class="list-group-item" style="background-color: #f9f9f9; border: 1px solid #ddd; border-radius: 10px; margin-bottom: 8px;">
                <?php echo $client['client_name']; ?> - <?php echo $client['room']; ?> - <?php echo $client['day_time']; ?>
              </li>
            <?php
            }
            ?>
          </ul>
        </p>
        <p class="card-text"><small class="text-muted" style="color: #d16d94;">Specialization: <?php echo $doctor['specialization']; ?></small></p>
      </div>
    </div>
  <?php
  }
  ?>
</div>

<style>
  .card:hover {
    transform: scale(1.05);
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
  }

  .list-group-item:hover {
    background-color: #ffd1dc;
    cursor: pointer;
  }
</style>
