
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
										<h1><a  href="index.html"><span>T</span>ribute <p class="s-log">page</p></a>
										 
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
														<form action="#" method="post">
															<input name="Search" type="search" placeholder="Search...">
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
				<li>Armed Force | PAK ARMY</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
			<!--/content-inner-section-->
				<div class="w3_content_agilleinfo_inner">
					<div class="container">
					      <div class="inner-agile-w3l-part-head">
					            <h2 class="w3l-inner-h-title">CAPTAIN BILAL ZAFAR SHAHEED</h2>
							</div>
							<style>
.column {
  float: left;
  width: 25%;
  padding: 5px;
}

</style>
<div class="row">
  <div class="column">
    <h2></h2>
    <p></p>
  </div>
  
  <div class="column">
    <h2></h2>
    <p></p>
	<?php

$dsn = "tributepage";
$username = "root";
$password = "";
@$db = new mysqli('localhost', $username, $password,$dsn);
 if (mysqli_connect_errno()) {
  echo 'Connection error: ' . $db->connect_errno;
 exit;
 }
 $query = "SELECT APic, AName,ADesc,AAge,ARank,AAward
 FROM `captaibbilal`";
 $stmt = $db->prepare($query);
  $stmt->execute();
 $stmt->store_result();
 $stmt->bind_result($APic, $AName, $ADesc,$AAge,$ARank,$AAward);
 //echo "<p>".$stmt->num_rows."</p>";
 ?>
 <table border="0" width="80%" cellpadding="0" cellspacing="0">
  <tr>
  
  <?php
  $count=1;
  while($stmt->fetch()) {
    $count=$count+1;
    if($count==1||$count%4==0)
    {
      echo"<tr>";
    }
    ?>
    <td><img style="width:700px; height:500px" src="<?php echo $APic?>"></br><b><?php echo $AName?></b></br></br><b>Age:</b><?php echo $AAge?></br><b>Rank:</b><?php echo $ARank?></br><b>Award:</b><?php echo $AAward?></br></br><?php echo $ADesc?></br></td>
    <?php
    //ini_set('display_errors', true);
//Set this display to display  all erros while testing and developing the script
error_reporting(0);// With this no error reporting will be there
// create short variable names
   global $result;
    $query="SELECT * FROM captaibbilal";
    $result=mysqli_query($query) or die(mysqli_error($db));
    $row=mysqli_fetch_array($query);
    $AID=$row[0];
    $APic=$row[1];
    $AName=$row[2];
    $AAge=$row[3];
    $ARank=$row[4];
    $AAward=$row[5];
    $ADesc=$row[6];
    echo $AID. "<br>" . $APic. "<br>" . $AName . "<br>". $AAge . "<br>" .$ARank. "<br>" .$ADesc. "<br>";
    ?>
    <?php if($count%3==0)
    {
      echo"</tr>";
    }
    ?>
    <?php
 
 }
 ?>
      </tr>
    </table>
  </div>
  
  <div class="column">
    <h2></h2>
    <p></p>
  </div>
</div>
</div>							
	
	
	 <!-- Footer -->
	 <div class="w3l-footer">
		<div class="container">
         <div class="footer-info-agile">
				<div class="col-md-2 footer-info-grid links">
					<h4>Quick links</h4>
					<ul>
						       <li><a href="home.html">Home</a></li> 
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
	   </div>
     </div>
			
			<!--w3agile_footer_copy -->
			<div class="w3agile_footer_copy">
				<p>© 2021 Tribute to famous personalities</p>
		</div>
	
</body>
</html>