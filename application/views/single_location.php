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
				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2>Caractéristiques</a></h2>

									</div>
									<div class="meta">
										<time class="published" datetime="DD-MM-YYYY"><?= $response['date'] ?></time>
										<a href="#" class="author"><span class="name">Jane Doe</span><img src="<?=base_url('assets/images/avatarb1.png')?>" alt="" /></a>
									</div>
								</header>
								<div class="box alt">
                  <div class="table-wrapper">
                    <table class="floatLeft third alt">
                      <thead>
                          <tr>
                            <th></th>
                            <th>Description</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>Type</td>
                          <td><?= $response['type'] ?></td>
                        </tr>

                        <tr>
                          <td>Adresse:</td>
                          <td><?= $response['adresse'] ?></td>
                        </tr>

                        <tr>
                          <td>Surface:</td>
                          <td><?= $response['surface'] ?></td>
                        </tr>

                        <tr>
                          <td>Nbr de pièces</td>
                          <td><?= $response['pieces'] ?></td>
                        </tr>
                        <tr>
                          <td>Nbr de parking</td>
                          <td><?= $response['parking'] ?></td>
                        </tr>

                        <tr>
                          <td>Ancien</td>
                          <td><?php if ($response['ancien']=0){echo "Nouveau";} else {echo "Oui";} ?></td>
                        </tr>
                        <tr>
                          <td>Etage</td>
                          <td><?= $response['etage'] ?></td>
                        </tr>
                        <tr>
                          <td>Ascenceur</td>
                          <td><?= $response['ascenceur'] ?></td>
                        </tr>
                        <tr>
                          <td>Charges</td>
                          <td><?= $response['charges'] ?></td>
                        </tr>


                      </tbody>
                    </table>

                  </div>

									</div>
								</br>
								<footer>
									<p>Revenir à Locations</p>
									<ul class="actions">
										<li></li>
										<li><a href="<?=base_url('home/all_location')?>" class="button large">Revenir</a></li>
									</ul>

								</footer>
							</article>


					</div>




				<!-- Sidebar -->
					<section id="sidebar">





						<!-- Mini Posts -->
							<section>
								<div class="mini-posts">

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
											 <h3><?= $response['description'] ?></h3>

                     <h2 style="color:#F5C823"><?= $response['ville'] ?></h2>
                     <h3>Montant du loyer:</h3>
                      <?= '<h2 style="color:#F5C823">'.$response['loyer']."</h2>" ?>
                      <h3>Euros + Charges</h3>


											</header>
                      <img src="<?=base_url('assets/images/').$response['id_photo'] ?>" class="responsive">

										</article>


									<article class="mini-post">
										<ul class="icons">
											<li></li>
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
											<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
										</ul>
										<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
									</section>

								</div>
							</section>

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
