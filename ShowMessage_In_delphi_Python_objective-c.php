<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>ShowMessage in Delphi, Objective C and Python</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Sample code for Delphi, Objective C and Python ShowMessage" />
<meta name="keywords" content="Apple, iOS, Delphi, templates, objective C, Xcode, IDLE, Python">
<meta name="author" content="http://slaaysourcoders.in" />
<meta name="robots" content="index, follow"/>
<!-- css -->
<link href="maincss/bootstrap.min.css" rel="stylesheet" />
<link href="maincss/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="maincss/jcarousel.css" rel="stylesheet" />
<link href="maincss/flexslider.css" rel="stylesheet" />
<link href="maincss/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--Google analytics start-->
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55505331-1', 'auto');
  ga('send', 'pageview');

</script>
<!--Google analytics end-->
</head>
<body>
<div id="wrapper">
	<!-- start header -->
	  <?php include("header.html");?>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="#">Tutorials</a><i class="icon-angle-right"></i></li>
					<li class="active">ShowMessage in Delphi, Objective C and Python</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="">
				<h4>Show me some Message!</h4>
				<p>
				  I have recently started with Python on MAC OS X and got it has been great. Though i have just started it on my own only online tutorials for help, its been slow. So i wanted to write down this tutorial (Kind of) to show the difference between some languages as in how you can output some string or in other words show a message. So here in this tutorial i will some simple code with Delphi, Python and Objective C.	
				</p>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Descriptions -->
		<div class="row">
			<div class="col-lg-6">
				<!-- Description -->
				<h4>About Delphi</h4>
				<dl>
					<dt>Description lists</dt>
					<dd>An awesome language! for Windows 32 bit, 64 bit and </dd> 
					<dd>recently (From XE2) youcan target Android and iOS too</dd>
					<dt>is it free?</dt>
					<dd>Unfortunately it is not free (As in free beer).</dd> 
					<dd>Also its pretty expensive to start coding on this on it</dd>
					<dt>Where can i download it?</dt>
					<dd><a href="http://www.embarcadero.com/products/delphi">Embarcadero Delphi</a> </dd>
					<dd> You can try a trial version of it for 30 days, though its expensive but its easy and lovable!</dd>
				</dl>
			</div>
			<!-- Horizontal Description -->
			<div class="col-lg-6">
				<h4>About Python</h4>
				<dl>
					<dt>Description lists</dt>
					<dd>Another awesome language that i came across recently. I am trying it on MAC OS X, its fun
					 I think i only had to download a file of about 23 MB before i could start coding on it (Neat!).
					 I only had to figure out a few things to remove from the file before i could fire up my first 
					 Hello World code!. Its for both web and desktop!</dd> 
					<dt>is it free?</dt>
					<dd>Free!!!</dd> 
					<dt>Where can i download it?</dt>
					<dd><a href="https://www.python.org/downloads/mac-osx/">Python Download</a> </dd>
					<dd> You can try a trial version of it for 30 days, though its expensive but its easy and lovable!</dd>
				</dl>
			</div>

			<div class="col-lg-6">
				<!-- Description -->
				<h4>About Objective C</h4>
				<dl>
					<dt>Description lists</dt>
					<dd>Objective C, i am not a big fan of the language but Xcode is just awesome but being MAC OS X only, it
					becomes very expensive to start with it. But Xcode itself is free you will have to invest in MAC hardware.
					To learn Objective C i have to invest in a MAC mini (the cheapest option to get into MAC OS world). </dd> 
					<dt>is it free?</dt>
					<dd>Yes, the IDE is free and the programming community is an universe in itself.</dd> 
					<dd>Also its pretty expensive to start coding on this on it</dd>
					<dt>Where can i download it?</dt>
					<dd><a href="https://developer.apple.com/xcode/downloads/">Apple developer</a> </dd>
					<dd> You will need an Apple developer account (free) then you can download the IDE and start coding!</dd>
				</dl>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<div class="row">
			<div class="col-lg-12">
				<h4>Say Hello Delphi!</h4>
				<pre class="prettyprint linenums">
					 &nbsp;procedure SayHelloDelphi;
					 &nbsp;begin
					 &nbsp;&nbsp;&nbsp;ShowMessage("Hello Delphi");
					 &nbsp;end;
				</pre>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-12">
				<h4>Say Hello Python!</h4>
				<pre class="prettyprint linenums">
					 &nbsp;print("Hello Python");
				</pre>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-12">
				<h4>Say Hello Objective C!</h4>
				<pre class="prettyprint linenums">
					&nbsp;UIAlertView *myAlertView = [[UIAlertView alloc] initWithTitle:@"Alert" 
					  message:@"Hello Objective C" delegate:nil cancelButtonTitle:@"Ok" 
					  otherButtonTitles:nil, nil];
   				    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[myAlertView show];
				</pre>
			</div>
		</div>
	</div>
	</section>
	<!--This is Discus start-->
    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'slaaysourcecoders'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <!--This is Discus start-->
    	
<!-- end divider -->
	</section>
		<!-- footer starts -->
	   <?php include("footer.html");?>
	<!--Footer ends-->
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>

</body>
</html>