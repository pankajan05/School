<html>
<head>
<title>School</title>
</head>
<body>
  <?php
  include "db.php";

 ?>

   <h1>Student Information System</h1>

   <form action="_search.php" method="post">
     Enter Student NO:
     <input type="text" name="Student_no">
     <button type="submit" name="submit" >submit</button>
   </form>
</body>
</html>
