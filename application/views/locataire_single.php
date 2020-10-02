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
										<h2>Vos informations</h2>
										<p> en tant que locataire </p></br>
                    <p> date d'entrée: <?= strftime("%A %d %B %G", strtotime($response['date_in'] ));?></p></br>
                    <p> date de sortie: <?= strftime("%A %d %B %G", strtotime($response['date_out'] ));?></br>
                    <p> dernier loyer payé: <?= strftime("%A %d %B %G", strtotime($response['loyer_paye'] ));?>
									</div>
                </header>
									<form method="post" action="updateLocat">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
                        <div class="col-3 col-12-xsmall"></div>

  											<div class="col-3 col-12-small"><p>
  												Locataire :
  											</p></div>



                        <div class="col-6 col-12-xsmall">
													<label for="nom"> Votre nom </label>
                          <input type="texte" name="nom" id="nom" placeholder="<?= $response['nom'] ?>" value="<?= $response['nom'] ?>" />
                        </div>
												<label for="nom"> Votre prenom </label>
                        <div class="col-6 col-12-xsmall">
                          <input type="texte" name="prenom" id="prenom"  placeholder="<?= $response['prenom'] ?>" value="<?= $response['prenom'] ?>"/>
                        </div>

												<label for="adresse"> Votre adresse </label>
                        <div class="col-6 col-12-xsmall">
                        <input type="texte" name="adresse" id="adresse"  placeholder="<?= $response['adresse'] ?>"  value="<?= $response['adresse'] ?>" />
											</div>
											<label for="ville"> Votre ville </label>
											<div class="col-6 col-12-xsmall">
												<input type="texte" name="ville" id="ville" placeholder="<?= $response['ville'] ?>" value="<?= $response['ville'] ?>" />
											</div>
											<label for="code_postal"> Votre code postal </label>
											<div class="col-6 col-12-xsmall">
												<input type="texte" name="code_postal" id="code_postal"  placeholder="<?= $response['code_postal'] ?>" value="<?= $response['code_postal'] ?>"/>
											</div>
											<label for="telephone"> Votre telephone </label>
                      <div class="col-6 col-12-xsmall">
												<input type="texte" name="telephone" id="telephone"  placeholder="<?= $response['telephone'] ?>" value="<?= $response['telephone'] ?>" />
											</div>
											<label for="mobile"> Votre mobile </label>
											<div class="col-6 col-12-xsmall">
												<input type="texte" name="mobile" id="mobile"  placeholder="<?= $response['mobile'] ?>" value="<?= $response['mobile'] ?>"/>
											</div>
											<label for="email"> Votre email:  <?= $response['email'] ?></label>

											<label for="login"> Votre login </label>
                      <div class="col-6 col-12-xsmall">
                        <input type="texte" name="login" id="login" placeholder="<?= $response['login'] ?>" value="<?= $response['login'] ?>"/>
                      </div>

											<input type="hidden" name="password" value="<?= $response['password'] ?>" />
											<input type="hidden" name="civilite" value="<?= $response['civilite'] ?>" />
											<input type="hidden" name="email" value="<?= $response['email'] ?>" />
                      <input type="hidden" name="date_in" value="<?= $response['date_in'] ?>" />
                      <input type="hidden" name="date_out" value="<?= $response['date_out'] ?>" />
                      <input type="hidden" name="loyer_paye" value="<?= $response['loyer_paye'] ?>" />


											<div class="col-6 col-12-xsmall">
													<span>Modifiez vos informations</span></br>
												<ul class="actions">

													<li><input type="submit"  class="primary"/> </li>

												</ul>
											</div>

										</div>
									</div>

								</form>

							<h1><h1>

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
