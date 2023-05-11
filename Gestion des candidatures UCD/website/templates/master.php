<?php
require('header.php')

?>

<style>
	.row>p {
		font-size: 2em;
		font-family: 'Gill Sans', Calibri, sans-serif;
		text-align: center;
		color: rgb(15, 71, 138);
		margin: 3rem 15rem !important;
		text-align: justify !important;
	}

	.row span {
		color: rgb(20, 109, 217);
		font-style: italic;

	}

	.master li {
		font-size: 2rem;
		font-family: 'Gill Sans', Calibri, sans-serif;
		text-align: center;
		color: rgb(15, 71, 138);
		margin: 14px 45px !important;
	}

	@media screen and (max-width: 767px) {
		.row>p {
			font-size: medium;
			text-align: center;
			color: rgb(15, 71, 138);
			margin: 5px 13px !important;
		}

		.master li {
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
	<h2 style="padding-top: 30px !important;"><span>LE CYCLE MASTER</span></h2>
	<p style="margin: auto	 !important;"></p>
</div>

<section>
	<div class="container-fluid">
		<div class="row">
			<p>Le Master recherche et le Master spécialisé sont organisés en quatre semestres (2 ans) après la licence.

				Ils comprennent chacun :

				Deux semestres d’études fondamentales, spécifiques au caractère du Master.
				Deux semestres d’approfondissement pour le Master et de professionnalisation pour le Master spécialisé.
				Un semestre est composé généralement de 4 modules.

				Le volume horaire minimum d’un module est de 75h.

				La filière Master comporte 16 modules avec un volume horaire global de 1.440 h minimum.</p>
			<h2>Deux types de Master sont offerts</h2>
			<p>- Le Master Spécialisé à finalité principalement professionnelle.
				Il a pour objectifs de :</p>
			<ul class="master">
				<li>+ Acquérir une spécialisation pointue et une haute qualification pour le marché de l’emploi.</li>
				<li>+ Doter les étudiants de compétences et de savoir-faire dans le domaine des métiers et des arts</li>
				<li>+ Répondre aux besoins spécifiques du secteur socio-économique.</li>
			</ul>
			<p>
				- Le Master à finalité recherche, à finalité recherche, préparant principalement aux études doctorales.
				Il a pour objectifs de :
			<ul class="master">
				<li>+ Offrir une formation approfondie de haut niveau dans une spécialité donnée</li>
				<li>+ Préparer et initier les étudiants aux activités de recherches</li>
				<li>+ Renforcer les outils et méthodes de travail</li>
			</ul>
			</p>
		</div>
		<div class="row">

			<img src="../static/img/filieremaster.png" alt="" width="90%">
			<img src="../static/img/filieremaster2.png" alt="" width="90%">
			<img src="../static/img/.png" alt="" width="90%">

		</div>
	</div>


</section>



<?php
require('footer.php')

?>