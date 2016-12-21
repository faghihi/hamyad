<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>هم یاد</title>
	<meta name="description" content="HTML Responsive Landing Page Template for Course Online Based on Twitter Bootstrap 3.x.x" />
	<meta name="keywords" content="study, learn, course, tutor, tutorial, teach, college, school, institute, teacher, instructor" />
	<meta name="author" content="crenoveative">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Fav and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="/images/ico/favicon.png">

    <!-- CSS Plugins -->
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="/bootstrap-rtl-3.3.4/dist/css/bootstrap-rtl.min.css" media="screen">

	<link href="/css/video-js.min.css" rel="stylesheet">
	<link href="/css/animate.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
	<link href="/css/plugin.css" rel="stylesheet">

	<!-- CSS Custom -->
	<link href="/css/style.css" rel="stylesheet">
	
	<!-- For your own style -->
	<link href="/css/your-style.css" rel="stylesheet">

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
								<li><a href="/">خانه</a></li>
								<li><a href="/courses">دروس</a></li>
								<li class="active">آموزش</li>
							</ol>
						</div>
						
					</div>
					
				</div>

			</div>
			
			<div class="course-watching-header">
			
				<div class="container">
					
					<p class="mb-0">شما در حال مشاهده ی جلسه ی زیر هستید : </p>
					<h2>{{$section['name']}} <small> از <span class="text-primary font700">{{$section['course']['name']}}</span></small></h2>

				</div>
				
			</div>
		
			<div class="equal-content-sidebar-wrapper detail-page-wrapper">
				
				<div class="equal-content-sidebar-by-gridLex">
	
					<div class="container">
					
						<div class="GridLex-grid-noGutter-equalHeight">
							
							<div class="GridLex-col-9_sm-8_xs-12_xss-12">
								
								<div class="content-wrapper">
							
									<div class="watching-content-wrapper">

										<div class="flex-video mb-40">


											@if(! empty($section['image']))
												<?php $image=Config::get('store.storagepath').$section['image'];?>
											@else
												<?php $image='/images/course-item/01.jpg';?>
											@endif
											<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" poster="{{$image}}" data-setup='{"fluid": true}'>

												<source src="{{Config::get('store.storagepath').$section['link']}}" type="video/mp4">


											</video>

										</div>
										
										<div class="watching-pager-wrapper">
											<ul class="watching-pager mb-30 clearfix">
												@if($section['next']!='last')
													<li class="prev">
														<a href="/sections/{{$section['next']['id']}}">
															<span class="text-primary font12">قسمت بعدی</span>
															<h5>{{$section['next']['name']}}</h5>
														</a>
													</li>
												@else
													<li><p style="color:#F7F7F7">آخر</p></li>
												@endif
												@if($section['pre']!='first')
												<li class="next">
													<a href="/sections/{{$section['pre']['id']}}">
														<span class="text-primary font12">قسمت قبلی</span>
														<h5>{{$section['pre']['name']}}</h5>
													</a>
												</li>
												@else
													<li>
														<p style="color:#F7F7F7">نخست</p>
													</li>
												@endif
											</ul>
										</div>
										
										<div class="clear"></div>
										
										<div class="row">
							
											<div class="col-xss-12 col-xs-12 col-sm-12 col-md-12 mb-30">
											
												<div class="section-title mb-20">
													<h3>توضیحات این قسمت</h3>
												</div>

												{!! $section['description'] !!}


											</div>
											
										</div>
							

									</div>

								</div>
								
							</div>

							<div class="GridLex-col-3_sm-4_xs-12_xss-12">
							
								<aside class="sidebar-wrapper pt-0-xs">

									<div class="chapter-playlist-module mb-30">
								
										<div class="chapter-playlist">
											<h5>{{$section['course']['name']}}</h5>
											<ul class="playlist">
												@foreach($section['course']['sections'] as $sec)
												<li class="clearfix">
													<a href="/sections/{{$sec['id']}}">
														<span class="icon"><i class="fa fa-play-circle"></i></span>
														{{$sec['name']}}
														<span class="duration">{{$sec['time']}}</span>
													</a>
												</li>
												@endforeach
											</ul>
										</div>
										
									</div>

									{{--<div class="sidebar-module pb-30 clearfix">--}}
										{{----}}
										{{--<div class="sidebar-header clearfix">--}}
											{{--<h4 class="mb-15">Lessons in this course</h4>--}}
										{{--</div>--}}
									{{----}}
										{{--<div class="other-chapter">--}}
											{{--<ul class="other-chapter-list">--}}
												{{--<li class="clearfix">--}}
													{{--<a href="#">--}}
														{{--<div class="chapter">--}}
															{{--<span>Lesson 02</span>--}}
														{{--</div>--}}
														{{--<div class="title">--}}
															{{--<h6>Photoshop CS6 workspace and features</h6>--}}
														{{--</div>--}}
													{{--</a>--}}
												{{--</li>--}}
												{{--<li class="clearfix">--}}
													{{--<a href="#">--}}
														{{--<div class="chapter">--}}
															{{--<span>Lesson 03</span>--}}
														{{--</div>--}}
														{{--<div class="title">--}}
															{{--<h6>Adobe Bridge For Photo Management</h6>--}}
														{{--</div>--}}
													{{--</a>--}}
												{{--</li>--}}
												{{--<li class="clearfix">--}}
													{{--<a href="#">--}}
														{{--<div class="chapter">--}}
															{{--<span>Lesson 04</span>--}}
														{{--</div>--}}
														{{--<div class="title">--}}
															{{--<h6>Image adjustments</h6>--}}
														{{--</div>--}}
													{{--</a>--}}
												{{--</li>--}}
												{{--<li class="clearfix">--}}
													{{--<a href="#">--}}
														{{--<div class="chapter">--}}
															{{--<span>Lesson 05</span>--}}
														{{--</div>--}}
														{{--<div class="title">--}}
															{{--<h6>Select parts of an image and an object</h6>--}}
														{{--</div>--}}
													{{--</a>--}}
												{{--</li>--}}
												{{--<li class="clearfix">--}}
													{{--<a href="#">--}}
														{{--<div class="chapter">--}}
															{{--<span>Lesson 06</span>--}}
														{{--</div>--}}
														{{--<div class="title">--}}
															{{--<h6>Crop and transform</h6>--}}
														{{--</div>--}}
													{{--</a>--}}
												{{--</li>--}}
												{{--<li class="clearfix">--}}
													{{--<a href="#">--}}
														{{--<div class="chapter">--}}
															{{--<span>Lesson 07</span>--}}
														{{--</div>--}}
														{{--<div class="title">--}}
															{{--<h6>Printing and sharing photos</h6>--}}
														{{--</div>--}}
													{{--</a>--}}
												{{--</li>--}}
											{{--</ul>--}}
										{{--</div>--}}
										{{----}}
									{{--</div>--}}
									
									<div class="sidebar-module clearfix">
										
										<div class="sidebar-header clearfix">
											<h4 class="mb-15">تدریس شده توسط</h4>
										</div>
										@for($i=0;$i<=$section['Teacher_count'];$i++)
										<a href="/instructor/{{$section['Teacher'.$i]['id']}}" class="teacher-item-sm clearfix">
											<div class="image">
												@if(isset($section['Teacher'.$i]['image']))
													<?php $image=Config::get('store.storagepath').$section['Teacher'.$i]['image'];?>
												@else
													<?php $image='/images/course-item/01.jpg';?>
												@endif
												<img src="{{$image}}" alt="Man" />
											</div>
											<div class="content">
												<h3>{{$section['Teacher'.$i]['name']}}</h3>
												<p class="labeling">{{$section['Teacher'.$i]['description']}}</p>
											</div>
										</a>
										@endfor
										
									</div>
									
								</aside>
								
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

<!-- JS -->
<script type="text/javascript" src="/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="/js/jquery-migrate-1.4.1.min.js"></script>
<script type="text/javascript" src="/bootstrap-rtl-3.3.4/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="/js/spin.min.js"></script>
<script type="text/javascript" src="/js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="/js/typed.js"></script>
<script type="text/javascript" src="/js/placeholderTypewriter.js"></script>
<script type="text/javascript" src="/js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="/js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="/js/select2.full.js"></script>
<script type="text/javascript" src="/js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="/js/readmore.min.js"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script type="text/javascript" src="/js/bootstrap-rating.js"></script>
<script type="text/javascript" src="/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="/js/creditly.js"></script>
<script type="text/javascript" src="/js/video.min.js"></script>
<script type="text/javascript" src="/js/videojs-ie8.min.js"></script>
<script type="text/javascript" src="/js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="/js/bootstrap-modal.js"></script>
<script type="text/javascript" src="/js/customs.js"></script>

<!-- Call the plugin -->

</body>


</html>