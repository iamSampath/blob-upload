<!-- 
		Author: Sampath Kumar Medarametla
		Email: skmedarametla@gmail.com
		All rights reserved to Sampath Kumar Medarametla
		Free to use with copyright
		Date: 7/9/2015
-->
	  <?php
	    include_once 'dbconfig.php';

	    if (isset($_GET['id'])) 
	           {
				     $id = $_GET['id'];
				     $query = "SELECT * " .
				             "FROM tbl_uploads WHERE id = '$id'";
				     $result = mysqli_query($connection,$query) or die('Error, query failed');
				     list($id, $file, $type, $size,$content) = mysqli_fetch_array($result);
				 				   //echo $id . $file . $type . $size;
				 				   //echo 'sampath';
				     header("Content-length: $size");
				     header("Content-type: $type");
				     header("Content-Disposition: attachment; filename=$file");
				     ob_clean();
				     flush();
		                     $content = stripslashes($content);
				     echo $content;
				     mysqli_close($connection);
				     exit;
	           }

	       ?>
