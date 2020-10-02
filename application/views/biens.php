<!DO<!DOCTYPE HTML>
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
										<h2><a href="#">Administration CRUD biens</a></h2>
										<p>Gérer les propriétés de l'agence</p>
									</div>
                </header>
									<form method="post" action="biens/registerBiens">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
                        <div class="col-3 col-12-xsmall"></div>

  											<div class="col-3 col-12-small"><p>
  												Biens :
  											</p></div>

  											<div class="col-3 col-12-small">
  												<input type="radio" id="demo-priority-normal" name="loc_vent" value="1">
  												<label for="demo-priority-normal">Location</label>
  											</div>

  											<div class="col-3 col-12-small">
  												<input type="radio" id="demo-priority-high" name="loc_vent" value="2">
  												<label for="demo-priority-high">Vente</label>
  											</div>

  											<div class="col-3 col-12-small"></div>

                        <div class="col-6 col-12-xsmall">
  												<input type="date" name="date" id="demo-date"  />
  											</div>

                        <div class="col-6 col-12-xsmall">
                        <input type="texte" name="description" id="demo-description"  placeholder="Description" />
											</div>

											<div class="col-6 col-12-xsmall">
												<input type="texte" name="id_type" id="demo-type" placeholder="Type N°" />
											</div>

											<div class="col-6 col-12-xsmall">
												<input type="texte" name="surface" id="demo-surface"  placeholder="Surface arrondie" />
											</div>

                      <div class="col-3 col-12-xsmall"></div>

                      <div class="col-3 col-12-small"><p>
                        Ancienneté :
                      </p></div>

                      <div class="col-3 col-12-small">
                        <input type="radio" id="demo-priority-ancien" name="ancien" value="1">
                        <label for="demo-priority-ancien">Ancien</label>
                      </div>

                      <div class="col-3 col-12-small">
                        <input type="radio" id="demo-priority-nouveau" name="ancien" value="2">
                        <label for="demo-priority-nouveau">Nouveau</label>
                      </div>

                      <div class="col-3 col-12-small"></div>
                      <div class="col-6 col-12-xsmall">
												<input type="texte" name="pieces" id="demo-piece"  placeholder="Nbr de pièces" />
											</div>

											<div class="col-6 col-12-xsmall">
												<input type="texte" name="parking" id="demo-parking"  placeholder="Parking privatif?" />
											</div>

											<div class="col-6 col-12-xsmall">
												<input type="texte" name="adresse" id="demo-adresse" placeholder="adresse (N°, rue)" />
											</div>

                      <div class="col-6 col-12-xsmall">
												<input type="texte" name="ville" id="demo-ville" placeholder="ville" />
											</div>

                      <div class="col-6 col-12-xsmall">
                        <input type="texte" name="code_postal" id="demo-code" placeholder="Code postal" />
                      </div>

                      <div class="col-6 col-12-xsmall">
												<input type="texte" name="etage" id="demo-etage"  placeholder="Etage ?" />
											</div>

                      <div class="col-6 col-12-xsmall">
												<input type="texte" name="ascenceur" id="demo-asce"  placeholder="Ascenceur? (0 ou 1)" />
											</div>

                      <div class="col-6 col-12-xsmall">
												<input type="texte" name="localisation" id="demo-local"  placeholder="chaine long, lat" />
											</div>

                      <div class="col-6 col-12-xsmall">
												<input type="texte" name="id_proprio" id="demo-prop"  placeholder="id proprio" />
											</div>

                      <div class="col-6 col-12-xsmall">
												<input type="texte" name="id_locataire" id="demo-locat"  placeholder="id locataire" />
											</div>

                      <div class="col-6 col-12-xsmall">
												<input type="texte" name="id_photo" id="demo-photo"  placeholder="Nom photo .ext" />
											</div>

                      <div class="col-6 col-12-xsmall">
												<input type="texte" name="loyer" id="demo-loyer"  placeholder="montant loyer" />
											</div>

                      <div class="col-6 col-12-xsmall">
												<input type="texte" name="charges" id="demo-charges"  placeholder="montant charges" />
											</div>

                      <div class="col-6 col-12-xsmall">
                        <input type="texte" name="prix" id="demo-prix"  placeholder="montant prix" />
                      </div>

                      <div class="col-6 col-12-xsmall">
                        <input type="texte" name="actif" id="demo-actif"  placeholder="actif? 0 ou 1" />
                      </div>

                      <div class="col-6 col-12-xsmall">
                        <input type="texte" name="id_agent" id="demo-agentx"  placeholder="ID agent" />
                      </div>

											<div class="col-12">
												<ul class="actions">
													<li><input type="submit"  class="primary"/></li>
													<li><input type="reset" /></li>
												</ul>
											</div>

										</div>
									</div>

									</form>
								</article>
							</div>

            </div>

          <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/browser.min.js"></script>
            <script src="assets/js/breakpoints.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

        </body>
      </html>
