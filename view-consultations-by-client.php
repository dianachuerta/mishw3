<h1>Consultations by client</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Room</th>
        <th>Day/Time</th>
      </tr>
    </thead>
    <tbody>

<?php

while ($consultation = $consultations->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $consultation ['client_id'];?></td>
    <td><?php echo $consultation ['client_name'];?></td>
    <td><?php echo $consultation ['client_address'];?></td>
    <td><?php echo $consultation ['room'];?></td>
    <td><?php echo $consultation ['day_time'];?></td>
  </tr>
<?php
}
?>
   
    </tbody>
  </table>
</div>
