<select class="form-select" id="hName" name= "hName">
 <?php
while ($hospitalItem = $hospitalList->fetch_assoc()) {
  ?>
    <option value="<?php echo $hospitalItem['hospital_name'];?>"></option>

  <?php
}
?>
</select> 
