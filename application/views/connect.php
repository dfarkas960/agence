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
                  <h2><a href="#">Connectez-vous</a></h2>
                  <p>à la rubrique concernée</p>
									<span>Utiliser email: proprietaire@test.fr , password: test pour la démo propriétaire</span></br>
									<span>Et email: locataire@test.fr , password: test pour la démo locataire</span></br>
									<span>Enfin email: adm@test.fr , password: test pour la démo administration (en cours de construction)</span>

                </div>
              </header>

              <div class="box alt" style="text-align:center">
                <div class="row gtr-uniform">


                <section>

                <div class="col-4 col-12-small">

                <div class="mini-posts">
                    <h4>Propriétaire</h4>
                <article class="mini-post">





                  <?php
                  echo validation_errors();

                  if(isset($errorMsg))
                  {
                  echo '<div class="error-msg">';
                  echo $errorMsg;
                  echo '</div>';
                  unset($errorMsg);
                  }
                  ?>
                          <form action="proprios/loginProprio" method="post">

                          </br>
                            <div class="col-4 col-12-xsmall">
                            <label  for="email">Email</label>
                            <input type="email" name="email" id=proprio-email value="<?php echo set_value('email');?>" placeholder="propriétaire">
                            </div>
                          </br>


                            <div class="col-4 col-12-xsmall">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="proprio-password" value="<?php echo set_value('password');?>" placeholder="propriétaire" >
                            </div>


                            <div class="col-4 col-12-xsmall">
                              <ul class="actions">
                                <li><input type="submit"  class="primary"/></li>

                              </ul>
                            </div>

                          </form>
                        </article>
                      </div>
                    </div>

                        </section>




                        <section>

                        <div class="col-4 col-12-small">

                        <div class="mini-posts">
                            <h4>Locataire</h4>
                        <article class="mini-post">





                          <?php
                          echo validation_errors();

                          if(isset($errorMsg))
                          {
                          echo '<div class="error-msg">';
                          echo $errorMsg;
                          echo '</div>';
                          unset($errorMsg);
                          }
                          ?>
                                  <form action="locats/loginLocat" method="post">

                                  </br>
                                    <div class="col-4 col-12-xsmall">
                                    <label  for="email">Email</label>
                                    <input type="email" name="email" id=locat-email value="<?php echo set_value('email');?>" placeholder="locataire">
                                    </div>
                                  </br>


                                    <div class="col-4 col-12-xsmall">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="locat-password" value="<?php echo set_value('password');?>" placeholder="locataire" >
                                    </div>


                                    <div class="col-4 col-12-xsmall">
                                      <ul class="actions">
                                        <li><input type="submit"  class="primary"/></li>

                                      </ul>
                                    </div>

                                  </form>
                                </article>
                              </div>
                            </div>

                                </section>

                                <section>

                                <div class="col-4 col-12-small">

                                <div class="mini-posts">
                                    <h4>Administration</h4>
                                <article class="mini-post">




                                  <?php
                                  echo validation_errors();

                                  if(isset($errorMsg))
                                  {
                                  echo '<div class="error-msg">';
                                  echo $errorMsg;
                                  echo '</div>';
                                  unset($errorMsg);
                                  }
                                  ?>
                                          <form action="agents/loginAdm" method="post">

                                          </br>
                                            <div class="col-4 col-12-xsmall">
                                            <label  for="email">Email</label>
                                            <input type="email" name="email" id=adm-email value="<?php echo set_value('email');?>" placeholder="Adm">
                                            </div>
                                          </br>


                                            <div class="col-4 col-12-xsmall">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="adm-password" value="<?php echo set_value('password');?>" placeholder="Adm" >
                                            </div>


                                            <div class="col-4 col-12-xsmall">
                                              <ul class="actions">
                                                <li><input type="submit"  name="adm" class="primary"/></li>

                                              </ul>
                                            </div>

                                          </form>
                                        </article>
                                      </div>
                                    </div>

                                        </section>

					</div>
        </div>

    </article>
    </div>

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
