
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/owl.carousel.min.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css" rel="stylesheet">
		<link href="css/icofont.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		
		
		
		
    <style type="text/css">
        .wrapper{
            width: 1150px;
            margin: 0 auto;
			text-align: center;
			margin-top:100px;

        }
        .page-header h2{
            margin-top: 0;
        }
        .logout{

        	margin-top: 20px;
        }
		
		.logout h2{
			
        }
		.logout h2{
			
        }
		

        table tr td:last-child a{
            margin-right: 15px;
        }
		
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
	
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
			  
				<p class ="logout">
	
					<h2>Dashboard of Website</h2>
					
					
				   <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
				   <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
				   
				</p>
						  
			  
                    <div class="page-header clearfix">
                        <h2 class="pull-left"> what we do section</h2>
                        <a href="what_we_do/create.php" class="btn btn-success pull-right">Add New Record</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM what_we_do";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>title</th>";
                                        echo "<th>paragraph</th>"; 
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
										echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['title'] . "</td>";
                                        echo "<td>" . $row['paragraph'] . "</td>";
										
										
                                        echo "<td>";
                                            echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open btn btn-success'></span></a>";
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil btn btn-info'></span></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash btn btn-danger'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
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
            </div>        
        </div>
    </div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>
	
	
	
</body>
</html>