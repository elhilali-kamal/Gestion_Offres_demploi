<?php
require('header.php');
include('../config.php');

?>

<style>
	body {

		background-image: linear-gradient(to bottom, rgba(218, 218, 218, 0.288), rgba(118, 190, 196, 0.082)),
			url('../static/img/background1.jpg') !important;
		background-repeat: no-repeat !important;
		background-attachment: fixed !important;
		background-size: 100% 100% !important;


	}
</style>
</head>

<body>

	<li><a class="active_1" href="index.php">ACCUEIL</a></li>
	<li><a href="university.php">UNIVERSITÉ</a></li>
	<li><a href="formation.php">FORMATIONS</a></li>
	<li><a href="espace.php">ESPACE ETUDIANT</a></li>
	<li><a href="contact.php">CONTACT</a></li>
	<li class="dropdown dropdown-large temp">
		<a href="#" class="dropdown-toggle atag" data-toggle="dropdown">PLUS<b class="caret"></b></a>

		<ul class="dropdown-menu dropdown-menu-large row col-sm-12 font_1 drop_2">
			<li class="col-sm-3">
				<ul>
					<li class="dropdown-header">UNIVERSITÉ</li>
					<li><a href="university.php"> Mot de président</a></li>
					<li class="disabled"><a> Présentation</a></li>
					<li class="divider"></li>
					<li class="dropdown-header">FORMATIONS</li>
					<li><a href="formation.php">Formation initiale</a></li>
					<li class="disabled"><a>Formation continue</a></li>
				</ul>
			</li>
			<li class="col-sm-3">
				<ul>
					<li class="dropdown-header">ESPACE ETUDIANT</li>
					<li><a href="">Services</a></li>
					<li class="disabled"><a>Bourses</a></li>
					<li class="divider"></li>
					<li class="dropdown-header">CONTACT</li>
					<li><a href="">FAQ</a></li>
					<li class="disabled"><a></a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li class="dropdown"><a href="#" data-toggle="dropdown"><span class="fa fa-search"></span></a>
		<ul class="dropdown-menu drop_1" style="min-width: 300px;">
			<li>
				<div class="row_1">
					<div class="col-sm-12">
						<form class="navbar-form navbar-left" role="search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Recherche">
								<span class="input-group-btn">
									<button class="btn btn-primary" type="button">
										Recherche</button>
								</span>
							</div>
						</form>
					</div>
				</div>
			</li>
		</ul>
	</li>

	</ul>
	</div>

	</nav>
	</div>

	</section>
	<div class="trending " style="background-color: #f5f5f5; ">
		<h2 style="margin: 0 !important;"><span>Actualités</span></h2>
		<p style="margin-bottom:0px !important;"></p>
	</div>
	<div class="row" style="background-color:rgba(0,0,0,0.25) ;padding:7% !important; ">
		<div class="column text-center">
			<div class="w3-content w3-display-container">
				<img class="mySlides" src="../static/img/slider1.png" style="width:100% ; margin: auto;">
				<img class="mySlides" src="../static/img/slider3.jpeg" style="width:100% ; margin: auto;">
				<img class="mySlides" src="../static/img/slider4.png" style="width:100% ; margin: auto;">

				<button class="w3-button w3-white w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
				<button class="w3-button w3-white w3-display-right" onclick="plusDivs(1)">&#10095;</button>
			</div>
		</div>
	</div>




	<div class="trending" style="background-color: #f5f5f5; ">
		<h2 style="padding-top: 30px !important;"><span>Annonces</span></h2>
		<p style="margin: auto	 !important;"></p>
	</div>
	<section id="contribute">
		<div class="container-fluid ">
			<div class="row ">
				<div class="col-sm-12">
					<div class="contribute_3 clearfix">
						<?php
						$result = mysqli_query($conn, "Select * from offer");
						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								$picture = $row['picture'];
						?>
								<div class="col-sm-4 contribute_3_inner reveal">
									<button type="submit" name="detail" style="background-color: transparent; border: none;">
										<input type="text" name="" hidden>
										<a href="annonce.php?annonce=<?php echo $picture . "&id=" . $row["id_offer"] ?>">
											<img src="../static/img/<?php echo ($picture == "") ? "annonce0.png" : $picture ?>" alt="...">
										</a>
									</button>
								</div>
						<?php
							}
						} else echo '<div><h2> Il y a aucun annonce ! </h2></div>'
						?>
					</div>


				</div>
			</div>
		</div>
		</div>

	</section>


	<div class="trending" style="background-color: #f5f5f5; ">
		<h2 style="margin-top: 0 !important;"><span>L'histoire de L'UCD</span></h2>
		<p style="margin: auto	 !important;"></p>
	</div>

	<section style="background-color:rgba(0,0,0,0.25);">
		<div class="row reveal">
			<div class="column ">
				<img src="../static/img/logo2.png" width="50%" alt="" style="margin-top: 20px;">
			</div>
			<div class="column " style="padding:40px !important;">
				<h3 style="font-size: 1.8em !important; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;text-align: center; color: rgb(255, 255, 255); text-align: center;">
					Créée en 1985 au cœur de la ville d'El Jadida dans la région de Doukkala-Abda, l'Université Chouaïb Doukkali a vu le jour avec deux établissements universitaires, la Faculté des Sciences et la Faculté des Lettres et des Sciences Humaines. Aujourd'hui, l'Université se compose de huit établissements universitaires.
				</h3>
			</div>
		</div>
	</section>


	<div class="trending">

		<div class="col-md-12 ">
			<h2 style="padding-top: 40px !important;"><span>Sites Web</span></h2>
			<p style="margin: auto!important; margin-bottom: 20px !important;  "></p>
		</div>
	</div>



	<section id="contribute">
		<div class="container-fluid">
			<div class="row">
				<div class="contribute_3 clearfix reveal">

					<div class="col-sm-3 contribute_4_inner">
						<a target="_blank" href="http://www.fsjesj.ucd.ac.ma/">
							<img src="../static/img/pic3.png"></a>
					</div>
					<div class="col-sm-3 contribute_4_inner">
						<a target="_blank" href="http://www.fs.ucd.ac.ma/">
							<img src="../static/img/pic2.png"></a>
					</div>
					<div class="col-sm-3 contribute_4_inner">
						<a target="_blank" href="http://www.ensaj.ucd.ac.ma/">
							<img src="../static/img/pic1.png"></a>
					</div>
					<div class="col-sm-3 contribute_4_inner">
						<a target="_blank" href="http://www.flshj.ucd.ac.ma">
							<img src="../static/img/pic4.png"></a>
					</div>


				</div>
			</div>
		</div>


	</section>






	</div>

	<?php
	require('footer.php')
	?>
	<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
			showDivs(slideIndex += n);
		}

		function showDivs(n) {
			var i;
			var x = document.getElementsByClassName("mySlides");
			if (n > x.length) {
				slideIndex = 1
			}
			if (n < 1) {
				slideIndex = x.length
			}
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			x[slideIndex - 1].style.display = "block";
		}
		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			myIndex++;
			if (myIndex > x.length) {
				myIndex = 1
			}
			x[myIndex - 1].style.display = "block";
			setTimeout(carousel, 2000);
		}



		function reveal() {
			var reveals = document.querySelectorAll(".reveal");

			for (var i = 0; i < reveals.length; i++) {
				var windowHeight = window.innerHeight;
				var elementTop = reveals[i].getBoundingClientRect().top;
				var elementVisible = 150;

				if (elementTop < windowHeight - elementVisible) {
					reveals[i].classList.add("active");
				} else {
					reveals[i].classList.remove("active");
				}
			}
		}

		window.addEventListener("scroll", reveal);
	</script>