<?php
	include('header.html');
?> 

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Theta 2k23</title>
		<link rel="icon" type="image/png" href="images/theta.png">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
		<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<section class="home">
			<div class="swiper home-slider">
				<div class="swiper-wrapper">
					<section class="video-section">
						<video autoplay muted loop class="bg-video">
							<source src="video/theta.mp4" type="video/mp4">
						</video>
						<div class="overlay">
							<div class="conten">
								<h3>Theta 2k23</h3>
								<h2>Fun Beyond Limits<small></small></h2>
								<a onclick="scrollToSection('#subject')" class="b">Get Started</a>
							</div>
						</div>
					</section>				
					<style>
						.b {
							display: inline-block;
							margin-top: 1rem;
							padding: 1rem 3rem;
							font-size: 1.8rem;
							border-radius: 50%;
							border: 0.1rem solid #0e8bb5;
							background: rgba(255, 255, 255, 0.69);
							color: #000000;
							cursor: pointer;
							text-transform: capitalize;
							border-radius: 4rem;
							text-align: center;
							text-decoration: none;
							cursor: pointer;
							position: relative;
							overflow: hidden;
							transition: all 0.4s ease-out;
						}
						.video-section {
							position: relative;
							height: 100vh;
							width: 100vw;
							background: rgba(86, 86, 86, 0.301);
						}
						.bg-video {
							position: absolute;
							top: 0;
							left: 0;
							width: 100%;
							height: 100%;
							object-fit: cover;
						}
						.overlay {
							position: absolute;
							top: 0;
							left: 0;
							width: 100%;
							height: 100%;
							background-color: rgba(86, 86, 86, 0.301);
							z-index: 0;
						}
						.conten {
							padding: 3rem 2.8rem;
							position: absolute;
							top: 50%;
							left: 50%;
							transform: translate(-50%, -50%);
							text-align: center;
							background-color: rgba(121, 120, 120, 0.074);
							z-index: 1;
							border-radius: 10rem;
							overflow: hidden;
						}
						.conten h3 {
							font-size: 5rem;
							color: #ffffff;
							margin-bottom: 1rem;
						}

						.conten h2, .conten h3 {
							white-space: nowrap;
							text-overflow: ellipsis;
						}
						.conten h2 {
							font-size: 4.7rem;
							color: #eaeaeaf4;
							margin-bottom: 1rem;
						}
						.conten h3, .conten h2 {
							font-family: Verdana, Geneva, Tahoma, sans-serif;
							margin-bottom: 1rem;
							text-shadow:0 0 10px rgba(202, 218, 247, 0.8),
										0 0 20px rgba(159, 187, 253, 0.5),
										0 0 30px rgba(133, 129, 253, 0.3),
										0 0 40px rgba(73, 97, 254, 0.2),
										0 0 50px rgba(33, 17, 254, 0.1),
										0 0 60px rgb(243, 235, 235),
										0 0 70px rgba(232, 224, 224, 0.7);
							transition: text-shadow 0.5s ease-out;
						}
						.conten h3:hover, .conten h2:hover {
							text-shadow:0 0 10px rgba(255,255,255,0.8),
										0 0 20px rgba(255,255,255,0.5),
										0 0 30px rgba(255,255,255,0.3),
										0 0 40px rgba(255,255,255,0.4),
										0 0 50px rgba(255,255,255,0.5);
							transition: text-shadow 0.5s ease-out;			

						}
						@media screen and (max-width: 768px) {
							.conten h3 {
								font-size: 5rem;
								margin-bottom: 0.5rem;
								line-height: 1.2;
							}
							.conten h2 {
								font-size: 3rem;
								margin-bottom: 0.5rem;
								line-height: 1.2;
							}
						}
						@media only screen and (max-width: 424px) {
							.content h3 {
								font-size: 4rem;
								line-height: 1.2;
							}
							.conten h2 {
								font-size: 2rem;
								line-height: 1.2;
							}
						}
					</style>
				</div>
			</div>
		</section>
		
		<section id ="subject" class="subjects">
			<h1 class="heading">Our Workshops</h1>
			
			
			<div class="box-container">
				<div class="box">
					<img src="images/robo.png" alt="">
					<h3>Robotics</h3>
					<p>12 modules</p>
				</div>
				<div class="box">
					<img src="images/informatica1.png" alt="">
					<h3>Informatica</h3>
					<p>12 modules</p>
				</div>
				<div class="box">
					<img src="images/Electronica.jpg" alt="">
					<h3>Electronica</h3>
					<p>12 modules</p>
				</div>
				<div class="box">
					<img src="images/eq.jpg" alt="">

					<h3>Equilibria</h3>
					<p>12 modules</p>
				</div>
				<div class="box">
					<img src="images/Mathematica.jpg" alt="">
					<h3>Mathematica</h3>
					<p>12 modules</p>
				</div>
				<div class="box">
					<img src="images/optica1.png" alt="">
					<h3>Optica</h3>
					<p>12 modules</p>
				</div>
				<div class="box">
					<img src="images/Sportiva.jpg" alt="">
					<h3>Spotiva</h3>
					<p>12 modules</p>
				</div>
				<div class="box">
					<img src="images/Access.jpg" alt="">
					<h3>Access America</h3>
					<p>12 modules</p>
				</div>		
			</div>
			<div class="container">
				<a href="clusters.php" class="bt" style="margin-top: 15px; margin-bottom: -5px;">Register Now!</a>
			</div>

			<style>
				.container {
					width: 100%;
					text-align: center;
				}
				.bt {
					display: inline-block;
					padding: 1rem 2.8rem;
					border-radius: 4rem;
					background: #0e8bb5;
					color: #fff;
					font-size: 16px;
					text-align: center;
					text-decoration: none;
					cursor: pointer;
					position: relative;
					text-align: center;
					overflow: hidden;
					transition: all 0.4s ease-out;
					box-sizing: content-box;
				}
				.bt::before {
					content: "";
					display: block;
					position: absolute;
					top: 30px;
					left: auto;
					width: 100%;
					height: 100%;
					background-color: #ffffff;
					opacity: 0.4;
					transition: all 0.4s ease-out;
					z-index: -1;
				}
				.bt:hover {
					color: #0e8bb5;
					background-color: #fff;
					transform: scale(1.1);
					box-shadow: 0px 0px 15px 0px #0e8bb5;
				}
				.bt:hover::before {
					width: 100%;
				}
			</style>
		</section>
		<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
		<script src="js/script.js"></script>
		<script>
			function scrollToSection(sectionId) {
				const section = document.querySelector(sectionId);
				if (section) {
					section.scrollIntoView({ behavior: "smooth" });
				}
			}
			
		</script>
	</body>
</html>
 
<?php
	include('footer.html');
?>