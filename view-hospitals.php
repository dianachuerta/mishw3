<h1>Hospitals</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Location</th>
        <th></th>
      </tr>
    </thead>
    <tbody>

<?php

while ($hospital = $hospitals->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $doctor ['hospital_id '];?></td>
    <td><?php echo $doctor ['hospital_name'];?></td>
    <td><?php echo $doctor ['hospital_location'];?></td>
  </tr>
<?php
}
?>
   
    </tbody>
  </table>
</div>
