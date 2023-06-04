<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="hotel";
  $a=$_POST['t1'];
  $mobile=$_POST['t2'];
  $room=$_POST['t3'];
 
  //create connection
  $conn=new mysqli($servername,$username,$password,$dbname);
  //check connection
  if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
  }
 $sql="SELECT * FROM hotel WHERE Mobile='$mobile' AND Name='$a'";
  if ($conn->query($sql) === TRUE) {
    echo"done";
  }else {
    echo "Err ";
  }
  $conn->close();
  ?>
</body>
</html>