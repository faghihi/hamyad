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
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="../images/ico/favicon.png">

    <!-- CSS Plugins -->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../bootstrap-rtl-3.3.4/dist/css/bootstrap-rtl.min.css" media="screen">

	<link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/plugin.css" rel="stylesheet">

	<!-- CSS Custom -->
	<link href="../css/style.css" rel="stylesheet">
	
	<!-- For your own style -->
	<link href="../css/your-style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		.disabled {
			pointer-events: none;
			cursor: not-allowed;
		}
	</style>
	
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
				
					<h1 class="page-title">Instructor Single</h1>
					
					<div class="row">
					
						<div class="col-xs-12 col-sm-8">
							<ol class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li><a href="/instructor">Instructors</a></li>
								<li class="active">Instructor name</li>
							</ol>
						</div>
						
						<div class="col-xs-12 col-sm-4 hidden-xs">
							<p class="hot-line"> <i class="fa fa-phone"></i> Hot Line: 1-222-33658</p>
						</div>
						
					</div>
					
				</div>

			</div>
		
			<div class="equal-content-sidebar-wrapper">
			
				<div class="equal-content-sidebar-by-gridLex left-sidebar">
				
					<div class="container">
					
						<div class="GridLex-grid-noGutter-equalHeight">

							<div class="GridLex-col-9_sm-8_xs-12_xss-12">
						
								<div class="content-wrapper pb-30">

									<div class="user-profile-wrapper">
									
										<div class="user-profile-header clearfix">
									
											<div class="image">
												@if(isset($Data['image']))
													<?php $image=Config::get('store.storagepath').$Data['image'];?>
												@else
													<?php $image='/images/course-item/01.jpg';?>
												@endif
												<img src="{{$image}}" alt="Image" />
											</div>
											
											<div class="content">
											
												<div class="rating-wrapper">
													<div class="rating-item">
														<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
													</div>
													<span> ({{$Data['rates_count']}} نظر)</span>
												</div>
												<h3><a href="#">{{$Data['name']}}</a></h3>
												<p class="labeling">{{$Data['description']}}</p>
												
												<ul class="address-list">
													@if(empty($Data['email']))
														<?php $email='موجود نمی باشد';
																$email_mode='disabled';
															?>
													@else
														<?php $email=$Data['email'];
																$email_mode='';
														?>
													@endif

													<li><i class="fa fa-envelope"></i>{{$email}}</li>
													
												</ul>

												
												<div class="btn-wrapper">
													@if(empty($Data['resume_link']))
														<?php $mode='disabled';
																$link='#'
														?>
													@else
														<?php $mode='';
															$link='../'.$Data['resume_link'];
														?>
													@endif
													<a href="{{$link}}"><button class="btn btn-primary btn-sm" {{$mode}}><i class="fa fa-download"></i>&nbsp;دانلود رزومه</button></a>
														<?php #TODO adding contact service  ?>
													<a href="mailto:{{$email}}" class="{{$email_mode}}"><button class="btn btn-default btn-sm btn-inverse" {{$email_mode}}>ارتباط با مدرس</button></a>
												</div>
												
											</div>
										
										</div>
									
										<div class="user-profile-content">
											<div class="section-title mb-20">
												<h3>پیش زمینه</h3>
											</div>
											@if(!empty($Data['background']))
												<div class="user-profile-list-item-2">

													<div class="icon">
														<span>
															<i class="fa fa-user"></i>
														</span>
													</div>

													<h4>معرفی کوتاه</h4>
													<p>{!!$Data['background']!!}</p>

												</div>
											@endif
											@if(!empty($Data['education']))
												<div class="user-profile-list-item-2">

													<div class="icon">
														<span>
														<i class="fa fa-graduation-cap"></i>
														</span>
													</div>
													<h4>تحصیلات</h4>
													<ul class="the-list">
														{!! $Data['education'] !!}
													</ul>

												</div>
											@endif
											@if(!empty($Data['work_ex']))
												<div class="user-profile-list-item-2">

													<div class="icon">
														<span>
														<i class="fa fa-briefcase"></i>
														</span>
													</div>

													<h4>تجربه ی کاری</h4>
													<ul class="the-list">
														{!! $Data['work_ex'] !!}
													</ul>

												</div>
											@endif

											@if(!empty($Data['awards']))
												<div class="user-profile-list-item-2">

													<div class="icon">
														<span>
														<i class="fa fa-trophy"></i>
														</span>
													</div>

													<h4>جوایز</h4>
													<ul class="the-list">
														{!! $Data['awards'] !!}
													</ul>

												</div>
											@endif

										</div>
										
										<div id="more-his-courses" class="user-profile-content">
										
											<div class="section-title text-right mb-20">
												<h3>تدریس شده ها</h3>
											</div>
										
											<div class="course-item-wrapper gap-20">
					
												<div class="GridLex-grid-noGutter-equalHeight">

													@foreach($Data['Course'] as $course)
														<div class="GridLex-col-6_xs-6_xss-12">
															<div class="course-item">
																<a href="/courses/{{$course['id']}}">
																	<div class="course-item-image">
																		@if(isset($course['image']))
																			<?php $image=Config::get('store.storagepath').$course['image'];?>
																		@else
																			<?php $image='../images/course-item/01.jpg';?>
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
																		<div class="rating-wrapper">
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
																		<div><i class="fa fa-folder-open-o"></i><span class="block"> Photography </span></div>
																		<div><i class="fa fa-pencil-square-o"></i><span class="block"> 15 Lessons</span></div>
																		<div><i class="fa fa-calendar-check-o"></i><span class="block"> 4.5 Hours</span></div>
																	</div>
																</a>
															</div>
														</div>
													@endforeach

												</div>

											</div>

										</div>
										
									</div>
									
								</div>
							
							</div>
							
							<div class="GridLex-col-3_sm-4_xs-12_xss-12">

								<div class="sidebar-wrapper pt-40">

									<div class="sidebar-header clearfix">
										<h4 class="mb-15">دروس مدرس </h4>
									</div>
									
									<div class="related-course mb-20">
									
										<ul class="related-course-item mb-30">
											@foreach(array_slice($Data['Course'], 0, 3) as $course)
												<li class="clearfix">
													<a href="/courses/{{$course['id']}}">
														<div class="image">
															@if(empty($course['image']))
																<?php $image='../images/course/course-item-sm-01.jpg'?>
															@else
																<?php $image='../'.$course['image']?>
															@endif
															<img src="{{$image}}" alt="Related Course" />
														</div>
														<div class="content">
															<h6>{{$course['name']}}</h6>
															<div class="rating-wrapper">
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
															<span class="price">
																@if($course['price'] > 1000)
																	<?php $price=$course['price']/1000 . ' هزار تومان'?>
																@else
																	<?php $price=$course['price'] . ' تومان'?>
																@endif
																{{$price}}
															</span>
														</div>
													</a>
												</li>
											@endforeach
										</ul>
										
										<a href="#more-his-courses" class="btn btn-primary btn-sm btn-inverse anchor">بیشتر</a>

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
<script type="text/javascript" src="../js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.4.1.min.js"></script>
<script type="text/javascript" src="../bootstrap-rtl-3.3.4/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="../js/spin.min.js"></script>
<script type="text/javascript" src="../js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="../js/typed.js"></script>
<script type="text/javascript" src="../js/placeholderTypewriter.js"></script>
<script type="text/javascript" src="../js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="../js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="../js/select2.full.js"></script>
<script type="text/javascript" src="../js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="../js/readmore.min.js"></script>
<script type="text/javascript" src="../js/slick.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-rating.js"></script>
<script type="text/javascript" src="../js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="../js/creditly.js"></script>
<script type="text/javascript" src="../js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="../js/bootstrap-modal.js"></script>
<script type="text/javascript" src="../js/customs.js"></script>
<script type="text/javascript">
	$('.disabled').click(function(e){
		e.preventDefault();
	})
</script>

</body>

</html>