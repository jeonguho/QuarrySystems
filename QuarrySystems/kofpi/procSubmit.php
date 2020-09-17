<?php require 'inc/config.php'; ?>
<?php
  header("Content-Type:application/json");
  $location = $_POST['location'];
  $dept = $_POST['dept'];
  $name = $_POST['name'];
  $email = $_POST['email'];

	if(!$location) {
      echo "허가되지 않은 접근";
      return 0;
  }

  echo proc_submit($db, $location, $dept, $name, $email);
  
  function proc_submit($db, $location, $dept, $name, $email) {
    if (!$dept) return "invaild dept";
    if (!$name) return "invaild name";
    if (!$email) return "invalid email";

    $query = "INSERT INTO kofpi VALUES(NULL,'".$location."','".$name."','".$dept."','".$email."',NULL)"; 
    if ($db->query($query)) {
      return "success";
    }
  }
?>