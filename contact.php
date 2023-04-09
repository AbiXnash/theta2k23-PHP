<?php
	include('header.html');
?> 

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Theta2k23-Contact</title>
		<link rel="icon" type="image/png" href="images/theta.png">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<section class="heading-link">
			<h3>Contact us</h3>
			<p> <a href="index.php">Home</a> / Contact </p>
		</section>
		<section class="contact">
			<h1 class="heading"> Get in Touch </h1>
			<div class="icons-container">
				<div class="icons">
					<i class="fas fa-phone"></i>
					<h3>Phone :</h3>
					<p>+123-456-7890</p>
					<p>+111-222-3333</p>
				</div>
				<div class="icons">
					<i class="fas fa-envelope"></i>
					<h3> Email : </h3>
					<p>asdasdasd@gmail.com</p>
				</div>
				<div class="icons">
					<i class="fas fa-map"></i>
					<h3>Address :</h3>
					<p>Tamil Nadu, India - 612001</p>
				</div>
			</div>
			<div class="row">
				<div class="image">
					<img src="images/contact-img.png" alt="">
				</div>
				<form action="mailto:abinash17sm@gmail.com" method="POST">
					<h3>Send us a message</h3>
					<input type="text" name="name" placeholder="Your name" class="box">
					<input type="email" name="email" placeholder="Your mail ID" class="box">
					<input type="number" name="number" placeholder="Your Phone" class="box">
					<textarea name="msg" class="box" placeholder="Message" id="" cols="30" rows="10"></textarea>
					<input type="submit"  value="Send message" class="btn">
				</form>
			</div>
		</section>
		<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>

<?php
	include('footer.html');
?>