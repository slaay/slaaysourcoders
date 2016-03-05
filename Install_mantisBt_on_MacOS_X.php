<page!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>MantisBT installation on MAC OS X, learn how to install MantisBT on Apple MAC OS X system</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Free tutorial on MantisBT installation on MAC OS X" />
<meta name="keywords" content="MantisBT, bugtracker, database, Mac OS X, Apple, tutorials">
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
					<li class="active">MantisBT installation on MAC OS X</li>
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
				<h4>MantisBT</h4>
				<p>
					<strong>This tutorial is about installation of MantisBT on MAC OS X</strong>, MantisBT is on of the most popular open source
					browser based bug tracker in the world. Its free, simple to use and has loads of features. Whether you are a single developer
					or a MNC, MantisBT is a awesome choice.!
				</p>
			</div>
			<div class="col-lg-4">
				<h4>MantisBT</h4>
				<img src="img/tutorials/MantisBT_ON_MAC/mantis_logo.jpg" alt="MantisBT, a awesome bug tracker" class="align-left" />
				<p>
                 Download MantisBT from this link <a href="https://sourceforge.net/projects/mantisbt/">Download</a>
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
	</div>
    <!-- This is STEP # 0 end-->	



	<!-- This is STEP # 1  start-->	
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h4>Step # 1</h4>
			</div>
			<div class="col-lg-4">
				<h4>Extract and Install</h4>
				<p>
					Extract the downloaded MantIsBT zip file in you local installation of Apache server's HTDOCS directory, You can try MAMP (again awesome and free). Then open up your favourite browser and browse to the link
					<strong>http://localhost:8888/mantisbt/admin/install.php</strong>
					Where
				<ul>
					<li><strong>localhost</strong> is your server.</li>
					<li><strong>8888</strong> is your Apache server port number.</li>
					<li><strong>mantisBT</strong> is the directory name where you have extracted the downloaded MantisBT zip file.</li>	
					<li><strong>admin</strong> Is the directory where the MantisBt installation files are kept.</li>
					<li><strong>install.php</strong> This is the php file which will install MantisBT on your system.</li>
				</ul>		
				</p>
			</div>
			<div class="col-lg-4">
				<h4>URL to install</h4>
				<img src="img/tutorials/MantisBT_ON_MAC/Sc_0.jpg" alt="Install MantisBT" class="align-left" />
				<p>
                   
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
	</div>
    <!-- This is STEP # 1  end-->	

    <!-- This is STEP # 2  start-->	
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h4>Step # 2</h4>
			</div>
			<div class="col-lg-4">
				<h4>Pre installation steps</h4>
				<p>
					After you open the URL mention in Step # 1, you should be able to see this on your browser screen. If you dont, then 
					your Apache server may not be ON, or the URL you have given is wrong, check if the <strong>install.php</strong> is 
					indeed at location <strong>mantisbt/admin/</strong>. <br>
					If all is fine then we can continue with the installation.<br>
					To start with the installation you will need to enter the details of the database.
				<ul>
					<li><strong>Type of Database</strong> Awesome thing about MantisBT is that can be installation on a whole range of database.</li>
					<li><strong>Hostname</strong> This is the server name of the database. Either your local system or some IP</li>
					<li><strong>Username</strong> This is the database user name. example <strong>root</strong></li>	
					<li><strong>Password</strong> This is the database password. example <strong>mySecretDbPassword</strong></li>
					<li><strong>Database name</strong>By default it is 'bugtracker' but you can give any name you want.(make sure the database doesnt not exist).</li>
					<li><strong>Admin Username</strong> This will be the username of the admin user tha MantisBT will create, you can leave it blank.
						If you leave it blank the admin user to login after installation will be <strong>administrator</strong>
					</li>
					<li><strong>Admin Password</strong> This will be the password of the user that MantisBT will create, if you leave it blank then 
						password will be the same as database password you mention above.</li>
				</ul>	
				Now click on <strong>Install/Upgrade Database</strong> to begin the installation process.	

				</p>
			</div>
			<div class="col-lg-4">
				<h4>Pre installation steps></h4>
				<img src="img/tutorials/MantisBT_ON_MAC/Sc_1.jpg" alt="Web based installation" class="align-left" />
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline"></div>
			</div>
	</div>
    <!-- This is STEP # 2  end-->	

	<!-- This is STEP # 3  start-->	
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h4>Step # 3</h4>
			</div>
			<div class="col-lg-4">
				<h4>Installation complete</h4>
				<p>
					If all the details you had entered were correct, then you should see an image like this. MantisBT will give you
					a details of all the steps it tried to install itself, along with the result of the process.
				<ul>
					<li><strong>Color green</strong> The step is fine.</li>
					<li><strong>Color red</strong> Somthing went wrong.</li>
					<li><strong>Color pink</strong> Something may have gone wrong or a possible problem.</li>
				</ul>	
				In the image you can see that i had kept the admin user name and password as blank, so MantisBT marked it with pink color, to
				let me know that there is possible problem. 
				</p>
			</div>
			<div class="col-lg-4">
				<h4>Installation details</h4>
				<img src="img/tutorials/MantisBT_ON_MAC/sc_2.jpg" alt="MantisBT steps" class="align-left" />
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
				<h4>Step # 4</h4>
			</div>
			<div class="col-lg-4">
				<h4>Installation successful</h4>
				<p>
					If all was fine then MantisBT will mention the status at the bottom of the page as 
					<strong>Install was successful.</strong> <br>
					Also you will have a link to go to the login page!

				</p>
			</div>
			<div class="col-lg-4">
				<h4>Yipie!</h4>
				<img src="img/tutorials/MantisBT_ON_MAC/sc_3.jpg" alt="MantisBT installtion done!" class="align-left" />
				<p>
					Click on the link   'Create'. <br> This will take you to
					<strong>http://localhost:8888/mantisbt/login_page.php</strong>
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
	</div>
    <!-- This is STEP # 4  end-->	

<!-- This is STEP # 5  start-->	
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h4>Step # 5</h4>
			</div>
			<div class="col-lg-4">
				<h4>Login Page</h4>
				<p>
					If you see this page, then bravo!, you are about to step into the world of Bugtracking with one of the best tools in the world!. But there
					are a few things you need to take care of. <br>
					<ul>
                       <li> Change the administrator password</li>
                       <li> <strong>Delete</strong> the admin directory (mantisbt/admin/), as you do not want he user to access the directory and try
                       	something that may clear your MantisBT database.</li>
					</ul>	
				</p>
			</div>  
			<div class="col-lg-4">
				<h4>Login page</h4>
				<img src="img/tutorials/MantisBT_ON_MAC/SC_4.jpg" alt="MantisBT login page" class="align-left" />
				<p>
					Login in using you admin user and password, that you had given during the installation step # 2.
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
	</div>
    <!-- This is STEP # 5  end-->	

<!-- This is STEP # 6  start-->	
		<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h4>Step # 6</h4>
			</div>
			<div class="col-lg-4">
				<h4>Have fun!</h4>
				<p>
					Now you can explore MantisBT, create projects, users and log some issues!
				</p>
			</div>
			<div class="col-lg-4">
				<h4>create projects</h4>
				<img src="img/tutorials/MantisBT_ON_MAC/sc_5.jpg" alt="MantisBT projects" class="align-left" />
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
    <!-- This is STEP # 6  end-->
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