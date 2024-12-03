<h1>Doctors with clients</h1>

<div class="card-group">
 
<?php

while ($doctor = $doctors->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $doctor ['doctor_name'];?></h5>
      <p class="card-text">
       <ul class="list-group">
<?php
  $clients= selectClientsByDoctor($doctor ['doctor_id']);
  while ($client= $clients ->fetch_assoc()) {
?>
   <li class="list-group-item"><?php echo $client ['client_name'];?> - <?php echo $client ['room'];?> - <?php echo $client ['day_time'];?> </li>
<?php
  }
?>
      </ul>
       </p>
      <p class="card-text"><small class="text-muted">Specialization: <?php echo $doctor ['specialization'];?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
