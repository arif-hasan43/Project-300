<?php
include 'upload.php';
?>
<!DOCTYPE html>  
<html lang="en-us">  
  <head>  
    <title> Image Insert Update Delete in Mysql Database using PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">  
  </head> 

  <body> 
    <div class="container">
      <div class="upfrm">
        <?php if(empty($statusMsg)){ ?>
          <p class="status-msg"><?php echo $statusMsg; ?></p>
        <?php } ?>
        <form action="upload.php" method="post" enctype="multipart/form-data">
          Select Image File to Upload:
          <input type="file" name="file">
          <input type="submit" name="submit" value="Upload">
        </form>

      </div>
        <div class="gallery">
          <div class="gcon">
            <h2>Uploaded Image</h2>
           <?php
            // Include the database configuration file
            include 'config.php';
            // Get images from the database
            $query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");
            if($query->num_rows > 0){
                while($row = $query->fetch_assoc()){
                    $imageURL = 'uploads/'.$row["file_name"];
            ?>
                <img src="<?php echo $imageURL; ?>" alt="" />
            <?php }
            }else{ ?>
                <p>No image(s) found...</p>
            <?php } ?> 
          </div>
        </div>
    </div>
  </body>
</html>