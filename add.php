<h1>Adding student</h1>

<?php
  include 'db.php';

  $sno = $_REQUEST['sno'];
  //var_dump($sno); die;

  $sname = $_REQUEST['student_name'];
 

  $sql = "insert into student values('$sno','$sname')";
  //echo $sql;

  if($con->query($sql) == true){
    echo"<br> One record was added...<br>";
    echo "<a href='search.php' >BACK</a> to main page";
  }
else{
    echo"<br> failed insertion";
    echo "<a href='search.php' >BACK</a> to main page";
  }



 ?>
