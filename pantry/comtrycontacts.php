<!DOCTYPE html>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>COMTRY | VOLUNTEERS</title>
	<link rel="stylesheet" href="./comtrycss/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="sub-header2">
		<nav>
			<a href="comtry.php"><img src="./comtryimg/logomain.png"></a>
			<div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="comtry.php">HOME</a></li>
					<li><a href="aboutus.php">ABOUT</a></li>
					<li><a href="comtryfaq.php">FAQ</a></li>
					<li><a href="comtrycontacts.php">CONTACTS</a></li>
				</ul>
			</div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
        <h1>Contacts</h1>
	</section>

<!--Contacts-->
<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.8970743059813!2d121.02767411535186!3d14.60493868088469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b62a430d0181%3A0x4203544f27962050!2sSan%20Juan%20City%20Hall!5e0!3m2!1sen!2sph!4v1636649674096!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
   
</section>
    
<section class="contacts">
    
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>Pinaglabanan Street, cor Dr.P.A.Narciso, Street</h5>
                    <p>San Juan, Metro Manila</p>
                </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>09563021803</h5>
                    <p>Weekdays 10AM-6PM, Weekends 1PM-8PM</p>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <span>
                    <h5>comtryvolunteers@gmail.com</h5>
                    <p>Email us your query</p>
                </span>
            </div>
        </div>
        
        <div class="contact-col">
            <form action="http://formsubmit.co/comtryvolunteers@gmail.com" method="POST">
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="email" name="email" placeholder="Enter your email address" required>
            <input type="text" placeholder="Enter your subject" required>
            <textarea row="8" placeholder="Message"></textarea>
            <a href="thxu.php" type="submit" class="button1">Send a Message</a>
        </div>
        </form>
    </div>
</section>
    
 
<!--Java For Toggle Menu-->
<script>
    var navLinks = document.getElementById("navLinks");
    
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>    
<!--footer-->
<section class="footer">
    <h4>About Us</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore. <br>Et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud</p>
    <div class="icons">
        <a href="https://www.facebook.com/Comtry-106703901831102"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/ComtryV"><i class="fa fa-twitter"></i></a>
        <a href="mailto:comtryvolunteers@gmail.com?"><i class="fa fa-envelope"></i></a>
    </div>
    <p>Barangay San Juan, Copyright &copy; 2021</p>
</section>
</body>
</html>
