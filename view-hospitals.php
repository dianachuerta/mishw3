<div class="row mb-4">
  <div class="col">
    <h1 class="text-center" style="color: #4A90E2; font-family: 'Arial', sans-serif; font-weight: bold;">Hospitals</h1>
  </div>
  <div class="col-auto">
    <?php include "view-hospitals-newform.php"; ?>
  </div>
</div>

<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover" style="background-color: #ffffff;">
    <thead class="thead-dark" style="background-color: #343a40; color: white;">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Location</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>View Details</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($hospital = $hospitals->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $hospital['hospital_id']; ?></td>
        <td><?php echo $hospital['hospital_name']; ?></td>
        <td><?php echo $hospital['hospital_location']; ?></td>
        <td>
          <button class="btn btn-warning" onclick="location.href='view-hospitals-editform.php?id=<?php echo $hospital['hospital_id']; ?>'">
            Edit
          </button>
        </td>
        <td>
          <form method="post" action="">
            <input type="hidden" name="hid" value="<?php echo $hospital['hospital_id'];?>">
            <input type="hidden" name="actionType" value="Delete">
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
              </svg>
            </button>
          </form>
        </td>
        <td>
          <button class="btn btn-info" onclick="location.href='hospital-details.php?id=<?php echo $hospital['hospital_id']; ?>'">
            View Details
          </button>
        </td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>

<!-- Additional Styling -->
<style>
  .table th, .table td {
    vertical-align: middle;
  }

  .btn {
    width: 100%;
  }

  .table-responsive {
    margin-top: 20px;
  }

  .table {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  h1 {
    font-size: 36px;
    margin-bottom: 20px;
    color: #333;
    font-family: 'Arial', sans-serif;
  }

  .thead-dark th {
    background-color: #343a40 !important;
    color: #fff;
  }
</style>
