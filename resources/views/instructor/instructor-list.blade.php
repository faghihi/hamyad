<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Edutute</title>
	<meta name="description" content="HTML Responsive Landing Page Template for Course Online Based on Twitter Bootstrap 3.x.x" />
	<meta name="keywords" content="study, learn, course, tutor, tutorial, teach, college, school, institute, teacher, instructor" />
	<meta name="author" content="crenoveative">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Fav and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="images/ico/favicon.png">

    <!-- CSS Plugins -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="bootstrap-rtl-3.3.4/dist/css/bootstrap-rtl.min.css" media="screen">

	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/plugin.css" rel="stylesheet">

	<!-- CSS Custom -->
	<link href="css/style.css" rel="stylesheet">
	
	<!-- For your own style -->
	<link href="css/your-style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>

<body>

	<!-- start Container Wrapper -->
	<div class="container-wrapper">

		<!-- start Header -->
		<header id="header">
	  
			@include('header')

		</header>
		<!-- end Header -->

		<!-- start Main Wrapper -->
		<div class="main-wrapper">
		
			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<h1 class="page-title">Feature Items</h1>
					
					<div class="row">
					
						<div class="col-xs-12 col-sm-8">
							<ol class="breadcrumb">
								<li><a href="../">Home</a></li>
								<li class="active">Instructors</li>
							</ol>
						</div>
						
						<div class="col-xs-12 col-sm-4 hidden-xs">
							<p class="hot-line"> <i class="fa fa-phone"></i> Hot Line: 1-222-33658</p>
						</div>
						
					</div>
					
				</div>

			</div>
		
			<div class="equal-content-sidebar-wrapper">
			
				<div class="equal-content-sidebar-by-gridLex">
				
					<div class="container">
					
						<div class="GridLex-grid-noGutter-equalHeight">

							<div class="GridLex-col-12_sm-12_xs-12_xss-12">
						
								<div class="content-wrapper mb-10">

									<div class="sorting-wrappper">
										
										<div class="sorting-form">
										
											<div id="change-search" class="collapse"> 
											
												<div class="change-search-wrapper">
												
													<div class="row">
													
														<div class="col-xs-12 col-sm-10 col-md-10">
														
															<div class="row gap-0">
															
																<div class="col-xs-12 col-sm-12 col-md-12">
																
																	<div class="form-group">
																		<input type="text" class="form-control no-br" placeholder="Java Programming">
																	</div>
																
																</div>

																
															</div>
														
														</div>
														
														<div class="col-xs-12 col-sm-2 col-md-2">
															<button class="btn btn-block btn-primary btn-form"><i class="fa fa-search"></i></button>
														</div>
														
													</div>
													
												</div>
											</div>

										</div>
										
										<div class="sorting-header">
										
											<div class="row">
											
												<div class="col-xss-12 col-xs-12 col-sm-7 col-md-9">
												
													<h4>We found 86 instructors for <strong>Computer</strong></h4>
												</div>
												
												<div class="col-xss-12 col-xs-12 col-sm-5 col-md-3">
													<button class="btn btn-primary btn-block btn-toggle collapsed btn-form btn-inverse btn-sm" data-toggle="collapse" data-target="#change-search"></button>
												</div>
												
											</div>
											
											
										</div>

									</div>
									
									<div class="teacher-item-grid-wrapper">
			
										<div class="GridLex-gap-20">
															
											<div class="GridLex-grid-noGutter-equalHeight">
													
												<div class="GridLex-col-3_sm-6_xs-6_xss-12">
												
													<div class="teacher-item-grid">
													
														<ul class="user-action">
														
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Save"><i class="fa fa-heart"></i></a></li>
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Follow"><i class="fa fa-user-plus"></i></a></li>
															
														</ul>
														
														<a href="#">
														
															<div class="image">
																<img src="images/course-item/01.jpg" alt="Image" />
															</div>
															
															<div class="content">
															
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
																<h3>Alexey Barnashov</h3>
																<p class="labeling">Computer Teacher</p>
																
															</div>
															
														</a>
														
														<ul class="meta-list">
															<li>تعداد <span class="text-danger font700">12 درس</span> تدریس میکند.</li>
														</ul>
													
													</div>
													
												</div>
												
												<div class="GridLex-col-3_sm-6_xs-6_xss-12">
												
													<div class="teacher-item-grid">
													
														<ul class="user-action">
														
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Save"><i class="fa fa-heart"></i></a></li>
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Follow"><i class="fa fa-user-plus"></i></a></li>
															
														</ul>
														
														<a href="#">
														
															<div class="image">
																<img src="images/man/02.jpg" alt="Image" />
															</div>
															
															<div class="content">
															
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
																<h3>Ange Ermolova</h3>
																<p class="labeling">English Teacher</p>
																
															</div>
															
														</a>
														
														<ul class="meta-list">
															<li>He have taught <span class="text-danger font700">12 courses</span></li>
														</ul>
													
													</div>
													
												</div>
												
												<div class="GridLex-col-3_sm-6_xs-6_xss-12">
												
													<div class="teacher-item-grid">
													
														<ul class="user-action">
														
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Save"><i class="fa fa-heart"></i></a></li>
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Follow"><i class="fa fa-user-plus"></i></a></li>
															
														</ul>
														
														<a href="#">
														
															<div class="image">
																<img src="images/man/03.jpg" alt="Image" />
															</div>
															
															<div class="content">
															
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
																<h3>Chaiyapatt Putsathit</h3>
																<p class="labeling">Business Teacher</p>
																
															</div>
															
														</a>
														
														<ul class="meta-list">
															<li>He have taught <span class="text-danger font700">12 courses</span></li>
														</ul>
													
													</div>
													
												</div>
												
												<div class="GridLex-col-3_sm-6_xs-6_xss-12">
												
													<div class="teacher-item-grid">
													
														<ul class="user-action">
														
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Save"><i class="fa fa-heart"></i></a></li>
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Follow"><i class="fa fa-user-plus"></i></a></li>
															
														</ul>
														
														<a href="#">
														
															<div class="image">
																<img src="images/man/04.jpg" alt="Image" />
															</div>
															
															<div class="content">
															
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
																<h3>Khairoz Nadzri</h3>
																<p class="labeling">Computer Teacher</p>
																
															</div>
															
														</a>
														
														<ul class="meta-list">
															<li>He have taught <span class="text-danger font700">12 courses</span></li>
														</ul>
													
													</div>
													
												</div>
												
												<div class="GridLex-col-3_sm-6_xs-6_xss-12">
												
													<div class="teacher-item-grid">
													
														<ul class="user-action">
														
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Save"><i class="fa fa-heart"></i></a></li>
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Follow"><i class="fa fa-user-plus"></i></a></li>
															
														</ul>
														
														<a href="#">
														
															<div class="image">
																<img src="images/man/03.jpg" alt="Image" />
															</div>
															
															<div class="content">
															
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
																<h3>Chaiyapatt Putsathit</h3>
																<p class="labeling">Business Teacher</p>
																
															</div>
															
														</a>
														
														<ul class="meta-list">
															<li>He have taught <span class="text-danger font700">12 courses</span></li>
														</ul>
													
													</div>
													
												</div>
												
												<div class="GridLex-col-3_sm-6_xs-6_xss-12">
												
													<div class="teacher-item-grid">
													
														<ul class="user-action">
														
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Save"><i class="fa fa-heart"></i></a></li>
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Follow"><i class="fa fa-user-plus"></i></a></li>
															
														</ul>
														
														<a href="#">
														
															<div class="image">
																<img src="images/man/04.jpg" alt="Image" />
															</div>
															
															<div class="content">
															
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
																<h3>Khairoz Nadzri</h3>
																<p class="labeling">Computer Teacher</p>
																
															</div>
															
														</a>
														
														<ul class="meta-list">
															<li>He have taught <span class="text-danger font700">12 courses</span></li>
														</ul>
													
													</div>
													
												</div>
												
												<div class="GridLex-col-3_sm-6_xs-6_xss-12">
												
													<div class="teacher-item-grid">
													
														<ul class="user-action">
														
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Save"><i class="fa fa-heart"></i></a></li>
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Follow"><i class="fa fa-user-plus"></i></a></li>
															
														</ul>
														
														<a href="#">
														
															<div class="image">
																<img src="images/man/01.jpg" alt="Image" />
															</div>
															
															<div class="content">
															
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
																<h3>Alexey Barnashov</h3>
																<p class="labeling">Computer Teacher</p>
																
															</div>
															
														</a>
														
														<ul class="meta-list">
															<li>He have taught <span class="text-danger font700">12 courses</span></li>
														</ul>
													
													</div>
													
												</div>
												
												<div class="GridLex-col-3_sm-6_xs-6_xss-12">
												
													<div class="teacher-item-grid">
													
														<ul class="user-action">
														
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Save"><i class="fa fa-heart"></i></a></li>
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Follow"><i class="fa fa-user-plus"></i></a></li>
															
														</ul>
														
														<a href="#">
														
															<div class="image">
																<img src="images/man/02.jpg" alt="Image" />
															</div>
															
															<div class="content">
															
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
																<h3>Ange Ermolova</h3>
																<p class="labeling">English Teacher</p>
																
															</div>
															
														</a>
														
														<ul class="meta-list">
															<li>He have taught <span class="text-danger font700">12 courses</span></li>
														</ul>
													
													</div>
													
												</div>
												
												<div class="GridLex-col-3_sm-6_xs-6_xss-12">
												
													<div class="teacher-item-grid">
													
														<ul class="user-action">
														
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Save"><i class="fa fa-heart"></i></a></li>
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Follow"><i class="fa fa-user-plus"></i></a></li>
															
														</ul>
														
														<a href="#">
														
															<div class="image">
																<img src="images/man/01.jpg" alt="Image" />
															</div>
															
															<div class="content">
															
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
																<h3>Alexey Barnashov</h3>
																<p class="labeling">Computer Teacher</p>
																
															</div>
															
														</a>
														
														<ul class="meta-list">
															<li>He have taught <span class="text-danger font700">12 courses</span></li>
														</ul>
													
													</div>
													
												</div>
												
												<div class="GridLex-col-3_sm-6_xs-6_xss-12">
												
													<div class="teacher-item-grid">
													
														<ul class="user-action">
														
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Save"><i class="fa fa-heart"></i></a></li>
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Follow"><i class="fa fa-user-plus"></i></a></li>
															
														</ul>
														
														<a href="#">
														
															<div class="image">
																<img src="images/man/02.jpg" alt="Image" />
															</div>
															
															<div class="content">
															
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
																<h3>Ange Ermolova</h3>
																<p class="labeling">English Teacher</p>
																
															</div>
															
														</a>
														
														<ul class="meta-list">
															<li>He have taught <span class="text-danger font700">12 courses</span></li>
														</ul>
													
													</div>
													
												</div>
												
												<div class="GridLex-col-3_sm-6_xs-6_xss-12">
												
													<div class="teacher-item-grid">
													
														<ul class="user-action">
														
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Save"><i class="fa fa-heart"></i></a></li>
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Follow"><i class="fa fa-user-plus"></i></a></li>
															
														</ul>
														
														<a href="#">
														
															<div class="image">
																<img src="images/man/03.jpg" alt="Image" />
															</div>
															
															<div class="content">
															
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
																<h3>Chaiyapatt Putsathit</h3>
																<p class="labeling">Business Teacher</p>
																
															</div>
															
														</a>
														
														<ul class="meta-list">
															<li>He have taught <span class="text-danger font700">12 courses</span></li>
														</ul>
													
													</div>
													
												</div>
												
												<div class="GridLex-col-3_sm-6_xs-6_xss-12">
												
													<div class="teacher-item-grid">
													
														<ul class="user-action">
														
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Save"><i class="fa fa-heart"></i></a></li>
															<li><a href="#" data-toggle="tooltip" data-placement="right" title="Follow"><i class="fa fa-user-plus"></i></a></li>
															
														</ul>
														
														<a href="#">
														
															<div class="image">
																<img src="images/man/04.jpg" alt="Image" />
															</div>
															
															<div class="content">
															
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
																<h3>Khairoz Nadzri</h3>
																<p class="labeling">Computer Teacher</p>
																
															</div>
															
														</a>
														
														<ul class="meta-list">
															<li>He have taught <span class="text-danger font700">12 courses</span></li>
														</ul>
													
													</div>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
						
									<div class="pager-wrappper clearfix">
					
										<div class="pager-innner">
										
											<div class="row">

												<div class="col-xs-12 col-sm-4">
													<div class="pagination-text">Showing reslut 1 to 15 from 248 </div>
												</div>

												<div class="col-xs-12 col-sm-4">
													<nav class="text-center">
														<ul class="pagination">
															<li>
																<a href="#" aria-label="Previous">
																	<span aria-hidden="true">&raquo;</span>
																</a>
															</li>
															<li class="active"><a href="#">1</a></li>
															<li><a href="#">2</a></li>
															<li><a href="#">3</a></li>
															<li><span>...</span></li>
															<li><a href="#">11</a></li>
															<li><a href="#">12</a></li>
															<li><a href="#">13</a></li>
															<li>
																<a href="#" aria-label="Next">
																	<span aria-hidden="true">&laquo;</span>
																</a>
															</li>
														</ul>
													</nav>
												</div>

											</div>
											
										</div>
										
									</div>

								</div>
							
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		<!-- end Main Wrapper -->
		
		<!-- start Footer Wrapper -->
		<div class="footer-wrapper scrollspy-footer">
		
			@include('footer')

		</div>
		<!-- end Footer Wrapper -->
		
	</div>
	<!-- end Container Wrapper -->
 
 
<!-- start Back To Top -->
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>
<!-- end Back To Top -->

<div id="ajaxLoginModal" class="modal fade login-box-wrapper" data-width="500" data-backdrop="static" data-keyboard="false" tabindex="-1" style="display: none;"></div>
		
<div id="ajaxRegisterModal" class="modal fade login-box-wrapper" data-width="500" data-backdrop="static" data-keyboard="false" tabindex="-1" style="display: none;">
</div>

<div id="ajaxForgotPasswordModal" class="modal fade login-box-wrapper" data-width="500" data-backdrop="static" data-keyboard="false" tabindex="-1" style="display: none;"></div>


<!-- JS -->
<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.4.1.min.js"></script>
<script type="text/javascript" src="bootstrap-rtl-3.3.4/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/spin.min.js"></script>
<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="js/typed.js"></script>
<script type="text/javascript" src="js/placeholderTypewriter.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/select2.full.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/readmore.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/bootstrap-rating.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/creditly.js"></script>
<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/customs.js"></script>


</body>

</html>