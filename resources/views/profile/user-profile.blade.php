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

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body id="profile">

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
							<li class="active">پروفایل</li>
						</ol>
					</div>

					<div class="col-xs-12 col-sm-4 hidden-xs">
						<p class="hot-line"> <i class="fa fa-phone"></i> Hot Line: 1-222-33658</p>
					</div>

				</div>

			</div>

		</div>

		<div class="profile-detail course-detail-header">

			<div class="container">

				<div class="info clearfix">

					<div class="image">
						@if(isset($user['image']))
							<?php $image='/'.$user['image'];?>
						@else
							<?php $image='/images/man/01.jpg';?>
						@endif
						<img src="{{$image}}" alt="Image" class="img-responsive" />
					</div>
					<div class="content">
						<h2>{{$user['name']}}</h2>
					</div>

				</div>

			</div>

		</div>

		<div class="equal-content-sidebar-wrapper detail-page-wrapper">

			<div class="equal-content-sidebar-by-gridLex right-sidebar">

				<div class="container">

					<div class="GridLex-grid-noGutter-equalHeight">

						<div class="GridLex-col-3_sm-4_xs-12_xss-12 hidden-xs" >

							<aside class="sidebar-wrapper">

								<div class="scrollspy-sidebar alt-style-01">

									<ul class="scrollspy-sidenav">

										<li class="heading"><h5>منو</h5></li>
										<li>

											<ul class="nav faq-nav">
												<li><a href="#course-detail-section-0" class="anchor">اطلاعات شخصی</a></li>
												{{--<li><a href="#course-detail-section-1" class="anchor">پیام ها</a></li>--}}
												<li><a href="#course-detail-section-2" class="anchor">درس ها</a></li>
												<li><a href="#course-detail-section-3" class="anchor">پکیج ها</a></li>
											</ul>

										</li>

									</ul>

								</div>

							</aside>

						</div>

						<div class="GridLex-col-9_sm-8_xs-12_xss-12">

							<div class="content-wrapper">

								<div class="detail-content-wrapper">

									<div id="course-detail-section-0" class="course-detail-section">

										<div class="section-title text-right mb-20">
											<h3>اطلاعات شخصی</h3>
										</div>

										<div class="course-intro">

											<div class="listing-box clearfix">

												<h5>اطلاعات</h5>

												<ul class="listing-box-list">

													<li>
														<div class="row gap-10">
															<div class="col-xs-5 col-sm-3"><i class="fa fa-graduation-cap"></i> نام</div>
															<div class="col-xs-7 col-sm-9 text-right font600">{{$user['name']}}</div>
														</div>
													</li>

													<li>
														<div class="row gap-10">
															<div class="col-xs-5 col-sm-3"><i class="fa fa-envelope"></i> ایمیل</div>
															<div class="col-xs-7 col-sm-9 text-right font600">{{$user['email']}}</div>
														</div>
													</li>

												</ul>

											</div>

											<div class="changing-list">
												<h5 class="text-uppercase font700"><i class="fa fa-pencil-square-o mr-5"></i> تغییرات</h5>

												<button id="changeNameClick" class="btn btn-success btn-md">تغییر نام</button>
												<button id="changeAvatarClick" class="btn btn-default btn-md">تغییر عکس</button>
												<button id="changePassClick" class="btn btn-danger btn-md">تغییر پسورد</button>
											</div>

										</div>
										<div class="course-intro">

											{{--<form hidden>--}}

												<div class="form-group row" hidden>
													<div class="col-sm-1">
														<label>نام جدید</label>
													</div>
													<div class="col-sm-5">
														<input type="text" name="name" id="NameInput" class="form-control" placeholder="{{$user['name']}}">
													</div>

													<div class="col-sm-2">
														<button type="submit" id="changeName"  data-link="{{ url('/ChangeInfo') }}"  data-token="{{ csrf_token() }}" class="btn btn-primary btn-block">تغییر</button>
													</div>
												</div>
											{{--</form>--}}
											<div class="form-group row"  id="errorform" hidden>
												<div class="alert alert-danger">
													<p>
														عملیات خواسته شده مقدور نبود .

													</p>
												</div>
											</div>
											<div class="form-group row" hidden id="successform">
												<div class="alert alert-success">
													<p>
														انجام شد.

													</p>
												</div>
											</div>

											<form hidden>

												<div class="form-group row">
													<div class="col-sm-2">
														<label>عکس جدید</label>
													</div>
													<div class="col-sm-5">
														<input type="file" class="form-control">
													</div>

													<div class="col-sm-2">
														<button type="submit" id="changeAvatar" class="btn btn-primary btn-block">تغییر</button>
													</div>
												</div>
											</form>

											<form hidden>

												<div class="form-group row">

													<div class="col-sm-2">
														<label>پسورد جدید</label>
													</div>
													<div class="col-sm-5">
														<input class="form-control" type="password">
													</div>

												</div>

												<div class="form-group row">

													<div class="col-sm-2">
														<label>تکرار پسورد</label>
													</div>
													<div class="col-sm-5">
														<input class="form-control" type="password">
													</div>

													<div class="col-sm-2">
														<button type="submit" id="changePass" class="btn btn-primary btn-block">تغییر</button>
													</div>

												</div>
											</form>
										</div>
									</div>

									{{--<div id="course-detail-section-1" class="course-detail-section">

										<div class="section-title text-right mb-20">

											<h3>پیام ها</h3>

										</div>

										<div class="course-lession-wrapper">

											<div class="course-lession-item">

												<div class="course-lession-header">

													<h6>پیام های ارسالی از ادمین</h6>

												</div>

												<ul class="course-lession-list">

													<li class="clearfix">

														<a href="#">

															<div class="row gap-20">

																<div class="col-xs-12 col-sm-12 col-md-8">
																	<span class="font700">نام موضوع</span>&nbsp;<span class="label label-danger">جدید</span>
																</div>

																<div class="col-xs-12 col-sm-12 col-md-4 mt-5-sm">

																	<div class="course-lession-meta">

																		<div class="row text-left gap-10">

																			<div class="col-xs-12 col-sm-12">
																				25/12/1395
																			</div>

																		</div>

																	</div>

																</div>

															</div>

														</a>

													</li>

													<li class="clearfix">

														<a href="#">

															<div class="row gap-20">

																<div class="col-xs-12 col-sm-12 col-md-8">
																	<span class="font700">نام موضوع</span>&nbsp;<span class="label label-success">خوانده شده</span>
																</div>

																<div class="col-xs-12 col-sm-12 col-md-4 mt-5-sm">

																	<div class="course-lession-meta">

																		<div class="row text-left gap-10">

																			<div class="col-xs-12 col-sm-12">
																				16/2/94
																			</div>

																		</div>

																	</div>

																</div>

															</div>

														</a>

													</li>

												</ul>

											</div>

										</div>

									</div>--}}

									<div id="course-detail-section-2" class="course-detail-section">

										<div class="section-title text-right mb-20">
											<h3>درس های اخذ شده</h3>
										</div>

										<div class="course-item-wrapper alt-bg-white gap-20">

											<div class="GridLex-grid-noGutter-equalHeight">

												@foreach($Courses as $course)
												<div class="GridLex-col-4_mdd-6_xs-6_xss-12">
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
															@if(isset($course['provider'][0]))
															<div class="course-item-top clearfix">
																<div class="course-item-instructor text-left">
																	<span>{{$course['provider'][0]['name']}}</span>&nbsp;
																	<i class="fa fa-building-o" aria-hidden="true"></i>
																</div>
															</div>
															@endif
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

										@if(count($Courses) > 3)
											<div class="mt-30 mb-10 text-left">

												<a href="#" class="btn btn-danger btn-sm anchor">مشاهده ی تعداد بیشتر</a>

											</div>
										@endif

									</div>

									<div id="course-detail-section-3" class="course-detail-section">

										<div class="section-title text-right mb-20">
											<h3>پکیج ها</h3>
										</div>

										{{--<div class="course-item-wrapper alt-bg-white gap-20">--}}
											{{--<div class="pricing-wrapper-02 clearfix">--}}

										<div class="GridLex-gap-30 pricing-wrapper-02">
											<?php $count=0; ?>
											@foreach($Packs as $pack)
												@if($count % 3==0)
													<div class="GridLex-grid-noGutter-equalHeight">
												@endif
														<div class="GridLex-col-4_sm-12_xs-4_xss-4">

															<a href="/packs/{{$pack['id']}}" class="pricing-item-02 clearfix" >

																<div class="pricing-heading">

																	<h6 class="pricing-price">{{$pack['title']}}</h6>
																	<p class="pricing-heading">تاریخ پایان اعتبار:  <span>{{$pack['end']}}</span></p>
																	<p class="font-sm">فعال</p>

																</div>

															</a>

														</div>
													@if($count%3==2)
													</div>
													@endif
												<?php $count++; ?>
											@endforeach
												@if($count%3==0 || $count==1)
													</div>
												@endif

											@if(count($Packs)>3)
											<div class="mt-30 mb-10 text-left">

												<a href="#" class="btn btn-danger btn-sm anchor">مشاهده ی تعداد بیشتر</a>

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
<script type="text/javascript" src="/js/profileChange.js"></script>

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