<!DOCTYPE html>
<html lang="fr-fr">
<head>
	<meta charset="utf-8"/> <!-- pas de probleme avec les accens-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> <!-- pour les icones-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet"> <!-- pour la police -->

	<!--<link href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">--> <!-- Bootstrap CSS -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width"> <!-- Meta tags -->
	<meta property="og:site_name" content="Portfolio">
	<meta property="og:image" content="https://cdn.pixabay.com/photo/2020/04/18/15/48/telework-5059653_1280.png">
	<meta name="author" content="Violette Danjou">
	<meta name="description" content=""> <!-- ajouter un contenu -->

	<link rel="stylesheet" type="text/css" href="app/public/style.css"> <!-- pour lier au css-->

	<link rel="stylesheet" type="text/css" media="all and (max-width: 768px)" href="app/public/responsive.css"> <!-- breakpoints pour responsive-->

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
					<div id="transparent-viel">
						<img id="img-banner" src="app/public/img/img-banner.jpg" alt="Bannière">
					</div>

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
							<li><strong>Age : </strong>22 ans</li>
							<li><strong>Localisation : </strong>Lille, France</li>
							<li><strong>Email : </strong>violette.danjou@hotmail.fr</li>
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
						Fraichement diplomée avec OpenClassrooms en tant que développeur web junior, j'ai appris grâce à cette formation à devenir véritablement autonome et le <span class="span-profile">goût d'apprendre toujours plus</span>.
					</p>

				</div>
			</div>
		</div>

		<div class="container-fluid">	
			<div class="row">			
				<div class="col-12 img-background-section1">

					<h4>QUALITÉS</h4>
					<div id="div-p-qualities">
						<div id="viel-qualities">
							<img id="img-qualities" src="app/public/img/img-background-section1.jpg" alt="Ordinateur sur une table en bois">
						</div>

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
						<span id="span-career">Projets s’adressant à des clients (https://github.com/violettedanjou) :</span>

							<ol id="ol-career">
								<li>Intégrer la maquette d'une agence web</li>
								<li>Créer un site personnalisant avec un thème WordPress</li>
								<li>Concevoir une carte interactive de location de vélos</li>
								<li>Créer un blog pour un écrivain</li>
								<li>Projet personnel : Site d'un office de tourisme présentant activités en fonction de la météo</li>
							</ol>							
					</div>

					<div class="col-12 career">
						<h6>Aide-magasinier polyvalent - Décathlon Logistique (2017 - 2020) (18 mois)</h6>
							<ol id="ol-career">
								<li>Gestion d’une équipe de 5 à 15 personnes</li>
								<li>Gestion de stock</li>
								<li>Utilisation de logiciels internes (AS400 & Twist)</li>
								<li>Préparation de commande, emballage de colis, remise en stock, réapprovisionnement, réception de colis, envoie de colis...</li>
								<li>Chargement/déchargement de camions</li>
								<li>Permis interne équivalent au CACES</li>
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
							<span class="span-career">Développeur web junior - Bac +2 - niveau 5</span><br/>
							Formation réalisée à distance<br/>
							5 projets suivis par un mentor spécialisé en compétences techniques<br/>
							Type de clients : agence web, particulier, service public, écrivain, office de tourisme<br/>
							Langages et CMS : JavaScript, PHP, MySQL, HTML, CSS, WordPress<br/>
						</p>
					</div>

					<div class="col-12 career">
						<h6>IUT Les Tertiales - Valenciennes (2018 - 2019)</h6>
						<p class="p-career">
							<span class="span-career">DUT Techniques de Commercialisation</span><br/>
							Marketing, Distribution, Communication, Management, Ventes, Achats, Langues, Informatique (Word, Excel)
						</p>
					</div>

					<div class="col-12 career">
						<h6>IUT C - Roubaix (2017)</h6>
						<p class="p-career">
							<span class="span-career">DUT Carrières Juridiques</span><br/>
							Droit civil, Droit du travail, Droit commercial, Droit pénal, Droit des affaires, Droit et Gestion de l'entreprise, Droit administratif, Droit social, Gestion comptable
						</p>
					</div>

					<div class="col-12 career">
						<h6>Lycée Jean Perrin (2016 - 2017)</h6>
						<p class="p-career">
							<span class="span-career">BAC Économique - Spécialité Sciences Politiques</span>
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
						<p><strong>Email : </strong>violette.danjou@hotmail.fr</p><br/>
						<h6>Ville</h6>
						<p>Lille, France</p>
					</div>
					<div class="col-12 col-md-6">
						
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80985.23059984011!2d2.977120874675211!3d50.631046507693576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d579b3256e11%3A0x40af13e81646360!2sLille!5e0!3m2!1sfr!2sfr!4v1610821376746!5m2!1sfr!2sfr" width="500" height="auto" frameborder="0" style="border:0;"></iframe><br/>
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
		<a href="https://www.linkedin.com/in/violette-danjou">
			<i class="fab fa-linkedin"></i>
		</a>
		<a href="https://www.instagram.com/a_table_yoyo/">
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