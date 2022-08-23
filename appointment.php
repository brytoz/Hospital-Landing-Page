<!--
	
		 .'''.    '        '''''''''   ''''.    '''''''   .'''.           
		'     '   '            '       '    '   '        '
		'     '   '            '       '     '  '''''    '
		'     '   '            '       '     '  '        '
		'     '   '            '       '    '   '        '
		 '...'    .......  '''''''''   '''''    '''''''   '...'
		 
		 
		
		'      '    .'''.     .'''.     '''''.   '''''''''    '''''''''        '        '
		'      '   '     '   '     '    '     '      '            '          '   '      '
		''''''''   '     '   '.         '....'       '            '         '     '     '
		'      '   '     '      ' .     '            '            '        '.     .'    '
		'      '   '     '         '    '            '            '       '  ' . '  '   '
		'      '    '...'    '....'     '        '''''''''        '       '         '   '''''''
		 
-->
<?php
date_default_timezone_set('Africa/lagos');
ob_start();
session_start();

?>

<!DOCTYPE html >
<html lang="en">
<head>
	<title>Olidec Hospital | Meet A Doctor </title>
	<meta charset="Utf-8">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="olidechospital, gastroenterology, general medical practice, medical specialties, surgery, obstetrics and gynecology, paediatrics, specialist consultation, opthalmology, ENT, ENT, general surgery, cardiology, gastroenterology, maternity, maternity, home, maternity home, olidec, hospital, olidec hospital, health services, health consultation, make an appointment, doctor, meet doctor, " />
	<meta name="description" content="olidechospital meet a doctor">
	<!-- //Icon Set-->
	<link rel="icon" type="img/png" href="olidec.jpg">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- //Import CSS-->
	<link rel="stylesheet" href="animate.css" media="all">
	<link rel="stylesheet" href="bootstrap4.min.css" media="all">
	<link rel="stylesheet" href="bootstrap-grid.min.css" media="all">
	
	<!-- //Import JS-->
	<script src="bootstrap.min.js"></script>
	<script src="popper.min.js"></script>
	<script src="jquery.min.js"></script>
	
	<script src="bootstrap.min.js"></script>
	<script src="jquery.min.js"></script>
	
	<!-- //Import Local CSS-->
	<link rel="stylesheet" href="index.css" media="all">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600&display=swap" rel="stylesheet">
<script>
	// xWinScrollTo r3, Copyright 2017 ozoemena bright (bytedecode.com)
var xWinScrollWin = null;
function xWinScrollTo(win,x,y,uTime) {
  var e = win;
  if (!e.timeout) e.timeout = 25;
  var st = xScrollTop(e, 1);
  var sl = xScrollLeft(e, 1);
  e.xTarget = x; e.yTarget = y; e.slideTime = uTime; e.stop = false;
  e.yA = e.yTarget - st;
  e.xA = e.xTarget - sl; // A = distance
  if (e.slideLinear) e.B = 1/e.slideTime;
  else e.B = Math.PI / (2 * e.slideTime); // B = period
  e.yD = st;
  e.xD = sl; // D = initial position
  var d = new Date(); e.C = d.getTime();
  if (!e.moving) {
    xWinScrollWin = e;
    _xWinScrollTo();
  }
}
function _xWinScrollTo() {
  var e = xWinScrollWin || window;
  var now, s, t, newY, newX;
  now = new Date();
  t = now.getTime() - e.C;
  if (e.stop) { e.moving = false; }
  else if (t < e.slideTime) {
    setTimeout("_xWinScrollTo()", e.timeout);

    s = e.B * t;
    if (!e.slideLinear) s = Math.sin(s);
//    if (e.slideLinear) s = e.B * t;
//    else s = Math.sin(e.B * t);

    newX = Math.round(e.xA * s + e.xD);
    newY = Math.round(e.yA * s + e.yD);
    e.scrollTo(newX, newY);
    e.moving = true;
  }  
  else {
    e.scrollTo(e.xTarget, e.yTarget);
    xWinScrollWin = null;
    e.moving = false;
    if (e.onslideend) e.onslideend();
  }  
}

	
	</script>
	<script>
function go(n)
{
  var t = (n < 5) ? n * 500 : n * 300;
  xWinScrollTo(window, 0, xPageY('lnk' + n), t);
  return false;
}
function goTop()
{
  xWinScrollTo(window, 0, 0, 500);
  return false;
}
</script>

<style>
.byte-px-third{
	position:relative;
    background-image: url("doctor6.jpg");
    min-height: 500px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn"onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="index.html">HOME</a><hr>
	<a href="#">Make An Appointment</a><hr style="height:10px;margin:2px;">
	<a href="#">Patients Rights And Responsibilities</a><hr style="height:10px;margin:2px;">
	<a href="#contact-Us">Contact Us</a><hr style="height:10px;margin:2px;">
	<a href="#">Privacy and policy</a>
  </div>
</div>
<!--  \\ TOP HEADER -->
<div class="wow pulse byte-header">
	 <img src="olidec.jpg" height="200px" style="float:left;margin-left:0;">
</div>

<div class="wow fadeIn byte-navbar">

	<ul>
		<div class="byte-pointer" onclick="openNav()">
		  <div class="bar1"></div>
		  <div class="bar2"></div>
		  <div class="bar3"></div>
		</div>
		<li class="byte-dropdown " id="byte_dropdown">
			<a href="index.html" class="byte-dropbtn">HOME</a>
			<div></div>
		</li>
		<li class="byte-dropdown" id="byte_dropdown">
			<a href="#" class="byte-dropbtn">SERVICES</a>
		</li>
		<li class="byte-dropdown" id="byte_dropdown">
			<a href="#contact-Us" class="byte-dropbtn">CONTACT US</a>
			<div></div>
		</li>
		<li class="byte-dropdown" id="byte_dropdown">
			<a href="#" class="byte-dropbtn">ABOUT  US</a>
		</li>
		
	</ul>
</div>
<div class="img-responsive byte-px-third">
	<div class="byte_in" style="color:white;" >
		<div class="byte_in_ext"  style="margin-top:1em;">
			<div class="byte_in_ext_details" >
			<h4><u><i class="fa fa-clock" style="color:#007bff;"></i> 24hrs Service</u></h4><br>
					<div>Our Doctors are ready to attend to you. Make your appointment now and have a better health.</div>
			</div>
		</div>
		<div class="byte_in_ext " >
			<div class="byte_in_ext_details" id="details" style="box-shadow:none; border:1px solid #000;">
				We Care for you
			</div>
		</div>
	</div>
</div>
<div class="wow fadeIn container text-center">
	<div class="row">
		<div class="col">
			<div class="byte_in_ext " >
				<div class="byte_in_ext_details" id="detailss" style="box-shadow:none; border:1px solid #000;">
					Make Your Appointment
				</div>
			</div> 
		</div>
		<div class="col">
			<div class="form-control rice">
				<div class="space">
					<form action="form.php" method="post" class="form">
						<div class="byte-space">
							<p><input type="text" name="fullname" placeholder="Fullname" required="" minlength="6"	 maxlength="32"/></p>
							<p><input type="text" name="phone" placeholder="Phone Number" required="" maxlength="11" pattern="[0-9]{11}" /></p>
							
							<p><input type="date" name="date"  required="" /></p>
							<p><input type="submit" name="submit" style="cursor:pointer;" /></p>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- \\FOOTER --->
<div class="wow slideInUp footer"><a name="contact-Us"></a>
<div class="container">
	<div class="row">
		<div class="col">
			<h4>Useful Links</h4><br>
			<p><a target="_blank" href="" style="text-decoration:none;">Make an appointment</a></p>
			<p><a target="_blank" href="" style="text-decoration:none;">Patients right and responsibilities</a></p>
			<p><a target="_blank" href="" style="text-decoration:none;">Privacy and Policy</a></p>
		</div>
		<div class="col">
			<h4>For Enquiry and Emergency</h4><br>
			<i class="fa fa-phone" style="margin-right:10px;"></i>  013-4246-21 <br><br>
			<i class="fa fa-envelope" style="margin-right:10px;"></i> info@olidechospital.com.ng<br><br>
			<i class="fa fa-map-marker" style="margin-right:10px;"></i> No 1 Adeoyo Street, Mushin, Lagos State.
		</div>
	</div>
</div>
	<br><br><hr id="footer">
	<center class="wow slideInUp" >We treat, God heals!
		<p>&copy; olidechospital. All rights reserved <br/> Developed by <a target="_blank" href="https://ByteDecode.com.ng">ByteDecode</a></p>
	</center>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img style="background-color:#007bff;border-radius:50%;" src="arrow.png" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();


function openNav() {
 document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
 document.getElementById("myNav").style.width = "0%";
}

</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="wow.min.js"></script>
<script> new WOW().init();</script>
</body>
</html>