<page!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>MySQL PHP sample web services with JSON output</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Free MySQL web services" />
<meta name="keywords" content="Firefox, browser, Internet, Mac OS X, Apple, tutorials, browser, MySQl, web services, JSON, PHP">
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
					<li><a href="#">Web service</a><i class="icon-angle-right"></i></li>
					<li class="active">MySQL PHP JSON</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">

<!-- This is STEP # 0  start-->	
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h4>Introduction</h4>
			</div>
			<div class="col-lg-4">
				<h4>MySQL PHP JSON!</h4>
				<p>
					MySQL sample PHP web service spitting out JSON result!, You can use this sample PHP web services to test JSON.
				</p>
			</div>
			<div class="col-lg-4">
				<img src="img/webservices/MySQL_LOGO.jpg" alt="" class="align-left" />
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
	</div>
    <!-- This is STEP # 0 end-->	



	<!-- This is STEP # 1  start
										

-->	
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h4>Get Team! JSON</h4>
			</div>
			<div class="col-lg-4">
				<p>
					Get the list of team details as JSON array!
					using the link 
					<a href="http://slaaysourcecoders.in/Jsonwebservices/GetTeams.php">Team details</a>
				</p>
			</div>
			<div class="col-lg-4">
				<p>
				This link should connect to the database and get the team details and spit out the JSON for you!	
                like this.   
				</p>
			<pre class="prettyprint linenums">[{"TeamsID":"1","0":"1","TeamName":"Arsenal","1":"Arsenal","TeamStadium":"1","2":"1","TeamManager":"1","3":"1"},{"TeamsID":"2","0":"2","TeamName":"LiverPool","1":"LiverPool","TeamStadium":"2","2":"2","TeamManager":"2","3":"2"},{"TeamsID":"3","0":"3","TeamName":"Everton","1":"Everton","TeamStadium":"3","2":"3","TeamManager":"3","3":"3"},{"TeamsID":"4","0":"4","TeamName":"Newcastle United","1":"Newcastle United","TeamStadium":"4","2":"4","TeamManager":"4","3":"4"},{"TeamsID":"5","0":"5","TeamName":"Aston Villa","1":"Aston Villa","TeamStadium":"5","2":"5","TeamManager":"5","3":"5"},{"TeamsID":"7","0":"7","TeamName":"Southampton United","1":"Southampton United","TeamStadium":"7","2":"7","TeamManager":"7","3":"7"}]
			</pre>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
	</div>
    <!-- This is STEP # 1  end-->	

    <!-- This is STEP # 2  start-->	
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h4>Get Team Managers! JSON</h4>
			</div>
			<div class="col-lg-4">
				<p>
					Get the list of team managers as JSON array!
					<a href="http://slaaysourcecoders.in/Jsonwebservices/GetManagers.php">Team manager</a>
				</p>
			</div>
			<div class="col-lg-4">
				<p>
				This link should connect to the database and get the managers details 
				and spit out the JSON for you!	
                like this.   
				</p>
				<pre class="prettyprint linenums">[{"ManagerID":"1","0":"1","ManagerName":"Arsene Wenger","1":"Arsene Wenger","ManagerTitlesWon":"10","2":"10"},{"ManagerID":"2","0":"2","ManagerName":"Brandon Rodgers","1":"Brandon Rodgers","ManagerTitlesWon":"1","2":"1"},{"ManagerID":"3","0":"3","ManagerName":"Allen Pardew","1":"Allen Pardew","ManagerTitlesWon":"0","2":"0"},{"ManagerID":"4","0":"4","ManagerName":"Roberto Martinex","1":"Roberto Martinex","ManagerTitlesWon":"1","2":"1"},{"ManagerID":"5","0":"5","ManagerName":"Paul Lambert","1":"Paul Lambert","ManagerTitlesWon":"5","2":"5"}]
			</pre>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
	</div>
    <!-- This is STEP # 2  end-->	

	<!-- This is STEP # 3  start-->	
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h4>Get Team Stadium! JSON</h4>
			</div>
			<div class="col-lg-4">
				<p>
					Get the list of team stadium as JSON array!
					<a href="http://slaaysourcecoders.in/Jsonwebservices/GetStadium.php">Team stadium</a>
				</p>
			</div>
			<div class="col-lg-4">
				<pre class="prettyprint linenums">[{"StadiumID":"1","0":"1","StadiumName":"Emirates","1":"Emirates","StadiumLocation":"London","2":"London"},{"StadiumID":"2","0":"2","StadiumName":"Anfield","1":"Anfield","StadiumLocation":"Liverpool","2":"Liverpool"},{"StadiumID":"3","0":"3","StadiumName":"Goodison Park","1":"Goodison Park","StadiumLocation":"LiverPool","2":"LiverPool"},{"StadiumID":"4","0":"4","StadiumName":"Saint James Park","1":"Saint James Park","StadiumLocation":"New castle","2":"New castle"},{"StadiumID":"5","0":"5","StadiumName":"Villa Park","1":"Villa Park","StadiumLocation":"Aston","2":"Aston"},{"StadiumID":"6","0":"6","StadiumName":"Saints","1":"Saints","StadiumLocation":"Southampton","2":"Southampton"}]
			</pre>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
	</div>
    <!-- This is STEP # 3  end-->	

	<!-- This is STEP # 4  start-->	
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h4>Download the code</h4>
			</div>
			<div class="col-lg-4">
				<p>
					Download the web service code from GitHb
					
				</p>
			</div>
			<div class="col-lg-4">
				<a href="https://github.com/slaay/Webservices" class="btn btn-warning"><i class="fa fa-cog"></i>slaay->Webservices</a>
			</pre>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
	</div>
    <!-- This is STEP # 4 end-->	




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