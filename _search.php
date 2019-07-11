<?php
include "db.php";

$sno = $_REQUEST['Student_no'];

// var_dump($sno); die();

$sql = "select * from student where student_id = '$sno'";
echo $sql;

$result = $con->query($sql);

if($result->num_rows > 0){
  $cnt_result = $result->num_rows;

  while($row = $result->fetch_assoc()){
    var_dump($row); die();
    echo $row['sno']."->".$row['sname'];

    header("location: view.php?sno=".$row['sno']);
  }
}else{
  echo "<br>No records for the Student no";
  header("location: add.php?sno=".$row['sno']."");
}



?>
