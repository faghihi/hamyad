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

					<h1 class="page-title">Feature Items</h1>

					<div class="row">

						<div class="col-xs-12 col-sm-8">
							<ol class="breadcrumb">
								<li><a href="../">Home</a></li>
								<li class="active">Courses</li>
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

																<div class="col-xs-12 col-sm-7 col-md-7">

																	<div class="form-group">
																		<select class="select2-multi form-control" dir="rtl" multiple data-placeholder="Java" data-maximum-selection-length="5" style="width: 100%;float: right;">
																			<option>All tags</option>
																			<option value="0"> Mathematics</option>
																			<option value="1"> Business</option>
																			<option value="2"> Computer</option>
																			<option value="3"> Marketing</option>
																			<option value="4"> Physics</option>
																			<option value="5"> Biology</option>
																			<option value="6"> Chemistry</option>
																			<option value="7"> Programming</option>
																			<option value="8"> Engineering</option>
																			<option value="9"> Design</option>
																			<option value="9"> Design</option>
																		</select>
																	</div>

																</div>

																<div class="col-xs-12 col-sm-5 col-md-5">

																	<div class="form-group">
																		<select class="select2-multi form-control" multiple data-placeholder="All Category" data-maximum-selection-length="3" style="width: 100%;">
																			<option>All Category</option>
																			<option value="0"> Mathematics</option>
																			<option value="1"> Business</option>
																			<option value="2"> Computer</option>
																			<option value="3"> Marketing</option>
																			<option value="4"> Physics</option>
																			<option value="5"> Biology</option>
																			<option value="6"> Chemistry</option>
																			<option value="7"> Programming</option>
																			<option value="8"> Engineering</option>
																			<option value="9"> Design</option>
																			<option value="9"> Design</option>
																		</select>
																	</div>

																</div>

															</div>

														</div>

														<div class="col-xs-12 col-sm-2 col-md-2 mt-12-xs">
															<button class="btn btn-block btn-primary btn-form"><i class="fa fa-search"></i></button>
														</div>

													</div>

												</div>
											</div>

										</div>

										<div class="sorting-header">

											<div class="row">

												<div class="col-xss-12 col-xs-12 col-sm-7 col-md-9">
													<h4>تعداد {{$course_count}} درس یافت شد</h4>
												</div>

												<div class="col-xss-12 col-xs-12 col-sm-5 col-md-3">
													<button class="btn btn-primary btn-block btn-toggle collapsed btn-form btn-inverse btn-sm" data-toggle="collapse" data-target="#change-search"></button>
												</div>

											</div>

										</div>

									</div>

									<div class="course-item-wrapper alt-bg-light clearfix">

										<div class="GridLex-gap-20">

											<div class="GridLex-grid-noGutter-equalHeight">
												@foreach($Data as $course)

												<div class="GridLex-col-3_mdd-3_sm-6_xs-6_xss-12">
													<div class="course-item">
														<a href="/courses/{{$course['id']}}">
															<div class="course-item-image">
																@if(isset($course['image']))
																	<?php $image=Config::get('store.storagepath').$course['image'];?>
																@else
																	<?php $image='/images/course-item/01.jpg';?>
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

									<div class="clear"></div>

									<div class="pager-wrappper clearfix">

										<div class="pager-innner">

											<div class="row">

												{{$Data->links('Pagination.default')}}

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