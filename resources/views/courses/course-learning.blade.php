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
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="/images/ico/favicon.png">

    <!-- CSS Plugins -->
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="/bootstrap-rtl-3.3.4/dist/css/bootstrap-rtl.min.css" media="screen">

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
								<li><a href="/">Home</a></li>
								<li><a href="#">Courses list</a></li>
								<li class="active">Learning</li>
							</ol>
						</div>
						
						<div class="col-xs-12 col-sm-4 hidden-xs">
							<p class="hot-line"> <i class="fa fa-phone"></i> Hot Line: 1-222-33658</p>
						</div>
						
					</div>
					
				</div>

			</div>
			
			<div class="course-watching-header">
			
				<div class="container">
					
					<p class="mb-0">You are now watching: </p>
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

										<div class="flex-video vimeo mb-40"> 
											<iframe src="http://player.vimeo.com/video/43499940" allowfullscreen></iframe> 
										</div>
										
										<div class="watching-pager-wrapper">
											<ul class="watching-pager mb-30 clearfix">
												<li class="prev">
													<a href="#">
														<span class="text-primary font12">Previous lesson</span>
														<h5>1.1 Basic Editing</h5>
													</a>
												</li>
												<li class="next">
													<a href="#">
														<span class="text-primary font12">Next lesson</span>
														<h5>1.3 Interface Introduction</h5>
													</a>
												</li>
											</ul>
										</div>
										
										<div class="clear"></div>
										
										<div class="row">
							
											<div class="col-xss-12 col-xs-6 col-sm-6 col-md-6 mb-30">
											
												<div class="section-title mb-20">
													<h3>Chapter Description</h3>
												</div>

												<p>Now indulgence dissimilar for his thoroughly has terminated. Agreement offending commanded my an. Change wholly say why eldest period. Are projection put celebrated particular unreserved joy unsatiable its. In then dare good am rose bred or. On am in nearer square wanted.</p>
												
												<h6> Some tools used in chapter</h6>
												
												<ul>
													<li><a href="#" class="font700 pull-right">Notepad++</a> - Friendship contrasted solicitude insipidity in introduced literature it.</li>
													<li><a href="#" class="font700 pull-right">Codekit</a> - Now indulgence dissimilar for his thoroughly has terminated</li>
													<li><a href="#" class="font700 pull-right">Xampp</a> - Returned settling produced strongly ecstatic use yourself way</li>
												</ul>

												<p>Friendship contrasted solicitude insipidity in introduced literature it. He seemed denote except as oppose do spring my. Between any may mention evening age shortly can ability regular. He shortly sixteen of colonel colonel evening cordial to. Although jointure an my of mistress servants am weddings. Age why the therefore education unfeeling for arranging. Above again money own scale maids ham least led.</p>

											</div>
											
											<div class="col-xss-12 col-xs-6 col-sm-6 col-md-6">
											
												<div class="section-title mb-20">
													<h3>Video Subtitle</h3>
												</div>

												<div class="nicescroll-module video-subtitle" style="">

													<ul class="subtitle-list">
													
														<li><span class="time">0:15</span> So insisted received is occasion advanced honoured</li>
														
														<li><span class="time">0:45</span> Oh he decisively impression attachment friendship so if everything. </li>
														
														<li><span class="time">1:14</span> So feel been kept be at gate. Be september it extensive oh concluded of certainty.</li>
														
														<li><span class="time">1:34</span> Same an quit most an. Admitting an mr disposing sportsmen</li>
														
														<li><span class="time">2:21</span> Tried on cause no spoil arise plate. Longer ladies valley get esteem use led six</li>
														
														<li><span class="time">3:22</span> Spoke as as other again ye. Hard on to roof he drew. So sell side ye in mr evil. Longer waited mr of nature seemed. </li>
														
														<li><span class="time">4:03</span> So insisted received is occasion advanced honoured</li>
														
														<li><span class="time">4:26</span> Oh he decisively impression attachment friendship so if everything. </li>
														
														<li><span class="time">5:22</span> So feel been kept be at gate. Be september it extensive oh concluded of certainty.</li>
														
														<li><span class="time">5:50</span> Same an quit most an. Admitting an mr disposing sportsmen</li>
														
														<li><span class="time">6:02</span> Tried on cause no spoil arise plate. Longer ladies valley get esteem use led six</li>
														
														<li><span class="time">6:38</span> Spoke as as other again ye. Hard on to roof he drew. So sell side ye in mr evil. Longer waited mr of nature seemed. </li>
														
														<li><span class="time">7:11</span> Tried on cause no spoil arise plate. Longer ladies valley get esteem use led six</li>
														
														<li><span class="time">7:56</span> Spoke as as other again ye. Hard on to roof he drew. So sell side ye in mr evil. Longer waited mr of nature seemed. </li>
														
														<li><span class="time">8:31</span> So insisted received is occasion advanced honoured</li>
														
														<li><span class="time">9:06</span> Oh he decisively impression attachment friendship so if everything. </li>
														
														<li><span class="time">10:12</span> So feel been kept be at gate. Be september it extensive oh concluded of certainty.</li>
														
														<li><span class="time">10:46</span> Same an quit most an. Admitting an mr disposing sportsmen</li>
														
														<li><span class="time">11:39</span> Tried on cause no spoil arise plate. Longer ladies valley get esteem use led six</li>
														
														<li><span class="time">12:29</span> Spoke as as other again ye. Hard on to roof he drew. So sell side ye in mr evil. Longer waited mr of nature seemed. </li>
													
													</ul>
													
													<div class="text-center mt-20">
														<button class="btn btn-primary btn-sm">Load more...</button>
													</div>
													
												</div>
											
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

<div id="ajaxLoginModal" class="modal fade login-box-wrapper" data-width="500" data-backdrop="static" data-keyboard="false" tabindex="-1" style="display: none;"></div>
		
<div id="ajaxRegisterModal" class="modal fade login-box-wrapper" data-width="500" data-backdrop="static" data-keyboard="false" tabindex="-1" style="display: none;">
</div>

<div id="ajaxForgotPasswordModal" class="modal fade login-box-wrapper" data-width="500" data-backdrop="static" data-keyboard="false" tabindex="-1" style="display: none;"></div>


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
<script type="text/javascript" src="/js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="/js/bootstrap-modal.js"></script>
<script type="text/javascript" src="/js/customs.js"></script>


</body>


</html>