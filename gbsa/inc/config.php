<?php
  // 개발중일때만 활성화
  /*
  ini_set('display_errors',1);
  error_reporting(E_ALL);
  */
  
  $db = mysqli_connect('localhost', 'ems', 'znjfl78123!@#', 'ems');
  $db->query("set session character_set_connection=utf8;");
  $db->query("set session character_set_results=utf8;");
  $db->query("set session character_set_client=utf8;");

?>