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
	<section class="sub-header3">
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
        <h1 id="h1faq">Frequently Answered Questions (FAQ)</h1>
	</section>

<!--FAQ-->
    <section id="faq">
        <div class="container">
           <div id="qunan">
					<p class="question"><strong>Q.</strong><small>Questioons blabla</small></p>
                    <p class="answer"><strong>A.</strong><small>Answer</small></p>
               
                    <p class="question"><strong>Q.</strong><small>Questioons blabla</small></p>
                    <p class="answer"><strong>A.</strong><small>Answer</small></p>
               
                    <p class="question"><strong>Q.</strong><small>Questioons blabla</small></p>
                    <p class="answer"><strong>A.</strong><small>Answer</small></p>
               
                    <p class="question"><strong>Q.</strong><small>Questioons blabla</small></p>
                    <p class="answer"><strong>A.</strong><small>Answer</small></p>
               
                    <p class="question"><strong>Q.</strong><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></p>
                    <p class="answer"><strong>A.</strong><small>Sed ut perspiciatis unde omnis iste natus error</small></p>


            </div> 
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
