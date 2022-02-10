<?php 
   include_once("connection.php");
   ini_set('display_errors', 'Off');
   $con = connection();
   
   if(!isset($_SESSION)){
    session_start();
}
    if(isset($_POST['submit'])){
        $lname = $_POST['lastname'];
        $fname = $_POST['firstname'];
        $mname = $_POST['middlename'];
        $numfam = $_POST['numberoffamily'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $street = $_POST['street'];
        $baranggay = $_POST['baranggay'];
        $can = $_POST['can'];
        $noodles = $_POST['noodles'];
        $drinks= $_POST['drinks'];
        $rice = $_POST['rice'];
        $babyfood = $_POST['babyfood'];
        $snacks = $_POST['snacks'];
        $household = $_POST['household'];
        $hygiene = $_POST['hygiene'];

        $sql = "INSERT INTO receiver_info(lastname,firstname,middlename,numberoffamily,contact,email,street,baranggay,can,noodles,drinks,rice,babyfood,snacks,householdgoods,hygiene) VALUES ('$lname','$fname','$mname','$numfam','$contact','$email','$street','$baranggay','$can','$noodles','$drinks','$rice','$babyfood','$snacks','$household','$hygiene')";
        $receiver = $con->query($sql) or die($con->error);

        // echo header("Location:pantry/comtry.php");
        
        echo "<script>alert('Form Submitted');
        window.location.href='pantry/comtry.php';
        </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Pantry in Sanjuan</title>
    <link rel="shortcut icon" href="./img/Ellipse2.png">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
   
        <div class="main-container border-start shadow mb-5 bg-white rounded">
            <section class="place-name">
                <h1> <img src="img/sanjuan logo.png" alt=""> Community Pantry in San Juan City</h1>
                <p><strong>PAALALA:</strong> KUMUHA AYON SA PANGANGAILANANGAN. MAGBIGAY AYON SA KAKAYAHAN.</p>
            </section>

            <section class="list-form">
                
                <h4><i class="bi bi-bookmark-fill"></i> Fill up here</h4>
                <form method="post">
                    <div>
                        <label>Last Name</label> <br>
                        <input type="text" class="form-control" placeholder="Last Name" aria-label="Username" name="lastname" autocomplete="off">
                    </div>
                    <div>
                        <label class="fnames">First Name</label> <br>
                        <input type="text" class="form-control fname" placeholder="First Name" aria-label="Username" name="firstname" autocomplete="off">
                    </div>
                    <div>
                        <label class="mname">Middle Name</label> <br>
                        <input type="text" class="form-control mnames" placeholder="Middle Name" aria-label="Username" name="middlename" autocomplete="off">
                    </div>
                    <div>
                        <label class="numfam">No.of family</label> <br>
                        <input type="text" class="form-control numfams" placeholder="No.of family" aria-label="Username" name="numberoffamily" autocomplete="off" required>
                    </div>
                    <div>
                        <label class="contact">Contact No.</label> <br>
                        <input type="text" class="form-control cntc" placeholder="09XXXXXXXXX" aria-label="Username" name="contact" autocomplete="off">
                    </div>
                    <div>
                        <label class="email">Email Address</label> <br>
                        <input type="email" class="form-control emails" placeholder="XXX@MAIL.COM" aria-label="Username" name="email" autocomplete="off">
                    </div>
                    <div>
                        <label class="add-name">Unit/Building/House No., Street</label> <br>
                        <input type="text" class="form-control address" placeholder="Unit/Building/House No., Street" aria-label="Username" name="street" autocomplete="off">
                    </div>
                    <div>
                        <label class="brgys">Baranggay</label> <br>
                        <!-- <input type="text" class="form-control brgy" placeholder="Barangay" aria-label="Username" name="barangay"> -->
                        <select class="form-select brgy" aria-label="Default select example" name = "baranggay">
                            <option selected>Salapan</option>
                            <option value="Balong-bato">Balong-bato</option>
                            <option value="Batis">Batis</option>
                            <option value="Corazon De Jesus">Corazon De Jesus</option>
                            <option value="Ermitaño">Ermitaño</option>
                            <option value="Pasadena">Pasadena</option>
                            <option value="Pedr Cruz">Pedro Cruz</option>
                            <option value="Progreso">Progreso</option>
                            <option value="Rivera">Rivera</option>
                            <option value="San Perfecto">San Perfecto</option>
                            <option value="Addition Hills">Addition Hills</option>
                            <option value="Green Hills">Green Hills</option>
                            <option value="Isabelita">Isabelita</option>
                            <option value="Kabayaan">Kabayanan</option>
                            <option value="Little Baguio">Little Baguio</option>
                            <option value="Maytunas">Maytunas</option>
                            <option value="Onse">Onse</option>
                            <option value="St. Joseph">St.Joseph</option>
                            <option value="Santa Lucia">Santa Lucia</option>
                            <option value="Tibagan">Tibagan</option>
                            <option value="West Crame">West Crame</option>
                          </select>
                    </div>
                    
                     <div class="checkbox">
                        <h4><i class="bi bi-bookmark-fill"></i> Choose you want to recieve </h4>
                     <input type="checkbox" class="btn-check can" id="btn-check-outlined" name="can" value="R-can">
                     <label class="btn btn-outline-primary can" for="btn-check-outlined">Can Goods</label>
                        <br>
                     <input type="checkbox" class="btn-check noodle" id="btn-check-outlined1" name="noodles" value="R-noodles">
                     <label class="btn btn-outline-primary noodle" for="btn-check-outlined1">Noodles</label>
                     <br>
                     <input type="checkbox" class="btn-check drinks" id="btn-check-outlined2" name="drinks" value="R-drinks">
                     <label class="btn btn-outline-primary drinks" for="btn-check-outlined2">Drinks</label>
                        <br>
                    <input type="checkbox" class="btn-check rice" id="btn-check-outlined3" name="rice" value="R-rice">
                    <label class="btn btn-outline-primary rice" for="btn-check-outlined3">Rice</label>
                        <br>   
                    <input type="checkbox" class="btn-check babypud" id="btn-check-outlined4" name="babyfood" value="R-bfoods">
                    <label class="btn btn-outline-primary babypud" for="btn-check-outlined4">Baby Foods</label>
                        <br>   
                    <input type="checkbox" class="btn-check snacks" id="btn-check-outlined5" name="snacks" value="R-snacks">
                    <label class="btn btn-outline-primary snacks" for="btn-check-outlined5">Snacks</label>
                        <br>   
                    <input type="checkbox" class="btn-check household" id="btn-check-outlined6"name="household" value="R-household" >
                    <label class="btn btn-outline-primary household" for="btn-check-outlined6">Household</label>
                    <br>   
                    <input type="checkbox" class="btn-check hygiene" id="btn-check-outlined7" name="hygiene" value="R-hygiene">
                    <label class="btn btn-outline-primary hygiene" for="btn-check-outlined7">Hygiene</label>
                    <br>   
                    </div>
                    
                    <div class="button">
                       <center><button type="submit" name="submit" class="btn btn-info buttons" id="alertbutton" >SUBMIT</button></center>
                    </div>
                    <!-- <input type="text" name="name" id="name"> -->
                </form>
            </section>
            
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>