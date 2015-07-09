<!-- 
		Author: Sampath Kumar Medarametla
		Email: skmeadarametla@gmail.com
		All rights reserved to Sampath Kumar Medarametla
		Free to use with copyright
		Date: 7/9/2015
-->


<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<?php include_once 'header.php'?>
<div id="body">
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	<button type="submit" name="btn-upload">upload</button>
	</form>
    <br /><br />
    
    <?php
	if(isset($_GET['success']))
	{
		?>
        <tt><a href="view.php">Click here to see the uploaded files.</a></tt>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Upload Files</label>
        <?php
	}
	?>
</div>
<?php include_once 'footer.php'; ?>
</body>
</html>