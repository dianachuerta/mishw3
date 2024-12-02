<h1>Clients by Doctor</h1>
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

while ($client = $clients->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $client ['client_id'];?></td>
    <td><?php echo $client ['client_name'];?></td>
    <td><?php echo $client ['client_address'];?></td>
    <td><?php echo $client ['room'];?></td>
    <td><?php echo $client ['day_time'];?></td>
  </tr>
<?php
}
?>
   
    </tbody>
  </table>
</div>
