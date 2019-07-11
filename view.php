<?php
$sno = $_REQUEST['Student_no'];

// var_dump($sno); die();

$sql = "select * form student where student_id = '$sno'";
echo $sql;

$result = $con -> query($sql);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $sname = $row['sname'];

    $sql2 = "select * from subject s , mark m where student_id = '" .$sno."'";

    $result2 = $con -> query($sql);
    echo "subject     Marks<br>";
    echo"_______________________________<br>";


    if($result2->num_rows > 0){
      while($row = $result2->fetch_assoc()){
        echo $row['subject_name']."&nbsp;&nbsp;&nbsp;&nbsp;".$row['marks']."<br>";
      }
    }
  }
}

?>
