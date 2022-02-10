<?php 
   include_once("connection.php");

   $con = connection();
   
   if(!isset($_SESSION)){
    session_start();
}

if($_SERVER["REQUEST_METHOD"]== "POST"){
    
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM userregister WHERE regUser = '$user' && regPass = '$pass'";
    $result = mysqli_query($con,$sql);
    $num = mysqli_fetch_array($result);

    if($num['role']==0){

        if($num['regUser'] == $user && $num['regPass']==$pass){
            echo "<script type='text/javascript'> 
            alert('Login Successfully'); window.location='pantry/comtry.php?login=successfully' </script>";
        }
        else{
            echo "<script type='text/javascript'> 
            alert('Login failed'); window.location='login.php?login=failed' </script>";
        }
        
    }
    else if($num['role']==1){
        echo "<script type='text/javascript'> 
        alert('Welcome Admin'); window.location='admin/index.php?login=successfully' </script>";
    }
    else{
        echo "<script type='text/javascript'> 
        alert('Login failed'); window.location='login.php?login=failed' </script>";
    }


}


//   $user = $_POST['user'];
//   $pass = $_POST['pass'];

//     $sql = "SELECT regUser,regPass FROM userregister WHERE regUser = '$user' && regPass = '$pass'";
//     $result = mysqli_query($con,$sql);
//     $num = mysqli_num_rows($result);


    // $students = $con->query($sql) or die($con->error);
    // $row = $students->fetch_assoc();



    // if($num == 1){
        
    //     $_SESSION['username'] = $user;
    //     echo "<script type='text/javascript'> 
    //     alert('Login Successfully'); window.location='pantry/comtry.php?login=successfully' </script>";
    //     // header('Location:pantry/comtry.php?login=succesfully');
    // }

    // else{

    //     echo "<script type='text/javascript'> 
    //     alert('Login failed'); window.location='login.php?login=failed' </script>";
       
    // }

?>
