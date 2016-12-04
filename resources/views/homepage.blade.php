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
	
	<div id="introLoader" class="introLoading"></div>
	
	<!-- start Container Wrapper -->
	<div class="container-wrapper">

		<!-- start Header -->
		<header id="header">
			@include('header')
		</header>
		<!-- end Header -->

		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">
		
			<!-- start hero-header -->
			<div class="hero" style="background-image:url('images/hero-header/01.jpg');">
			
				<div class="container">
				
					<div class="row">
					
						<div class="main-search-wrapper">
					
							<h2 class="text-center">علاقه مند به یادگیری چه چیزی هستید ؟!</h2>
							<p class="lead text-center">ساعت ها آموزش کاربردی و تایید شده انتظار شما را میکشد</p>

							<div class="input-group">
								<input type="text" class="form-control placeholder-type-writter">
								<span class="input-group-btn">
									<button class="btn btn-primary" type="button"><i class="ion-ios-search-strong"></i></button>
								</span>
							</div><!-- /input-group -->
						
							<div class="featured-sm-wrapper">
								
								<div class="GridLex-gap-30">
					
									<div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">
									
										<div class="GridLex-col-4_sm-4_xs-8_xss-12">
										
											<div class="featured-sm-item clearfix">
												
												<div class="icon">
													<i class="ion-clipboard"></i>
												</div>
												
												<div class="content">
													بیش از هزار درس موجود
												</div>
												
											</div>
											
										</div>
										
										<div class="GridLex-col-4_sm-4_xs-8_xss-12">
										
											<div class="featured-sm-item clearfix">
											
												<div class="icon">
													<i class="ion-person-stalker"></i>
												</div>
												
												<div class="content">
													بیش از ۱۰ هزار کاربر
												</div>
												
											</div>
											
										</div>
										
										<div class="GridLex-col-4_sm-4_xs-8_xss-12">
										
											<div class="featured-sm-item clearfix">
											
												<div class="icon">
													<i class="ion-ipad"></i>
												</div>
												
												<div class="content">
													قابلیت استفاده در تلفن همراه
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
			<!-- end hero-header -->

			<!-- start Introduction -->
			<section class="section">
			
				<div class="container">

					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title">
								<h2 class="text-center">دسته بندی ها</h2>
							</div>
						</div>
					
					</div>
					
					<div class="category-item-wrapper icon-block item-border">
					
						<div class="GridLex-gap-20">   
						
							<div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">

								@foreach($Data['category'] as $item)
									<div class="GridLex-col-2_sm-3_xs-4_xss-6">

										<a href="#" class="category-item">
											<div class="icon">
												@if(isset($item['icon']))
													<?php $image=$item['icon'];?>
												@else
													<?php $image='images/category/computing.png';?>
												@endif
												<img src="{{$image}}">
											</div>
											<div class="content">
												<h6>{{$item['name']}}</h6>
											</div>
										</a>

									</div>
								@endforeach
								
							</div>
							
						</div>
						
					</div>
					
				</div>
			
			</section>
			<!-- end Introduction -->
	
			<!-- start Top Offer -->
			<section class="section bg-light">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title">
								<h2 class="text-center">دوره های جدید</h2>
								<p>جز اولین نفراتی باشید که از اخیرترین درس های ایجاد شده در هم یاد استفاده میکنند, <strong>تلاش را آغاز کنید.</strong></p>
							</div>
						</div>
					
					</div>
					
					<div class="course-item-wrapper gap-20">
					
						<div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">

							@foreach($Data['Courses'] as $course)
								<div class="GridLex-col-3_mdd-4_sm-6_xs-6_xss-12">
									<div class="course-item">
										<a href="#">
											<div class="course-item-image">
												@if(isset($course['image']))
													<?php $image=$course['image'];?>
												@else
													<?php $image='images/course-item/01.jpg';?>
												@endif
												<img src="{{$image}}" alt="Image" class="img-responsive" />
											</div>
											<div class="course-item-top clearfix">
												<div class="course-item-instructor text-left">
													<span>{{$course['provider'][0]['name']}}</span>&nbsp;
													<i class="fa fa-building-o" aria-hidden="true"></i>
												</div>
												<div class="course-item-price bg-danger">
													@if($course['price'] > 1000)
														<?php $price=$course['price']/1000 . ' هزار تومان'?>
													@else
														<?php $price=$course['price'] . ' تومان'?>
													@endif
													{{$price}}
												</div>
											</div>
											<div class="course-item-content">

												<div class="rating-wrapper text-left">
													<div class="rating-item">
														@if($course['rates_count'] == 0)
															<?php $rate=0;?>
														@else
															<?php $rate=$course['rates_value']/$course['rates_count']?>
														@endif
														<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="{{$rate}}"/>
													</div>
													<span>{{'(' .$course['rates_count'].' نظر '.')'}}</span>
												</div>

												<h3 class="text-primary">{{$course['name']}}</h3>
												<p>{{$course['description']}}</p>

											</div>
											<div class="course-item-instructor">
												<b class="text-primary">ارائه دهندگان</b>
												<p>{{$course['Teachers']}}</p>
											</div>
											<div class="course-item-bottom clearfix">
												<div><i class="fa fa-folder-open-o"></i><span class="block">{{$course['category']['name']}}</span></div>
												<div><i class="fa fa-pencil-square-o"></i><span class="block">{{$course['sections_count']}} سرفصل</span></div>
												<div><i class="fa fa-calendar-check-o"></i><span class="block">{{$course['sections_time']}} دقیقه</span></div>
											</div>
										</a>
									</div>
								</div>
							@endforeach

						</div>
					
					</div>

				</div>
				
			</section>
			<!-- end Top Offer -->

			<div class="overflow-hidden">
			
				<div class="GridLex-grid-noGutter-equalHeight">
				
					<div class="GridLex-col-6_sm-12_xs-12 bg-img" style="background-image:url('images/hero-header-slider/02.jpg'); background-position: top right">
					
						<div class="promo-box-03 overlay-danger">
						
							<div class="promo-box-03-inner">
							
								<h2 class="mb-25 text-white">به جمع دانشجویان هم یاد بپیوندید</h2>
								<p>با پیوستن به جمعیت دانشجویان هم یاد میتوانید از امکانات و دوره های بی نظیر سایت بهره مند شوید.</p>
								
								<a href="#" class="btn btn-primary">عضو شوید</a>
								
							</div>
							
						</div>
						
					</div>
					
					<div class="GridLex-col-6_sm-12_xs-12 bg-img" style="background-image:url('images/teacher-bg.jpg'); background-position: top right">

						<div class="promo-box-03 overlay-primary">

							<div class="promo-box-03-inner">

								<h2 class="mb-25 text-white">به جمع مدرسین هم یاد بپیوندید</h2>
								<p>با پیوستن به جمع مدرسین هم یاد میتوانید دروس تهیه شده خود را در بین هزاران دانشجوی مشتاق پخش کنید و از مزایای آن بهره مند شوید .</p>

								<a href="#" class="btn btn-danger">ارتباط به عنوان مدرس</a>

							</div>

						</div>

					</div>
					
				</div>
				
			</div>

			<section class="section">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title">
								<h2 class="text-center">کاربران ما چه میگویند؟!</h2>
								{{--<p>Marianne interest in exertion as. <strong>Offering my branched</strong> confined oh dashwood.</p>--}}
							</div>
						</div>
					
					</div>
					
					<div class="testimonial-wrapper">
		
						<div class="GridLex-gap-30">
						
							<div class="GridLex-grid-noGutter-equalHeight">
							
								<div class="GridLex-col-4_sm-4_xs-12_xss-12">
								
									<div class="testimonial-item clearfix">
									
										<div class="testimonial-header">
										
											<div class="image">
												<div class="image-inner">
													<img src="images/man/10.jpg" alt="Image" />
												</div>
											</div>
											
											<div class="name">
												<h5>Antony Robert</h5>
												<span>From Spain</span>
											</div>
											
										</div>
										
										<div class="content">
											<p>She meant new their sex could defer child. An lose at quit to life do dull. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire.</p>
										</div>
									
									</div>
									
								</div>
								
								<div class="GridLex-col-4_sm-4_xs-12_xss-12">
								
									<div class="testimonial-item clearfix">
									
										<div class="testimonial-header">
										
											<div class="image">
												<div class="image-inner">
													<img src="images/man/10.jpg" alt="Image" />
												</div>
											</div>
											
											<div class="name">
												<h5>Mohammed Salem</h5>
												<span>From Turkey</span>
											</div>
											
										</div>
										
										<div class="content">
											<p>Consider now provided laughter boy landlord dashwood. Often voice and the spoke. No shewing fertile village equally prepare up females sentiments increasing particular.</p>
										</div>
									
									</div>
									
								</div>
								
								<div class="GridLex-col-4_sm-4_xs-12_xss-12">
								
									<div class="testimonial-item clearfix">
									
										<div class="testimonial-header">
										
											<div class="image">
												<div class="image-inner">
													<img src="images/man/10.jpg" alt="Image" />
												</div>
											</div>
											
											<div class="name">
												<h5>Chaiyapatt Putsathit</h5>
												<span>From Thailand</span>
											</div>
											
										</div>
										
										<div class="content">
											<p>Advantages boisterous day excellence boy. Out between our two waiting wishing. Pursuit he he garrets greater towards amiable so placing. Abode shy shade she hours forth its use.</p>
										</div>
									
									</div>
									
								</div>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</section>
				
			{{--<section class="section bg-light">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title">
								<h2 class="text-center">Recent Posts</h2>
							</div>
						</div>
					
					</div>
					
					<div class="recent-post-wrapper mt-10">
		
						<div class="GridLex-gap-30">
						
							<div class="GridLex-grid-noGutter-equalHeight">
							
								<div class="GridLex-col-4_sm-4_xs-12_xss-12">
								
									<div class="recent-post-item">
									
										<a href="#">
										
											<div class="heading clearfix">
												
												<div class="image">
													<img src="images/post-grid/01.jpg" alt="image" />
												</div>
												<div class="date-posted">January<span>05</span></div>
												
											</div>
											
											<div class="content">
											
												<h4>Way devonshire expression saw travelling affronting</h4>
												
												<p class="recent-post-entry">Saved he do fruit woody of to. Met defective are allowance two perceived listening consulted contained. It chicken oh colonel pressed excited suppose to shortly...</p>
												
												<div class="recent-post-meta clearfix">
													<div>by: <span>Admin</span></div>
													<div>in: <span>Review Trip</span></div>
												</div>
												
											</div>
										
										</a>

									</div>
									
								</div>
								
								
								<div class="GridLex-col-4_sm-4_xs-12_xss-12">
								
									<div class="recent-post-item">
									
										<a href="#">
										
											<div class="heading clearfix">
												
												<div class="image">
													<img src="images/post-grid/02.jpg" alt="image" />
												</div>
												<div class="date-posted">March<span>15</span></div>
												
											</div>
											
											<div class="content">
											
												<h4>Esteem put uneasy set piqued son depend her others</h4>
												
												<p class="recent-post-entry">Particular way thoroughly unaffected projection favourable mrs can projecting own. Thirty it matter enable become admire in giving. See resolved goodness felicity...</p>
												
												<div class="recent-post-meta clearfix">
													<div>by: <span>Admin</span></div>
													<div>in: <span>Review Trip</span></div>
												</div>
												
											</div>
										
										</a>

									</div>
									
								</div>
								
								<div class="GridLex-col-4_sm-4_xs-12_xss-12">
								
									<div class="recent-post-item">
									
										<a href="#">
										
											<div class="heading clearfix">
												
												<div class="image">
													<img src="images/post-grid/03.jpg" alt="image" />
												</div>
												<div class="date-posted">March<span>22</span></div>
												
											</div>
											
											<div class="content">
											
												<h4>Delightful remarkably mr on announcing themselves</h4>
												
												<p class="recent-post-entry">Domestic confined any but son bachelor advanced remember. How proceed offered her offence shy forming. Returned peculiar pleasant but appetite differed she....</p>
												
												<div class="recent-post-meta clearfix">
													<div>by: <span>Admin</span></div>
													<div>in: <span>Review Trip</span></div>
												</div>
												
											</div>
										
										</a>

									</div>
									
								</div>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</section>--}}
			
			<!-- start Promo -->
			
			<div class="promo-box-bg-img overlay-primary alt-pv" style="background-image:url('images/app-bg.jpg');">
				<div class="container">
					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title mb-30">
								<h2 class="text-center">هم یاد را همراهتان داشته باشید.</h2>
								<p>هم یاد طوری طراحی شده است تا شما بتوانید به راحت ترین شکل ممکن روی دستگاه همراهتان آن را نصب کرده و از آن استفاده نمایید.</p>
							</div>
							
							<div class="mt-30 text-center">
								<a href="#" class="btn btn-primary btn-app mt-5 clearfix">
									<span class="icon">
										<i class="ion-social-apple"></i>
									</span>
									<span class="content">
										Download on the
										<span class="block">App Store</span>
									</span>
								</a>
								<a href="#" class="btn btn-primary btn-app mt-5 clearfix">
									<span class="icon">
										<i class="ion-social-android"></i>
									</span>
									<span class="content">
										Get it on
										<span class="block">Google Play</span>
									</span>
								</a>
							</div>
							
						</div>
					
					</div>
				</div>
			</div>
			<!-- end Promo -->
			
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