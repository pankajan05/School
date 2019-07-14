<html>
<head>
<title>School</title>
</head>
<body>
   <?php
include 'db.php';
$sno = $_REQUEST['sno'];

// var_dump($sno); die();

$sql = "select * from student where student_id = '$sno'";
//echo $sql;

$result1 = $con->query($sql);

if($result1->num_rows > 0){
  while($row = $result1->fetch_assoc()){
    $sname = $row['student_name'];

    $sql2 = "select * from subject s , follow m where s.subject_id = m.subject_id and m.student_id = '" .$sno."'";

    $result2 = $con -> query($sql2);
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
    

<a href="search.php"><br><br><br>Back</a>
</body>
</html>


