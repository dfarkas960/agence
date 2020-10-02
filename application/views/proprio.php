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
										<h2><a href="#">Administration CRUD propriétaires</a></h2>
										<p>Gérer les propriétaires </p>
									</div>
                </header>
									<form method="post" action="registerProprio">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
                        <div class="col-3 col-12-xsmall"></div>

  											<div class="col-3 col-12-small"><p>
  												Propriétaire :
  											</p></div>



                        <div class="col-6 col-12-xsmall">
                          <input type="texte" name="nom" id="nom" placeholder="Nom" />
                        </div>

                        <div class="col-6 col-12-xsmall">
                          <input type="texte" name="prenom" id="prenom"  placeholder="Prénom" />
                        </div>

                        <div class="col-3 col-12-small">
                          <input type="radio" id="demo-civilite" name="civilite" value="Mr">
                          <label for="demo-civilite">Mr</label>
                        </div>

                        <div class="col-3 col-12-small">
                          <input type="radio" id="demo-civilitee" name="civilite" value="Mme">
                          <label for="demo-civilitee">Mme</label>
                        </div>
                        <div class="col-3 col-12-small"></div>


                        <div class="col-6 col-12-xsmall">
                        <input type="texte" name="adresse" id="adresse"  placeholder="Adresse" />
											</div>

											<div class="col-6 col-12-xsmall">
												<input type="texte" name="ville" id="ville" placeholder="Ville" />
											</div>

											<div class="col-6 col-12-xsmall">
												<input type="texte" name="code_postal" id="code_postal"  placeholder="code_postal" />
											</div>

                      <div class="col-6 col-12-xsmall">
												<input type="texte" name="telephone" id="telephone"  placeholder="telephone" />
											</div>

											<div class="col-6 col-12-xsmall">
												<input type="texte" name="mobile" id="mobile"  placeholder="mobile" />
											</div>

											<div class="col-6 col-12-xsmall">
												<input type="texte" name="email" id="email" placeholder="email" />
											</div>

                      <div class="col-6 col-12-xsmall">
												<input type="texte" name="password" id="password" placeholder="password" />
											</div>

                      <div class="col-6 col-12-xsmall">
                        <input type="texte" name="login" id="login" placeholder="login" />
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
							<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
							<script src="<?=base_url('assets/js/browser.min.js')?>"></script>
							<script src="<?=base_url('assets/js/breakpoints.min.js')?>"></script>
							<script src="<?=base_url('assets/js/util.js')?>"></script>
							<script src="<?=base_url('assets/js/main.js')?>"></script>

        </body>
      </html>
