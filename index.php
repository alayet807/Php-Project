<?php
if(isset($_POST['name'])){


   $server="localhost";
   $username="root";
   $password="";
   $con=mysqli_connect(&server,$username,$password);

   if(!$con){
    die("connection failed due to " .mysqli_connect_error());
   }
   //echo "successfully connected";
   $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
   $sql="INSERT INTO `tour`.'tour' (`serial`, `name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
   
   echo $sql;

   if($conn->query($sql)==true){
    echo "sucessfully inserted";
   }
   else{
    echo "ERROR: $sql $conn->error";
   }
   &con->close();

}

?>