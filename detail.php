<h1>Subject Details</h1>

<?php
include 'db.php';
$sql = "select * from subject s, teacher t where s.t_id = t.teacher_id";
//echo"$sql";

$result = $con->query($sql);

 echo"<table border=1>
            <tr>
                <th>Subject Id</th>
                <th>subject Name</th>
                <th>Teacher Name</th>
            </tr>";

if($result->num_rows > 0){
  $cnt_result = $result->num_rows;

  while($row = $result->fetch_assoc()){
     echo "<tr><td>".$row['subject_id']."</td><td>".$row['subject_name']."</td><td>".$row['teacher_name']."</td><br>";
  }
    echo "</table>";
    
}

?>

<a href="search.php"><br><br><br>Back</a>