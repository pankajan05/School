<h1>Adding student</h1>

<?php
  include 'db.php';

  $sno = $_REQUEST['sno'];
  //var_dump($sno); die;

  $sname = $_REQUEST['txtname'];
  $sno=$_REQUEST['txtsno'];

  $sql = "insert into student values('$sno','$sname')";
  echo $sql;
  


 ?>
