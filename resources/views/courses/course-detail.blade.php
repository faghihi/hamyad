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
								<li class="active">توضیحات</li>
							</ol>
						</div>

					</div>

				</div>

			</div>

			<div class="course-detail-header">

				<div class="container">

					<div class="info clearfix">

						<div class="image">
							@if(!empty($course['image']))
								<?php $image=Config::get('store.storagepath').$course['image'];?>
							@else
								<?php $image='/images/course-item/01.jpg';?>
							@endif
							<img src="{{$image}}" alt="Image" class="img-responsive" />
						</div>
						<div class="content">
							<h2>{{$course['name']}}</h2>
						</div>

						<ul class="meta-list">


							<li>
								<div class="meta-category">
									<div class="content">
										<span class="text-muted mt-3 block">دسته بندی</span>
										{{--<h6><a href="course-detail-section-2" class="anchor">Web Design</a>, <a href="course-detail-section-2" class="anchor">HTML</a></h6>--}}
										<h6>{{$course['category']['name']}}</h6>
									</div>
								</div>
							</li>

							<li>
								<div class="meta-category">
									<div class="content">
										<span class="text-muted mt-3 block">طول دوره</span>
										<h6>{{$course['sections_time']}} دقیقه<span> ({{$course['sections_count']}} درس) </span></h6>
									</div>
								</div>
							</li>

							<li>
								<div class="meta-rating">
									<span class="text-muted mt-3 block">امتیاز</span>
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
								</div>
							</li>

							<li class="meta-price">
								<div class="price bg-danger">
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
								</div>
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

											<li class="heading"><h5>منوی دوره</h5></li>
											<li>

												<ul class="nav faq-nav">
													<li><a href="#course-detail-section-0" class="anchor">معرفی دوره</a></li>
													<li><a href="#course-detail-section-1" class="anchor">دروس دوره</a></li>
													<li><a href="#course-detail-section-2" class="anchor">اساتید</a></li>
													<li><a href="#course-detail-section-3" class="anchor">نظرات</a></li>
													<li><a href="#course-detail-section-4" class="anchor">دروس مرتبط</a></li>
												</ul>

											</li>

										</ul>
										@if(Auth::check() && Auth::user()->courses_take()->where('courses.id', $course->id)->exists())
											<div class="clearfix mb-20 mt-30">
												<a href="/profile" class="btn btn-success btn-block btn-md">رجوع به پروفایل</a>
											</div>
										@else
											<div class="clearfix mb-20 mt-30">
												<a href="/CourseBuy/{{$course['id']}}" class="btn btn-primary btn-block btn-md">همین حالا عضو شوید</a>
											</div>
										@endif
									</div>

								</aside>

							</div>

							<div class="GridLex-col-9_sm-8_xs-12_xss-12">

								<div class="content-wrapper">

									<div class="detail-content-wrapper">

										<div id="course-detail-section-0" class="course-detail-section">

											<div class="section-title mb-20">
												<h3>معرفی دوره</h3>
											</div>

											<div class="flex-video mb-40">

												{{--<img class="img-responsive" src="/images/blog/01.jpg">--}}
												@if(!empty($course['image']))
													<?php $image=Config::get('store.storagepath').$course['image'];?>
												@else
													<?php $image='/images/course-item/01.jpg';?>
												@endif

												<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" poster="{{$image}}" data-setup='{"fluid": true}'>

													{{--<source src="{{$section['link']}}" type="video/mp4">--}}
													<?php
														$thiss=0;
														foreach ($course->section as $section )
															{
																if ($section->part==0){
																	$thiss=$section;
																	break;
																}
															}
													?>
													@if($thiss)
														<source src="{{Config::get('store.storagepath').$thiss->link}}" type="video/mp4">
													@endif


												</video>

											</div>

											<div class="course-intro">

												<div class="listing-box clearfix">

													<h5>مشخصات اصلی دوره</h5>

													<ul class="listing-box-list">

														<li>
															<div class="row gap-10">
																<div class="col-xs-5 col-sm-6"><i class="fa fa-clock-o mr-5"></i>  طول دوره </div>
																<div class="col-xs-7 col-sm-6 text-left font600">{{$course['sections_time']}} دقیقه</div>
															</div>
														</li>

														<li>
															<div class="row gap-10">
																<div class="col-xs-5 col-sm-5"><i class="fa fa-pencil-square-o mr-5"></i>  تعداد دروس </div>
																<div class="col-xs-7 col-sm-7 text-left font600">{{$course['sections_count']}} درس </div>
															</div>
														</li>

														<li>
															<div class="row gap-10">
																<div class="col-xs-5 col-sm-5"><i class="fa fa-users mr-5"></i> تعداد شرکت کنندگان</div>
																<div class="col-xs-7 col-sm-7 text-left font600">{{$course['std_count']}} نفر</div>
															</div>
														</li>

													</ul>

												</div>

											</div>

											<h5 class="text-uppercase font700">در مورد دوره </h5>

											<p>
												{!! $course['description'] !!}
												<?php #TODO Empty Solution ?>
											</p>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
										</div>

										<div id="course-detail-section-1" class="course-detail-section">

											<div class="section-title mb-20">

												<h3>مشحصات دروس دوره</h3>

											</div>

											<div class="course-lession-wrapper-2 alt-item-bg">
												@foreach($course['section'] as $section)
												<a href="/sections/{{$section['id']}}" class="course-lession-item-2">

													<div class="content-top">

														<div class="row">

															<div class="col-xs-12 col-sm-6 mb-15">

																<span class="lebal-lesson"> قسمت {{$section['part']}} </span>
																{{--<span class="label label-success">Free</span>--}}

															</div>

															<div class="col-xs-12 col-sm-6 mb-15">
																<div class="meta text-left text-right-xs">
																	<i class="fa fa-video-camera"></i>  ویدئو <span class="mh-5">|</span> <i class="fa fa-clock-o"></i> {{$section['time']}} دقیقه
																</div>
															</div>

														</div>

													</div>

													<div class="content">

														<h5>{{$section['name']}}</h5>

														<p>
															{{$section['description']}}
														</p>

													</div>

												</a>
												@endforeach
											</div>

										</div>

										<div id="course-detail-section-2" class="course-detail-section">

											<div class="section-title mb-20">
												<h3>About Teacher</h3>
											</div>

											<div class="teacher-item-list-02-wrapper">

												<div class="teacher-item-list-02-sub hidden-after-sm">
													<?php $count=0;?>
													@foreach($course['teachers'] as $teacher)
															<?php $count++?>
														@if($count%2==1)
														<div class="row gap-40">
														@endif
															<div class="col-xs-12 col-sm-12 col-md-6">

																<div class="teacher-item-list-02 clearfix">

																	<div class="row gap-20">

																		<div class="col-xs-12 col-sm-3 col-md-4">

																			<div class="image">
																				@if(!empty($teacher['image']))
																					<?php $image=Config::get('store.storagepath').$teacher['image'];?>
																				@else
																					<?php $image='/images/man/02.jpg';?>
																				@endif
																				<img src="{{$image}}" alt="Image" />
																			</div>

																			<div class="clear"></div>

																		</div>

																		<div class="col-xs-12 col-sm-9 col-md-8">

																			<div class="content">

																				<span class="font700 block text-uppercase mb-5 spacing-10 font11">استاد </span>
																				<h4><a href="#">{{$teacher['name']}}</a></h4>
																				<p class="labeling">{{$teacher['description']}}</p>

																				{{--<p class="short-info">About to in so terms voice at. Equal an would is found seems of.</p>--}}

																				<a href="/instructor/{{$teacher['id']}}" class="btn btn-primary btn-inverse btn-sm">بیشتر</a>

																			</div>

																		</div>

																	</div>

																</div>

															</div>
															@if($count%2==0)
															</div>
															@endif
													@endforeach
													@if($count%2==1)
														</div>
													@endif

												</div>

											</div>

											<div class="clear mb-10"></div>

										</div>

										<div id="course-detail-section-3" class="course-detail-section">

											<div class="section-title mb-20">
												<h3>نظرات</h3>
											</div>

											<div class="review-wrapper">

												<div class="review-header">

													<div class="row">

														<div class="col-xs-12 col-sm-12 col-md-3">

															<div class="review-overall">

																<h5>امتیاز</h5>
																@if($course['rates_count'] == 0)
																	<?php $rate=0;?>
																@else
																	<?php $rate=$course['rates_value']/$course['rates_count']?>
																@endif
																<p class="review-overall-point"><span>{{$rate}}</span> /5.0</p>

																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="{{$rate}}"/>
																	</div>
																	<span> ({{$course['rates_count']}} نظر)</span>
																</div>
																{{--<p class="review-overall-recommend">90% recommend this course</p>--}}
															</div>

														</div>

													</div>

												</div>

												<div class="review-content">

													<ul class="review-list">

														@foreach($course['Reviews'] as $item)
															<li class="clearfix">
																<div class="image img-circle">
																	@if(!empty($item['user_image']))
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

											<div class="mt-30 mb-10 text-left">

												<a href="/CourseReview/{{$course['id']}}" class="btn btn-primary btn-sm">نظرات بیشتر</a>
												<a href="/CourseReview/{{$course['id']}}#review-form" class="btn btn-danger btn-sm anchor">نظرتان را بگذارید</a>

											</div>

										</div>

										<div id="course-detail-section-4" class="course-detail-section">

											<div class="section-title mb-20">
												<h3>دوره های مرتبط</h3>
											</div>

											<div class="course-item-wrapper alt-bg-white course-item-wrapper-mmb-45 gap-20">

												<div class="GridLex-grid-noGutter-equalHeight">
													@for($i=1;$i<=3;$i++)
														@if(isset($course['relate'.$i]))
															<div class="GridLex-col-4_mdd-3_sm-6_xs-6_xss-12">
																<div class="course-item">
																	<a href="/courses/{{$course['relate'.$i]['id'] }}">
																		<div class="course-item-image">
																			@if(!empty($course['relate'.$i]['image']))
																				<?php $image=Config::get('store.storagepath').$course['relate'.$i]['image'];?>
																			@else
																				<?php $image='/images/course-item/01.jpg';?>
																			@endif
																			<img src="{{$image}}" alt="Image" class="img-responsive" />
																		</div>
																		<div class="course-item-top clearfix">
																			@if(isset($course['relate'.$i]['provider'][0]))
																			<div class="course-item-instructor text-left">
																				<span>{{$course['relate'.$i]['provider'][0]['name']}}</span>&nbsp;
																				<i class="fa fa-building-o" aria-hidden="true"></i>
																			</div>
																			@endif
																			<div class="course-item-price bg-danger">
																					@if($course['relate'.$i]['price'] < 1000)
																						@if($course['relate'.$i]['price']==0)
																							<?php $price='رایگان' ?>
																						@else
																							<?php $price=$course['relate'.$i]['price'] . ' تومان'?>
																						@endif
																					@else
																						<?php $price=$course['relate'.$i]['price']/1000 . ' هزار تومان'?>
																					@endif
																					{{$price}}
																			</div>
																		</div>
																		<div class="course-item-content">

																			<div class="rating-wrapper text-left">
																				<div class="rating-item">
																					@if($course['relate'.$i]['rates_count'] == 0)
																						<?php $rate=0;?>
																					@else
																						<?php $rate=$course['relate'.$i]['rates_value']/$course['relate'.$i]['rates_count']?>
																					@endif
																					<input type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="{{$rate}}"/>
																				</div>
																				<span>{{'(' .$course['relate'.$i]['rates_count'].' نظر '.')'}}</span>
																			</div>

																			<h3 class="text-primary">{{$course['relate'.$i]['name']}}</h3>
																			<p>{{$course['relate'.$i]['description']}}</p>

																		</div>
																		<div class="course-item-instructor">
																			<b class="text-primary">ارائه دهندگان</b>
																			<p>{{$course['relate'.$i]['Teachers']}}</p>
																		</div>
																		<div class="course-item-bottom clearfix">
																			<div><i class="fa fa-folder-open-o"></i><span class="block">{{$course['relate'.$i]['category']['name']}}</span></div>
																			<div><i class="fa fa-pencil-square-o"></i><span class="block">{{$course['relate'.$i]['sections_count']}} سرفصل</span></div>
																			<div><i class="fa fa-calendar-check-o"></i><span class="block">{{$course['relate'.$i]['sections_time']}} دقیقه</span></div>
																		</div>
																	</a>
																</div>
															</div>
														@endif
													@endfor
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
	<script src="/js/persianumber.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('*').persiaNumber();
		});
	</script>

</body>

</html>