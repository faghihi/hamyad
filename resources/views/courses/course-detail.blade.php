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
		<div class="main-wrapper scrollspy-container">
		
			<div class="breadcrumb-wrapper">
			
				<div class="container">
					<div class="row">
					
						<div class="col-xs-12 col-sm-8">
							<ol class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li><a href="#">Courses list</a></li>
								<li class="active">Course Detail</li>
							</ol>
						</div>
						
						<div class="col-xs-12 col-sm-4 hidden-xs">
							<p class="hot-line"> <i class="fa fa-phone"></i> Hot Line: 1-222-33658</p>
						</div>
						
					</div>
					
				</div>

			</div>
			
			<div class="course-detail-header">
			
				<div class="container">
					
					<div class="info clearfix">
								
						<div class="image">
							<img src="images/course-item/01.jpg" alt="Image" class="img-responsive" />
						</div>
						<div class="content">
							<h2>Introduction to HTML: Build a Portfolio Website</h2>
						</div>
						
						<ul class="meta-list">

							
							<li>
								<div class="meta-category">
									<div class="content">
										<span class="text-muted mt-3 block">Category</span>
										<h6><a href="course-detail-section-2" class="anchor">Web Design</a>, <a href="course-detail-section-2" class="anchor">HTML</a></h6>
									</div>
								</div>
							</li>
							
							<li>
								<div class="meta-category">
									<div class="content">
										<span class="text-muted mt-3 block">Duation</span>
										<h6>5.4 hours (24 lessons)</h6>
									</div>
								</div>
							</li>
							
							<li>
								<div class="meta-rating">
									<span class="text-muted mt-3 block">Reviews</span>
									<div class="rating-wrapper">
										<div class="rating-item">
											<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
										</div>
										<span> (7 review)</span>
									</div>
								</div>
							</li>
							
							<li class="meta-price">
								<div class="price bg-danger">$19.56</div>
							</li>
							
						</ul>
						
					</div>

				</div>
				
			</div>
		
			<div class="equal-content-sidebar-wrapper detail-page-wrapper">
				
				<div class="equal-content-sidebar-by-gridLex right-sidebar">
	
					<div class="container">
					
						<div class="GridLex-grid-noGutter-equalHeight">
							
							<div class="GridLex-col-3_sm-4_xs-12_xss-12 hidden-xs">
							
								<aside class="sidebar-wrapper">
							
									<div class="scrollspy-sidebar alt-style-01">
									
										<ul class="scrollspy-sidenav">
										
											<li class="heading"><h5>Course Menu</h5></li>
											<li>
											
												<ul class="nav faq-nav">
													<li><a href="#course-detail-section-0" class="anchor">Course Introduction</a></li>
													<li><a href="#course-detail-section-1" class="anchor">Course Lession</a></li>
													<li><a href="#course-detail-section-2" class="anchor">About Teacher</a></li>
													<li><a href="#course-detail-section-3" class="anchor">Review</a></li>
													<li><a href="#course-detail-section-4" class="anchor">Related Courses</a></li>
												</ul>
												
											</li>

										</ul>
										
										<div class="clearfix mb-20 mt-30">
											<a href="#" class="btn btn-primary btn-block btn-md">Attend Now</a>
										</div>
										
									</div>

								</aside>
								
							</div>
							
							<div class="GridLex-col-9_sm-8_xs-12_xss-12">
								
								<div class="content-wrapper">
							
									<div class="detail-content-wrapper">

										<div id="course-detail-section-0" class="course-detail-section">
											
											<div class="section-title mb-20">
												<h3>Course Introduction</h3>
											</div>
											
											<div class="flex-video vimeo mb-40"> 
												<iframe src="http://player.vimeo.com/video/43499940" allowfullscreen></iframe> 
											</div>
											
											<div class="course-intro">
											
												<div class="listing-box clearfix">
												
													<h5>Course Highlight</h5>
													
													<ul class="listing-box-list">

														<li>
															<div class="row gap-10">
																<div class="col-xs-5 col-sm-6"><i class="fa fa-clock-o mr-5"></i> Duration</div>
																<div class="col-xs-7 col-sm-6 text-left font600">5.4 houres</div>
															</div>
														</li>
														
														<li>
															<div class="row gap-10">
																<div class="col-xs-5 col-sm-5"><i class="fa fa-pencil-square-o mr-5"></i> Lesson</div>
																<div class="col-xs-7 col-sm-7 text-left font600"> 24 lessons</div>
															</div>
														</li>
														
														<li>
															<div class="row gap-10">
																<div class="col-xs-5 col-sm-5"><i class="fa fa-users mr-5"></i> No. Student</div>
																<div class="col-xs-7 col-sm-7 text-left font600"> 15 availabilities</div>
															</div>
														</li>
														
													</ul>
													
												</div>
											
											</div>

											<h5 class="text-uppercase font700">About the course</h5>
											
											<p>Delightful remarkably mr on announcing themselves entreaties favourable. About to in so terms voice at. Equal an would is found seems of. The particular friendship one sufficient terminated frequently themselves. It more shed went up is roof if loud case. Delay music in lived noise an. Beyond genius really enough passed is up.</p>

											<p>Old education him departure any arranging one prevailed. Their end whole might began her. Behaved the comfort another fifteen eat. Partiality had his themselves ask pianoforte increasing discovered. So mr delay at since place whole above miles. He to observe conduct at detract because. Way ham unwilling not breakfast furniture explained perpetual. Or mr surrounded conviction so astonished literature. Songs to an blush woman be sorry young. We certain as removal attempt.</p>
											
											<h6 class="spacing-10 font600">More Course Information</h6>
											
											<p>Ladyship it daughter securing procured or am moreover mr. Put sir she exercise vicinity cheerful wondered. Continual say suspicion provision you neglected sir curiosity unwilling. Simplicity end themselves increasing led day sympathize yet. General windows effects not are drawing man garrets. Common indeed garden you his ladies out yet. Preference imprudence contrasted to remarkably in on. Taken now you him trees tears any. Her object giving end sister except oppose.</p>
											
										</div>
										
										<div id="course-detail-section-1" class="course-detail-section">
										
											<div class="section-title mb-20">
											
												<h3>Course Lession</h3>
									
											</div>

											<div class="course-lession-wrapper-2 alt-item-bg">
											
												<a href="#" class="course-lession-item-2">
												
													<div class="content-top">
													
														<div class="row">
														
															<div class="col-xs-12 col-sm-6 mb-15">
															
																<span class="lebal-lesson">Lesson 01</span> 
																<span class="label label-primary">Preview</span>
																
															</div>
															
															<div class="col-xs-12 col-sm-6 mb-15">
																<div class="meta text-left text-right-xs">
																	<i class="fa fa-video-camera"></i> video <span class="mh-5">|</span> <i class="fa fa-clock-o"></i> 8:56 minutes
																</div>
															</div>
														
														</div>
														
													</div>
													
													<div class="content">
													
														<h5>Introduction to Photoshop CS6 Extremely</h5>
														
														<p>Old there any widow law rooms. Agreed but expect repair she nay sir silent person. Direction can dependent one bed situation attempted. His she are man their spite avoid. Her pretended fulfilled extremely education yet. Satisfied did one admitting incommode tolerably how are.</p>

													</div>
												
												</a>
											
												<a href="#" class="course-lession-item-2">
												
													<div class="content-top">
													
														<div class="row">
														
															<div class="col-xs-12 col-sm-6 mb-15">
															
																<span class="lebal-lesson">Lesson 02</span> 
																<span class="label label-success">Free</span>
																
															</div>
															
															<div class="col-xs-12 col-sm-6 mb-15">
																<div class="meta text-left text-right-xs">
																	<i class="fa fa-video-camera"></i> video <span class="mh-5">|</span> <i class="fa fa-clock-o"></i> 10:07 minutes
																</div>
															</div>
														
														</div>
														
													</div>
													
													<div class="content">
													
														<h5>Photoshop CS6 workspace and features</h5>
														
														<p>Old there any widow law rooms. Agreed but expect repair she nay sir silent person. Direction can dependent one bed situation attempted. His she are man their spite avoid. Her pretended fulfilled extremely education yet. Satisfied did one admitting incommode tolerably how are.</p>

													</div>
												
												</a>
											
												<a href="#" class="course-lession-item-2">
												
													<div class="content-top">
													
														<div class="row">
														
															<div class="col-xs-12 col-sm-6 mb-15">
															
																<span class="lebal-lesson">Lesson 03</span> 
																<span class="label label-danger">Locked</span>
																
															</div>
															
															<div class="col-xs-12 col-sm-6 mb-15">
																<div class="meta text-left text-right-xs">
																	<i class="fa fa-video-camera"></i> video <span class="mh-5">|</span> <i class="fa fa-clock-o"></i> 8:56 minutes
																</div>
															</div>
														
														</div>
														
													</div>
													
													<div class="content">
													
														<h5>Adobe Bridge For Photo Management</h5>
														
														<p>Old there any widow law rooms. Agreed but expect repair she nay sir silent person. Direction can dependent one bed situation attempted. His she are man their spite avoid. Her pretended fulfilled extremely education yet. Satisfied did one admitting incommode tolerably how are.</p>

													</div>
												
												</a>
											
												<a href="#" class="course-lession-item-2">
												
													<div class="content-top">
													
														<div class="row">
														
															<div class="col-xs-12 col-sm-6 mb-15">
															
																<span class="lebal-lesson">Lesson 04</span> 
																<span class="label label-danger">Locked</span>
																
															</div>
															
															<div class="col-xs-12 col-sm-6 mb-15">
																<div class="meta text-left text-right-xs">
																	<i class="fa fa-video-camera"></i> video <span class="mh-5">|</span> <i class="fa fa-clock-o"></i> 8:56 minutes
																</div>
															</div>
														
														</div>
														
													</div>
													
													<div class="content">
													
														<h5>Image adjustments</h5>
														
														<p>Old there any widow law rooms. Agreed but expect repair she nay sir silent person. Direction can dependent one bed situation attempted. His she are man their spite avoid. Her pretended fulfilled extremely education yet. Satisfied did one admitting incommode tolerably how are.</p>

													</div>
												
												</a>
											
												<a href="#" class="course-lession-item-2">
												
													<div class="content-top">
													
														<div class="row">
														
															<div class="col-xs-12 col-sm-6 mb-15">
															
																<span class="lebal-lesson">Lesson 05</span> 
																<span class="label label-danger">Locked</span>
																
															</div>
															
															<div class="col-xs-12 col-sm-6 mb-15">
																<div class="meta text-left text-right-xs">
																	<i class="fa fa-video-camera"></i> video <span class="mh-5">|</span> <i class="fa fa-clock"></i> 8:56 minutes
																</div>
															</div>
														
														</div>
														
													</div>
													
													<div class="content">
													
														<h5>Introduction to Photoshop CS6 Extremely</h5>
														
														<p>Old there any widow law rooms. Agreed but expect repair she nay sir silent person. Direction can dependent one bed situation attempted. His she are man their spite avoid. Her pretended fulfilled extremely education yet. Satisfied did one admitting incommode tolerably how are.</p>

													</div>
												
												</a>
											
											</div>
											
										</div>
										
										<div id="course-detail-section-2" class="course-detail-section">
											
											<div class="section-title mb-20">
												<h3>About Teacher</h3>
											</div>
											
											<div class="teacher-item-list-02-wrapper">
												
												<div class="teacher-item-list-02-sub hidden-after-sm">
												
													<div class="row gap-40">
													
														<div class="col-xs-12 col-sm-12 col-md-6">
														
															<div class="teacher-item-list-02 clearfix">
													
																<div class="row gap-20">
																
																	<div class="col-xs-12 col-sm-3 col-md-4">
																	
																		<div class="image">
																			<img src="images/man/02.jpg" alt="Image" />
																		</div>
																		
																		<div class="clear"></div>
																				
																	</div>
																	
																	<div class="col-xs-12 col-sm-9 col-md-8">
																	
																		<div class="content">
																				
																			<span class="font700 block text-uppercase mb-5 spacing-10 font11">Assitant Teacher 1</span>
																			<h4><a href="#">Oxana Laporte</a></h4>
																			<p class="labeling">Computer Teacher</p>
																			
																			<p class="short-info">About to in so terms voice at. Equal an would is found seems of.</p>
																			
																			<a href="#" class="btn btn-primary btn-inverse btn-sm">More about him</a>
																			
																		</div>
																		
																	</div>
																	
																</div>
																
															</div>
															
														</div>
														
														<div class="col-xs-12 col-sm-12 col-md-6">
														
															<div class="teacher-item-list-02 clearfix">
													
																<div class="row gap-20">
																
																	<div class="col-xs-12 col-sm-3 col-md-4">
																	
																		<div class="image">
																			<img src="images/man/03.jpg" alt="Image" />
																		</div>
																		
																		<div class="clear"></div>

																	</div>
																	
																	<div class="col-xs-12 col-sm-9 col-md-8">
																	
																		<div class="content">
																				
																			<span class="font700 block text-uppercase mb-5 spacing-10 font11">Assitant Teacher 2</span>
																			<h4><a href="#">Michel Legrand</a></h4>
																			<p class="labeling">Computer Teacher</p>
																			
																			<p class="short-info">Delightful remarkably mr on announcing themselves entreaties favourable.</p>
																			
																			<a href="#" class="btn btn-primary btn-inverse btn-sm">More about him</a>
																			
																		</div>
																		
																	</div>
																	
																</div>
																
															</div>
															
															
														</div>
														
													</div>
													
												</div>
												
											</div>
											
											<div class="clear mb-10"></div>

										</div>
										
										<div id="course-detail-section-3" class="course-detail-section">
										
											<div class="section-title mb-20">
												<h3>Review</h3>
											</div>
											
											<div class="review-wrapper">
						
												<div class="review-header">
												
													<div class="row">
													
														<div class="col-xs-12 col-sm-12 col-md-3">
														
															<div class="review-overall">
															
																<h5>Score Breakdown</h5>
																<p class="review-overall-point"><span>4.6</span> / 5.0</p>
																
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 review)</span>
																</div>
																<p class="review-overall-recommend">90% recommend this course</p>
															</div>
														
														</div>
														
													</div>
													
												</div>
												
												<div class="review-content">
												
													<ul class="review-list">
													
														<li class="clearfix">
															<div class="image img-circle">
																<img class="img-circle" src="images/man/01.jpg" alt="Man" />
															</div>
															<div class="content">
																<div class="row gap-20 mb-0">
																	<div class="col-xs-12 col-sm-9">
																		<h6>Antony Robert</h6>
																		<div class="rating-wrapper">
																			<div class="rating-item">
																				<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-12 col-sm-3">
																		<p class="review-date">18/03/2016</p>
																	</div>
																</div>
																
																<div class="review-text">
																
																	<p>She meant new their sex could defer child. An lose at quit to life do dull. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire.</p>
																	
																	<p>It as announcing it me stimulated frequently continuing. Least their she you now above going stand forth. He pretty future afraid should genius spirit on. Set property addition building put likewise get. Of will at sell well at as. Too want but tall nay like old. Removing yourself be in answered he. Consider occasion get improved him she eat. Letter by lively oh denote an.</p>
																
																</div>

															</div>
														</li>
														
														<li class="clearfix">
															<div class="image img-circle">
																<img class="img-circle" src="images/man/02.jpg" alt="Man" />
															</div>
															<div class="content">
																<div class="row gap-20">
																	<div class="col-xs-12 col-sm-9">
																		<h6>Mohammed Salem</h6>
																		<div class="rating-wrapper">
																			<div class="rating-item">
																				<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-12 col-sm-3">
																		<p class="review-date">18/03/2016</p>
																	</div>
																</div>
																
																<div class="review-text">
																
																	<p>She meant new their sex could defer child. An lose at quit to life do dull. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire.</p>
																
																	<ul>
																		<li>Written enquire painful ye to offices forming it.</li>
																		<li>
																			Then so does over sent dull on.
																			<ul>
																				<li>Rendered her for put improved concerns his. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire.</li>
																				<li>Ladies bed wisdom theirs mrs men months set.</li>
																				<li>Everything so dispatched as it increasing pianoforte.</li>
																			</ul>
																		</li>
																		<li>Likewise offended humoured mrs fat trifling answered.</li>
																		<li>On ye position greatest so desirous. So wound stood guest weeks no terms up ought.</li>
																		<li>Then so does greatest so desirous over sent dull on.</li>
																	</ul>
																	
																	<p>Spot of come to ever hand as lady meet on. Delicate contempt received two yet advanced. Gentleman as belonging he commanded believing dejection in by. On no am winding chicken so behaved. Its preserved sex enjoyment new way behaviour. Him yet devonshire celebrated especially. Unfeeling one provision are smallness resembled repulsive.</p>
																	
																	<ol>
																		<li>Written enquire painful ye to offices forming it.</li>
																		<li>
																			Then so does over sent dull on.
																			<ol>
																				<li>Rendered her for put improved concerns his. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire.</li>
																				<li>Ladies bed wisdom theirs mrs men months set.</li>
																				<li>Everything so dispatched as it increasing pianoforte.</li>
																			</ol>
																		</li>
																		<li>Likewise offended humoured mrs fat trifling answered.</li>
																		<li>On ye position greatest so desirous. So wound stood guest weeks no terms up ought.</li>
																		<li>Then so does greatest so desirous over sent dull on.</li>
																	</ol>
																	
																	<p>Unpleasant astonished an diminution up partiality. Noisy an their of meant. Death means up civil do an offer wound of. Called square an in afraid direct. Resolution diminution conviction so mr at unpleasing simplicity no. No it as breakfast up conveying earnestly immediate principle. Him son disposed produced humoured overcame she bachelor improved. Studied however out wishing but inhabit fortune windows.</p>
																	
																</div>

															</div>
														</li>
														
														<li class="clearfix">
															<div class="image img-circle">
																<img class="img-circle" src="images/man/03.jpg" alt="Man" />
															</div>
															<div class="content">
																<div class="row gap-20">
																	<div class="col-xs-12 col-sm-9">
																		<h6>Antony Robert</h6>
																		<div class="rating-wrapper">
																			<div class="rating-item">
																				<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-12 col-sm-3">
																		<p class="review-date">18/03/2016</p>
																	</div>
																</div>
																
																<div class="review-text">
																
																	<p>Must you with him from him her were more. In eldest be it result should remark vanity square. Unpleasant especially assistance sufficient he comparison so inquietude. Branch one shy edward stairs turned has law wonder horses. Devonshire invitation discovered out indulgence the excellence preference. Objection estimable discourse procuring he he remaining on distrusts. Simplicity affronting inquietude for now sympathize age. She meant new their sex could defer child. An lose at quit to life do dull.</p>
																
																</div>

															</div>
														</li>
														
														<li class="clearfix">
															<div class="image">
																<img class="img-circle" src="images/man/04.jpg" alt="Man" />
															</div>
															<div class="content">
																<div class="row gap-20">
																	<div class="col-xs-12 col-sm-9">
																		<h6>Mohammed Salem</h6>
																		<div class="rating-wrapper">
																			<div class="rating-item">
																				<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-12 col-sm-3">
																		<p class="review-date">18/03/2016</p>
																	</div>
																</div>
																
																<div class="review-text">
																
																	<p>She meant new their sex could defer child. An lose at quit to life do dull. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire.</p>
																
																</div>

															</div>
														</li>
														
													</ul>
												
												</div>

											</div>

											<div class="mt-30 mb-10 text-left">
											
												<a href="course-review.blade.php" class="btn btn-primary btn-sm">Read more reviews</a>
												<a href="course-review.blade.php#review-form" class="btn btn-danger btn-sm anchor">Leave your review</a>
												
											</div>
											
										</div>
										
										<div id="course-detail-section-4" class="course-detail-section">
										
											<div class="section-title mb-20">
												<h3>Related Courses</h3>
											</div>
											
											<div class="course-item-wrapper alt-bg-white course-item-wrapper-mmb-45 gap-20">
							
												<div class="GridLex-grid-noGutter-equalHeight">
												
													<div class="GridLex-col-4_mdd-6_xs-6_xss-12">
														<div class="course-item">
															<a href="#">
																<div class="course-item-image">
																	<img src="images/course-item/01.jpg" alt="Image" class="img-responsive" />
																</div>
																<div class="course-item-top clearfix">
																	<div class="course-item-instructor">
																		<div class="image">
																			<img src="images/testimonial/01.jpg" alt="Image" class="img-circle" />
																		</div>
																		<span>Mark Lassoff </span>
																	</div>
																	<div class="course-item-price bg-danger">
																		$19.56
																	</div>
																</div>
																<div class="course-item-content">
																	<div class="rating-wrapper">
																		<div class="rating-item">
																			<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																		</div>
																		<span> (7 review)</span>
																	</div>
																	<h3 class="text-primary">Foundations of Enterprise Development</h3>
																</div>
																<div class="course-item-bottom clearfix">
																	<div><i class="fa fa-folder-open-o"></i><span class="block"> Programming</span></div>
																	<div><i class="fa fa-pencil-square-o"></i><span class="block"> 15 Lessons</span></div>
																	<div><i class="fa fa-calendar-check-o"></i><span class="block"> 4.5 Hours</span></div>
																</div>
															</a>
														</div>
													</div>
													
													<div class="GridLex-col-4_mdd-6_xs-6_xss-12">
														<div class="course-item">
															<a href="#">
																<div class="course-item-image">
																	<img src="images/course-item/02.jpg" alt="Image" class="img-responsive" />
																</div>
																<div class="course-item-top clearfix">
																	<div class="course-item-instructor">
																		<div class="image">
																			<img src="images/testimonial/02.jpg" alt="Image" class="img-circle" />
																		</div>
																		<span>Nicholas Mavrakis</span>
																	</div>
																	<div class="course-item-price bg-danger">
																		$19.56
																	</div>
																</div>
																<div class="course-item-content">
																	<div class="rating-wrapper">
																		<div class="rating-item">
																			<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																		</div>
																		<span> (7 review)</span>
																	</div>
																	<h3 class="text-primary">Food Photography: Shooting at Restaurants</h3>
																</div>
																<div class="course-item-bottom clearfix">
																	<div><i class="fa fa-folder-open-o"></i><span class="block"> Photography </span></div>
																	<div><i class="fa fa-pencil-square-o"></i><span class="block"> 15 Lessons</span></div>
																	<div><i class="fa fa-calendar-check-o"></i><span class="block"> 4.5 Hours</span></div>
																</div>
															</a>
														</div>
													</div>
													
													<div class="GridLex-col-4_mdd-6_xs-6_xss-12">
														<div class="course-item">
															<a href="#">
																<div class="course-item-image">
																	<img src="images/course-item/03.jpg" alt="Image" class="img-responsive" />
																</div>
																<div class="course-item-top clearfix">
																	<div class="course-item-instructor">
																		<div class="image">
																			<img src="images/testimonial/03.jpg" alt="Image" class="img-circle" />
																		</div>
																		<span>Ange Ermolova</span>
																	</div>
																	<div class="course-item-price bg-danger">
																		$19.56
																	</div>
																</div>
																<div class="course-item-content">
																	<div class="rating-wrapper">
																		<div class="rating-item">
																			<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																		</div>
																		<span> (7 review)</span>
																	</div>
																	<h3 class="text-primary">Introduction to HTML: Build a Portfolio Website</h3>
																</div>
																<div class="course-item-bottom clearfix">
																	<div><i class="fa fa-folder-open-o"></i><span class="block"> Wed Design</span></div>
																	<div><i class="fa fa-pencil-square-o"></i><span class="block"> 15 Lessons</span></div>
																	<div><i class="fa fa-calendar-check-o"></i><span class="block"> 4.5 Hours</span></div>
																</div>
															</a>
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

<script>
!function ($) {

  $(function(){

    var $window = $(window)
    var $body   = $(document.body)

    var navHeight = $('.navbar').outerHeight(true) + 50

    $body.scrollspy({
      target: '.scrollspy-sidebar',
      offset: navHeight
    })

    $window.on('load', function () {
      $body.scrollspy('refresh')
    })

    $('.scrollspy-container [href=#]').click(function (e) {
      e.preventDefault()
    })

    // back to top
    setTimeout(function () {
      var $sideBar = $('.scrollspy-sidebar')

      $sideBar.affix({
        offset: {
          top: function () {
            var offsetTop      = $sideBar.offset().top
            var sideBarMargin  = parseInt($sideBar.children(0).css('margin-top'), 10)
            var navOuterHeight = $('.scrollspy-nav').height()

            return (this.top = offsetTop - navOuterHeight - sideBarMargin)
          }
        , bottom: function () {
            return (this.bottom = $('.scrollspy-footer').outerHeight(true))
          }
        }
      })
    }, 100)
		
  })

}(window.jQuery)

</script>

</body>

</html>