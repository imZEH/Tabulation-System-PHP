
<!DOCTYPE html>
<html>

<head>
<title>Home - Tabulation System</title>
<?php include('getYear.php'); ?>
<?php include('sort.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
<meta name="author" content="Muhammad Usman">
<!--
<script>


/*
Auto Refresh Page with Time script
By JavaScript Kit (javascriptkit.com)
Over 200+ free scripts here!
*/

//enter refresh time in "minutes:seconds" Minutes should range from 0 to inifinity. Seconds should range from 0 to 59
var limit="0:30"

if (document.images){
var parselimit=limit.split(":")
parselimit=parselimit[0]*60+parselimit[1]*1
}
function beginrefresh(){
if (!document.images)
return
if (parselimit==1)
window.location.reload()
else{ 
parselimit-=1
curmin=Math.floor(parselimit/60)
cursec=parselimit%60
if (curmin!=0)
curtime=curmin+" minutes and "+cursec+" seconds left until page refresh!"
else
curtime=cursec+" seconds left until page refresh!"
window.status=curtime
setTimeout("beginrefresh()",1000)
}
}

window.onload=beginrefresh
//
</script>-->

<script type="text/javascript" src="autorefresh.js"></script>
<script type="text/javascript">
  setInterval("$('#overall').load('overall.php');", 3000);
  setInterval("$('#contestant').load('contestant_result.php');", 3000);
</script>

<!-- Charisma CSS files -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href="css/fullcalendar.css" rel="stylesheet">
	<link href="css/fullcalendar.print.css" rel="stylesheet" media="print">
	<link href="css/chosen.css" rel="stylesheet">
	<link href="css/uniform.default.css" rel="stylesheet">
	<link href="css/colorbox.css" rel="stylesheet">
	<link href="css/jquery.cleditor.css" rel="stylesheet">
	<link href="css/jquery.noty.css" rel="stylesheet">
	<link href="css/noty_theme_default.css" rel="stylesheet">
	<link href="css/elfinder.min.css" rel="stylesheet">
	<link href="css/elfinder.theme.css" rel="stylesheet">
	<link href="css/jquery.iphone.toggle.css" rel="stylesheet">
	<link href="css/opa-icons.css" rel="stylesheet">
	<link href="css/uploadify.css" rel="stylesheet">
<!-- end of Charisma CSS files -->
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link rel="stylesheet" href="http://cdn2.editmysite.com/css/sites.css?buildTime=1389292999" type="text/css" /><link rel='stylesheet' type='text/css' href='http://cdn1.editmysite.com/editor/libraries/fancybox/fancybox.css?1389292999' />
<link rel='stylesheet' type='text/css' href='files/main_style.css?1389332661' title='wsite-theme-css' />
<link href='http://fonts.googleapis.com/css?family=Delius+Swash+Caps' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css' />
<link rel="shortcut icon" href="images/tablogo.png">
<style type='text/css'>
body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
.wsite-elements.wsite-not-footer div.paragraph, .wsite-elements.wsite-not-footer p, .wsite-elements.wsite-not-footer .product-block .product-title, .wsite-elements.wsite-not-footer .product-description, .wsite-elements.wsite-not-footer .wsite-form-field label, .wsite-elements.wsite-not-footer .wsite-form-field label, #wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {}
#wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {}
.wsite-elements.wsite-footer div.paragraph, .wsite-elements.wsite-footer p, .wsite-elements.wsite-footer .product-block .product-title, .wsite-elements.wsite-footer .product-description, .wsite-elements.wsite-footer .wsite-form-field label, .wsite-elements.wsite-footer .wsite-form-field label{}
.wsite-elements.wsite-not-footer h2, .wsite-elements.wsite-not-footer .product-long .product-title, .wsite-elements.wsite-not-footer .product-large .product-title, .wsite-elements.wsite-not-footer .product-small .product-title, #wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {}
#wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {}
.wsite-elements.wsite-footer h2, .wsite-elements.wsite-footer .product-long .product-title, .wsite-elements.wsite-footer .product-large .product-title, .wsite-elements.wsite-footer .product-small .product-title{}
#wsite-title {}
.wsite-menu-default a {}
.wsite-menu a {}
.wsite-elements .wsite-image div, .wsite-elements .wsite-caption {}
.wsite-elements .galleryCaptionInnerText {}
.fancybox-title {}
.wsite-elements .wslide-caption {}
.wsite-phone {}
.wsite-headline {}
.wsite-headline-paragraph {}
.wsite-button-inner {}
#content blockquote {}
.wsite-footer blockquote {}
.blog-header h2 a {}
h2.wsite-product-title {}
.wsite-product .wsite-product-price a {}
</style>

<script><!--
var STATIC_BASE = '//cdn1.editmysite.com/';
var STYLE_PREFIX = 'wsite';
//-->
</script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script src='http://cdn2.editmysite.com/js/site/main.js?buildTime=1389292999'></script>
<script type="text/javascript">
							Weebly = Weebly || {};
							Weebly.Commerce = Weebly.Commerce || {};
							Weebly.Commerce.hasCart = false;
						</script><script>_W.relinquish && _W.relinquish()</script>
<script type='text/javascript'><!--
var IS_ARCHIVE=1;
(function(jQuery){
function initFlyouts(){initPublishedFlyoutMenus([{"id":"912346048661492395","title":"Home","url":"index.html","target":""},{"id":"847357659936707341","title":"Schedules","url":"schedules.html","target":""},{"id":"117404899752627942","title":"Results","url":"results.html","target":""},{"id":"802070543251080871","title":"Popularity","url":"popularity.html","target":""},{"id":"544485560115404534","title":"About","url":"about.html","target":""}],"912346048661492395","<li><a href='#'>{{title}}<\/a><\/li>",'active',false)}
if (jQuery) {
if (jQuery.browser.msie && !window.flyoutMenusRefreshable) window.onload = initFlyouts;
else jQuery(initFlyouts);
}else{
if (Prototype.Browser.IE) window.onload = initFlyouts;
else document.observe('dom:loaded', initFlyouts);
}
})(window._W && _W.jQuery)
//-->
</script>
</head>

<body class='landing-page wsite-background  wsite-theme-dark wsite-page-index'>
<div class = "page">
<div id="header-wrap">
		
		
        <div class="container">
			<div class="row">
				<!--<div id="name1"> {name1:text} </div>
				<div id="logo"> <span class="logo-inner"></span> </div>
				<div id="name2"> {name2:text} </div>-->
			
			<span><img src='images/new.png' style = "width:130px; float:left" /></span>
			<span><img src='images/SSG.png' style = "width:130px; float:right" /></span>
			<span id="logo"><span class='wsite-logo'><a href='index.php'><img src='images/tablogo.png' style = "width:150px;" /></a></span></span>
			
			</div>
			<div id="date"> <span class='wsite-text wsite-phone'>Tabulation for Sports and Cultural Events</span> </div>
        </div><!-- end container -->
    </div><!-- end header-wrap -->  

    <div id="nav-wrap">
		<div class="container">
			<ul class='wsite-menu-default'><li id='active'><a href='index.php'>Home</a></li><li id='pg847357659936707341'><a href='schedules.php'>Schedules</a></li><li id='pg117404899752627942'><a href='results.php'>Results</a></li><li id='pg802070543251080871'><a href='popularity.php'>Popularity</a></li><li id='pg544485560115404534'><a href='about.php'>About</a></li></ul>
		</div><!-- end container -->
    </div><!-- end nav-wrap -->

    <div id="banner-wrap">
        <div class="container">
			<div class="rounded-top"></div>
            <div id="banner">
             

	<div class="row-fluid sortable ui-sortable">	
			<div class="box span12">
					<div class="box-header well" data-original-title="">
						<h2><i class="icon-star"></i> 2014 - OverAll Results</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
			
				<div id = "overall" class = "box-content" style="display: block;">
			
				<?php include('overall.php'); ?>
			
				</div>
				
				
			</div>
				
	</div><!--/end of 1st row-fluid sortable ui-sortable-->
	
	<div class="row-fluid sortable ui-sortable">
				<div class="box span4" style="">
					<div class="box-header well">
						<h2><i class="icon-th"></i> Latest Info</h2>
						<div class="box-icon">
							
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div>
						<p>Schedule of Cultural and Sport Events... <a href = "Schedules.php">Read More</a><p>
						<p>Vote for Popularity here... <a href = "popularity.php">Read More</a><p>
						<p>Show Who is leading the scoring in every Event... <a href = "results.php">Read More</a>	<p>
						</div>
					</div>
				</div><!--/span-->
						
				<div class="box span8">
					<div class="box-header well" data-original-title="">
						<h2><i class="icon-user"></i> Popolarity Result</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							
						</div>
					</div>
					<div id = "contestant" class="box-content">
						<?php include('contestant_result.php'); ?>
					</div>
				</div><!--/span-->
						
			</div>
	
		

			 
			<div class="rounded-btm"></div>
			
        </div><!-- end container -->
    </div><!-- end banner-wrap -->

    <div id="main-wrap">
        <div class="container">
			<div id="content-top"></div>
			
			<div class="rounded-top"></div>
			<div class="content-inner">
			
				<div id='wsite-content' class='wsite-elements wsite-not-footer'>
</div>

			</div>
        </div><!-- end container -->
		<div id="content-bottom"><p style="margin-left: 30%;">Copyright © 2014 Tabulation System.AllRight Reserved</p></div>
    </div><!-- end main-wrap -->

    
<div style='display:none'><span id="wsite-title">&nbsp;</span></div>

</div>

<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
	<script src="js/bootstrap-transition.js"></script>
	<script src="js/bootstrap-alert.js"></script>
	<script src="js/bootstrap-modal.js"></script>
	<script src="js/bootstrap-dropdown.js"></script>
	<script src="js/bootstrap-scrollspy.js"></script>
	<script src="js/bootstrap-tab.js"></script>
	<script src="js/bootstrap-tooltip.js"></script>
	<script src="js/bootstrap-popover.js"></script>
	<script src="js/bootstrap-button.js"></script>
	<script src="js/bootstrap-collapse.js"></script>
	<script src="js/bootstrap-carousel.js"></script>
	<script src="js/bootstrap-typeahead.js"></script>
	<script src="js/bootstrap-tour.js"></script>
	<script src="js/jquery.cookie.js"></script>
	<script src="js/fullcalendar.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.min.js"></script>
	<script src="js/jquery.flot.pie.min.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<script src="js/jquery.chosen.min.js"></script>
	<script src="js/jquery.uniform.min.js"></script>
	<script src="js/jquery.colorbox.min.js"></script>
	<script src="js/jquery.cleditor.min.js"></script>
	<script src="js/jquery.noty.js"></script>
	<script src="js/jquery.elfinder.min.js"></script>
	<script src="js/jquery.raty.min.js"></script>
	<script src="js/jquery.iphone.toggle.js"></script>
	<script src="js/jquery.autogrow-textarea.js"></script>
	<script src="js/jquery.uploadify-3.1.min.js"></script>
	<script src="js/jquery.history.js"></script>
	<script src="js/charisma.js"></script>
<!-- end of  Charisma JQuery -->
<!--
<SCRIPT LANGUAGE="JavaScript">
var message="Function Disabled!";

function clickIE() {if (document.all) {;return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {;return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
-->

</script>
</body>

</html>
