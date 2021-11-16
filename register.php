<?php 
   include_once("connection.php");

   $con = connection();
   
   if(!isset($_SESSION)){
    session_start();
}
  $username = $_POST['username'];
  $password = $_POST['password'];

    $sql = "SELECT * FROM userregister WHERE regUser = '$username'";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    // $students = $con->query($sql) or die($con->error);
    // $row = $students->fetch_assoc();

    if($num == 1){
        echo "<script type='text/javascript'> 
        alert('Account Already Taken'); window.location='login.php' </script>";
    }
    else{

        $reg = "INSERT INTO userregister(regUser,regPass) VALUES ('$username','$password')";
        mysqli_query($con,$reg);
        // $con->query($reg) or die($con->error);
        echo "<script type='text/javascript'> 
        alert('Registration Successfully'); window.location='login.php?register=successfully' </script>";
    }

?>
