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

                </div>
              </header>

              <div class="box alt">

                  <table >
                    <thead>
                        <tr>
                          <th>Vue résumée Propriétaires</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Ville</th>
                        <th>Code Postal</th>
                        <th>Email</th>
												<th>Voir biens</th>
                        </tr>


                          <?php
                          foreach($proprios as $row){ ?>
                            <tr>
                            <td><?= $row->id_proprio ?></td>
                            <td><?= $row->nom ?></td>
                            <td><?= $row->prenom ?></td>
                            <td><?= $row->ville ?></td>
                            <td><?= $row->code_postal ?></td>
                            <td><?= $row->email ?></td>
														<td><a href="<?=base_url('cruds/bien_voir/'.$row->id_proprio)?>" class="button fit">Voir</a></td>

                            </tr>

                            <?php } ?>

                        </tbody>
                    </table>
                  </div>
									<section>
										<form action='#'>
											<div class="col-4 col-6-small">
												<ul class="actions">
													<input type="text" Name="id_proprio" placeholder="ID propriétaire"/>
													<li><input type="submit" value="Modifier" /></li>
													<li><input type="submit" value="Effacer" /></li>
												</ul>
											</div>

									</form>
								</section>

                  <div class="box alt" >

                      <table >
                        <thead>
                            <tr>
                              <th>Vue résumée Locataires</th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Ville</th>
                            <th>Code Postal</th>
                            <th>Email</th>
                            <th>loyer payé</th>
                            <th>date entrée</th>

                            </tr>


                              <?php
                              foreach($locataire as $row){ ?>
                                <tr>
                                <td><?= $row->id_locataire ?></td>
                                <td><?= $row->nom ?></td>
                                <td><?= $row->prenom ?></td>
                                <td><?= $row->ville ?></td>
                                <td><?= $row->code_postal ?></td>
                                <td><?= $row->email ?></td>
                                <td><?= $row->loyer_paye ?></td>
                                <td><?= $row->date_in ?></td>

                                </tr>

                                <?php } ?>

                            </tbody>
                        </table>
                      </div>
											<section>
												<form action='#'>
													<div class="col-4 col-6-small">
														<ul class="actions">
															<input type="text" Name="id_locataire" placeholder="ID Locataire"/>
															<li><input type="submit" value="Modifier" /></li>
															<li><input type="submit" value="Effacer" /></li>
														</ul>
													</div>

											</form>
										</section>

                      <div class="box alt" >

                          <table>
                            <thead>
                                <tr>
                                  <th>Vue résumée Biens</th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr>
                                <th>ID bien</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Surface</th>
                                <th>Pieces</th>
                                <th>Adresse</th>
                                <th>Ville</th>
                                <th>Code postal</th>
                                <th>Id Proprio</th>
                                <th>Id Locataire</th>
                                <th>Loyer</th>
                                <th>Prix</th>

                                </tr>


                                  <?php
                                  foreach($biens as $row){ ?>
                                    <tr>
                                    <td><?= $row->id_bien ?></td>
                                    <td><?= $row->date ?></td>
                                    <td><?= $row->description ?></td>
                                    <td><?= $row->surface ?></td>
                                    <td><?= $row->pieces ?></td>
                                    <td><?= $row->adresse ?></td>
                                    <td><?= $row->ville ?></td>
                                    <td><?= $row->code_postal ?></td>
                                    <td><?= $row->id_proprio ?></td>
                                    <td><?= $row->id_locataire ?></td>
                                    <td><?= $row->loyer ?></td>
                                    <td><?= $row->prix ?></td>



                                    </tr>

                                    <?php } ?>

                                </tbody>
                            </table>
                          </div>
													<section>
														<form action='#'>
															<div class="col-4 col-6-small">
																<ul class="actions">
																	<input type="text" Name="id_bien" placeholder="ID BIEN"/>
																	<li><input type="submit" value="Modifier" /></li>
																	<li><input type="submit" value="Effacer" /></li>
																</ul>
															</div>

													</form>
												</section>


				<!-- Footer -->
					<section id="footer">
						<span class="logo"><img src="<?=base_url('assets/images/logo.png')?>" alt="" /></span>

						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
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
