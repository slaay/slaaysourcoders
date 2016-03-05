<!DOCTYPE HTML>
<!--
	Miniport by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>DrwApp</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="iOS 7 Drawing app by Slaaysourcecoders. share your art to the world!" />
		<meta name="keywords" content="iOS7, game, Objective C, Github, draw" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->

		<!--Google analytics start-->
		 <script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			  ga('create', 'UA-55505331-1', 'auto');
			  ga('send', 'pageview');
			</script>
			<script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
		</script>
		<!--Google analytics end-->
	</head>
	<body>

<!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            //Reference http://www.jssor.com/development/slider-with-slideshow-jquery.html
            //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

            var _SlideshowTransitions = [
                //Fade Twins
                { $Duration: 700, $Opacity: 2, $Brother: { $Duration: 1000, $Opacity: 2 } },
                //Rotate Overlap
                { $Duration: 1200, $Zoom: 11, $Rotate: -1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5 }, $Brother: { $Duration: 1200, $Zoom: 1, $Rotate: 1, $Easing: $JssorEasing$.$EaseSwing, $Opacity: 2, $Round: { $Rotate: 0.5 }, $Shift: 90 } },
                //Switch
                { $Duration: 1400, x: 0.25, $Zoom: 1.5, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInSine }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1400, x: -0.25, $Zoom: 1.5, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInSine }, $Opacity: 2, $ZIndex: -10 } },
                //Rotate Relay
                { $Duration: 1200, $Zoom: 11, $Rotate: 1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 1 }, $ZIndex: -10, $Brother: { $Duration: 1200, $Zoom: 11, $Rotate: -1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 1 }, $ZIndex: -10, $Shift: 600 } },
                //Doors
                { $Duration: 1500, x: 0.5, $Cols: 2, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2, $Brother: { $Duration: 1500, $Opacity: 2 } },
                //Rotate in+ out-
                { $Duration: 1500, x: -0.3, y: 0.5, $Zoom: 1, $Rotate: 0.1, $During: { $Left: [0.6, 0.4], $Top: [0.6, 0.4], $Rotate: [0.6, 0.4], $Zoom: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, $Zoom: 11, $Rotate: -0.5, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Shift: 200 } },
                //Fly Twins
                { $Duration: 1500, x: 0.3, $During: { $Left: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true, $Brother: { $Duration: 1000, x: -0.3, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Rotate in- out+
                { $Duration: 1500, $Zoom: 11, $Rotate: 0.5, $During: { $Left: [0.4, 0.6], $Top: [0.4, 0.6], $Rotate: [0.4, 0.6], $Zoom: [0.4, 0.6] }, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, $Zoom: 1, $Rotate: -0.5, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Shift: 200 } },
                //Rotate Axis up overlap
                { $Duration: 1200, x: 0.25, y: 0.5, $Rotate: -0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1200, x: -0.1, y: -0.7, $Rotate: 0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2 } },
                //Chess Replace TB
                { $Duration: 1600, x: 1, $Rows: 2, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1600, x: -1, $Rows: 2, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Chess Replace LR
                { $Duration: 1600, y: -1, $Cols: 2, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1600, y: 1, $Cols: 2, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Shift TB
                { $Duration: 1200, y: 1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Shift LR
                { $Duration: 1200, x: 1, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1200, x: -1, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Return TB
                { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Shift: -100 } },
                //Return LR
                { $Duration: 1200, x: 1, $Delay: 40, $Cols: 6, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1200, x: 1, $Delay: 40, $Cols: 6, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Shift: -100 } },
                //Rotate Axis down
                { $Duration: 1500, x: -0.1, y: -0.7, $Rotate: 0.1, $During: { $Left: [0.6, 0.4], $Top: [0.6, 0.4], $Rotate: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, x: 0.2, y: 0.5, $Rotate: -0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2 } },
                //Extrude Replace
                { $Duration: 1600, x: -0.2, $Delay: 40, $Cols: 12, $During: { $Left: [0.4, 0.6] }, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $Outside: true, $Round: { $Top: 0.5 }, $Brother: { $Duration: 1000, x: 0.2, $Delay: 40, $Cols: 12, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 1028, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $Round: { $Top: 0.5 } } }
            ];


            var options = {
                $FillMode: 1,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 1500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10,                                  //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 600));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>







	<!-- Facebook SDK start -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1474802919467266&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
	<!-- Facebook SDK end -->

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#top">DrwApp</a></li>
					<li><a href="#work">Cool stuff</a></li>
					<li><a href="#portfolio">Screen shots</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="http://apps.slaaysourcecoders.in">Apps main</a>
					<li><a href="http://slaaysourcecoders.in">slaay source coders</a>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper style1 first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u">
							<span class="row"><img src="images/DrwApp/drwApp.png" alt="" /></span>
						</div>
						<div class="8u">
							<header>
								<h2>iOS 7 app</h2><br>
								<h1><strong>DrwApp</strong></h1>
							</header>
							<p>Just a  <strong>Drawing App</strong>, Shre your art with the world and have fun with it:)</p>
							<a href="#work" class="button big scrolly">check out some more</a>
						</div>
					</div>
				</article>
			</div>

		<!-- Work -->
			<div class="wrapper style2">
				<article id="work">
					<header>
						<h2>Some cools stuff about DrwApp</h2>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u">
								<section class="box style1">
									<span class="icon featured fa-comments-o"></span>
									<h3>Its freeeee</h3>
									<p>Free forever and ever!</p>
								</section>
							</div>
							<div class="4u">
								<section class="box style1">
									<span class="icon featured fa-thumbs-o-up"></span>
									<h3>Share your art!</h3>
									<p>You can share your art with the world <a href="https://twitter.com/slaaysrcecoders" class="icon fa-twitter"><span class="label">Twitter</span></a> &
									<a href="https://www.facebook.com/slaaysourcecoders" class="icon fa-facebook"><span class="label">Facebook</span></a>
									</p>
								</section>
							</div>
							<div class="4u">
								<section class="box style1">
									<span class="icon featured fa-comments-o"></span>
									<h3>Source on Github</h3>
									<p>The best part of the app is its freeeeeee. Source code on
									<a href="https://github.com/slaay" class="icon fa-github"><span class="label">Github</span></a> </p>
								</section>
							</div> 
						</div>
					</div>
					<footer>
						<!-- <p>All code is on Github (just to let you know ;))</p> -->
						<a href="#portfolio" class="button big scrolly">Check some snappies</a>
					</footer>
				</article>
			</div>



			<!-- Work -->
			<div class="wrapper style2">
				<article id="work">
					<header>
						<h2>Some cools stuff about DrwApp</h2>
					</header>
						
				<!-- Jssor Slider Begin -->
				    <!-- You can move inline styles to css file or css block. -->
				    <div id="slider1_container" style="position: relative; width: 100%; height: 500px; background-color: #000; overflow: hidden; ">

				        <!-- Loading Screen 
				        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
				            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
				                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
				            </div>
				            <div style="position: absolute; display: block; background: url(images/webImages/loading.gif) no-repeat center center;
				                top: 0px; left: 0px;width: 100%;height:100%;">
				            </div>
				        </div>-->

				        <!-- Slides Container -->
				        <!--<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 500px;
				            overflow: hidden;">-->
				        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 500px;
				            overflow: hidden;">

				            <div>
				                <a u=image href="#"><img src="images/DrwApp/DrwApp_FcGoa.jpg" /></a>
				            </div>
				            <div>
				                <a u=image href="#"><img src="images/DrwApp/DrwApp_home.jpg" /></a>
				            </div>
				            <div>
				                <a u=image href="#"><img src="images/DrwApp/DrwApp_slide.jpg" /></a>
				            </div>
				            <div>
				                <a u=image href="#"><img src="images/DrwApp/DrwApp_slide2.jpg" /></a>
				            </div>
				            <div>
				                <a u=image href="#"><img src="images/DrwApp/drwApp.png" /></a>
				            </div>
				            <div>
				                <a u=image href="#"><img src="images/DrwApp/DrwApp_drawing.jpg" /></a>
				            </div>
				            <div>
				                <a u=image href="#"><img src="images/DrwApp/DrwApp_drawing_1.jpg" /></a>
				            </div>
				        </div>

				        <!-- Bullet Navigator Skin Begin -->
				        <style>
				            /* jssor slider bullet navigator skin 13 css */
				            /*
				            .jssorb13 div           (normal)
				            .jssorb13 div:hover     (normal mouseover)
				            .jssorb13 .av           (active)
				            .jssorb13 .av:hover     (active mouseover)
				            .jssorb13 .dn           (mousedown)
				            */
				            .jssorb13 div, .jssorb13 div:hover, .jssorb13 .av {
				                background: url(images/webImages/b13.png) no-repeat;
				                overflow: hidden;
				                cursor: pointer;
				            }

				            .jssorb13 div {
				                background-position: -5px -5px;
				            }

				                .jssorb13 div:hover, .jssorb13 .av:hover {
				                    background-position: -35px -5px;
				                }

				            .jssorb13 .av {
				                background-position: -65px -5px;
				            }

				            .jssorb13 .dn, .jssorb13 .dn:hover {
				                background-position: -95px -5px;
				            }
				        </style>
				        <!-- bullet navigator container -->
				        <div u="navigator" class="jssorb13" style="position: absolute; bottom: 16px; right: 6px;">
				            <!-- bullet navigator item prototype -->
				            <div u="prototype" style="POSITION: absolute; WIDTH: 21px; HEIGHT: 21px;"></div>
				        </div>
				        <!-- Bullet Navigator Skin End -->
				        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
				    </div>
				    <!-- Jssor Slider End -->
					<footer>
						<!-- <p>All code is on Github (just to let you know ;))</p> -->
						<a href="#portfolio" class="button big scrolly">Check some snappies</a>
					</footer>
				</article>
			</div>

		<!-- Portfolio -->
			<div class="wrapper style3">
				<article id="portfolio">
					<header>
						<h2>Some screen shots of the game</h2>
						<p>DrwApp</p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u">
								<article class="box style2">
									<a href="#" class="image featured"><img src="images/DrwApp/DrwApp_home.jpg" alt="DrwApp iOS7 drawing app main screen" /></a>
									<h3>Main page</h3>
									<!-- <p>Check out the pins dropped on the map</p>-->
								</article>
							</div>
							<div class="4u">
								<article class="box style2">
									<a href="#" class="image featured"><img src="images/DrwApp/DrwApp_slide.jpg" alt="DrwApp iOS7 drawing app slide menu" /></a>
									<h3>Slide menu</h3>
									<p>Yup, its slidesss</p>
								</article>
							</div>
							<div class="4u">
								<article class="box style2">
									<a href="#" class="image featured"><img src="images/DrwApp/DrwApp_slide2.jpg" alt="DrwApp iOS7 drawing app slide screen" /></a>
									<h3>Slide menu</h3>
									<p>Full slide</p>
								</article>
							</div>
						</div>
						<div class="row">
							<div class="4u">
								<article class="box style2">
									<a href="#" class="image featured"><img src="images/DrwApp/DrwApp_FcGoa.jpg" alt="KDrwApp iOS7 drawing app" /></a>
									<h3>FC GOA</h3>
									<p>My home Team!</p>
								</article>
							</div>
							<div class="4u">
								<article class="box style2">
									<a href="#" class="image featured"><img src="images/DrwApp/DrwApp_drawing.jpg" alt="DrwApp iOS7 drawing app" /></a>
									<h3>Slaaysoucecoders</h3>
									 <p>This is an old pic of the GUI</p>
								</article>
							</div> 
							<div class="4u">
								<article class="box style2">
									<a href="#" class="image featured"><img src="images/DrwApp/DrwApp_drawing_1.jpg" alt="DrwApp iOS7 drawing app" /></a>
									<h3>Valentine's Day image</h3>
									<!-- <p>KeepThink game play screen</p>-->
								</article>
							</div>
						</div>
					</div>
					<footer>
						<p>More images you can check out on  <a href="https://www.facebook.com/slaaysourcecoders">Facebook</a></p>
						<a href="#contact" class="button big scrolly">Get in touch with me</a>
					</footer>
				</article>

				<!--Facebook Like and Share button & twitter! start -->
					<div class="fb-like" data-href="https://www.facebook.com/slaaysourcecoders" data-width="10" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
					<div><!--Empty div ..Beathing space!--> <a> </a> </div><br>
					<div>
						<!--<a class="twitter-follow-button"  href="https://twitter.com/slaaysrcecoders"  data-show-count="true" data-lang="en">Follow @slaaysourcecoders</a>
							https://dev.twitter.com/web/follow-button
							-->
						<a class="twitter-follow-button"
						  href="https://twitter.com/slaaysrcecoders"
						  data-show-count="true"
						  data-lang="en">
						Follow @slaaysrcecoders
						</a>

					</div>
			 	<!--Facebook Like and Share button & twitter! end-->
			</div>
	<?php include("footer.php"); ?>
	</body>
</html>