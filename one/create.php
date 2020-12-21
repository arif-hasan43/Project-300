<?php

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$title = $paragraph = "";
$title_err = $paragraph_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate title
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter a title.";
    } else{
        $title = $input_title;
    }
    
    // Validate paragraph
    $input_paragraph = trim($_POST["paragraph"]);
    if(empty($input_paragraph)){
        $paragraph_err = "Please enter an paragraph.";     
    } else{
        $paragraph = $input_paragraph;
    }
 
    // Check input errors before inserting in database
    if(empty($title_err) && empty($paragraph_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO one (title, paragraph) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_title, $param_paragraph);
            
            // Set parameters
            $param_title = $title;
            $param_paragraph = $paragraph;
           
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
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
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>what we do</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/owl.carousel.min.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css" rel="stylesheet">
		<link href="css/icofont.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record on what we do</h2>
                    </div>
                   
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
                            <span class="help-block"><?php echo $title_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($paragraph_err)) ? 'has-error' : ''; ?>">
                            <label>Paragraph</label>
                            <textarea name="paragraph" class="form-control"><?php echo $paragraph; ?></textarea>
                            <span class="help-block"><?php echo $paragraph_err;?></span>
                        </div>


                       
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>