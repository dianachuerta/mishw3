<h1>Doctors</h1>
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
