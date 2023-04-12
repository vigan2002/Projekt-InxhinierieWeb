<?php
include 'includes/configuration.php';
include 'includes/header/homehead.php'; 


include 'controller/Contacts.con.php';
$opa = new Contacts;
$opa->shtokontaktin();


?>

<!-- login -->

    
 <!--about us(offer)-->
 


<section class="offer">

    <div class="content">
        <h3 class="vintage" style="text-align:center;">Contact Us</h3>
        
	<form method="POST">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" placeholder="Your name.." required>

		<label for="email">Email:</label>
		<input type="text" id="email" name="email" placeholder="Your email.." required>

		<label for="subject">Subject:</label>
		<input type="text" id="subject" name="subject" placeholder="Subject.." required>

		<label for="message">Message:</label>
		<textarea id="message" name="message" placeholder="Write something.." style="height:200px" required></textarea>

		<input type="submit" name="submit" class="btn" value="Submit">
	</form>

    </div>

    <div id="toast"></div>
<script type="text/javascript" src="/assets/js/info.js"></script>




</section>

 <head>
    
 <link href="assets/css/info.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">

	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f1f1f1;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
		}



		input[type=text], textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: #fff;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			float: right;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}

		label {
			font-weight: bold;
		}
	</style>
</head>

<!-- Footer -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3 class="vintage">Locations</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Kosovo </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Albania </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Turkey </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Germany </a>
        </div>

        <div class="box">
            <h3 class="vintage">quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> arrivals </a>
        </div>

        <div class="box">
            <h3 class="vintage">contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +383 43 749 712 </a>
            <a href="#"> <i class="fas fa-phone"></i> +383 45 459 797 </a>
            <a href="#"> <i class="fas fa-envelope"></i> vcp@posters.com</a>
        </div>
        
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit vintage"> created by Vigan-Albin Co | all rights reserved! </div>

</section>



<!-- JS -->


</body>
</html>