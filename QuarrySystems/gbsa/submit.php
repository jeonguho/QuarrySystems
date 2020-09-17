<?php require 'inc/config.php'; ?>
<?php
  $loc = $_GET['loc'];
  $user = $_GET['user'];

	if(!$loc || !$user) {
      echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">잘못된 경로로 접근하였습니다.';
      return 0;
  }

  echo proc_submit($db, $loc, $user);
  
  function proc_submit($db, $loc, $user) {
    $query = "INSERT INTO gbsa VALUES(NULL,'".$loc."','".$user."',NULL)"; 
    if ($db->query($query)) {
      echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>사이버침해대응 모의훈련</title><script>alert("신고하였습니다."); window.close();</script>';
      return "success";
    }
  }
?>