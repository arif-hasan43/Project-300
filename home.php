
<!DOCTYPE html>
<?php
require_once "config.php";
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>WE_ARE_6</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/owl.carousel.min.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css" rel="stylesheet">
		<link href="css/icofont.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<img src="img/logo.png" alt="logo">
					</a>
				</div>

				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#home">HOME</a></li>
						<li><a href="#about">ABOUT</a></li>
						<li><a href="#work">SERVICES</a></li>
						<li><a href="#process">PROTFOLIO</a></li>
						<li><a href="#service">TEAM</a></li>
						<li><a href="#team">BLOG</a></li>
						<li><a href="#testimonials">CONTACT</a></li>
						<li><a href="#"><i class="icofont icofont-search"></i></a></li>
						
					</ul>
				</div>
			</div>
		</nav>  


		<div id="home" class="">
			<div class="">
				<?php  
				//require_once "config.php";
	                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
	                $result = mysqli_query($link, $query);  
	                while($row = mysqli_fetch_array($result))  
	                {  
	                     echo '  
	                          <tr>  
							
	                               <td> 
																   
	                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" class="img-thumnail img-fluid rounded b-shadow-a" />  
	                               </td>  
	                          </tr>  
	                     ';  
	                }  
                ?>  
				
			</div>
			
			
		</div>

		
		<section id="whatwedo" class="section-padding ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					
					
						<div class="section-title text-center about-text ">
							 <?php
								// Include config file
								//require_once "config.php";
								
								// Attempt select query execution
								$sql = "SELECT * FROM what_we_do";
								if($result = mysqli_query($link, $sql)){
									if(mysqli_num_rows($result) > 0){
											while($row = mysqli_fetch_array($result)){
												
													echo "<h1>" . $row['title'] . "</h1>";
													echo "<p>" . $row['paragraph'] . "</p>";
											}
										mysqli_free_result($result);
									} else{
										echo "<p class='lead'><em>No records were found.</em></p>";
									}
								} else{
									echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
								}
								mysqli_close($link);
							?>
						</div>

						<div class="">
							<div class="col-md-4 text-center about">
								<div class="WhatWeDo-icon">
									
									<i class="icofont icofont-rulers-alt"></i>
								</div>
									<?php
										$servername = "localhost";
										$username = "root";
										$password = "";
										$dbname = "testing";

										// Create connection
										$conn = mysqli_connect($servername, $username, $password, $dbname);
										// Check connection
										if (!$conn) {
										die("Connection failed: " . mysqli_connect_error());
										}

										$sql = "SELECT title, paragraph FROM one";
										$result = mysqli_query($conn, $sql);

										if (mysqli_num_rows($result) > 0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
											echo "<h3>" . $row['title'] . "</h3>";
											echo "<p>" . $row['paragraph'] . "</p>";
										}
										} else {
										echo "0 results";
										}

										mysqli_close($conn);
									?>
							</div>

							<div class="col-md-4 text-center about">
								<div class="WhatWeDo-icon">
									<i class="icofont icofont-file-alt"></i>
								</div>
									<?php
										$servername = "localhost";
										$username = "root";
										$password = "";
										$dbname = "testing";

										// Create connection
										$conn = mysqli_connect($servername, $username, $password, $dbname);
										// Check connection
										if (!$conn) {
										die("Connection failed: " . mysqli_connect_error());
										}

										$sql = "SELECT title, paragraph FROM two";
										$result = mysqli_query($conn, $sql);

										if (mysqli_num_rows($result) > 0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
											echo "<h3>" . $row['title'] . "</h3>";
											echo "<p>" . $row['paragraph'] . "</p>";
										}
										} else {
										echo "0 results";
										}

										mysqli_close($conn);
									?>
							</div>
							<div class="col-md-4 text-center about">
								<div class="WhatWeDo-icon">
									<i class="icofont icofont-football"></i>
								</div>
									<?php
										$servername = "localhost";
										$username = "root";
										$password = "";
										$dbname = "testing";

										// Create connection
										$conn = mysqli_connect($servername, $username, $password, $dbname);
										// Check connection
										if (!$conn) {
										die("Connection failed: " . mysqli_connect_error());
										}

										$sql = "SELECT title, paragraph FROM three";
										$result = mysqli_query($conn, $sql);

										if (mysqli_num_rows($result) > 0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
											echo "<h3>" . $row['title'] . "</h3>";
											echo "<p>" . $row['paragraph'] . "</p>";
										}
										} else {
										echo "0 results";
										}

										mysqli_close($conn);
									?>
								</div>
							</div>
					</div>
				</div>
			</div>
		</section>	


		<section id="About-us" class="section-padding gray-bg">
		
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6 section-title-style about-singel-sell">
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "testing";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM about_us";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h3>" . $row['title'] . "</h3>";
									echo "<p>" . $row['paragraph'] . "</p>";
									
									//<a class="button-btn" href="#">READ MORE</a>
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
								?>
								<a class="button-btn" href="#">READ MORE</a>
								
						</div>
						<div class="col-md-6">
					
							<div class="vedio-img">
								<img src="img/folio10.jpg" alt="" />
								<a class="popup-youtube play-icon" href="https://www.youtube.com/watch?v=-PkN15TtFnc">
								<i class="icofont icofont-ui-play"></i>
								</a>	
							</div>
			
						</div>
					</div>
				</div>
			</div>
		</section>		

		
		<section id="Our-Services" class="section-padding ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center services-text ">
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "testing";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM our_services";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h1>" . $row['title'] . "</h1>";
									echo "<p>" . $row['paragraph'] . "</p>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="text-center our-services-singel-sell ">
							<div class="service-icon">
								<i class="icofont icofont-light-bulb"></i>
							</div>
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "testing";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM five";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h3>" . $row['title'] . "</h3>";
									echo "<p>" . $row['paragraph'] . "</p>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
							<a class="Services-button-btn" href="#">READ MORE</a>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="text-center our-services-singel-sell ">
							<div class="service-icon">
								<i class="icofont icofont-key"></i>
							</div>
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "testing";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM six";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h3>" . $row['title'] . "</h3>";
									echo "<p>" . $row['paragraph'] . "</p>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
							<a class="Services-button-btn" href="#">READ MORE</a>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="text-center our-services-singel-sell ">
							<div class="service-icon">
								<i class="icofont icofont-pencil-alt-1"></i>
							</div>
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "testing";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM seven";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h3>" . $row['title'] . "</h3>";
									echo "<p>" . $row['paragraph'] . "</p>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
							<a class="Services-button-btn" href="#">READ MORE</a>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="text-center our-services-singel-sell ">
							<div class="service-icon">
								<i class="icofont icofont-pie-chart"></i>
							</div>
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "testing";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM eight";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h3>" . $row['title'] . "</h3>";
									echo "<p>" . $row['paragraph'] . "</p>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
							<a class="Services-button-btn" href="#">READ MORE</a>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="text-center our-services-singel-sell ">
							<div class="service-icon">
								<i class="icofont icofont-laptop-alt"></i>
							</div>
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "testing";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM nine";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h3>" . $row['title'] . "</h3>";
									echo "<p>" . $row['paragraph'] . "</p>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
							<a class="Services-button-btn" href="#">READ MORE</a>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="text-center our-services-singel-sell ">
							<div class="service-icon">
								<i class="icofont icofont-video"></i>
							</div>
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "testing";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM ten";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h3>" . $row['title'] . "</h3>";
									echo "<p>" . $row['paragraph'] . "</p>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
							<a class="Services-button-btn" href="#">READ MORE</a>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="counter" class="section-padding counter-background counter-section-style">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text-center col-md-3 service-counter">
							<div class="counter-icon">
								<i class="icofont icofont-emo-nerd-smile"></i>
							</div>
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "testing";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM eleven";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h1>" . $row['title'] . "</h1>";
									echo "<h4>" . $row['paragraph'] . "</h4>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
						</div>
						<div class="text-center col-md-3 service-counter">
							<div class="counter-icon">
								<i class="icofont icofont-people"></i>
							</div>
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "testing";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM twelve";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h1>" . $row['title'] . "</h1>";
									echo "<h4>" . $row['paragraph'] . "</h4>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
						</div>
						<div class="text-center col-md-3 service-counter">
							<div class="counter-icon">
								<i class="icofont icofont-coffee-cup"></i>
							</div>
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "testing";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM thirteen";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h1>" . $row['title'] . "</h1>";
									echo "<h4>" . $row['paragraph'] . "</h4>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
						</div>
						<div class="text-center col-md-3 service-counter">
							<div class="counter-icon">
								<i class="icofont icofont-man-in-glasses"></i>
							</div>
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "testing";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM fourteen";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h1>" . $row['title'] . "</h1>";
									echo "<h4>" . $row['paragraph'] . "</h4>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
						</div>
					</div>
				</div>
			</div>
		</section>

		
		<section id="Our-skills" class="section-padding ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6">
							<div class="skills-section">
								<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "testing";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT title, paragraph FROM our_skills";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
										echo "<h1>" . $row['title'] . "</h1>";
										echo "<p>" . $row['paragraph'] . "</p>";
									}
									} else {
									echo "0 results";
									}

									mysqli_close($conn);
								?>
								<div class="skills-content">
									<h3 class="skill-title">Javascript<span>80%</span></h3>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
											<span class="sr-only">80% Complete</span>
										</div>
									</div>    
									
									<h3 class="skill-title1">Photoshop<span>95%</span></h3>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
											<span class="sr-only">95% Complete</span>
										</div>
									</div>  
									
									<h3 class="skill-title2">Web Design <span>85%</span></h3>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
											<span class="sr-only">85% Complete</span>
										</div>
									</div>
									<h3 class="skill-title3">Wordpress  <span>75%</span></h3>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
											<span class="sr-only">75% Complete</span>
										</div>
									</div>  
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="FAQ-section">
							<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "testing";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT title, paragraph FROM faq";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
										echo "<h1>" . $row['title'] . "</h1>";
										echo "<p>" . $row['paragraph'] . "</p>";
									}
									} else {
									echo "0 results";
									}

									mysqli_close($conn);
								?>
							</div>
							<div class="FAQ-js">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								    <div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
										  <h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											  Meet Our Team 
											</a>
										  </h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										  <div class="panel-body">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
											Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
											when an unknown printer.</p>
										  </div>
										</div>
								    </div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwo">
										  <h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											  Fully Responsive
											</a>
										  </h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										  <div class="panel-body">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
											Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
											when an unknown printer. </p>
										  </div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingThree">
										  <h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											  Top Notch Design
											</a>
										  </h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										  <div class="panel-body">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
											Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
											when an unknown printer. </p>
										  </div>
										</div>
								    </div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingThree">
										  <h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											  24/7 Friendly Support
											</a>
										  </h4>
										</div>
										<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										  <div class="panel-body">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
											Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
											when an unknown printer. </p>
										  </div>
										</div>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		
		<section id="Portfolio" class="section-padding Portfolio-background">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center Portfolio-text ">
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "testing";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM our_portfolio";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h1>" . $row['title'] . "</h1>";
									echo "<p>" . $row['paragraph'] . "</p>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
						</div>
				
						
						<div class="popup-gallery">
							<div class="col-md-4 no-padding ">
								<div class="singel-Portfolio">
									<?php  
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "testing";
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
									}
									$sql = "SELECT name FROM img_one";
									$result = mysqli_query($conn, $sql);
	
									if (mysqli_num_rows($result) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) { 
											echo '  
												<tr>  
													<td> 
																					
															<img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" class="singel-Portfolio" />  
													</td>  
												</tr>  
											';  
										} 
									}
									else {
										echo "0 results";
										} 
									?>  
									<div class="overly">
										   <i class="icofont icofont-search-alt-1"></i>
										   <p>Photography</p>
										</a>
									</div>
								</div>
							</div>


							<div class="col-md-4 no-padding ">
								<div class="singel-Portfolio">
								<?php  
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "testing";
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
									}
									$sql = "SELECT name FROM img_two";
									$result = mysqli_query($conn, $sql);
	
									if (mysqli_num_rows($result) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) { 
											echo '  
												<tr>  
													<td> 
																					
															<img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" class="singel-Portfolio" />  
													</td>  
												</tr>  
											';  
										} 
									}
									else {
										echo "0 results";
										} 
									?>  
									<div class="overly">
										<a href="img/diya.JPG">
										   <i class="icofont icofont-search-alt-1"></i>
										   <p>Photography</p>
										</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 no-padding ">
								<div class="singel-Portfolio">
								<?php  
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "testing";
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
									}
									$sql = "SELECT name FROM img_three";
									$result = mysqli_query($conn, $sql);
	
									if (mysqli_num_rows($result) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) { 
											echo '  
												<tr>  
													<td> 
																					
															<img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" class="singel-Portfolio" />  
													</td>  
												</tr>  
											';  
										} 
									}
									else {
										echo "0 results";
										} 
									?>  
									<div class="overly">
									
											<i class="icofont icofont-search-alt-1"></i>
											<p>Photography</p>
										</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 no-padding ">
								<div class="singel-Portfolio">
								<?php  
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "testing";
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
									}
									$sql = "SELECT name FROM img_four";
									$result = mysqli_query($conn, $sql);
	
									if (mysqli_num_rows($result) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) { 
											echo '  
												<tr>  
													<td> 
																					
															<img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" class="singel-Portfolio" />  
													</td>  
												</tr>  
											';  
										} 
									}
									else {
										echo "0 results";
										} 
									?>  
									<div class="overly">
										<a href="img/atika.JPG">
											<i class="icofont icofont-search-alt-1"></i>
											<p>Photography</p>
										</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 no-padding">
								<div class="singel-Portfolio">
								
								<?php  
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "testing";
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
									}
									$sql = "SELECT name FROM img_five";
									$result = mysqli_query($conn, $sql);
	
									if (mysqli_num_rows($result) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) { 
											echo '  
												<tr>  
													<td> 
																					
															<img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" class="singel-Portfolio" />  
													</td>  
												</tr>  
											';  
										} 
									}
									else {
										echo "0 results";
										} 
									?>  
									<div class="overly">
										<a href="img/fatima.JPG">
											<i class="icofont icofont-search-alt-1"></i>
											<p>Photography</p>
										</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 no-padding">
							<div class="singel-Portfolio">
								<?php  
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "testing";
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
									}
									$sql = "SELECT name FROM img_six";
									$result = mysqli_query($conn, $sql);
	
									if (mysqli_num_rows($result) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) { 
											echo '  
												<tr>  
													<td> 
																					
															<img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" class="singel-Portfolio" />  
													</td>  
												</tr>  
											';  
										} 
									}
									else {
										echo "0 results";
										} 
								?>  
									<div class="overly">
										<a href="img/b5.jpg">
										   <i class="icofont icofont-search-alt-1"></i>
										   <p>Photography</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		

		<section id="Team" class="section-padding ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center Team-text ">
							<h1>Meet Our Team</h1>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
							accusantium doloremque laudantium, totam rem aperiam</p>
						</div>
						<div class="team-slider owl-carousel owl-theme">
							<div class=" team-item">
								<img src="img/arif.jpg" alt="" />
								<h3> ARIF HASAN</h3>
								<p> Web Developer</p>
								<div class="team-logo">
									<i class="icofont icofont-social-facebook"></i>
									<i class="icofont icofont-social-twitter"></i>
									<i class="icofont icofont-social-google-plus"></i>
									<i class="icofont icofont-social-pinterest"></i>
								</div>
							</div>
							
							
							<div class="team-item">
								<img src="img/fatima.JPG" alt="" />
								<h3> FATIMA CHOWDURY</h3>
								<p> Web Developer</p>
								<div class="team-logo">
									<i class="icofont icofont-social-facebook"></i>
									<i class="icofont icofont-social-twitter"></i>
									<i class="icofont icofont-social-google-plus"></i>
									<i class="icofont icofont-social-pinterest"></i>
								</div>
							</div>
							
							
							<div class="team-item">
								<img src="img/diya.JPG" alt="" />
								<h3> ZAHAN DIYA</h3>
								<p> Web Developer</p>
								<div class="team-logo">
									<i class="icofont icofont-social-facebook"></i>
									<i class="icofont icofont-social-twitter"></i>
									<i class="icofont icofont-social-google-plus"></i>
									<i class="icofont icofont-social-pinterest"></i>
								</div>
							</div>
							<div class="team-item">
								<img src="img/b5.jpg" alt="" />
								<h3> MARUF HUSSIN</h3>
								<p> Web Developer</p>
								<div class="team-logo">
									<i class="icofont icofont-social-facebook"></i>
									<i class="icofont icofont-social-twitter"></i>
									<i class="icofont icofont-social-google-plus"></i>
									<i class="icofont icofont-social-pinterest"></i>
								</div>
							</div>
							<div class="team-item">
								<img src="img/nura.JPG" alt="" />
								<h3> SAYDA NURA</h3>
								<p> Web Developer</p>
								<div class="team-logo">
									<i class="icofont icofont-social-facebook"></i>
									<i class="icofont icofont-social-twitter"></i>
									<i class="icofont icofont-social-google-plus"></i>
									<i class="icofont icofont-social-pinterest"></i>
								</div>
							</div>
							
							<div class="team-item">
								<img src="img/atika.JPG" alt="" />
								<h3> ATIKA BEGUM</h3>
								<p> Web Developer</p>
								<div class="team-logo">
									<i class="icofont icofont-social-facebook"></i>
									<i class="icofont icofont-social-twitter"></i>
									<i class="icofont icofont-social-google-plus"></i>
									<i class="icofont icofont-social-pinterest"></i>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>

		
		<section id="testeominal-slider" class="section-padding testeominal-background">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="testeominal-slider owl-carousel owl-theme">	
						
							<div class="testeominal-item">
							<h3>CLAINT COMMENT'S</h3>
								
								<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "testing";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT title, paragraph FROM claint_comment_one";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
										echo "<p>" . $row['paragraph'] . "</p>";
										echo "<h3>" . $row['title'] . "</h3>";
										//echo "<h5>" . $row['post'] . "</h5>";
										//echo "<h5>" . $row['company'] . "</h5>";
									}
									} else {
									echo "0 results";
									}

									mysqli_close($conn);
								?>
								<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "testing";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT title, paragraph FROM claint_comment_two";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
										echo "<h5>" . $row['title'] . "</h5>";
										echo "<h5>" . $row['paragraph'] . "</h5>";
										//echo "<h5>" . $row['post'] . "</h5>";
										//echo "<h5>" . $row['company'] . "</h5>";
									}
									} else {
									echo "0 results";
									}

									mysqli_close($conn);
								?>

							</div>
							<div class="testeominal-item">
							<h3>CLAINT COMMENT'S</h3>
								<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "testing";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT title, paragraph FROM claint_comment_thiree";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
										echo "<p>" . $row['paragraph'] . "</p>";
										echo "<h3>" . $row['title'] . "</h3>";
										//echo "<h5>" . $row['post'] . "</h5>";
										//echo "<h5>" . $row['company'] . "</h5>";
									}
									} else {
									echo "0 results";
									}

									mysqli_close($conn);
								?>
								<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "testing";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT title, paragraph FROM claint_comment_four";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
										echo "<h5>" . $row['title'] . "</h5>";
										echo "<h5>" . $row['paragraph'] . "</h5>";
										//echo "<h5>" . $row['post'] . "</h5>";
										//echo "<h5>" . $row['company'] . "</h5>";
									}
									} else {
									echo "0 results";
									}

									mysqli_close($conn);
								?>
							</div>
							<div class="testeominal-item">
							<h3>CLAINT COMMENT'S</h3>
								<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "testing";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT title, paragraph FROM claint_comment_five";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
										echo "<p>" . $row['paragraph'] . "</p>";
										echo "<h3>" . $row['title'] . "</h3>";
										//echo "<h5>" . $row['post'] . "</h5>";
										//echo "<h5>" . $row['company'] . "</h5>";
									}
									} else {
									echo "0 results";
									}

									mysqli_close($conn);
								?>
								<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "testing";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT title, paragraph FROM claint_comment_six";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
										echo "<h5>" . $row['title'] . "</h5>";
										echo "<h5>" . $row['paragraph'] . "</h5>";
										//echo "<h5>" . $row['post'] . "</h5>";
										//echo "<h5>" . $row['company'] . "</h5>";
									}
									} else {
									echo "0 results";
									}

									mysqli_close($conn);
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		<section id="pricing-table" class="section-padding ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center pricing-table-text">
							<h1>Pricing Tables</h1>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
							accusantium doloremque laudantium, totam rem aperiam</p>
						</div>
						<div class="col-md-4 table-item">
							<h3>Personal</h3>
							<p>The standard version</p>
							<p><span class="table-item-text">$</span> <span class="table-item-number">48</span>/month </p>
							<div class="table-singel-item">
								<p>10 DOMAIN NAMES</p>
								<p>8 E-MAIL ADDRESS</p>
								<p>8 E-MAIL ADDRESS</p>
								<p>10GB DISK SPACE</p>
								<p>MONTHLY BANDWIDTH</p>
								<p>POWERFUL ADMIN PANEL</p>
							</div>
							<a class="table-button-btn" href="#">BUY NOW</a>
						</div>
						<div class="col-md-4 table-item">
							<h3>Student</h3>
							<p>The standard version</p>
							<p><span class="table-item-text">$</span> <span class="table-item-number">68</span>/month </p>
							<div class="table-singel-item">
								<p>10 DOMAIN NAMES</p>
								<p>8 E-MAIL ADDRESS</p>
								<p>8 E-MAIL ADDRESS</p>
								<p>10GB DISK SPACE</p>
								<p>MONTHLY BANDWIDTH</p>
								<p>POWERFUL ADMIN PANEL</p>
							</div>
							<a class="table-button-btn" href="#">BUY NOW</a>
						</div>
						<div class="col-md-4 table-item">
							<h3>Business</h3>
							<p>The standard version</p>
							<p><span class="table-item-text">$</span> <span class="table-item-number">89</span>/month </p>
							<div class="table-singel-item">
								<p>10 DOMAIN NAMES</p>
								<p>8 E-MAIL ADDRESS</p>
								<p>8 E-MAIL ADDRESS</p>
								<p>10GB DISK SPACE</p>
								<p>MONTHLY BANDWIDTH</p>
								<p>POWERFUL ADMIN PANEL</p>
							</div>
							<a class="table-button-btn" href="#">BUY NOW</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		<section id="latest-news" class="section-padding news-background">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center news-text">
							<h1>Latest News</h1>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
							accusantium doloremque laudantium, totam rem aperiam</p>
						</div>
						<div class="col-md-6">
							<div class="col-md-6">
								<img src="img/b3.jpg" alt="" />
							</div>
							<div class="col-md-6 news-item">
								<h3>Perferendis Labore</h3>
								<h5> by: Admin <span>07 comments </span> </h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
								<a class="Services-button-btn" href="#">READ MORE</a>
							</div>
						</div>
						
						<div class="col-md-6 ">
							<div class="col-md-6">
								<img src="img/b4.jpg" alt="" />
							</div>
							<div class="col-md-6 news-item">
								<h3>Perferendis Labore</h3>
								<h5> by: Admin <span>07 comments </span> </h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
								<a class="Services-button-btn" href="#">READ MORE</a>
							</div>
						</div>
						<div class="col-md-6 latest-news-section-style">
							<div class="col-md-6">
								<img src="img/b2.jpg" alt="" />
							</div>
							<div class="col-md-6 news-item">
								<h3>Perferendis Labore</h3>
								<h5> by: Admin <span>07 comments </span> </h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
								<a class="Services-button-btn" href="#">READ MORE</a>
							</div>
						</div>
						<div class="col-md-6 latest-news-section-style">
							<div class="col-md-6">
								<img src="img/b2.jpg" alt="" />
							</div>
							<div class="col-md-6 news-item">
								<h3>Perferendis Labore</h3>
								<h5> by: Admin <span>07 comments </span> </h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
								<a class="Services-button-btn" href="#">READ MORE</a>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
		</section>
		
		
		<section id="contact" class="contact-singel-sell">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6 contact-title-style ">
							<h1>Say Hello!</h1>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been,</p>
						</div>
					</div>
				</div>
			</div>
		</section>
							

		<section id="contact" class="section-padding ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">	
						<div class="col-md-4">
							<div class="contact-icon contact-text">
								<i class="icofont icofont-location-pin"></i>
								<p>No any parmanent address because 
									This is only for fun							
									</p>
							</div>
							<div class="contact-icon contact-number">
								<i class="icofont icofont-phone"></i>
								<p>+0000 111 2222 333
								   +1111 777 6666 000 </p>
							</div>
							<div class="contact-icon contact-email">
								<i class="icofont icofont-email"></i>
								<p>we.are.6@gmail.com
									we.are.6.contact@gmai.com </p>
							</div>
						</div>
								
						<div class="col-md-8">
						
					<?php

					// Include config file
					require_once "config.php";
					 
					// Define variables and initialize with empty values
					$name = $email = $comment = "";
					$name_err = $email_err = $comment_err = "";
					 
					// Processing form data when form is submitted
					if($_SERVER["REQUEST_METHOD"] == "POST"){
						// Validate name
						$input_name = trim($_POST["name"]);
						if(empty($input_name)){
							$name_err = "Please enter a name.";
						} else{
							$name = $input_name;
						}
						
						// Validate email
						$input_email = trim($_POST["email"]);
						if(empty($input_email)){
							$email_err = "Please enter an email.";     
						} else{
							$email = $input_email;
						}
						
						
						// Validate comment
						$input_comment = trim($_POST["comment"]);
						if(empty($input_comment)){
							$comment_err = "Please enter an comment.";     
						} else{
							$comment = $input_comment;
						}
						
						
						
					 
						// Check input errors before inserting in database
						if(empty($name_err) && empty($email_err) && empty($comment_err)){
							// Prepare an insert statement
							$sql = "INSERT INTO contact (title, email ,comment) VALUES (?, ?, ?)";
							 
							if($stmt = mysqli_prepare($link, $sql)){
								// Bind variables to the prepared statement as parameters
								mysqli_stmt_bind_param($stmt, "sss", $param_title, $param_paragraph, $param_email);
								
								// Set parameters
								$param_name = $name;
								$param_email = $email;
								$param_comment = $comment;
								
								
								// Attempt to execute the prepared statement
								if(mysqli_stmt_execute($stmt)){
									// Records created successfully. Redirect to landing page
									header("location: home.php");
									exit();
								} else{
									echo "Something went wrong. Please try again later.";
								}
							}
							 
							// Close statement
							mysqli_stmt_close($stmt);
						}
						
						// Close connection
						mysqli_close($link);
					}
					?>	
						
						
				<form class="contact-form-box" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				
					<div class="row">
						<div class="col-md-6">
							<div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
								<input type="text" class="form-control" id="your-name" placeholder="Your Name" value="<?php echo $name; ?>">
								 <span class="help-block"><?php echo $name_err;?></span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
								<input type="email" class="form-control" id="email" placeholder="Your Email" value="<?php echo $email; ?>">
								 <span class="help-block"><?php echo $email_err;?></span>
							</div>
						</div>
					</div>
					<div class="form-group <?php echo (!empty($comment_err)) ? 'has-error' : ''; ?>">
						<textarea class="form-control" rows="6" placeholder="Your Comment"><?php echo $comment; ?></textarea>
						 <span class="help-block"><?php echo $comment_err;?></span>
					</div>	
					
					<div class="text-center">	
						<button type="submit" class="btn submit-btn btn-primary">SEND MESSAGE</button>
						
					</div>
				</form>
							
							
							

						</div>
					</div>
				</div>
			</div>
		</section>
		
		<div class="map-section-area">		            
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d65367911.85925743!2d90.01596150920558!3d1.9722567299812104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552bc71c899d%3A0x804e438bcc32b390!2sMetropolitan%20University!5e0!3m2!1sen!2sbd!4v1576493635582!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>			


		<section id="footer" class=" footer-section section-padding ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-style">
							<img src="img/logo.png" alt="" />
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
							when an unknown printer.</p>
							<i class="icofont icofont-social-facebook"></i>
							<i class="icofont icofont-social-twitter"></i>
							<i class="icofont icofont-social-google-plus"></i>
							<i class="icofont icofont-social-pinterest"></i>
							<i class="icofont icofont-brand-linkedin"></i>
							<i class="icofont icofont-circuit"></i>
							<i class="icofont icofont-social-vimeo"></i>
							<hr>
							<div class="last-text">
							<p>© 201 Copyright by ARIF HASAN.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>



