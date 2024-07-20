<?php include('includes/useful_files.php') ?>
<?php include('api-akila-blog/api.php'); ?>
<!doctype html>
<!-- SolTech - IT Solutions & Technology HTML5 Template design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">


<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="DSAThemes">	
		<meta name="description" content="SolTech - IT Solutions & Technology HTML5 Template">
		<meta name="keywords" content="HTML5, DSAThemes, Creative, Agency, Digital Business, IT Solutions, Digital Product, Software, SaaS, Startup, Technology">	
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- SITE TITLE -->
		<title>Golden Rock - L'Agence Marketing Dorée !</title>

		<!-- FAVICON AND TOUCH ICONS -->
		<?php include('includes/icons.php') ?>

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&amp;display=swap" rel="stylesheet">

		
		<?php include('includes/css-files.php'); ?>


	</head>


	
	<body <?php if(isset($_SESSION['theme']) AND $_SESSION['theme'] == 'sombre') echo 'class="theme--dark"' ?>> 


		<!-- PRELOADER SPINNER
		============================================= -->	
		<?php include('includes/preloader.php'); ?>




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">




			<!-- HEADER ============================================= -->
			<?php include('includes/header.php'); ?>	
            <!-- END HEADER -->




			<!-- HERO-1 ============================================= -->	
			<section id="hero-1" class="bg--fixed hero-section division">
				<div class="container">	
					<div class="row d-flex align-items-center">


						<!-- HERO TEXT -->
						<div class="col-md-6">
							<div class="hero-1-txt wow animate__animated animate__fadeInRight">

								<!-- Title -->
								<h2>Laissez nous extraire vos pépites d'or !</h2>

								<!-- Text -->
								<p class="p-lg">
                                    Notre objectif est que vous ayez plus d'impact ! Pour cela travaillons déjà votre branding, votre contenu sur les Réseaux ainsi que vos stratégies de ventes !
								</p>

								<!-- Button -->	
								<a href="#features-10" class="btn btn-md r-06 btn--theme hover--tra-black">Nos Services Principaux</a>

								<!-- Rating -->
								<div class="btn-rating">
									<div class="star-rating ico-20 clearfix">
										<span class="flaticon-star color--yellow"></span>
										<span class="flaticon-star color--yellow"></span>
										<span class="flaticon-star color--yellow"></span>
										<span class="flaticon-star color--yellow"></span>
										<span class="flaticon-star-half-empty color--yellow"></span>	
										<small>4.84/5 (Based on 7,296 reviews)</small>
									</div>
								</div>

							</div>
						</div>	<!-- END HERO TEXT -->	


						<!-- HERO IMAGE -->
						<div class="col-md-6">	
							<div class="hero-1-img wow animate__animated animate__fadeInLeft">	
								<img class="img-fluid" src="images/hero-1-img.svg" alt="hero-image">					
							</div>
						</div>	
						

					</div>    <!-- End row --> 	
				</div>	   <!-- End container --> 	
			</section>	
            <!-- END HERO-1 -->	




			<?php include('includes/inner-brands-1.php'); ?>




			<!-- DIVIDER LINE -->
			<hr class="divider">




			<!-- TEXT CONTENT
			============================================= -->
			<section class="pt-100 ct-01 content-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- IMAGE BLOCK -->
						<div class="col-md-5">
							<div class="img-block left-column wow animate__animated animate__fadeInRight">
								<img class="img-fluid lt-img" src="images/img-03.svg" alt="content-image">
								<img class="img-fluid dt-img" src="images/img-03d.svg" alt="content-image">
							</div>
						</div>


						<!-- TEXT BLOCK -->	
						<div class="col-md-7">
							<div class="txt-block right-column wow animate__animated animate__fadeInLeft">

								<!-- Section ID -->	
						 		<span class="section-id">Possibilités Infinies</span>
	
								<!-- Title -->	
								<h3>Des Solutions Intelligentes qui produisent des Résultats</h3>

								<!-- Text -->	
								<p>
								Chez Golden Rock, notre approche innovante et personnalisée permet de comprendre les défis uniques de chaque client et d'élaborer des stratégies sur mesure pour des résultats exceptionnels.
								</p>

								<!-- Text -->	
								<ul class="simple-list">

									<li class="list-item">
										<p>
											<b>Analyse Profonde et Stratégies Personnalisées : </b> Nous débutons par une analyse approfondie de votre marché, de vos concurrents et de vos objectifs spécifiques, puis nous concevons des stratégies personnalisées en combinant données précises et insights pointus pour maximiser votre potentiel de croissance.
										</p>
									</li>

									<li class="list-item">
										<p class="mb-0">
											<b>Technologie de Pointe et Créativité : </b> Nos experts utilisent des technologies avancées pour créer des solutions efficaces, alliant innovation et expertise pour développer des outils performants, que ce soit pour des sites web intuitifs, des plateformes de gestion ou des campagnes marketing.
										</p>
									</li>

								</ul>

							</div>
						</div>	<!-- END TEXT BLOCK -->	


					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->



            
            <?php /*
			<!-- FEATURES-10
			============================================= -->
			<section id="features-10" class="pt-100 features-section">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-md-9">
							<div class="section-title mb-70">		

								<!-- Title -->	
								<h2 class="h2-xl">Handling your marketing needs in a better way</h2>	

								<!-- Text -->	
								<p class="p-xl">Ligula risus auctor tempus magna feugiat lacinia fusce blandit</p>
									
							</div>	
						</div>
					</div>


					<!-- FEATURES-10 WRAPPER -->
					<div class="fbox-wrapper ico-title">
						<div class="row d-flex align-items-center">


							<!-- FEATURE BOX #1 -->
							<div class="col-md-6">
								<div class="fbox-10 fb-5 bg--whitesmoke r-16 wow animate__animated animate__fadeInUp">


									<!-- TEXT -->
									<div class="fbox-txt">

										<!-- Icon -->	
										<div class="t-icon color--theme ico-25">
											<span class="flaticon-shuffle"></span>
										</div>

										<!-- Title -->	
										<h5 class="h5-lg">Business Intelligence</h5>

										<!-- Text -->	
										<ul class="simple-list">

											<li class="list-item">
												<p>Quaerat ipsum magna congue ipsum laoreet cursus placerat neque auctor purus
												   quaerat
												</p>
											</li>

											<li class="list-item">
												<p class="mb-0">Tempor sapien luctus egestas varius laoreet suscipit ipsum a 
												   purus sapien dolor cursus
												</p>
											</li>

										</ul>

									</div>


		 							<!-- IMAGE -->
									<div class="fbox-10-img text-center">
										<img class="img-fluid lt-img" src="images/analytics.svg" alt="feature-image">
										<img class="img-fluid dt-img" src="images/analytics-dark.svg" alt="feature-image">
									</div>

						
		 						</div>
		 					</div>	<!-- END FEATURE BOX #1 -->


		 					<!-- FEATURE BOX #2 -->
							<div class="col-md-6">
								<div class="fbox-10 fb-6 bg--whitesmoke r-16 wow animate__animated animate__fadeInUp">


		 							<!-- TEXT -->
									<div class="fbox-txt">

										<!-- Icon -->	
										<div class="t-icon color--theme ico-25">
											<span class="flaticon-bottom-alignment"></span>
										</div>

										<!-- Title -->	
										<h5 class="h5-lg">Marketing Integrations</h5>
										
										<!-- Text -->	
										<ul class="simple-list">

											<li class="list-item">
												<p>Tempor sapien luctus egestas varius laoreet suscipit ipsum a purus sapien 
												   dolor cursus
												</p>
											</li>

											<li class="list-item">
												<p class="mb-0">Quaerat ipsum magna congue ipsum laoreet cursus placerat neque
												   auctor purus quaerat
												</p>
											</li>

										</ul>

									</div>	<!-- END TEXT -->


		 							<!-- IMAGE -->
									<div class="fbox-10-img text-center">
										<img class="img-fluid lt-img" src="images/integrations.svg" alt="feature-image">
										<img class="img-fluid dt-img" src="images/integrations-dark.svg" alt="feature-image">
									</div>


		 						</div>
		 					</div>	<!-- END FEATURE BOX #2 -->


						</div>  <!-- End row -->  
					</div>	<!-- END FEATURES-10 WRAPPER -->


				</div>     <!-- End container -->
			</section>	
            <!-- END FEATURES-10 -->
             */ ?>




			<!-- BOX CONTENT
			============================================= -->
			<section class="pt-30 bc-02 ws-wrapper content-section">
				<div class="container">


					<!-- CONTENT WRAPPER -->	
					<div class="bc-02-wrapper bg--whitesmoke r-16">
						<div class="section-overlay">
							<div class="row d-flex align-items-center">


								<!-- TEXT BLOCK -->	
								<div class="col-md-6 col-lg-6">
									<div class="txt-block wow animate__animated animate__fadeInRight">

										<!-- Icon -->	
										<div class="t-icon color--theme ico-25">
											<span class="flaticon-app"></span>
										</div>

										<!-- Title -->	
										<h5 class="h5-xl">Des solutions qui feront le succès de votre entreprise !</h5>

										<!-- Text -->	
										<ul class="simple-list">

											<li class="list-item">
												<p>Chez Golden Rock, nous développons des solutions intelligentes et personnalisées pour maximiser votre potentiel de croissance et assurer des résultats concrets.
												</p>
											</li>

											<li class="list-item">
												<p class="mb-0">Nos experts utilisent des technologies avancées pour créer des outils puissants et performants, alliant innovation et expertise pour des résultats tangibles et mesurables.
												</p>
											</li>

										</ul>

										<!-- Link -->	
										<div class="txt-block-tra-link">
											<a href="#integrations-4" class="tra-link ico-20 color--theme">
												Discover More <span class="flaticon-next"></span>
											</a>
										</div>

									</div>
								</div>	<!-- END TEXT BLOCK -->	


								<!-- IMAGE BLOCK -->
								<div class="col-md-6 col-lg-6">
									<div class="bc-2-img right-column wow animate__animated animate__fadeInLeft">
										<img class="img-fluid lt-img" src="images/progress.svg" alt="content-image">
										<img class="img-fluid dt-img" src="images/progress-dark.svg" alt="content-image">
									</div>	
								</div>


							</div>   <!-- End row -->
						</div>    <!-- End section overlay -->		
					</div>     <!-- END CONTENT WRAPPER -->	


				</div>     <!-- End container -->	
			</section>	<!-- END BOX CONTENT -->




			<!-- FEATURES-2
			============================================= -->
			<section id="features-2" class="py-100 features-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-md-12">
							<div class="section-title mb-80">	

								<!-- Title -->
								<h3 class="h2-xl">Découvrez nos Solutions Complètes</h3>

								<!-- Text -->	
								<p class="p-xl">Ligula risus auctor tempus magna feugiat lacinia fusce blandit</p>

							</div>	
						</div>
					</div>


					<!-- FEATURES-2 WRAPPER -->
					<div class="fbox-wrapper">
						<div class="row row-cols-1 row-cols-md-2 rows-3">


							<!-- FEATURE BOX #1 -->
		 					<div class="col">
		 						<div class="fbox-2 fb-1 wow animate__animated animate__fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico-wrap">
		 								<div class="fbox-ico color--theme ico-55">
		 									<div class="shape-ico color--theme">

												<!-- Vector Icon -->
												<span class="flaticon-innovation"></span>

												<!-- Shape -->
												<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
												  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
												</svg>

											</div>
										</div>
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h5>Branding de Marque</h5>
										<p>Porta semper lacus cursus feugiat a primis ligula ultrice risus an auctor tempus feugiat
										   diam turpis impedit auctor felis and augue mauris blandit
										</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #1 -->	


		 					<!-- FEATURE BOX #2 -->
		 					<div class="col">
		 						<div class="fbox-2 fb-2 wow animate__animated animate__fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico-wrap">
		 								<div class="fbox-ico color--theme ico-55">
		 									<div class="shape-ico color--theme">

												<!-- Vector Icon -->
												<span class="flaticon-layout-1"></span>

												<!-- Shape -->
												<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
												  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
												</svg>

											</div>
										</div>
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h5>Création de Sites Web</h5>
										<p>Porta semper lacus cursus feugiat a primis ligula ultrice risus an auctor tempus feugiat
										   diam turpis impedit auctor felis and augue mauris blandit
										</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #2 -->	

							<!-- FEATURE BOX #2 -->
							<div class="col">
		 						<div class="fbox-2 fb-2 wow animate__animated animate__fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico-wrap">
		 								<div class="fbox-ico color--theme ico-55">
		 									<div class="shape-ico color--theme">

												<!-- Vector Icon -->
												<span class="flaticon-coding-2"></span>

												<!-- Shape -->
												<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
												  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
												</svg>

											</div>
										</div>
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h5>Création de Plateformes Web</h5>
										<p>Porta semper lacus cursus feugiat a primis ligula ultrice risus an auctor tempus feugiat
										   diam turpis impedit auctor felis and augue mauris blandit
										</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #2 -->	

							<!-- FEATURE BOX #2 -->
							<div class="col">
		 						<div class="fbox-2 fb-3 wow animate__animated animate__fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico-wrap">
		 								<div class="fbox-ico color--theme ico-55">
		 									<div class="shape-ico color--theme">

												<!-- Vector Icon -->
												<span class="flaticon-pie-chart-1"></span>

												<!-- Shape -->
												<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
												  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
												</svg>

											</div>
										</div>
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h5>Étude de Marché</h5>
										<p>Porta semper lacus cursus feugiat a primis ligula ultrice risus an auctor tempus feugiat
										   diam turpis impedit auctor felis and augue mauris blandit
										</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #2 -->	


		 					<!-- FEATURE BOX #3 -->
		 					<div class="col">
		 						<div class="fbox-2 fb-3 wow animate__animated animate__fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico-wrap">
		 								<div class="fbox-ico color--theme ico-55">
		 									<div class="shape-ico color--theme">

												<!-- Vector Icon -->
												<span class="flaticon-interface"></span>

												<!-- Shape -->
												<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
												  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
												</svg>

											</div>
										</div>
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h5>Création de Contenu</h5>
										<p>Porta semper lacus cursus feugiat a primis ligula ultrice risus an auctor tempus feugiat
										   diam turpis impedit auctor felis and augue mauris blandit
										</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #3 -->	


		 					<!-- FEATURE BOX #4 -->
		 					<div class="col">
		 						<div class="fbox-2 fb-4 wow animate__animated animate__fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico-wrap">
		 								<div class="fbox-ico color--theme ico-55">
		 									<div class="shape-ico color--theme">

												<!-- Vector Icon -->
												<span class="flaticon-shopping-cart"></span>

												<!-- Shape -->
												<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
												  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
												</svg>

											</div>
										</div>
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h5>Solutions E-commerce</h5>
										<p>Porta semper lacus cursus feugiat a primis ligula ultrice risus an auctor tempus feugiat
										   diam turpis impedit auctor felis and augue mauris blandit
										</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #4 -->	


		 					<!-- FEATURE BOX #5 -->
		 					<div class="col">
		 						<div class="fbox-2 fb-5 wow animate__animated animate__fadeInUp">

									<!-- Icon -->
		 							<div class="fbox-ico-wrap">
		 								<div class="fbox-ico color--theme ico-55">
		 									<div class="shape-ico color--theme">

												<!-- Vector Icon -->
												<span class="flaticon-podium"></span>

												<!-- Shape -->
												<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
												  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
												</svg>

											</div>
										</div>
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h5>Analyse</h5>
										<p>Porta semper lacus cursus feugiat a primis ligula ultrice risus an auctor tempus feugiat
										   diam turpis impedit auctor felis and augue mauris blandit
										</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #5 -->	


		 					<!-- FEATURE BOX #6 -->
		 					<div class="col">
		 						<div class="fbox-2 fb-6 wow animate__animated animate__fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico-wrap">
		 								<div class="fbox-ico color--theme ico-55">
		 									<div class="shape-ico color--theme">

												<!-- Vector Icon -->
												<span class="flaticon-search"></span>

												<!-- Shape -->
												<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
												  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
												</svg>

											</div>
										</div>
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h5>SEO & SMM Services</h5>
										<p>Porta semper lacus cursus feugiat a primis ligula ultrice risus an auctor tempus feugiat
										   diam turpis impedit auctor felis and augue mauris blandit
										</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #6 -->	


						</div>  <!-- End row -->  
					</div>	<!-- END FEATURES-2 WRAPPER -->


				</div>     <!-- End container -->
			</section>	<!-- END FEATURES-2 -->




			<!-- DIVIDER LINE -->
			<hr class="divider">




			<!-- TEXT CONTENT
			============================================= -->
			<section class="pt-100 ct-03 content-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->	
			 			<div class="col-md-6 col-lg-5 order-last order-md-2">
			 				<div class="txt-block left-column wow animate__animated animate__fadeInRight">

			 					<!-- Section ID -->	
						 		<span class="section-id">One-Stop Solutions</span>
	
								<!-- Title -->	
								<h4>Des solutions sur mesure pour développer votre Business En ligne !</h4>

                                <br>
								<!-- Text -->	
								<ul class="simple-list">

									<li class="list-item">
										<p>Tempor sapien quaerat undo ipsum laoreet purus and sapien dolor ociis ultrice quisque
										   and congue aliquam dolor cursus a congue varius
										</p>
									</li>

									<li class="list-item">
										<p class="mb-0">Quaerat sapien tempor undo ipsum laoreet purus and sapien dolor ociis
										   ultrice quisque and congue aliquam dolor cursus a varius congue ultrices
										</p>
									</li>

								</ul>

			 				</div>
					 	</div>	<!-- END TEXT BLOCK -->	


			 			<!-- IMAGE BLOCK -->
						<div class="col-md-6 col-lg-7 order-first order-md-2">
							<div class="img-block right-column wow animate__animated animate__fadeInLeft">
								<img class="img-fluid lt-img" src="images/img-04.svg" alt="content-image">
								<img class="img-fluid dt-img" src="images/img-04d.svg" alt="content-image">
							</div>
						</div>


			 		</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->




			<!-- BOX CONTENT
			============================================= -->
			<section class="pt-100 bc-01 ws-wrapper content-section">
				<div class="container">
					<div class="bc-01-wrapper bg--02 bg--fixed r-16">
						<div class="section-overlay bg--fixed">
							<div class="row d-flex align-items-center">


								<!-- IMAGE BLOCK -->
								<div class="col-md-6">
									<div class="img-block left-column wow animate__animated animate__fadeInRight">
										<img class="img-fluid lt-img" src="images/img-05.svg" alt="content-image">
										<img class="img-fluid dt-img" src="images/img-05d.svg" alt="content-image">
									</div>
								</div>


								<!-- TEXT BLOCK -->	
								<div class="col-md-6">
									<div class="txt-block right-column wow animate__animated animate__fadeInLeft">

										<!-- Section ID -->	
						 				<span class="section-id">Des Stratégies qui Fonctionnent !</span>
	
										<!-- Title -->	
										<h3>Le Marketing Digital avec de «Vrais Résultats» !</h3>

										<!-- Text -->	
										<p>Sodales tempor sapien diam quaerat congue primis ipsum laoreet turpis neque auctor vitae
											fusce dolor laoreet placerat magna ligula and cursus purus nulla
										</p>

										<!-- Text -->	
										<p class="mb-0">Tempor sapien sodales diam quaerat congue primis ipsum laoreet turpis neque
										   auctor vitae fusce dolor laoreet placerat magna ligula and cursus sagittis
										</p>

									</div>
								</div>	<!-- END TEXT BLOCK -->	


							</div>   <!-- End row -->	
						</div>    <!-- End section overlay -->	
					</div>    <!-- End content wrapper -->
				</div>     <!-- End container -->	
			</section>	<!-- END BOX CONTENT -->




			<!-- TEXT CONTENT
			============================================= -->
			<section class="pt-100 ct-01 content-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->	
						<div class="col-md-6 order-last order-md-2">
							<div class="txt-block left-column wow animate__animated animate__fadeInRight">


								<!-- ACCORDION WRAPPER -->	
								<div class="accordion-1 accordion-wrapper">
									<ul class="accordion">


										<!-- ACCORDION ITEM #1 -->
										<li class="accordion-item is-active">

											<!-- Title -->
											<div class="accordion-thumb"><h5 class="h5-lg">Transforming Solutions</h5></div>

											<!-- Text -->
											<div class="accordion-panel">

											     <p>Tempor sapien sodales quaerat ipsum congue undo laoreet turpis neque auctor
											        turpis vitae dolor luctus placerat magna and ligula cursus purus vitae purus 
											        an ipsum suscipit auris
												</p>

												<p class="mb-0">Sapien tempor sodales quaerat ipsum congue undo laoreet turpis 
												    neque auctor turpis vitae dolor luctus placerat magna and ligula cursus purus
												    vitae purus an ipsum auris suscipit
												</p>

											</div>

										</li>	<!-- END ACCORDION ITEM #1 -->


										<!-- ACCORDION ITEM #2 -->
										<li class="accordion-item">

											<!-- Title -->
											<div class="accordion-thumb"><h5 class="h5-lg">Personalized Strategy</h5></div>

											<!-- Text -->	
											<div class="accordion-panel">
												<ul class="simple-list">

													<li class="list-item">
														<p>Tempor sapien quaerat ipsum laoreet purus and sapien dolor diam ultrice
														   ipsum aliquam congue and dolor cursus dolor cursus purus congue an ipsum
														   purus sapien blandit
														</p>
													</li>

													<li class="list-item">
														<p class="mb-0">Tempor sapien quaerat ipsum laoreet purus and sapien dolor
															diam ultrice ipsum aliquam congue and dolor cursus
														</p>
													</li>

												</ul>
											</div>			

										</li>	<!-- END ACCORDION ITEM #2 -->


										<!-- ACCORDION ITEM #3 -->
										<li class="accordion-item">

											<!-- Title -->
											<div class="accordion-thumb"><h5 class="h5-lg">Detailed Weekly Analytics</h5></div>

											<!-- Text -->	
											<div class="accordion-panel">
									      		<p class="mb-0">Tempor sapien sodales quaerat ipsum congue undo laoreet turpis neque
									      		   auctor turpis vitae dolor luctus placerat magna and ligula cursus purus vitae purus an ipsum suscipit auris diam dapibus libero at fusce blandit neque sagittis
												</p> 
											</div>
											
										</li>	<!-- END ACCORDION ITEM #3 -->


									</ul>
								</div>	<!-- END ACCORDION WRAPPER -->

								
							</div>
						</div>	<!-- END TEXT BLOCK -->	


						<!-- IMAGE BLOCK -->
						<div class="col-md-6 order-first order-md-2">
							<div class="img-block right-column wow animate__animated animate__fadeInLeft">
								<img class="img-fluid lt-img" src="images/img-02.svg" alt="content-image">
								<img class="img-fluid dt-img" src="images/img-02d.svg" alt="content-image">
							</div>
						</div>


					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->




			<!-- FEATURES-7
			============================================= -->
			<section id="features-7" class="pt-100 features-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-md-9">
							<div class="section-title mb-70">	

								<!-- Title -->
								<h2 class="h2-xl">Découvrez nos départements !</h2>

								<!-- Text -->	
								<p class="p-xl">Des services spécifiques en fonction de vos besoins</p>

							</div>	
						</div>
					</div>


					<!-- FEATURES-7 WRAPPER -->
					<div class="fbox-wrapper text-center">
						<div class="row row-cols-1 row-cols-md-3">


							<!-- FEATURE BOX #1 -->
		 					<div class="col">
		 						<div class="fbox-7 fb-1 wow animate__animated animate__fadeInUp">

		 							<!-- Image -->
									<div class="fbox-img h-180">
										<img class="img-fluid lt-img" src="images/f_05.svg" alt="feature-image">
										<img class="img-fluid dt-img" src="images/f_05d.svg" alt="feature-image">
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="h6-xl">Advanced Analytics</h6>
										<p>Egestas luctus augue undo ultrice quisque in lacus cursus feugiat eget ultrice 
										   laoreet cubilia sagittis
										</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #1 -->	


		 					<!-- FEATURE BOX #2 -->
		 					<div class="col">
		 						<div class="fbox-7 fb-2 wow animate__animated animate__fadeInUp">

		 							<!-- Image -->
									<div class="fbox-img h-180">
										<img class="img-fluid lt-img" src="images/f_02.svg" alt="feature-image">
										<img class="img-fluid dt-img" src="images/f_02d.svg" alt="feature-image">
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="h6-xl">Effortless Integration</h6>
										<p>Augue egestas luctus undo ultrice quisque in lacus cursus feugiat eget ultrice 
										   sagittis cubilia laoreet
										</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #2 -->	


		 					<!-- FEATURE BOX #3 -->
		 					<div class="col">
		 						<div class="fbox-7 fb-3 wow animate__animated animate__fadeInUp">

		 							<!-- Image -->
									<div class="fbox-img h-180">
										<img class="img-fluid lt-img" src="images/f_03.svg" alt="feature-image">
										<img class="img-fluid dt-img" src="images/f_03d.svg" alt="feature-image">
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="h6-xl">Insightful Reporting</h6>
										<p>Egestas luctus augue undo ultrice quisque in lacus cursus feugiat eget ultrice 
										   laoreet sagittis cubilia
										</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #3 -->	


						</div>  <!-- End row -->  
					</div>	<!-- END FEATURES-7 WRAPPER -->


				</div>     <!-- End container -->
			</section>	
			<!-- END FEATURES-7 -->



			<?php /*
			<!-- TEXT CONTENT
			============================================= -->
			<section class="pt-100 ct-04 content-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->	
			 			<div class="col-md-6 order-last order-md-2">
			 				<div class="txt-block left-column wow animate__animated animate__fadeInRight">

			 					<!-- Section ID -->	
						 		<span class="section-id">Personalized Strategy</span>
	
								<!-- Title -->	
								<h2>Reach your target audience effectively</h2>

								<!-- Text -->	
								<p>Tempor sapien sodales quaerat ipsum congue undo laoreet turpis neque auctor turpis vitae dolor
								   luctus placerat magna and ligula cursus purus vitae purus an ipsum suscipit auris
								</p>

								<!-- Text -->	
								<ul class="simple-list">

									<li class="list-item">
										<p>Tempor sapien quaerat ipsum laoreet purus and sapien dolor diam ultrice ipsum aliquam
										   congue and dolor cursus dolor cursus purus congue an ipsum purus sapien blandit
										</p>
									</li>

									<li class="list-item">
										<p class="mb-0">Tempor sapien quaerat ipsum laoreet purus and sapien dolor diam 
										   ultrice ipsum aliquam congue and dolor cursus 
										</p>
									</li>

								</ul>

			 				</div>
					 	</div>	<!-- END TEXT BLOCK -->		


						<!-- IMAGE BLOCK -->	
						<div class="col-md-6 order-first order-md-2">
							<div class="img-block wow animate__animated animate__fadeInLeft">
								<img class="img-fluid" src="images/tablet-01.png" alt="content-image">
							</div>	
						</div>


					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	
			<!-- END TEXT CONTENT -->
			 */ ?>




			<!-- TEXT CONTENT
			============================================= -->
			<section class="pt-100 ct-01 content-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- IMAGE BLOCK -->
						<div class="col-md-6">
							<div class="img-block left-column wow animate__animated animate__fadeInRight">
								<img class="img-fluid lt-img" src="images/img-01.svg" alt="content-image">
								<img class="img-fluid dt-img" src="images/img-01d.svg" alt="content-image">
							</div>
						</div>


						<!-- TEXT BLOCK -->	
						<div class="col-md-6">
							<div class="txt-block right-column wow animate__animated animate__fadeInLeft">


								<!-- CONTENT BOX #1 -->
								<div class="cbox-6">
									
									<!-- Icon & Title -->
		 							<div class="cbox-title">
										<span class="flaticon-networking color--theme"></span>
										<h5 class="h5-md">Built-in Automation</h5>
									</div>

									<!-- Text -->
									<div class="cbox-6-txt">
										<p>Tempor sapien sodales quaerat ipsum congue undo laoreet turpis neque auctor turpis vitae
										   dolor luctus placerat magna and ligula cursus purus vitae purus an ipsum suscipit auris
										</p>
									</div>
																																						
								</div>	<!-- END CONTENT BOX #1 -->	


								<!-- CONTENT BOX #2 -->
								<div class="cbox-6">
									
									<!-- Icon & Title -->
		 							<div class="cbox-title">
										<span class="flaticon-workflow-1 color--theme"></span>
										<h5 class="h5-md">Customizable Dashboard</h5>
									</div>

									<!-- Text -->
									<div class="cbox-6-txt">
										<p>Tempor sapien sodales quaerat ipsum congue undo laoreet turpis neque auctor turpis vitae
										   dolor luctus placerat magna
										</p>
									</div>
																																						
								</div>	<!-- END CONTENT BOX #2 -->	


								<!-- CONTENT BOX #3 -->
								<div class="cbox-6">
									
									<!-- Icon & Title -->
		 							<div class="cbox-title">
										<span class="flaticon-engineering color--theme"></span>
										<h5 class="h5-md">Control Data Access</h5>
									</div>

									<!-- Text -->
									<div class="cbox-6-txt">
										<p class="mb-0">Tempor sapien sodales quaerat ipsum congue undo laoreet turpis neque auctor
										   turpis vitae dolor luctus placerat magna and ligula cursus purus vitae purus an ipsum suscipit auris
										</p>
									</div>
																																						
								</div>	<!-- END CONTENT BOX #3 -->	
								

							</div>
						</div>	<!-- END TEXT BLOCK -->	


					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->




			<!-- INTEGRATIONS-4
			============================================= -->
			<section id="integrations-4" class="pt-100 integrations-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-md-9">
							<div class="section-title mb-70">		

								<!-- Title -->	
								<h2 class="h2-xl">Seamless integration with all your essential tools</h2>	

								<!-- Text -->
								<p class="p-xl">Ligula risus auctor tempus magna feugiat lacinia fusce blandit</p>
									
							</div>	
						</div>
					</div>


					<!-- INTEGRATIONS-4 WRAPPER -->
					<div class="int-4-wrapper">
						<div class="row row-cols-3 row-cols-sm-4 row-cols-md-6">


							<!-- INTEGRATION TOOL #1 -->
		 					<div class="col">
		 						<a href="#">
		 							<div class="int_tool-4 r-12 wow animate__animated animate__fadeInUp">
										<img class="img-fluid" src="images/png_icons/zapier.png" alt="tool-logo">
										<h6>Zapier</h6>
		 							</div>
		 						</a>
		 					</div>	<!-- END INTEGRATION TOOL #1 -->


		 					<!-- INTEGRATION TOOL #2 -->
		 					<div class="col">
		 						<a href="#">
		 							<div class="int_tool-4 r-12 wow animate__animated animate__fadeInUp">
										<img class="img-fluid" src="images/png_icons/intercom.png" alt="tool-logo">
										<h6>Intercom</h6>
		 							</div>
		 						</a>
		 					</div>	<!-- END INTEGRATION TOOL #2 -->


		 					<!-- INTEGRATION TOOL #3 -->
		 					<div class="col">
		 						<a href="#">
		 							<div class="int_tool-4 r-12 wow animate__animated animate__fadeInUp">
										<img class="img-fluid lt-img" src="images/png_icons/zendesk.png" alt="tool-logo">
										<img class="img-fluid dt-img" src="images/png_icons/zendesk-dark.png" alt="tool-logo">
										<h6>Zendesk</h6>
		 							</div>
		 						</a>
		 					</div>	<!-- END INTEGRATION TOOL #3 -->


		 					<!-- INTEGRATION TOOL #4 -->
		 					<div class="col">
		 						<a href="#">
		 							<div class="int_tool-4 r-12 wow animate__animated animate__fadeInUp">
										<img class="img-fluid" src="images/png_icons/slack.png" alt="tool-logo">
										<h6>Slack</h6>
		 							</div>
		 						</a>
		 					</div>	<!-- END INTEGRATION TOOL #4 -->


		 					<!-- INTEGRATION TOOL #5 -->
		 					<div class="col">
		 						<a href="#">
		 							<div class="int_tool-4 r-12 wow animate__animated animate__fadeInUp">
		 								<img class="img-fluid" src="images/png_icons/trello.png" alt="tool-logo">
										<h6>Trello</h6>
		 							</div>
		 						</a>
		 					</div>	<!-- END INTEGRATION TOOL #5 -->


		 					<!-- INTEGRATION TOOL #6 -->
		 					<div class="col">
		 						<a href="#">
		 							<div class="int_tool-4 r-12 wow animate__animated animate__fadeInUp">
										<img class="img-fluid" src="images/png_icons/notion.png" alt="tool-logo">
										<h6>Notion</h6>
		 							</div>
		 						</a>
		 					</div>	<!-- END INTEGRATION TOOL #6 -->


		 					<!-- INTEGRATION TOOL #7 -->
		 					<div class="col">
		 						<a href="#">
		 							<div class="int_tool-4 r-12 wow animate__animated animate__fadeInUp">
										<img class="img-fluid" src="images/png_icons/discord.png" alt="tool-logo">
										<h6>Discord</h6>
		 							</div>
		 						</a>
		 					</div>	<!-- END INTEGRATION TOOL #7 -->


		 					<!-- INTEGRATION TOOL #8 -->
		 					<div class="col">
		 						<a href="#">
		 							<div class="int_tool-4 r-12 wow animate__animated animate__fadeInUp">
										<img class="img-fluid" src="images/png_icons/shopify.png" alt="tool-logo">
										<h6>Shopify</h6>
		 							</div>
		 						</a>
		 					</div>	<!-- END INTEGRATION TOOL #8 -->


		 					<!-- INTEGRATION TOOL #9 -->
		 					<div class="col">
		 						<a href="#">
		 							<div class="int_tool-4 r-12 wow animate__animated animate__fadeInUp">
										<img class="img-fluid" src="images/png_icons/hubspot.png" alt="tool-logo">
										<h6>HubSpot</h6>
		 							</div>
		 						</a>
		 					</div>	<!-- END INTEGRATION TOOL #9 -->


		 					<!-- INTEGRATION TOOL #10 -->
		 					<div class="col">
		 						<a href="#">
		 							<div class="int_tool-4 r-12 wow animate__animated animate__fadeInUp">
										<img class="img-fluid" src="images/png_icons/firebase.png" alt="tool-logo">
										<h6>Firebase</h6>
		 							</div>
		 						</a>
		 					</div>	<!-- END INTEGRATION TOOL #10 -->


		 					<!-- INTEGRATION TOOL #11 -->
		 					<div class="col">
		 						<a href="#">
		 							<div class="int_tool-4 r-12 wow animate__animated animate__fadeInUp">
		 								<img class="img-fluid" src="images/png_icons/mailchimp.png" alt="tool-logo">
										<h6>MailChimp</h6>
		 							</div>
		 						</a>
		 					</div>	<!-- END INTEGRATION TOOL #11 -->


		 					<!-- INTEGRATION TOOL #12 -->
		 					<div class="col">
		 						<a href="#">
		 							<div class="int_tool-4 r-12 wow animate__animated animate__fadeInUp">
										<img class="img-fluid" src="images/png_icons/zoom.png" alt="tool-logo">
										<h6>Zoom</h6>
		 							</div>
		 						</a>
		 					</div>	<!-- END INTEGRATION TOOL #12 -->


						</div>
					</div>	<!-- END INTEGRATIONS-4 WRAPPER -->


					<!-- MORE BUTTON -->
					<div class="row">
						<div class="col">
							<div class="more-btn text-center mt-30 wow animate__animated animate__fadeInUp">	
								<a href="integrations.html" class="btn r-06 btn--tra-black hover--theme">View All Integrations</a>
							</div>	
						</div>
					</div>


				</div>     <!-- End container -->
			</section>	<!-- END INTEGRATIONS-4 -->




			<!-- FEATURES-3
			============================================= -->
			<section id="features-3" class="shape--bg shape--whitesmoke pt-100 features-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->	
						<div class="col-md-5">
							<div class="txt-block left-column wow animate__animated animate__fadeInRight">

								<!-- Section ID -->	
						 		<span class="section-id">Our Strengths</span>
	
								<!-- Title -->	
								<h2>Why do people choose SolTech?</h2>

								<!-- Text -->	
								<p>Sodales tempor sapien quaerat ipsum congue and undo laoreet turpis neque auctor turpis 
									vitae dolor luctus placerat magna ligula cursus vitae
								</p>

								<!-- List -->	
								<ul class="simple-list">

									<li class="list-item">
										<p>Tempor sapien quaerat undo ipsum laoreet and purus sapien a dolor ociis ultrice 
											ipsum aliquam congue a dolor cursus congue varius magnis
										</p>
									</li>

									<li class="list-item">
										<p class="mb-0">Cursus purus suscipit  vitae cubilia magnis diam volute egestas
											sapien ultrice auctor
										</p>
									</li>

								</ul>
								
							</div>
						</div>	<!-- END TEXT BLOCK -->	


						<!-- FEATURES-3 WRAPPER -->
						<div class="col-md-7">
							<div class="fbox-3-wrapper">	
								<div class="row">


				 					<div class="col-md-6">

				 						<!-- FEATURE BOX #1 -->
				 						<div id="fb-3-1" class="fbox-3 block--shadow r-12 wow animate__animated animate__fadeInLeft">

											<!-- Icon -->
											<div class="fbox-ico ico-50">
												<div class="shape-ico color--theme">

													<!-- Vector Icon -->
													<span class="flaticon-rocket-launch"></span>

													<!-- Shape -->
													<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
													 <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
													</svg>

												</div>
											</div>	<!-- End Icon -->

											<!-- Title -->
											<h6 class="h6-lg">Innovation</h6>
													
											<!-- Text -->
											<p>Porta semper lacus and cursus feugiat at primis ultrice a ligula auctor</p>

				 						</div>

				 						<!-- FEATURE BOX #2 -->
				 						<div id="fb-3-2" class="fbox-3 block--shadow r-12 wow animate__animated animate__fadeInLeft">

											<!-- Icon -->
											<div class="fbox-ico ico-50">
												<div class="shape-ico color--theme">

													<!-- Vector Icon -->
													<span class="flaticon-creative-process"></span>

													<!-- Shape -->
													<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
													 <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
													</svg>

												</div>
											</div>	<!-- End Icon -->

											<!-- Title -->
											<h6 class="h6-lg">Experience</h6>
													
											<!-- Text -->
											<p>Porta semper lacus and cursus feugiat at primis ultrice a ligula auctor</p>

				 						</div>


				 					</div>


				 					<div class="col-md-6">


				 						<!-- FEATURE BOX #3 -->
				 						<div id="fb-3-3" class="fbox-3 block--shadow r-12 wow animate__animated animate__fadeInLeft">

											<!-- Icon -->
											<div class="fbox-ico ico-50">
												<div class="shape-ico color--theme">

													<!-- Vector Icon -->
													<span class="flaticon-trophy"></span>

													<!-- Shape -->
													<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
													 <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
													</svg>

												</div>
											</div>	<!-- End Icon -->

											<!-- Title -->
											<h6 class="h6-lg">Quality</h6>
													
											<!-- Text -->
											<p>Porta semper lacus and cursus feugiat at primis ultrice a ligula auctor</p>

				 						</div>

				 						<!-- FEATURE BOX #4 -->
				 						<div id="fb-3-4" class="fbox-3 block--shadow r-12 wow animate__animated animate__fadeInLeft">

											<!-- Icon -->
											<div class="fbox-ico ico-50">
												<div class="shape-ico color--theme">

													<!-- Vector Icon -->
													<span class="flaticon-group"></span>

													<!-- Shape -->
													<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
													 <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
													</svg>

												</div>
											</div>	<!-- End Icon -->

											<!-- Title -->
											<h6 class="h6-lg">Customer-First</h6>
													
											<!-- Text -->
											<p>Porta semper lacus and cursus feugiat at primis ultrice a ligula auctor</p>

				 						</div>


				 					</div>


				 				</div>
							</div>	<!-- End row -->
						</div>	<!-- END FEATURES-3 WRAPPER -->


					</div>    <!-- End row -->
				</div>     <!-- End container -->
			</section>	<!-- END FEATURES-3 -->




			<!-- IMAGE CONTENT
			============================================= -->
			<section class="pt-100 ct-05 ct-05-img content-section division">
				<div class="container hidd">
					

					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-md-10 col-lg-9">
							<div class="section-title mb-60">

								<!-- Title -->	
								<h2 class="h2-xl">Everything in One Place</h2>	

								<!-- Text -->	
								<p class="p-xl">Ligula risus auctor tempus magna feugiat lacinia fusce blandit</p>	
									
							</div>	
						</div>
					</div>


					<!-- IMAGE BLOCK -->
					<div class="row">	
						<div class="col">
							<div class="img-block video-preview wow animate__animated animate__fadeInUp">

								<!-- Play Icon --> 
								<a class="video-popup1" href="https://www.youtube.com/embed/SZEflIVnhH8">				
									<div class="video-btn video-btn-xl bg--pink">	
										<div class="video-block-wrapper"><span class="flaticon-play-button"></span></div>
									</div>
								</a>

								<!-- Preview Image --> 
								<img class="img-fluid" src="images/dashboard-02.svg" alt="content-image">

							</div>
						</div>
					</div>

					
				</div>	   <!-- End container -->
			</section>	<!-- END IMAGE CONTENT -->




			<!-- STATISTIC-6
			============================================= -->
			<div id="statistic-6" class="py-100 statistic-section division">
				<div class="container">


					<!-- STATISTIC-6 BLOCKS -->
					<div class="row row-cols-1 row-cols-md-3 text-center">


						<!-- STATISTIC BLOCK #1 -->
						<div class="col">						
							<div id="sb-6-1" class="animate__animated animate__fadeInUp">
								<div class="statistic-block">
									
									<h2 class="statistic-number">
										<span class="count-element">42</span><small>%</small>
									</h2>
									
									<div class="statistic-block-txt">
										<p>Augue magna justo integer and velna vitae auctor suscipit</p>	
									</div>		
								</div>
							</div>						
						</div>	<!-- END STATISTIC BLOCK #1 -->


						<!-- STATISTIC BLOCK #2 -->
						<div class="col">						
							<div id="sb-6-2" class="animate__animated animate__fadeInUp">
								<div class="statistic-block">

									<h2 class="statistic-number">
										<span class="count-element">78</span><small>%</small>
									</h2>

									<div class="statistic-block-txt">
										<p>Augue magna justo integer and velna vitae auctor suscipit</p>	
									</div>		

								</div>
							</div>						
						</div>	<!-- END STATISTIC BLOCK #2 -->


						<!-- STATISTIC BLOCK #3 -->
						<div class="col">						
							<div id="sb-6-3" class="animate__animated animate__fadeInUp">
								<div class="statistic-block">

									<h2 class="statistic-number">
										<span class="count-element">46</span>.<span class="count-element">3</span><small>k</small>
									</h2>

									<div class="statistic-block-txt">
										<p>Augue magna justo integer and velna vitae auctor suscipit</p>	
									</div>		

								</div>
							</div>						
						</div>	<!-- END STATISTIC BLOCK #3 -->

						
					</div>	<!-- END STATISTIC-6 BLOCKS -->


				</div>	 <!-- End container -->		
			</div>	 <!-- END STATISTIC-6 -->




			<!-- DIVIDER LINE -->
			<hr class="divider">




			<!-- TEXT CONTENT
			============================================= -->
			<section class="pt-100 ct-01 content-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- IMAGE BLOCK -->
						<div class="col-md-6">
							<div class="img-block left-column wow animate__animated animate__fadeInRight">
								<img class="img-fluid lt-img" src="images/img-06.svg" alt="content-image">
								<img class="img-fluid dt-img" src="images/img-06d.svg" alt="content-image">
							</div>
						</div>


						<!-- TEXT BLOCK -->	
						<div class="col-md-6">
							<div class="txt-block right-column wow animate__animated animate__fadeInLeft">

								<!-- Section ID -->	
					 			<span class="section-id">Strategy & Consulting</span>

								<!-- Title -->	
								<h2>Content is the key to building an audience</h2>

								<!-- Text -->	
								<p>Tempor sapien sodales quaerat ipsum congue undo laoreet turpis neque auctor turpis vitae dolor
								   luctus placerat magna and ligula cursus purus vitae purus ipsum suscipit and auris diam dapibus
								   libero at fusce blandit neque sagittis laoreet
								</p>

								<!-- Text -->	
								<ul class="simple-list">

									<li class="list-item">
										<p>Tempor sapien quaerat ipsum laoreet purus and sapien dolor diam ultrice ipsum aliquam
										   congue and dolor cursus dolor cursus purus congue an ipsum purus sapien blandit
										</p>
									</li>

									<li class="list-item">
										<p class="mb-0">Tempor sapien quaerat ipsum laoreet purus and sapien dolor diam 
										   ultrice ipsum aliquam congue and dolor cursus 
										</p>
									</li>

								</ul>

							</div>
						</div>	<!-- END TEXT BLOCK -->	


					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->




			<!-- TESTIMONIALS-3
			============================================= -->
			<section id="reviews-3" class="pt-80 reviews-section">
				<div class="container">


					<!-- TESTIMONIALS-3 WRAPPER -->
					<div class="reviews-3-wrapper bg--01 r-16">
						<div class="row d-flex align-items-center">


							<!-- TEXT BLOCK -->	
							<div class="col-lg-6">
								<div class="txt-block left-column wow animate__animated animate__fadeInUp">

									<!-- Section ID -->
						 			<span class="section-id">Testimonials</span>	

									<!-- Title -->	
									<h4>Nos Clients Apprécient Réellement ce que nous faisons !</h4>

									<!-- Text -->	
									<p class="p-md">More than 100 teams are already using SolTech. Read what those lovely
									   people say about us
									</p>

									<!-- Button -->
									<a href="reviews" class="btn r-06 btn--theme hover--tra-coal">Lisez tous les Avis</a>

								</div>
							</div>	<!-- END TEXT BLOCK -->	


							<!-- TESTIMONIALS COLUMN -->
							<div class="col-lg-6">
								<div class="reviews-3-blocks">


									<!-- TESTIMONIAL #1 -->
									<div id="rw-3-1" class="review-3 block--shadow r-08 wow animate__animated animate__fadeInUp">

										<!-- Text -->
										<div class="review-3-txt">

											<!-- Rating -->
											<div class="review-rating ico-15 color--yellow">
												<span class="flaticon-star"></span>
												<span class="flaticon-star"></span>
												<span class="flaticon-star"></span>
												<span class="flaticon-star"></span>
												<span class="flaticon-star"></span>	
											</div>

											<h6 class="h6-lg">Impressed by the level of service</h6>

											<!-- Text -->
											<p class="p-sm">&quot;An augue cubilia laoreet a magna suscipit diam egestas ipsum 
											   lectus purus ipsum a primis augue auctor ultrice ligula egestas and suscipit lectus&quot;
											</p>

											<!-- Author -->
											<div class="author-data clearfix">

												<!-- Avatar -->
												<div class="review-avatar">
													<img src="images/review-author-1.jpg" alt="review-avatar">
												</div>
															
												<!-- Data -->
												<div class="review-author">
													<h6>Paul Briggs</h6>
													<p class="p-sm">CTO, <a href="#" class="color--black">Company Name</a></p>
												</div>	

											</div>	<!-- End Author -->

										</div>	<!-- End Text -->

									</div>	<!-- END TESTIMONIAL #1 -->


									<!-- TESTIMONIAL #2 -->
									<div id="rw-3-2" class="review-3 block--shadow r-08 wow animate__animated animate__fadeInUp">

										<!-- Text -->
										<div class="review-3-txt">

											<!-- Rating -->
											<div class="review-rating ico-15 color--yellow">
												<span class="flaticon-star"></span>
												<span class="flaticon-star"></span>
												<span class="flaticon-star"></span>
												<span class="flaticon-star"></span>
												<span class="flaticon-star-half-empty"></span>	
											</div>

											<h6 class="h6-lg">Great Guys to work with!</h6>

											<!-- Text -->
											<p class="p-sm">&quot;Mauris gestas magnis and sapien etiam sapien congue augue 
											   integer egestas ipsum ultrice and vitae purus congue magna ligula egestas&quot;
											</p>

											<!-- Author -->
											<div class="author-data clearfix">

												<!-- Avatar -->
												<div class="review-avatar">
													<img src="images/review-author-2.jpg" alt="review-avatar">
												</div>
															
												<!-- Data -->
												<div class="review-author">
													<h6>Maria Haverman</h6>
													<p class="p-sm">General Director, <a href="#" class="color--black">Company Name</a></p>
												</div>	

											</div>	<!-- End Author -->

										</div>	<!-- End Text -->

									</div>	<!-- END TESTIMONIAL #2 -->


								</div>
							</div>	<!-- END TESTIMONIALS COLUMN -->


						</div>
					</div>	<!-- END TESTIMONIALS-3 WRAPPER -->
					
					
				</div>	   <!-- End container -->
			</section>	
			<!-- END TESTIMONIALS-3 -->




			<!-- FAQs-2
			============================================= -->
			<section id="faqs-2" class="pt-100 faqs-section division">				
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-md-9">
							<div class="section-title mb-70">		

								<!-- Title -->	
								<h2 class="h2-xl">Any Questions? Look Here</h2>	

								<!-- Text -->	
								<p class="p-xl">Ligula risus auctor tempus magna feugiat lacinia fusce blandit</p>
									
							</div>	
						</div>
					</div>


					<!-- FAQs-2 QUESTIONS -->	
					<div class="faqs-2-questions">
						<div class="row row-cols-1 row-cols-lg-2">
						

							<!-- QUESTIONS HOLDER -->
							<div class="col">
								<div class="questions-holder left-column">


									<!-- QUESTION #1 -->
									<div class="question wow animate__animated animate__fadeInUp">

										<!-- Question -->
										<h6 class="h6-xl">Getting started with SolTech</h6>

										<!-- Answer -->
										<p>Tempor sapien sodales quaerat ipsum congue undo laoreet turpis neque auctor turpis vitae
											dolor luctus placerat magna and ligula cursus purus vitae purus an ipsum suscipit auris
										</p>

									</div>	<!-- END QUESTION #1 -->


									<!-- QUESTION #2 -->					
									<div class="question wow animate__animated animate__fadeInUp">

										<!-- Question -->
										<h6 class="h6-xl">How much time will it take to deploy your solutions in my business?</h6>

										<!-- Answer -->
										<p>Sapien tempor sodales quaerat ipsum congue undo laoreet turpis neque auctor turpis vitae 
										   dolor luctus placerat magna and ligula cursus purus vitae purus auris diam auris suscipit ipsum cursus purus vitae purus an ipsum sodales laoreet
										</p>

									</div>	<!-- END QUESTION #2 -->


									<!-- QUESTION #3 -->					
									<div class="question wow animate__animated animate__fadeInUp">

										<!-- Question -->
										<h6 class="h6-xl">How do I choose a plan?</h6>

										<!-- Answer -->
										<ul class="simple-list">

											<li class="list-item">
												<p>Tempor sapien quaerat ipsum laoreet purus and sapien dolor diam ultrice ipsum 
												   aliquam congue and dolor cursus 
												</p>
											</li>

											<li class="list-item">
												<p class="mb-0">Quaerat sapien tempor ipsum laoreet purus and sapien dolor diam 
												   ultrice ipsum aliquam congue and congue dolor turpis neque auctor turpis vitae 
												   a dolor luctus placerat
												</p>
											</li>

										</ul>

									</div>	<!-- END QUESTION #3 -->


								</div>
							</div>	<!-- END QUESTIONS HOLDER -->


							<!-- QUESTIONS HOLDER -->
							<div class="col">
								<div class="questions-holder right-column">

								
									<!-- QUESTION #4 -->					
									<div class="question wow animate__animated animate__fadeInUp">

										<!-- Question -->
										<h6 class="h6-xl">How long do you provide support?</h6>

										<!-- Answer -->
										<p>Sodales sapien tempor quaerat ipsum congue undo laoreet turpis neque auctor turpis vitae
										   dolor luctus placerat magna and ligula cursus purus vitae purus an auris suscipit ipsum
										</p>

									</div>	<!-- END QUESTION #4 -->

										
									<!-- QUESTION #5 -->
									<div class="question wow animate__animated animate__fadeInUp">

										<!-- Question -->
										<h6 class="h6-xl">How do I make a payment?</h6>

										<!-- Answer -->
										<p>Tempor sapien sodales quaerat ipsum congue undo laoreet turpis neque auctor turpis vitae
										   luctus dolor magna
										</p>

										<!-- Answer -->
										<p>An enim nullam tempor sapien gravida and donec congue metus. Vitae arcu mollis blandit
											integer massa velna
										</p>

									</div>	<!-- END QUESTION #5 -->


									<!-- QUESTION #6 -->
									<div class="question wow animate__animated animate__fadeInUp">

										<!-- Question -->
										<h6 class="h6-xl">I have an issue with my account</h6>

										<!-- Answer -->
										<p>Tempor sapien sodales quaerat ipsum congue undo laoreet turpis neque auctor turpis vitae
											dolor luctus placerat magna and ligula cursus purus vitae purus an ipsum suscipit auris
										</p>

										<!-- Answer -->
										<ul class="simple-list">

											<li class="list-item">
												<p>Fringilla risus, luctus mauris orci auctor purus</p>
											</li>

											<li class="list-item">
												<p class="mb-0">Quaerat sodales sapien an euismod blandit purus ipsum and primis in
												   cubilia porttitor laoreet augue luctus
												</p>
											</li>

										</ul>

									</div>	<!-- END QUESTION #6 -->


								</div>
							</div>	<!-- END QUESTIONS HOLDER -->


						</div>	<!-- End row -->
					</div>	<!-- END FAQs-2 QUESTIONS -->	


					<!-- MORE QUESTIONS BUTTON -->	
					<div class="row">
						<div class="col">	
							<div class="more-questions wow animate__animated animate__fadeInUp">
								<h6 class="h6-lg"><span>Still have questions?</span> <a href="contacts.html" class="color--theme">Reach out</a> any time.</h6>
							</div>
						</div>
					</div>


				</div>	   <!-- End container -->		
			</section>	
			<!-- END FAQs-2 -->


			<!-- BLOG-1
			============================================= -->
			<section id="blog-1" class="pt-100 pb-60 blog-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-md-10 col-lg-9">
							<div class="section-title mb-70">

								<!-- Title -->	
								<h3 class="h3-xl">Nos Dernières <span style="color:#fda700">Actualités</span></h3>

								<!-- Text -->	
								<p class="p-xl">Lisez les derniers articles sur les meilleures pratiques en matière d'analyse des commentaires des clients, produits centrés sur le client.</p>

							</div>	
						</div>
					</div>


					<!-- BLOG POSTS -->
				 	<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">


					 	<?php $i = 0; foreach($obj_tous_post as $value): $i++; ?>

						<?php if($i<4): ?>
				 		<!-- BLOG POST #1 -->
				 		<div class="col">
				 			<div id="bp-1-1" class="blog-post wow animate__animated animate__fadeInUp">

					 			<!-- BLOG POST IMAGE -->
					 			<div class="blog-post-img r-12">
									<a href="posts/<?= $value->matricule ?>">
										<div class="hover-overlay"> 
											<img class="img-fluid" src="<?= $url_image.$value->photo ?>" alt="blog-post-image">
											<div class="item-overlay"></div>
										</div>
									</a>
					 				
								</div>

								<!-- BLOG POST TEXT -->
								<div class="blog-post-txt">

									<!-- Post Meta -->
									<div class="blog-post-meta">
										<ul class="post-meta-list ico-10">
											<li><p class="p-sm">Inspiration</p></li>
											<li class="meta-list-divider"><p><span class="flaticon-minus-1"></span></p></li>
											<li><p class="p-sm"><?= $value->date ?></p></li>
										</ul>
									</div>

									<!-- Post Link -->
									<h5>
										<a href="posts/<?= $value->matricule ?>"><?= $value->titre ?></a>
									</h5>

									<!-- Short Description -->
									<p><?= substr(strip_tags($value->content), 0, 100).'...' ?></p>

									<!-- Post Comments -->
									<!-- <p class="p-sm post-comments">9 Comments</p> -->

								</div>	<!-- END BLOG POST TEXT -->

							</div>
				 		</div>	
						<!-- END  BLOG POST #1 -->
						<?php else: ?>
							<?php break; ?>
						<?php endif; ?>
						<?php endforeach ?>


						<?php /*

						<!-- BLOG POST #2 -->
				 		<div class="col">
				 			<div id="bp-1-2" class="blog-post wow animate__animated animate__fadeInUp">

					 			<!-- BLOG POST IMAGE -->
					 			<div class="blog-post-img r-12">
					 				<div class="hover-overlay"> 
										<img class="img-fluid" src="images/blog/img-05.jpg" alt="blog-post-image">
										<div class="item-overlay"></div>
									</div>
								</div>

								<!-- BLOG POST TEXT -->
								<div class="blog-post-txt">

									<!-- Post Meta -->
									<div class="blog-post-meta">
										<ul class="post-meta-list ico-10">
											<li><p class="p-sm">Tutorials</p></li>
											<li class="meta-list-divider"><p><span class="flaticon-minus-1"></span></p></li>
											<li><p class="p-sm">Mar 19, 2024</p></li>
										</ul>
									</div>

									<!-- Post Link -->
									<h5>
										<a href="single-post.html">A ligula risus diam auctor</a>
									</h5>

									<!-- Short Description -->
									<p>Congue sagittis augue egestas velna integer and purus filis suscipit magna felis turpis 
									   and blandit augue mauris..
									</p>

									<!-- Post Comments -->
									<p class="p-sm post-comments">12 Comments</p>

								</div>	<!-- END BLOG POST TEXT -->

							</div>
				 		</div>	
						<!-- END  BLOG POST #2 -->


				 		<!-- BLOG POST #3 -->
				 		<div class="col">
				 			<div id="bp-1-3" class="blog-post clearfix wow animate__animated animate__fadeInUp">

					 			<!-- BLOG POST IMAGE -->
					 			<div class="blog-post-img r-12">
					 				<div class="hover-overlay"> 
										<img class="img-fluid" src="images/blog/img-07.jpg" alt="blog-post-image">
										<div class="item-overlay"></div>
									</div>
								</div>

								<!-- BLOG POST TEXT -->
								<div class="blog-post-txt">

									<!-- Post Meta -->
									<div class="blog-post-meta">
										<ul class="post-meta-list ico-10">
											<li><p class="p-sm">Inspiration</p></li>
											<li class="meta-list-divider"><p><span class="flaticon-minus-1"></span></p></li>
											<li><p class="p-sm">Mar 02, 2024</p></li>
										</ul>
									</div>	

									<!-- Post Link -->
									<h5>
										<a href="single-post.html">Donec sapien augue and integer turpis cursus</a>
									</h5>

									<!-- Short Description -->
									<p>Congue sagittis augue egestas velna integer a purus filis suscipit magna...</p>

									<!-- Post Comments -->
									<p class="p-sm post-comments">3 Comments</p>

								</div>	<!-- END BLOG POST TEXT -->

							</div>
				 		</div>	
						<!-- END  BLOG POST #3 -->

						*/ ?>


				 	</div>	
					<!-- END BLOG POSTS -->

					<div class="row justify-content-center">	
						<div class="col-md-10 col-lg-9">
							<div class="section-title mb-10 mt-10">	
								<a href="blog" class="btn r-06 btn--theme hover--tra-white">Consultez tous les articles</a>
							</div>	
						</div>
					</div>

					

				</div>
			</section>	
			<!-- END BLOG-1 -->




			<!-- BANNER-1
			============================================= -->
			<?php include('includes/banners/banner-1.php'); ?>
            <!-- END BANNER-1 -->




			<!-- MODAL WINDOW (NEWSLETTER FORM)
			============================================= -->
			<?php include('includes/modal-newsletter.php'); ?>
			<!-- END MODAL WINDOW (NEWSLETTER FORM) -->




			<!-- MODAL WINDOW (REQUEST FORM)
			============================================= -->
			<?php include('includes/modal-request.php'); ?>
			<!-- END MODAL WINDOW (REQUEST FORM) -->




			<!-- FOOTER-1
			============================================= -->
			<?php include('includes/footers/footer-2.php'); ?>  
            <!-- END FOOTER-1 -->




		</div>	<!-- END PAGE CONTENT -->




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="js/jquery-3.7.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/menu.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/request-form.js"></script>	
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>	
		<script src="js/popper.min.js"></script>
		<script src="js/lunar.js"></script>
		<script src="js/wow.js"></script>
		<script src="js/cookies-message.js"></script>
		
		<!-- Custom Script -->		
		<script src="js/custom.js"></script>	

		<!-- COOKIES MESSAGE -->
        <script>
        	$(document).ready(function () {
        		setTimeout(function () {
	      			$.CookiesMessage();
	      		}, 1800)
	      	});
	    </script>	

	    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->															
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->

		<!-- STYLE SWITCHER -->
		<div id="stlChanger">
			<div class="blockChanger bgChanger">
            	<a href="#" class="chBut"><span class="flaticon-gear"></span></a>
                <div class="chBody">	

                	<div class="stBlock text-center">				
						<div class="stBgs">	
							<p class="switch"></p>

							<p>Color Scheme</p>	
							<a class="stB1" href="javascript:chooseStyle('blue-theme', 60)"><img src="images/color-scheme/blue.jpg" alt=""></a>
							<a class="stB2" href="javascript:chooseStyle('darkblue-theme', 60)"><img src="images/color-scheme/darkblue.jpg" alt=""></a>					
							<a class="stB3" href="javascript:chooseStyle('pink-theme', 60)"><img src="images/color-scheme/pink.jpg" alt=""></a>
							<a class="stB4" href="javascript:chooseStyle('purple-theme', 60)"><img src="images/color-scheme/purple.jpg" alt=""></a>
							<a class="stB5" href="javascript:chooseStyle('skyblue-theme', 60)"><img src="images/color-scheme/skyblue.jpg" alt=""></a>	
							<a class="stB6" href="javascript:chooseStyle('violet-theme', 60)"><img src="images/color-scheme/violet.jpg" alt=""></a>
						</div>
					</div>

					<div class="stBlock1 text-center">
						<a class="btn r-06 btn--theme hover--tra-white" href="javascript:chooseStyle('none', 60)">Reset Color</a>
					</div>

				</div>
			</div>
		</div>	  
		<!-- END STYLE SWITCHER -->

	    <script>
			$(document).on({
			    "contextmenu": function (e) {
			        console.log("ctx menu button:", e.which); 

			        // Stop the context menu
			        e.preventDefault();
			    },
			    "mousedown": function(e) { 
			        console.log("normal mouse down:", e.which); 
			    },
			    "mouseup": function(e) { 
			        console.log("normal mouse up:", e.which); 
			    }
			});
		</script>

		<script>
			$(function() {
			  $(".switch").click(function() {
			    $("body").toggleClass("theme--dark");
				    if( $( "body" ).hasClass( "theme--dark" )) {
	                	$( ".switch" ).text( "Light Mode" );
	            	} else {
	                	$( ".switch" ).text( "Dark Mode" );
	            	}
			    });
			});
		</script>

		<script>
			$(document).ready(function() {
	            if( $( "body" ).hasClass( "theme--dark" )) {
	                $( ".switch" ).text( "Light Mode" );
	            } else {
	                $( ".switch" ).text( "Dark Mode" );
	            }
	        });
		</script>


		<script src="js/changer.js"></script>
		<script defer src="js/styleswitch.js"></script>	


	</body> 



</html>