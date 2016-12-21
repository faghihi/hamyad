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

<body id="attend">

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

				<h1 class="page-title">خرید</h1>

				<div class="row">

					<div class="col-xs-12 col-sm-8">
						<ol class="breadcrumb">
							<li><a href="/">صفحه اصلی</a></li>
							<li><a href="#">دروس</a></li>
							<li class="active">خرید</li>
						</ol>
					</div>

					<div class="col-xs-12 col-sm-4 hidden-xs">
						<p class="hot-line"> <i class="fa fa-phone"></i> Hot Line: 1-222-33658</p>
					</div>

				</div>

			</div>

		</div>

		<div class="equal-content-sidebar-wrapper detail-page-wrapper">

			<div class="equal-content-sidebar-by-gridLex right-sidebar">

				<div class="container">

					<div class="GridLex-grid-noGutter-equalHeight">

						<div class="GridLex-col-3_sm-4_xs-12_xss-12">

							<aside class="sidebar-wrapper">

								<div class="scrollspy-sidebar alt-style-01">

									<div class="sidebar-header clearfix">
										<h4 class="mb-15">خرید:</h4>
									</div>

									<div class="related-course mb-30">

										<ul class="related-course-item mb-20">
											<li class="clearfix">
												<a href="#">
													<div class="image">
														@if(! empty($Info['image']))
															<?php $image=Config::get('store.storagepath').$Info['image'];?>
														@else
															<?php $image='/images/course-item/01.jpg';?>
														@endif
														<img src="{{$image}}" alt="Related Course" />
													</div>
													<div class="content">
														@if(isset($Pack))
															<h6>{{$Info['title']}}</h6>
														@endif
														@if(isset($Course))
																<h6>{{$Info['name']}}</h6>
															@endif
													</div>
												</a>
											</li>
										</ul>

									</div>

								</div>

							</aside>

						</div>

						<div class="GridLex-col-9_sm-8_xs-12_xss-12">

							<div class="content-wrapper">

								<div class="payment-content-wrapper mb-0">

									<form id="payment-form" class="creditly-card-form"></form>

									<form id="coupon-form" ></form>

									<div class="row">

										<div class="col-xs-12 col-md-8">
											<div class="section-title text-right mb-20">
												<h3 class="mb-10">اطلاعات</h3>
											</div>
										</div>

									</div>

									<div class="payment-content-box">

										<div class="row gap-20">

											<div class="col-xs-12 col-sm-12 col-md-12">

												<div class="col-xs-3 col-sm-12 col-md-3"><h6 class="text-primary">نام خریدار</h6></div>
												<div class="col-xs-9 col-sm-12 col-md-9"><p>{{$user['name']}}</p></div>

											</div>

											<br>

											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="col-xs-3 col-sm-12 col-md-3"><h6 class="text-primary">ایمیل</h6></div>
												<div class="col-xs-9 col-sm-12 col-md-9"><p>{{$user['email']}}</p></div>
											</div>

										</div>

									</div>

									<div class="row">

										<div class="col-xs-12 col-md-12">
											<div class="section-title text-right mb-20">
												<h3 class="mb-10">قیمت</h3>
											</div>
										</div>

									</div>

									<div class="payment-content-box">

										<div class="GridLex-gap-30 no-mb featured-checkbox-wrapper no-bb-col-2">

											<div class="GridLex-grid-noGutter-equalHeight">

												@if(! isset($Pack))
												<div class="GridLex-col-6_sm-6_xs-12_xss-12">

													<div class="featured-checkbox">
														<div class="checkbox-block">
															<input id="featured_checkbox-1" name="featured_checkbox" value="general" type="checkbox" class="checkbox" checked/>
															<label class="clearfix" for="featured_checkbox-1">
																<span class="h6">مبلغ اصلی</span>
																<span class="p">مبلغ پرداختی شما به ازای دریافت داپمی این دوره </span>
																<span class="price">
																	@if($Info['price'] >= 1000)
																		<?php $price=$Info['price']/1000 . ' هزار تومان'?>
																	@else
																		<?php $price=$Info['price'] . ' تومان'?>
																	@endif
																	{{$price}}
																</span>
															</label>
														</div>
													</div>

												</div>
												@endif

												@if(isset($Pack))
												<div class="GridLex-col-6_sm-6_xs-12_xss-12">

													<div class="featured-checkbox">
														<div class="checkbox-block">
															<input id="featured_checkbox-2" name="featured_checkbox" value="daily" type="checkbox" class="checkbox"/>
															<label class="clearfix" for="featured_checkbox-2">
																<span class="h6">قیمت روزانه</span>
																<span class="p">این پک فقط به مدت 1 روز مهلت استفاده دارد.</span>
																<span class="price">
																	@if($Info['price_day'] >= 1000)
																		<?php $price=$Info['price_day']/1000 . ' هزار تومان'?>
																	@else
																		<?php $price=$Info['price_day'] . ' تومان'?>
																	@endif
																	{{$price}}
																</span>
															</label>
														</div>
													</div>

												</div>

												<div class="GridLex-col-6_sm-6_xs-12_xss-12">

													<div class="featured-checkbox">
														<div class="checkbox-block">
															<input id="featured_checkbox-3" name="featured_checkbox" value="month" type="checkbox" class="checkbox"/>
															<label class="clearfix" for="featured_checkbox-3">
																<span class="h6">ماهانه</span>
																<span class="p">این پک فقط به مدت 1 ماه مهلت استفاده دارد.</span>
																<span class="price">
																	@if($Info['price_month'] >= 1000)
																		<?php $price=$Info['price_month']/1000 . ' هزار تومان'?>
																	@else
																		<?php $price=$Info['price_month'] . ' تومان'?>
																	@endif
																	{{$price}}
																</span>
															</label>
														</div>
													</div>

												</div>

												<div class="GridLex-col-6_sm-6_xs-12_xss-12">

													<div class="featured-checkbox">
														<div class="checkbox-block">
															<input id="featured_checkbox-4" name="featured_checkbox" value="year" type="checkbox" class="checkbox"/>
															<label class="clearfix" for="featured_checkbox-4">
																<span class="h6">سالانه</span>
																<span class="p">این پک فقط به مدت 1 سال مهلت استفاده دارد.</span>
																<span class="price">
																	@if($Info['price_year'] >= 1000)
																		<?php $price=$Info['price_year']/1000 . ' هزار تومان'?>
																	@else
																		<?php $price=$Info['price_year'] . ' تومان'?>
																	@endif
																	{{$price}}
																</span>
															</label>
														</div>
													</div>

												</div>
													@endif

											</div>
										</div>

										<br><br>

										<div class="row">

											<div class="form-group">

												<div class="col-xs-2 col-sm-12 col-md-2">

													<label class="text-primary">کد تخفیف: </label>

												</div>

												<div class="col-xs-4 col-sm-12 col-md-4">

													<input form="payment-form" type="text" class="form-control" placeholder="کد" />

												</div>

												<div class="col-xs-2 col-sm-12 col-md-2">

													<button class="btn btn-danger btn-block btn-sm mt-5">بررسی</button>

												</div>

											</div>

										</div>

										<br>

										<div class="GridLex-gap-30 no-mb featured-checkbox-wrapper no-bb-col-2">

											<div id="paymentPaypal" class="payment-option-form">
												<div class="inner">

													<h4 class="text-primary">مبلغ پرداختی: <span class="font700" id="full-price">100 هزار تومان </span></h4>
													<p>به جای: <strong id="now-price">150 هزار تومان</strong>. </p>
													<p><span class="text-warning">تذکر </span>ابتدا مبلغ را انتخاب کرده و سپس کد تخفیف را اعمال کنید، در غیر اینصورت مبلغ محاصبه نمی شود.</p>
												</div>

											</div>

										</div>

									</div>

									<div class="row">

										<div class="col-xs-12 col-md-8">
											<div class="section-title text-left mb-20">
												<h3 class="mb-10">انتخاب درگاه پرداخت</h3>
											</div>
										</div>

									</div>

									<div class="payment-content-box">

										<div id="paymentOption" class="payment-option-wrapper">

											<div class="row">

												<div class="col-sm-12">

													<div class="radio-block font-icon-radio">
														<input id="payments1" name="payments" type="radio" class="radio" value="paymentsCreditCard" />
														<label class="" for="payments1"><span>بانک ملی</span> <img src="images/payment-credit-cards.jpg" alt="Image"></label>
													</div>

												</div>

												<div class="clear mb-10"></div>

												<div class="col-sm-12">
													<div class="radio-block font-icon-radio">
														<input id="payments2" name="payments" type="radio" class="radio" value="paymentPaypal"/>
														<label class="" for="payments2"><span>بانک تجارت</span> <img src="images/payment-paypal.jpg" alt="Image"></label>
													</div>
												</div>

											</div>

										</div>

									</div>

									<button form="coupon-form" class="btn btn-primary mt-10">Proceed to payment</button>

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


<script type="text/javascript">
$(function() {
	var creditly = Creditly.initialize(
		'.creditly-wrapper .expiration-month-and-year',
		'.creditly-wrapper .credit-card-number',
		'.creditly-wrapper .security-code',
		'.creditly-wrapper .card-type');
});
</script>

</body>

</html>