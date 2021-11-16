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
	<section class="header">
		<nav>
            <a href="comtry.php"><img src="../img/sanjuan logo-transparent.png" alt="san juan logo" class="sanjuan"></a>
			<a href="comtry.php"><img src="./comtryimg/logomain.png"></a>
			<div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="comtry.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" fill="currentColor" class="bi bi-house-door" viewBox="0 0 20 19">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</svg> HOME</a></li>
					<li><a href="aboutus.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 20 19">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg> ABOUT</a></li>
					<li><a href="comtryfaq.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 20 19">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
</svg> FAQ</a></li>
					<li><a href="comtrycontacts.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 20 19">
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
</svg> CONTACTS</a></li>
					<li><a href="../login.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 20 19">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg> LOGOUT</a></li>
				</ul>
			</div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>

        <div class="text-box">
                <h1>Community Pantry for the Barangays of San Juan</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore. Et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud <br> exercitation ullamco laboris. Isi ut aliquip ex ea commodo
					consequat.</p>
                <a href="#SorR" class="button">Click this to visit the forms</a>
            </div>

            
	</section>

<!--Form-->
<section id="SorR" class="form">
    <h1>Are you a Sender or a Receiver?</h1>
    <p id="click">Click the corresponding icon to proceed</p>
    
    <div class="row">
        <div class="form-col">
            <h3>Sender</h3>
            <p>Your help means everything to us.</p>
            <a href="../sender.php"><i class="fa fa-user-circle-o fa-5x"></i></a>
        </div>
        <div class="form-col">
            <h3>Receiver</h3>
            <p>You're loved.</p>
            <a href="../index.php"><i class="fa fa-user-circle fa-5x"></i></a>
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
    
<!--Added contact-->
<section class="cta">
    <h1>Any specific further questions?</h1>
    <a href="comtrycontacts.php" class="button"> CONTACT US</a>
</section>
    
<!--footer-->
<section class="footer">
    <h4>About Us</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore. <br>Et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud</p>
    <div class="icons">
        <a href="https://www.facebook.com/Comtry-106703901831102" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/ComtryV" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="mailto:comtryvolunteers@gmail.com?" target="_blank"><i class="fa fa-envelope"></i></a>
    </div>
    <p>Barangay San Juan, Copyright &copy; 2021</p>
</section>
</body>
</html>
