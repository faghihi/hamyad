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
				
					<h1 class="page-title">Review for Introduction to HTML: Build a Portfolio Website</h1>
					
					<div class="row">
					
						<div class="col-xs-12 col-sm-8">
							<ol class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li><a href="#">Courses list</a></li>
								<li class="active">Course Detail</li>
							</ol>
						</div>
						
					</div>
					
				</div>

			</div>
			
			<div class="equal-content-sidebar-wrapper detail-page-wrapper">
				
				<div class="equal-content-sidebar-by-gridLex right-sidebar">
	
					<div class="container">
					
						<div class="GridLex-grid-noGutter-equalHeight">

							<div class="GridLex-col-3_sm-4_xs-12_xss-12">

								<aside class="sidebar-wrapper pt-30">

									<div class="scrollspy-sidebar alt-style-01">

										<div class="sidebar-header clearfix">
											<h4 class="mb-15">دوره مورد نظر ‌</h4>
										</div>

										<div class="course-item alt-no-bottom bg-light-02">

											<div class="course-item-image">
												@if(isset($course['image']))
													<?php $image='../'.$course['image'];?>
												@else
													<?php $image='../images/course-item/01.jpg';?>
												@endif
												<img src="{{$image}}" alt="Image" class="img-responsive" />
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

												<a href="/courses/{{$course['id']}}" class="btn btn-primary btn-block btn-sm"><i class="ion-arrow-right-a"></i>  بازگشت به دوره </a>

											</div>


										</div>

										<div class="clearfix mb-40 mt-25">

											<a href="#review-form" class="btn btn-primary btn-block btn-sm anchor btn-inverse"><i class="ion-compose"></i>  نظر بدهید</a>
										</div>

									</div>

								</aside>

							</div>

							<div class="GridLex-col-9_sm-8_xs-12_xss-12">

								<div class="content-wrapper mt-10">

									<div class="detail-content-wrapper mb-0">

										<div class="course-detail-section">

											<div class="review-wrapper">

												<div class="review-header">

													<div class="row">

														<div class="col-xs-12 col-sm-12 col-md-12">

															<div class="review-overall">

																<h5>رتبه ی درس</h5>
																<p class="review-overall-point">5.0/ <span>4.6</span> </p>

																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="3.5"/>
																	</div>
																	<span> (7 نظر)</span>
																</div>
																<p class="review-overall-recommend">90% از کاربران این درس را به شما پیشنهاد می کنند.</p>

															</div>

														</div>
													</div>

												</div>

												<div class="review-content">

													<br>
													@if (count($errors) > 0)
														<div class="alert alert-danger">
															<ul>
																@foreach ($errors->all() as $error)
																	<li>{{ $error }}</li>
																@endforeach
															</ul>
														</div>
													@endif
														@if (isset($_GET['success']))
															<div class="alert alert-success">
																<p>
																	پیام شما با موفقیت ارسال شد و پس از تایید به نمایش در خواهد آمد
																</p>
															</div>
														@endif
													<ul class="review-list">
														@foreach($Data as $item)
															<li class="clearfix">
																<div class="image img-circle">
																	@if(isset($item['user_image']))
																		<?php $image='/'.$item['user_image'];?>
																	@else
																		<?php $image='/images/course-item/01.jpg';?>
																	@endif
																	<image class="img-circle" src="{{$image}}" alt="Man" />
																</div>
																<div class="content">
																	<div class="row gap-20 mb-0">
																		<div class="col-xs-12 col-sm-9">
																			<h6>{{$item['user_name']}}</h6>
																			<div class="rating-wrapper">
																				<div class="rating-item">
																					<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="{{$item['course_rate']}}"/>
																				</div>
																			</div>
																		</div>
																	</div>

																	<div class="review-text">
																		{{$item['comment']}}
																	</div>

																</div>
															</li>
														@endforeach
													</ul>

												</div>

											</div>

											{{--<div class="mt-30 mb-10 text-center">--}}

												{{--<a href="course-review.blade.php" class="btn btn-primary btn-sm">Read more reviews</a>--}}

											{{--</div>--}}

										</div>
										@if($able==1)
										<div id="review-form" class="course-detail-section">

											<div class="section-title text-right mb-20">
												<h3>نظرتان را وارد کنید </h3>
											</div>

											<div class="review-form-wrapper mb-0">
												<form class="clearfix" method="post" action="/CourseReview/{{$course['id']}}">

													{{ csrf_field() }}
													{{--<div class="row gap-20">--}}

														{{--<div class="col-xs-12 col-sm-6 col-md-6">--}}

															{{--<div class="form-group">--}}
																{{--<label>Your Name: </label>--}}
																{{--<input type="text" class="form-control" />--}}
															{{--</div>--}}

														{{--</div>--}}

														{{--<div class="col-xs-12 col-sm-6 col-md-6">--}}

															{{--<div class="form-group">--}}
																{{--<label>Your Email Address: </label>--}}
																{{--<input type="email" class="form-control" />--}}
															{{--</div>--}}

														{{--</div>--}}

													{{--</div>--}}

													<div class="col-5-wrapper col-2-wrapper-sm gap-20">

														{{--<div>--}}

															{{--<div class="form-group">--}}

																{{--<label>Content: </label>--}}

																{{--<div class="rating-wrapper">--}}
																	{{--<div class="rating-item">--}}
																		{{--<input type="hidden" class="rating-label" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" value="0" />--}}
																	{{--</div>--}}
																{{--</div>--}}

															{{--</div>--}}

														{{--</div>--}}

														{{--<div>--}}

															{{--<div class="form-group">--}}

																{{--<label>Knowledge: </label>--}}

																{{--<div class="rating-wrapper">--}}
																	{{--<div class="rating-item">--}}
																		{{--<input type="hidden" class="rating-label" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" value="0" />--}}
																	{{--</div>--}}
																{{--</div>--}}

															{{--</div>--}}

														{{--</div>--}}

														{{--<div>--}}

															{{--<div class="form-group">--}}

																{{--<label>Assignment: </label>--}}

																{{--<div class="rating-wrapper">--}}
																	{{--<div class="rating-item">--}}
																		{{--<input type="hidden" class="rating-label" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" value="0" />--}}
																	{{--</div>--}}
																{{--</div>--}}

															{{--</div>--}}

														{{--</div>--}}

														{{--<div>--}}

															{{--<div class="form-group">--}}

																{{--<label>Classroom: </label>--}}

																{{--<div class="rating-wrapper">--}}
																	{{--<div class="rating-item">--}}
																		{{--<input type="hidden" class="rating-label" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" value="0" />--}}
																	{{--</div>--}}
																{{--</div>--}}

															{{--</div>--}}

														{{--</div>--}}

														<div style="float: right">

															<div class="form-group">

																<label>امتیاز : </label>

																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" name="course" class="rating-label" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" value="0" />
																	</div>
																</div>

															</div>

														</div>

													</div>

													<div class="row gap-20">

														<div class="col-xs-12 col-sm-12 col-md-12">

															<div class="form-group">
																<label>پیام شما : </label>
																<textarea class="form-control form-control-sm" rows="5" name="comment"></textarea>
															</div>
														</div>

														<div class="clear"></div>

														<div class="col-xs-12 col-sm-12 col-md-12">
															<button class="btn btn-primary btn-sm mt-5">ثبت نظر </button>
														</div>

													</div>

												</form>

											</div>

										</div>
										@endif

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