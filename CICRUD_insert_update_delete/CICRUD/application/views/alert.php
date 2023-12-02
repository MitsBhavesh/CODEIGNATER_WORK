<?php
if(!empty($_SESSION['Arham_user_danger_alert']))
 {
 	?>
  <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button> 
    <?php echo $_SESSION['Arham_user_danger_alert']; ?>
  </div>

 	<?php
 unset($_SESSION['Arham_user_danger_alert']);
}
if(!empty($_SESSION['Arham_user_success']))
 {
 ?>
 <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button> 
    <?php echo $_SESSION['Arham_user_success']; ?>
  </div>
 	
 	<?php
 	unset($_SESSION['Arham_user_success']);
}
if(!empty($_SESSION['Arham_user_info']))
 {
 	?>
  <div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button> 
    <?php echo $_SESSION['Arham_user_info']; ?>
  </div>
 	<?php
 unset($_SESSION['Arham_user_info']);
}
if(!empty($_SESSION['Arham_user_warning']))
 {
 	?>
  <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button> 
    <?php echo $_SESSION['Arham_user_warning']; ?>
  </div>
 	<?php
 	unset($_SESSION['Arham_user_warning']);
 
}

?>