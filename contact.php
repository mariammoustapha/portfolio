<!DOCTYPE html>
<html>
<body>
	<head>
		<meta charset="UTF-8">
		<title>Contact</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/script.js"></script>
	</head>
<body>
	<header>
		<section class="container">
			<section class="header-flex">
				<section class="logo">
					<a href="index.html">MMA</a>
				</section>
				<nav class="nav">
					<ul>
						<li><a href="a_propos.html">A_PROPOS()</a></li>
						<li><a href="project.html">PROJET()</a></li>
						<li><a href="blog.html">blog()</a></li>
						<li><a href="contact.php" class="active">Contact()</a></li>
					
					</ul>
				</nav>
				
				<section class="mobile"><i class="fa fa-bars" aria-hidden="true" onclick="opn();"></i></section>
			</section>
		</section>
	</header>
	<?php
		$msg = '';
		if(isset($_POST['sub'])){
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$mail = $_POST['mail'];
			$msg = $_POST['msg'];

			$to = "mrmmustapha01@gmail.com";
			$subject = "Contact Form";

			$message = "
			NOM: ".$fname.".\r\n
			PRENOM: ".$lname.".\r\n
			EMAIL: ".$mail.".\r\n
			MESSAGE: ".$msg.".\r\n
			";

			// Always set content-type when sending HTML email
			
			mail($to, $subject, $message);
			$msg = 'Merci de nous contacter';						}
	
	?>
	<section class="pattern"><img src="img/pattern.svg" /></section>
	
	<section class="section about contact">
		<section class="container">
			<section class="page-title">CONTACT</section>
			<section class="litesm">import subprocess</section>
			<h1>def Contact():</h1>
			<section class="border-right">
				<section class="two-col gapbig">
					
					<section>
						<section class="dflex">
							<section class="smtext">pro = </section>
							<section>
								<h3 class="job w600">Impressionné(e)<br /><span class="w400" style="font-size: 18px;">par mon travail?</span></h3>
							</section>
						</section>
						
						<section class="dflex unsetac" style="margin-top:43px">
							<section class="smtext">oat_ttl = </section>
							<section>
								<section class="opentowork">Ouvert(e) au travail</section>

								<p>« Vous êtes à la recherche d'un alternant en informatique pour votre entreprise ? Je suis à la recherche d'une opportunité pour collaborer. N'hésitez pas à me contacter. »</p>
							</section>
						</section>
						
						<section class="dflex unsetac" style="margin-top:63px">
							<section class="smtext">contact =</section>
							<section>
								<section class="ctitle"><section><span class="quote">“</span>vous pouvez aussi me joindre via:<span class="quote">“</span></section></section>

							</section>
						</section>
						<section class="dflex unsetac" >
							<section class="smtext">alt_contact = {</section>
							<section>
								<section class="mail">
									<section class="flex"><span class="quote">“</span><img src="img/envelope.svg"><span class="quote">“</span></section>
									<section><span class="quote">“</span><a href="mailto:mrmmustapha01@gmail.com">mrmmustapha01@gmail.com</a><span class="quote">“</span> <span class="quote" style="font-size: 12px;">}</span></section>
								</section>
							</section>
						</section>
						
						<section class="dflex unsetac" style="margin-top:43px">
							<section class="smtext"> </section>
							<section class="contact-social">
								<section class="activeon">Je suis active au <img src="img/line.svg" /></section>

								<section class="social">
									<a href="https://git.unistra.fr/mamariam/sokoban_projet"><img src="img/c1.svg" /></a>
									<a href="https://www.linkedin.com/in/moustapha-ahmat-mariam-8b857919a"><img src="img/c2.svg" /></a>
								</section>
							</section>
						</section>
					</section>
					
					<section>
						
						<h3 class="contacttitle">Prenons contact</h3>
						
						<form method="post" action="#" class="form">
							<section class="form-two-col">
								<section>
									<input type="text" name="fname" placeholder="NOM" class="tbox" required />
								</section>
								<section>
									<input type="text" name="lname" placeholder="PRENOM" class="tbox" required />
								</section>
							</section>
							<section>
								<input type="email" name="mail" placeholder="E mail" class="tbox" required />
							</section>
							<section>
								<textarea name="msg" placeholder="Message" class="tbox" required></textarea>
							</section>
							<section style="margin-top: 19px;">
								<input type="submit" name="sub" class="btn" value="SOUMETTRE()">
							</section>
							<section class="emsg"><?php echo $msg; ?></section>
						</form>
					</section>
				</section>
				
				<section class="next ">
					
					<a href="index.html">ACCEUIL <img src="img/arrow.svg"></a>
				</section>
				<footer>
					<section class="footergrid">
						<section class="cp">
							&copy; MMA 2023
						</section>
						<section class="social">
							<a href="https://git.unistra.fr/mamariam/sokoban_projet"><img src="img/i1.svg" /></a>
							<a href="http://linkedin.com/in/moustapha-ahmat-mariam-8b857919a"><img src="img/i2.svg" /></a>
						</section>
					</section>
				</footer>
			</section>
		</section>
	</section>

</body>
</html>