<?php
 $dsn = "tributepage";
 $username = "root";
 $password = "";
 @$db = new mysqli('localhost', $username, $password,$dsn);
  if (mysqli_connect_errno()) {
  echo '<p>Error: Could not connect to database.<br/>
  Please try again later.</p>';
  exit;
  }
?>
<?php
                            // create short variable names
                           $searchtype=$_POST['searchtype'];
                            $searchterm=trim($_POST['searchterm']);
							
                            if (!$searchtype || !$searchterm) {
                            echo '<p>You have not entered search details.<br/>
                            Please go back and try again.</p>';
                            exit;
                            }
                            // whitelist the searchtype
                            switch ($searchtype) {
                            case 'NAward':
                            case 'NName':
                            case 'NDesc': 
                            break;
                            default: 
                            echo '<p>That is not a valid search type. <br/>
                            Please go back and try again.</p>';
                            exit; 
                            }
                           
                            $query = "SELECT NPic, NName, NDesc FROM `pk navy` WHERE ".$searchtype." LIKE '".$searchterm."%';";
                            $stmt = $db->prepare($query);
                            //$stmt->bind_param('s', $searchterm); 
                            $stmt->execute();
                            $stmt->store_result();
                            $stmt->bind_result($NPic, $NName, $NDesc);
                            echo "";
?>
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
										<h1><a  href="index.html"><span>T</span>ribute <p class="s-log">Pages</p></a>
										 
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
				<li>Armed Force | PAK NAVY</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
			<!--/content-inner-section-->
				<div class="w3_content_agilleinfo_inner">
					<div class="container">
					      <div class="inner-agile-w3l-part-head">
					            <h2 class="w3l-inner-h-title">PAKISTAN NAVY</h2>
							</div>
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
     <a href=""><img src="<?php echo $NPic?>" alt="service-img"></a><h3><b><?php echo $NName?></b></h3><p><?php echo $NDesc?></p></td>
                             
     <?php
      if($count%4==0)
     {
       echo"</tr>";?></br>
       <div>
       <div class="spa-agile">
     </br><h3 class="tittle fea"> یہ جان اےوطن تیری ہی امانت ہے♥️</h3>
                         <?php
     }
  }
  ?>
  <?php
 $stmt->free_result();
 $db->close();
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
                            <!-- services -->
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

								
</body>