<!DOCTYPE html>
<html lang="fr-fr">
<head>
	<meta charset="utf-8"/> <!-- pas de probleme avec les accens-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> <!-- pour les icones-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet"> <!-- pour la police -->

	<!--<link href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">--> <!-- Bootstrap CSS -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- metatags -->

	<!--version responsive-->
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="Violette Danjou">
	<meta name="description" content=""> <!-- ajouter un contenu -->

	<link rel="stylesheet" type="text/css" href="app/public/style.css"> <!-- pour lier au css-->

	<!-- breakpoints pour version responsive-->

	<title>Portfolio de Violette Danjou</title>
</head>


<body>
<!-- Menu -->
<div class="container">
	<div class="row">
		<div class="col-12 header">
			<header>
				<nav class="navbar navbar-expand">
				   <a class="navbar-brand" href="#home"><i class="fas fa-home"></i></a>

				   <div>
					   	<ul class="navbar-nav">
					      <li class="nav-item active">
					         <a class="nav-link" href="#home">ACCUEIL</a>
					      </li>
					      <li class="nav-item">
					         <a class="nav-link" href="#about">PROFIL</a>
					      </li>
					      <li class="nav-item">
					         <a class="nav-link" href="#portfolio">PORTFOLIO</a>
					      </li>
					      <li class="nav-item">
					         <a class="nav-link" href="#skills">COMPÉTENCES</a>
					      </li>
					      <li class="nav-item">
					         <a class="nav-link" href="#career">PARCOURS</a>
					      </li>
					      <li class="nav-item">
					         <a class="nav-link" href="#contact">CONTACT</a>
					      </li>
					   </ul>
				   </div>

				</nav>
			</header>
		</div>
	</div>
</div>



<!-- Banniere -->
	<section id="home">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 banner">
					<div id="transparent-viel"></div>

					<div id="banner">
						<div id="banner-description">
							<h1>Violette Danjou</h1>
							<p id="p-banner-description">Étudiante Développeuse web</p>	
							<a id="button-CV" href="app/public/img/CV_violette_danjou.pdf">Télécharger mon CV <i class="fas fa-download"></i></a>		
						</div>
					</div>
				</div>	
			</div>
		</div>	

	</section>

<!-- Profil -->
	<section id="about">
		<h2>A PROPOS</h2>

		<div class="container div-img-infos-description">
			<div class="row">
				<div class="col-12 col-lg-4 img-infos-profile">

					<div class="img-profile">
						<img src="app/public/img/profil.jpeg" alt="photo profil de violette danjou">
					</div>

					<div class="infos-profile">
						<ul>
							<li><strong>Nom : </strong>Violette Danjou</li>
							<li><strong>Date de naissance : </strong>08/04/1999 (22 ans)</li>
							<li><strong>Localisation : </strong>Lille, France</li>
							<li><strong>Email : </strong>violette.danjou@hotmail.fr</li>
							<li><strong>Téléphone : </strong>06 xx xx xx xx</li>
						</ul>
					</div>

				</div>

				<div class="col-12 col-lg-8 div-profile-description"> 
					
					<p id="p-profile-description">
						<strong id="strong-profile">Mon profil</strong><br/>
						Je suis une personne <span class="span-profile">assidue</span> et <span class="span-profile">autonome</span> dans mon travail. <br/>Toujours à la recherche de nouvelles compétences j'aime le travail en équipe, pour échanger avis et expériences, cela est très enrichissant et permet un apprentissage plus rapide. <br/> 
						Étant également <span class="span-profile">dynamique</span> et <span class="span-profile">consciencieuse</span>, je m'intègre facilement dans de nouvelles équipes pour développer davantage mes connaissances. <br/>
						<br/>
				
						<strong id="strong-goals">Mes objectifs</strong><br/>
						Ma réussite professionnelle étant très importante pour mon <span class="span-profile">enrichissement personnel</span>, je suis <span class="span-profile">motivée</span> et recherche une entreprise qui saura m'accueillir et me faire <span class="span-profile">évoluer</span> avec elle et ses membres expérimentés pour <span class="span-profile">développer</span> davatange de compétences. <br/>
						Je suis étudiante chez OpenClassrooms et j'effectue la formation de développeur web junior. Cette formation m'a appris à devenir véritablement autonome et le <span class="span-profile">goût d'apprendre toujours plus</span>.
					</p>

				</div>
			</div>
		</div>

		<div class="container-fluid">	
			<div class="row">			
				<div class="col-12 img-background-section1">
					<h4>QUALITÉS</h4>
					<div id="div-p-qualities">

						<div class="col-12 col-sm-8 col-md-4 col-lg-3 p-qualities">
							<p><i class="fas fa-check-square"></i> Consciencieuse <br/></p>
						</div>
						<div class="col-12 col-sm-8 col-md-4 col-lg-3 p-qualities">
							<p><i class="fas fa-check-square"></i> Esprit d'équipe <br/></p>
						</div>
						<div class="col-12 col-sm-8 col-md-4 col-lg-3 p-qualities">
							<p><i class="fas fa-check-square"></i> Sérieuse <br/></p>
						</div>
						<div class="col-12 col-sm-8 col-md-4 col-lg-3 p-qualities">
							<p><i class="fas fa-check-square"></i> Autonome <br/></p>
						</div>
						<div class="col-12 col-sm-8 col-md-4 col-lg-3 p-qualities">
							<p><i class="fas fa-check-square"></i> Ponctuelle <br/></p>
						</div>
						<div class="col-12 col-sm-8 col-md-4 col-lg-3 p-qualities">
							<p><i class="fas fa-check-square"></i> Patiente <br/></p>
						</div>

					</div>
				</div>
			</div>
		</div>		
	</section>
	
<!-- Portfolio -->
	<section id="portfolio">
		<h2>MES PROJETS</h2>

			<div class="container">
				<div class="row portfolio">
					<div class="col-12 container-projects">

						<div>
							<h3>PROJETS HTML/CSS</h3>
							<div class="wrap">
								<div class="col-12 col-md-6 col-lg-4">
									<a href="http://projet1.violette-danjou.com/">
										<img class="img-portfolio" src="app/public/img/img-projet1.png" alt="photo du projet 1">
									</a>
								</div>

								<div class="col-12 col-md-6 col-lg-4">
									<a href="">
										<img class="img-portfolio" src="app/public/img/img-site-perso.png" alt="photo du site personnel">
									</a>
								</div>

							</div>
						</div>

						<div>
							<h3>PROJETS WORDPRESS</h3>
							<div class="wrap">
								<div class="col-12 col-md-6 col-lg-4">
									<a href="http://ireki.violette-danjou.com/">
										<img class="img-portfolio" src="app/public/img/img-projet2.png" alt="photo du projet 2">
									</a>
								</div>
							</div>
						</div>

						<div>
							<h3>PROJETS JAVASCRIPT</h3>
							<div class="wrap">
								<div class="col-12 col-md-6 col-lg-4">
									<a href="http://projet3.violette-danjou.com/">
										<img class="img-portfolio" src="app/public/img/img-projet3.png" alt="photo du projet 3">
									</a>
								</div>
							</div>
						</div>

						<div>
							<h3>PROJETS PHP/SQL</h3>
							<div class="wrap">
								<div class="col-12 col-md-6 col-lg-4">
									<a href="http://projet4.violette-danjou.com/">
										<img class="img-portfolio" src="app/public/img/img-projet4.png" alt="photo du projet 4">
									</a>
								</div>

								<div class="col-12 col-md-6 col-lg-4">
									<a href="http://projet5.violette-danjou.com/">
										<img class="img-portfolio" src="app/public/img/img-projet5.png" alt="photo du projet 5">
									</a>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
	</section>

<!-- Compétences -->
	<section id="skills">
		<h2>MES COMPÉTENCES</h2>

			<div class="container">
				<div class="row skills">
					<div class="col-12 col-md-6">
						<div>
							<h5>HTML/CSS</h5>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
									<span>90%</span>
								</div>
							</div>
						</div>
						<div>
							<h5>WORDPRESS</h5>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
									<span>80%</span>
								</div>
							</div>
						</div>
						<div>
							<h5>JAVASCRIPT</h5>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									<span>60%</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6">
						<div>
							<h5>BOOTSTRAP</h5>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
									<span>40%</span>
								</div>
							</div>
						</div>
						<div>
							<h5>PHP/SQL</h5>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
									<span>75%</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>


<!-- Expériences -->
	<section id="career">
		<h2>MES EXPÉRIENCES</h2>
			<div class="container career1">
				<div class="row">

					<div class="col-12 career">
						<h6>Développeur web junior - OpenClassrooms (2019 - 2021)</h6>
							<ol id="ol-career">
								<li>Création de site en HMTL5 et CSS3 <em>(Octobre 2019 - Janvier 2020)</em></li>
								<li>Utilisation de WordPress + SEO <em>(Février 2020 - Mars 2020)</em></li>
								<li>Création d’une carte interactive <em>(Avril 2020 - Septembre 2020)</em></li>
								<li>Création d’un blog <em>(Octobre 2020 - Janvier 2021)</em></li>
								<li>Création d’un office de tourisme en Nouvelle Calédonie <em>(Février 2021 - Avril 2021)</em></li>
							</ol>							
					</div>

					<div class="col-12 career">
						<h6>Aide-magasinier polyvalent - Décathlon Logistique (2017 - 2020) (job étudiant)</h6>
							<ol id="ol-career">
								<li>Gestion d’une équipe de 5 à 15 personnes</li>
								<li>Gestion de stock</li>
								<li>Utilisation de logiciels internes (AS400, )</li>
								<li>Polyvalente dans l’ensemble des différents secteurs de l’entrepôt</li>
								<li>Préparation de commande, chargement/déchargement de camions, emballage colis, réapprovisionnement de stock...</li>
							</ol>							
					</div>

				</div>
			</div>

		<h2>FORMATIONS</h2>
			<div class="container career1">
				<div class="row">

					<div class="col-12 career">
						<h6>OpenClassrooms (2019 - 2021)</h6>
						<p class="p-career">
							Développeur web junior - Bac +2 - niveau 5
						</p>
					</div>

					<div class="col-12 career">
						<h6>IUT Valenciennes (2018 - 2019)</h6>
						<p class="p-career">
							DUT Techniques de Commercialisation
						</p>
					</div>

					<div class="col-12 career">
						<h6>IUT Roubaix (2017 - 2017)</h6>
						<p class="p-career">
							DUT Carrières Juridiques
						</p>
					</div>

					<div class="col-12 career">
						<h6>Lycée Jean Perrin (2016 - 2017)</h6>
						<p class="p-career">
							BAC Économique - Spécialité Sciences Politiques
						</p>
					</div>
				</div>
			</div>
		


	</section>

<!-- Contact -->
	<section id="contact">
		<h2>CONTACT</h2>
			<div class="container">
				<div class="row contact">
					<div class="col-12 col-md-6">
						<h6>Coordonnées</h6>
						<form action="index.php?action=validContact" method="post">
							<label for="name">Prénom<strong class="star-form"> *</strong></label><input type="text" name="name" required minlength="5">
							<label for="surname">Nom<strong class="star-form"> *</strong></label><input type="text" name="surname"required minlength="5"><br/>
							<label for="email">Email<strong class="star-form"> *</strong></label><input type="email" name="email" placeholder="xxx@yy.fr" required minlength="7"><br/>
							<label for="subject">Sujet</label><input type="text" name="subject" minlength="10"><br/>
							<label for="message">Message<strong class="star-form"> *</strong></label><textarea name="message" id="message" placeholder="Ecrivez votre message ici ..." required minlength="10"></textarea><br/>
							<input type="submit" name="send" value="Envoyer" id="send">
						</form>
					</div>
					<div class="col-12 col-md-6">
						<h6>Ville</h6>
						<p>Lille, France</p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80985.23059984011!2d2.977120874675211!3d50.631046507693576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d579b3256e11%3A0x40af13e81646360!2sLille!5e0!3m2!1sfr!2sfr!4v1610821376746!5m2!1sfr!2sfr" width="300" height="auto" frameborder="0" style="border:0;"></iframe><br/>

						<h6>Téléphone</h6>
						<p>06 XX XX XX XX</p>
					</div>
				</div>
				
			</div>
	</section>


<!-- Footer -->	
<footer>
	<div>
		<a href="#home">
			<i class="far fa-arrow-alt-circle-up"></i>
		</a>
	</div>

	<div id="logos">
		<a href="https://github.com/violettedanjou">
			<i class="fab fa-github"></i>
		</a>
		<a href="https://www.linkedin.com/in/violette-danjou-56b461204/">
			<i class="fab fa-linkedin"></i>
		</a>
		<a href="https://www.instagram.com/violettedanj/">
			<i class="fab fa-instagram"></i>
		</a>
			
	</div>

	<div>
		<p class="p-footer"> Copyright © Violette Danjou - 2021. Tous droits réservés</p>
	</div>

	<div>
		<a href="#adresse-vers-mon-site">
			<p class="p-footer">Politiques de confidentialité Termes et conditions</p>
		</a>
	</div>
</footer>



<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>