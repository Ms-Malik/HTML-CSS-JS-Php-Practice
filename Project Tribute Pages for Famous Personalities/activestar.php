<!DOCTYPE html>
<html>
<head>
<title>Tribute Page  | Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/font-awesome.css" rel="stylesheet"> 

<!--/web-fonts-->

<!--//web-fonts-->
</head>
<body>
<!--/main-header-->
  <div class="w3layouts-top-strip">
			<div class="top-srip-agileinfo">
				<div class="w3ls-social-icons text-left">
					<a class="website" href="#"><i class="fa fa-globe"></i></a>
					<span style="color:white">Tribute Page For Famous Personalities</span>
				</div>
				<div class="agileits-contact-info text-right">
					<ul>
						<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:tribute@example.com">tribute@gmail.com</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
  <!--/banner-section-->
	<div id="demo-1" class="banner-inner">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile">	
								<nav class="navbar navbar-default">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<h1><a  href="index.html"><span>t</span>ribute <p class="s-log">Page</p></a>
										 
										</h1>
									</div>
									<!-- navbar-header -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										
				           <ul class="nav navbar-nav">
											    <li><a href="index.html">Home</a></li>
												<li><a href="about.html">About</a></li>
												<li><a href="contact.html">Contact</a></li>

											
										</ul>


									</div>
									<div class="clearfix"> </div>	
								</nav>
									<div class="w3ls_search">
													<div class="cd-main-header">
														<ul class="cd-header-buttons">
															<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
														</ul> <!-- cd-header-buttons -->
													</div>
													<div id="cd-search" class="cd-search">
														<form action="#" method="get">
															<input type="text" name="searchBar" placeholder="Search..." style="background-color:red;">
															<input name="Search" type="submit" >
															
														</form>
													</div>
												</div>
					
							</div> 

			
		<!--//header-w3l-->
		</div>
		 </div>
  <!--/banner-section-->
 <!--//main-header-->
    <!-- breadcrumb -->
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.html">Home</a> <i> /</i></li>
				<li>ACTIVE STARS</li>
				<form action="activeper.php" method="post">
 <p><strong></strong><br />
 <select name="searchtype">
 <option value="AAward">Award</option>
 <option value="AName">Name</option>
 <option value="ARank">Rank</option>
 </select>
 </p>
 <p><strong></strong><br />
 <input name="searchterm" type="text" size="40"></p>
<p><input type="submit" name="submit" value="Search"></p>
 </form>

													
														</ul> <!-- cd-header-buttons -->
													</div>
													<div id="cd-search" class="cd-search">
														<form action="#" method="post">
														<input name="Search" type="search" placeholder="Search...">
														<form action="PK Navy Show.php" method="post">
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
			<!--/content-inner-section-->
				<div class="w3_content_agilleinfo_inner">
					<div class="container">
					      <div class="inner-agile-w3l-part-head">
					            <h2 class="w3l-inner-h-title">ACTIVE STARS</h2>
							</div>
							<div class="ab-w3l-spa">
							 <img src="BmiR8ei.jpeg" width="2000" height="100" alt="" class="img-responsive" />
								<p>"Active personnel, also known as active duty in the United States and active service in the United Kingdom, are those individuals whose full-time occupation is being part of a military force. Active duty is in contrast to a military’s reserve force, which are individuals who have both a military role and a civilian career."
								</p>
							</div>
                            <!-- services -->
								
										<?php
										
$username = "root";
$password = "";
$server="localhost";
$databasename='tributepage';
@$db = new mysqli($server, $username, $password,$databasename);
 if (mysqli_connect_errno()) {
  echo 'Connection error: ' . $db->connect_errno;
 exit;
 }
 $query = "SELECT APic, AName,ARank,AAward
 FROM `adata`";
  $stmt = $db->prepare($query);
  $stmt->execute();
 $stmt->store_result();
 $stmt->bind_result($APic,$AName,$ARank,$AAward);
 ?>
 <table>
 <colgroup>
	 <col span="1" style="width:100%;">
</colgroup>

  <tr>
  <?php
   $count=0;
  while($stmt->fetch()) {
	$count=$count+1;
    if($count==1||$count%5==0)
    {
      echo"<tr>";
    }
   
    ?>
	
	<td>
	<td style="width:add_width;height:add_height"></td>	
	<div class="w3_agileits_services_grids">
							<div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center">
									<div class="w3_agileits_services_grid_agile">
										<div class="w3_agileits_services_grid_1">	
										<a href=""><img src="<?php echo $APic?>" alt="service-img"></a><h3><b><?php echo $AName?></b></h3><p><?php echo $ARank?></p></td>
							
    <?php
	 if($count%4==0)
    {
      echo"</tr>";?></br>
	  <div>
	  <div class="spa-agile">
	</br><h3 class="tittle fea">"People sleep peaceably in their beds at night only because rough men stand ready to do violence on their behalf."</h3>
						<?php
    }
 }
 ?>
</div>
<div class="clearfix"> 
</div>
								</div>
</div>
</div>
</div>
</tr>
</table>
</div>

								<!-- Footer -->
	 <div class="w3l-footer">
		<div class="container">
         <div class="footer-info-agile">
				<div class="col-md-2 footer-info-grid links">
					<h4>Quick links</h4>
					<ul>
						       <li><a href="index.html">Home</a></li> 
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li> 
					</ul>
				</div>
		
				<div class="col-md-4 footer-info-grid">
				<div class="connect-social">
					<h4>Connect with us</h4>
					<section class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</section>


				</div>
					

					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="connect-agileits newsletter">
				<h4>Newsletter</h4>
					<p>Subscribe to our newsletter and we will inform you about newest projects and promotions.
					</p>
					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email address..." required="">
						<input type="submit" class="submit" value="Subscribe">
					</form>
			</div>
	  
			
			<!--w3agile_footer_copy -->
			<div class="w3agile_footer_copy">
				<p>© 2021 Tribute to famous personalities | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	
</body>