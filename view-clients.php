<h1>Clients</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
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
  </tr>
<?php
}
?>
   
    </tbody>
  </table>
</div>
