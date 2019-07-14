<?php
include "db.php";

$sno = $_REQUEST['Student_no'];

// var_dump($sno); die();

$sql = "select * from student where student_id = '$sno'";
//echo $sql;

$result = $con->query($sql);

if($result->num_rows > 0){
  $cnt_result = $result->num_rows;

  while($row = $result->fetch_assoc()){
    //var_dump($row); die();
    echo $row['student_id']."->".$row['student_name'];

    header("location: view.php?sno=".$sno);
  }
}else{
  echo "<br>No records for the Student no";

   echo"<form action=\"add.php?sno=".$sno."\" method=\"post\">
     Enter Student Name:
     <input type=\"text\" name=\"student_name\">
     <button type=\"submit\" name=\"submit\" >submit</button>
   </form>";

}



?>
