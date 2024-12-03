<div class= "row">
  <div class="col" >
    <h1>Clients</h1>
  </div>
  <div class="col-auto">

    <?php
  include "view-clients-newform.php";
  ?>

    
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th></th>
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
    <td>
      <form method="post" action="consultations-by-client.php">
        <input type="hidden" name="cid" value="<?php echo $client ['client_id'];?>">
            <button type="submit" class="btn btn-primary">Consultations</button>
          </form>
    </td>
  </tr>
<?php
}
?>
   
    </tbody>
  </table>
</div>
