<?php
require('header.php')

?>

<style>
	.row>p {
		font-size: 2rem;
		font-family: 'Gill Sans', Calibri, sans-serif;
		text-align: center;
		color: rgb(15, 71, 138);
		margin: 14px 45px !important;
		text-align: justify !important;
	}

	.row span {
		color: rgb(20, 109, 217);
		font-style: italic;

	}

	@media screen and (max-width: 767px) {
		.row>p {
			font-size: medium;
			text-align: center;
			color: rgb(15, 71, 138);
			margin: 5px 13px !important;
		}
	}
</style>

<li><a href="index.php">ACCUEIL</a></li>
<li><a href="university.php">UNIVERSITÉ</a></li>
<li><a class="active_1" href="formation.php">FORMATIONS</a></li>
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
				<li><a href="">Services </a></li>
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



<div class="trending">
	<h2 style="padding-top: 30px !important;"><span>Formations</span></h2>
	<p style="margin: auto	 !important;"></p>
</div>

<section>
	<div class="container-fluid">
		<div class="row">
			<p>Les formations à l’UCD sont regroupées autour de trois domaines :<br>
				<span>sciences et technologies
					lettres, sciences sociales et juridiques,
					sciences économiques et de gestion.</span> <br>
				Pour élargir son offre de formation, l’Université a réalisé plusieurs actions. Les principales ont porté sur la professionnalisation de l’offre, la création de parcours, de passerelles, l’appui à l’enseignement des langues et de l’informatique, l’enseignement des modules méthodologie de travail et entrepreneuriat, soutien aux formations en bi-diplomation, élargissement de l’offre de la formation continue …
			</p>
			<div class="col-sm-12">

			</div>
		</div>
	</div>
	<div class="row">
		<div class="column">
			<div class="card">
				<a type="button" href="licence.php">
					<p>
						Licence
					</p>
				</a>
			</div>
		</div>
		<div class="column">
			<div class="card">
				<a type="button" href="master.php">
					<p>
						Master
					</p>
				</a>
			</div>
		</div>
		<div class="column">
			<div class="card">
				<a type="button" href="doctorat.php">
					<p>
						Doctorat
					</p>
				</a>
			</div>
		</div>
	</div>


</section>



<?php
require('footer.php')

?>