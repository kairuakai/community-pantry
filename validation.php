<?php 
   include_once("connection.php");

   $con = connection();
   
   if(!isset($_SESSION)){
    session_start();
}
  $user = $_POST['user'];
  $pass = $_POST['pass'];

    $sql = "SELECT * FROM userregister WHERE regUser = '$user' && regPass = '$pass'";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    // $students = $con->query($sql) or die($con->error);
    // $row = $students->fetch_assoc();

    if($num == 1){
        $_SESSION['username'] = $user;
        echo "<script type='text/javascript'> 
        alert('Login Successfully'); window.location='pantry/comtry.php?login=successfully' </script>";
        // header('Location:pantry/comtry.php?login=succesfully');
    }
    else{

        echo "<script type='text/javascript'> 
        alert('Login failed'); window.location='login.php?login=failed' </script>";
       
    }

?>
