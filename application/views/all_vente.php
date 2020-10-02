<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Luxury Real Estate</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?=base_url('assets/css/main.css')?>" />
		<link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css')?>" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="<?=base_url('home/index')?>">Luxury Estate</a></h1>
						<nav class="links">
							<ul>
								<li><a href="<?=base_url('home/all_location')?>">locations</a></li>
								<li><a href="<?=base_url('home/all_vente')?>">ventes</a></li>
								<li><a href="<?=base_url('home/contacter')?>">proposer un bien</a></li>
								<li><a href="<?=base_url('connexion')?>">connexion</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						<!-- Links -->
							<section>

								<ul class="links">
									<li>
										<a href="<?=base_url('home/all_location')?>">
											<h3>Locations</h3>
											<p>Parcourez notre catalogue</p>
										</a>
									</li>
									<li>
										<a href="<?=base_url('home/all_vente')?>">
											<h3>Ventes</h3>
											<p>Découvrez les biens disponibles</p>
										</a>
									</li>
									<li>
										<a href="<?=base_url('home/contacter')?>">
											<h3>Proposer un bien</h3>
											<p>Nous contacter pour un rendez-vous</p>
										</a>
									</li>
									<li>
										<a href="<?=base_url('connexion')?>">
											<h3>Connexion</h3>
											<p>Vos informations et biens</p>
										</a>
									</li>
								</ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions stacked">
									<li><a href="<?=base_url('connexion')?>" class="button large fit">Connexion</a></li>
								</ul>
							</section>

					</section>

					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">Nos derniers biens en vente</a></h2>
										<p>disponibles dés à présent</p>
									</div>
								</header>

								<div class="box alt">
									<div class="row gtr-uniform">

								<?php
								foreach($data as $row)
								{ ?>

									<section>

									<div class="col-4 col-12-small">
									<div class="mini-posts">
									<article class="mini-post">
									<header>
									<h4><?= $row->type ?></a></h4>
									<h3><?= $row->ville ?></h3>
									<time class="published" datetime="2015-10-20">Publié le :<?=$row->date ?></time>
									<h4>la surface totale est de: <?= $row->surface ?> m2</h4>
									<form name="myform" id="myform" action="<?=base_url('home/single_vente/') ?>" method="post">
									<input type="hidden" name="surface" id="surface" value="<?= $row->surface ?>" />
									<input type="hidden" name="date" id="date" value="<?= $row->date ?>" />
									<input type="hidden" name="id_bien" id="id_bien" value="<?= $row->id_bien ?>" />
									<input type="hidden" name="type" id="type" value="<?= $row->type ?>" />
									<input type="hidden" name="description" id="description" value="<?= $row->description ?>" />
									<input type="hidden" name="ancien" id="ancien" value="<?= $row->ancien ?>" />
									<input type="hidden" name="pieces" id="pieces" value="<?= $row->pieces ?>" />
									<input type="hidden" name="parking" id="parking" value="<?= $row->parking ?>" />
									<input type="hidden" name="adresse" id="adresse" value="<?= $row->adresse ?>" />
									<input type="hidden" name="ville" id="ville" value="<?= $row->ville ?>" />
									<input type="hidden" name="code_postal" id="code_postal" value="<?= $row->code_postal ?>" />
									<input type="hidden" name="etage" id="etage" value="<?= $row->etage ?>" />
									<input type="hidden" name="ascenceur" id="ascenceur" value="<?= $row->ascenceur ?>" />
									<input type="hidden" name="id_photo" id="id_photo" value="<?= $row->id_photo ?>" />
									<input type="hidden" name="prix" id="prix" value="<?= $row->prix ?>" />

									<input type="hidden" name="id_agent" id="id_agent" value="<?= $row->id_agent ?>" />



									<input type="submit" name="submit" value="Voir détails" />
									</form>
									</header>
										<img src="<?=base_url('assets/images/').$row->id_photo ?>" class="responsive">




									</article>
									</div>
									</div>
									</section>
							<?php  }
								 ?>
							 </div>
						 </div>


						 </section>

					 </div>

					 <!-- Scripts -->
	 					<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
	 					<script src="<?=base_url('assets/js/browser.min.js')?>"></script>
	 					<script src="<?=base_url('assets/js/breakpoints.min.js')?>"></script>
	 					<script src="<?=base_url('assets/js/util.js')?>"></script>
	 					<script src="<?=base_url('assets/js/main.js')?>"></script>
       </body>
     </html>
