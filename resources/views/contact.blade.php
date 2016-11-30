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
					
					<h1 class="page-title">Contacts</h1>
					
					<div class="row">
					
						<div class="col-xs-12 col-sm-8">
							<ol class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li class="active">Contacts</li>
							</ol>
						</div>
						
						<div class="col-xs-12 col-sm-4 hidden-xs">
							<p class="hot-line"> <i class="fa fa-phone"></i> Hot Line: 1-222-33658</p>
						</div>
						
					</div>
					
				</div>

			</div>
			
			<div class="contact-page-wrapper">
			
				<div class="container">
					
					<div class="contact-map">
					
						<div id="map" data-lat="35.702831" data-lon="51.408292" style="width: 100%; height: 500px;"></div>

						<div class="infobox-wrapper shorter-infobox contact-infobox">
							<div id="infobox">
								<div class="infobox-address">
									<h6>ما اینجا هستیم</h6>
								</div>
							
							</div>
						</div>
						
						<div class="clear mb-50"></div>
						
						<div class="row">
						
							<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
							
								<div class="section-title">
									<h2 class="text-center">contact us for help</h2>
									<p>However venture pursuit he am mr cordial. Forming musical am hearing studied be luckily. <strong>Ourselves for determine</strong> attending how led gentleman sincerity.</p>
								</div>
							</div>
						
						</div>
						
						<div class="row">

							<div class="col-sm-7 col-md-6 col-md-offset-1 mb-30">
							
								<form class="contact-form-wrapper" data-toggle="validator">
								
									<div class="row">
									
										<div class="col-sm-6">
										
											<div class="form-group">
												<label for="inputName">نام <span class="font10 text-danger">(اجباری)</span></label>
												<input id="inputName" type="text" class="form-control" data-error="Your name is required" required>
												<div class="help-block with-errors"></div>
											</div>
											
										</div>
										
										<div class="col-sm-6">
										
											<div class="form-group">
												<label for="inputEmail">ایمیل <span class="font10 text-danger">(اجباری)</span></label>
												<input id="inputEmail" type="email" class="form-control" data-error="Your email is required and must be a valid email address" required>
												<div class="help-block with-errors"></div>
											</div>
											
										</div>
										
										<div class="col-sm-12">
										
											<div class="form-group">
												<label>موضوع</label>
												<input type="text" class="form-control" />
											</div>
											
										</div>
										
										<div class="col-sm-12">
										
											<div class="form-group">
												<label for="inputMessage">متن پیام <span class="font10 text-danger">(اجباری)</span></label>
												<textarea id="inputMessage" class="form-control" rows="8" data-minlength="20" data-error="حداقل پیامتان باید شامل 20 کلمه باشد" required></textarea>
												<div class="help-block with-errors"></div>
											</div>

										</div>
										
										<div class="col-sm-12">
											<button type="submit" class="btn btn-primary mt-5">ارسال</button>
										</div>
										
									</div>
									
								</form>
								
							</div>
							
							<div class="col-sm-5 col-md-4">
							
								<ul class="address-list">
									<li>
											<h5>Address</h5>
											<address> 545, Marina Rd., <br/>Mohammed Bin Rashid Boulevard, <br/>Dubai 123234 </address>
									</li>
									<li>
											<h5>Email</h5><a href="#">office@company.com</a>
									</li>
									<li>
											<h5>Phone Number</h5><a href="#">1-866-599-6674</a>
									</li>
									<li>
											<h5>Skype</h5><a href="#">your_skype_id</a>
									</li>
									<li>
											<h5>Social Networks</h5>
											<div class="contact-social">
											
												<a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
											
											</div>
									</li>
										
								</ul>
							
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

<script src="js/validator.min.js"></script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/infobox.js"></script>

<script>
	function initialize() {

// Create an array of styles.
var styles = [{"featureType":"all","elementType":"labels","stylers":[{"lightness":63},{"hue":"#ff0000"}]},{"featureType":"administrative","elementType":"all","stylers":[{"hue":"#000bff"},{"visibility":"on"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels","stylers":[{"color":"#4a4a4a"},{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels.text","stylers":[{"weight":"0.01"},{"color":"#727272"},{"visibility":"on"}]},{"featureType":"administrative.country","elementType":"labels","stylers":[{"color":"#ff0000"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"color":"#ff0000"}]},{"featureType":"administrative.province","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"labels.text","stylers":[{"color":"#545454"}]},{"featureType":"administrative.locality","elementType":"labels.text","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text","stylers":[{"color":"#7c7c7c"},{"weight":"0.01"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text","stylers":[{"color":"#404040"}]},{"featureType":"landscape","elementType":"all","stylers":[{"lightness":16},{"hue":"#ff001a"},{"saturation":-61}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"color":"#828282"},{"weight":"0.01"}]},{"featureType":"poi.government","elementType":"labels.text","stylers":[{"color":"#4c4c4c"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"hue":"#00ff91"}]},{"featureType":"poi.park","elementType":"labels.text","stylers":[{"color":"#7b7b7b"}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.text","stylers":[{"color":"#999999"},{"visibility":"on"},{"weight":"0.01"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"hue":"#ff0011"},{"lightness":53}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"color":"#626262"}]},{"featureType":"transit","elementType":"labels.text","stylers":[{"color":"#676767"},{"weight":"0.01"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#0055ff"}]}];

var loc, map, marker, infobox;

var styledMap = new google.maps.StyledMapType(styles,  {name: "Styled Map"});

loc = new google.maps.LatLng($("#map").attr("data-lat"), $("#map").attr("data-lon"));

map = new google.maps.Map(document.getElementById("map"), {
	zoom: 14,
	center: loc,
	scrollwheel: false,
	//draggable:true,
	navigationControl: false,
	scaleControl: false,
	mapTypeControl:false,
	streetViewControl: false,
	mapTypeControlOptions: {
		mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
	},
	mapTypeId: google.maps.MapTypeId.ROADMAP,
});

//Associate the styled map with the MapTypeId and set it to display.
map.mapTypes.set('map_style', styledMap);
map.setMapTypeId('map_style');

marker = new google.maps.Marker({
	map: map,
	position: loc,
	//disableDefaultUI:true,

	icon:'images/map-marker/00.png',
	//pixelOffset: new google.maps.Size(-140, -100),
	visible: true

	//animation: google.maps.Animation.DROP
});

infobox = new InfoBox({
	content: document.getElementById("infobox"),
	disableAutoPan: true,
	//maxWidth: 150,
	pixelOffset: new google.maps.Size(0, -50),
	zIndex: null,
	alignBottom: true,
	isHidden: false,
	//closeBoxMargin: "12px 4px 2px 2px",
	closeBoxURL: "images/infobox-close.png",
	closeBoxClass:"infoBox-close",
	infoBoxClearance: new google.maps.Size(1, 1)
});

openInfoBox(marker);

google.maps.event.addListener(marker, 'click', function() {
	openInfoBox(this);
});

function openInfoBox(thisMarker){
	map.panTo(loc);
	map.panBy(0,-80);
	infobox.open(map, thisMarker);
}

var center;
function calculateCenter() {
	center = map.getCenter();
}
google.maps.event.addDomListener(map, 'idle', function() {
	calculateCenter();
});
google.maps.event.addDomListener(window, 'resize', function() {
	map.setCenter(center);
});

}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

</body>

</html>