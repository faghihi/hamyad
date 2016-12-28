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

	<link href="/css/animate.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
	<link href="/css/plugin.css" rel="stylesheet">

	<!-- CSS Custom -->
	<link href="/css/style.css" rel="stylesheet">

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
					
					<h1 class="page-title">بسته ها</h1>
					
					<div class="row">
					
						<div class="col-xs-12 col-sm-8">
							<ol class="breadcrumb">
								<li><a href="/">خانه</a></li>
								<li><a href="#">آموزش</a></li>
								<li class="active">بسته</li>
							</ol>
						</div>
						
					</div>
					
				</div>

			</div>
			
			<div class="container pt-60 pb-70">
				
				<div class="row">
					
					<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
					
						<div class="section-title">

							<h2 class="text-center">بسته ها</h2>

							<p>بسته های <strong>همیاد</strong> این امکان را برای شما فراهم میکند که با قیمتی مناسب چندین درس را به صورت همزمان در دروس خود داشته باشید .</p>

						</div>

					</div>

				</div>

				<div class="pricing-wrapper-02 clearfix">

					<div class="GridLex-gap-30">
				
						<div class="GridLex-grid-noGutter-equalHeight">
							@foreach($Packs as $pack)
							<div class="GridLex-col-6_sm-6_xs-12_xss-12">
							
								<a href="#" class="pricing-item-02 clearfix" data-target="#packModal{{$pack['id']}}" data-toggle="modal">
							
									<div class="pricing-heading">

										<h6 class="pricing-title">{{$pack['title']}}</h6>
										<p class="pricing-price">
											@if($pack['price_day'] > 1000)
												<?php $price=$pack['price_day']/1000 . ' هزار تومان'?>
											@else
												<?php $price=$pack['price_day'] . ' تومان'?>
											@endif
											{{$price}}
											<span>/ روزانه </span>
										</p>
										<p class="pricing-price">
											@if($pack['price_month'] > 1000)
												<?php $price=$pack['price_month']/1000 . ' هزار تومان'?>
											@else
												<?php $price=$pack['price_month'] . ' تومان'?>
											@endif
											{{$price}}
											<span>/ ماهانه </span>
										</p>
										<p class="pricing-price">
											@if($pack['price_year'] > 1000)
												<?php $price=$pack['price_year']/1000 . ' هزار تومان'?>
											@else
												<?php $price=$pack['price_year'] . ' تومان'?>
											@endif
											{{$price}}
											<span>/ سالانه </span>
										</p>

									</div>
									
									<div class="pricing-content">
									
										<ul class="pricing-list">
											@for($i=1;$i<=$pack['count_courses']&&$i<=4;$i++)
											<li>{{$pack['relate'.$i]}}</li>
											@endfor
											<li>برای مشاهده ی لیست کامل کلیک کنید.</li>

										</ul>
									
									</div>
								
								</a>
							
							</div>
								@endforeach
							
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

@foreach($Packs as $pack)
<div id="packModal{{$pack['id']}}" class="modal fade login-box-wrapper pack" data-width="800" data-backdrop="static" data-keyboard="false" tabindex="-1" style="display: none;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title text-center">لیست دروس بسته</h4>
	</div>

	<div class="modal-body">
		<div class="row gap-20">

			<div class="related-course mb-30">
				<?php $count=0; ?>

				<ul class="related-course-item  mb-20">
					@foreach($pack['courses'] as $course)
						@if($count%3==0)
							<li class="clearfix">
						<div class="GridLex-gap-30 pricing-wrapper-02">
							<div class="GridLex-grid-noGutter-equalHeight">
								@endif
								<div class="GridLex-col-4_sm-12_xs-4_xss-4">
									<a href="/courses/{{$course['id']}}" target="_blank">
										<div class="image">
											@if(!empty($course['image']))
												<?php $image=Config::get('store.storagepath').$course['image'];?>
											@else
												<?php $image='/images/course-item/01.jpg';?>
											@endif
											<img src="{{$image}}" alt="Related Course" />
										</div>
										<div class="content">
											<h6>{{$course['name']}}</h6>
											<br>
											<span class="price">
											@if($course['price'] < 1000)
													@if($course['price']==0)
														<?php $price='رایگان' ?>
													@else
														<?php $price=$course['price'] . ' تومان'?>
													@endif
												@else
													<?php $price=$course['price']/1000 . ' هزار تومان'?>
												@endif
												{{$price}}
											</span>
										</div>
									</a>
								</div>
								@if($count%3==2)
							</div>
						</div>
							</li>
							@endif
						<?php $count++; ?>
					@endforeach
				@if($count%3==1)
					</div>
				</div>
				</li>
				@endif
				</ul>

			</div>

		</div>
	</div>

	<div class="modal-footer text-center">
		<a href="/PackBuy/{{$pack['id']}}"><button form="course-pur" type="button" class="btn btn-primary">خرید</button></a>
		<button type="button" data-dismiss="modal" class="btn btn-dark">بستن</button>
	</div>
</div>
@endforeach

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
	<script src="/js/persianumber.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('*').persiaNumber();
		});
	</script>


</body>

</html>