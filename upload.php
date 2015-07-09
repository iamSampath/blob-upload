<!-- 
		Author: Sampath Kumar Medarametla
		Email: skmeadarametla@gmail.com
		All rights reserved to Sampath Kumar Medarametla
		Free to use with copyright
-->

<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-upload']))
{    
	$filename = $_FILES['file']['name'];
    $tmpname = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	
	$fp      = fopen($tmpname, 'r');
    $content = fread($fp, filesize($tmpname));
    $content = addslashes($content);
    fclose($fp);

	if($ext=="png"||$ext=="PNG"||$ext=="JPG"||$ext=="jpg"||$ext=="jpeg"||$ext=="JPEG"
		||$ext=="pdf"||$ext=="PDF"||$ext=="doc"||$ext=="DOC"||$ext=="docx"||$ext=="DOCX"
		||$ext=="XLS"||$ext=="xls"||$ext=="XLSX"||$ext=="xlsx"||$ext=="xlsm"||$ext=="XLSM")
	{
	 $sql="INSERT INTO tbl_uploads(file,type,size,data) VALUES('$filename','$file_type','$file_size','$content')";
		$i=mysqli_query($connection,$sql);
		if ($i==1)
		{
			?>
		
		<script>
		alert('successfully uploaded');
        window.location.href='index.php?success';
        </script>
		<?php
		mysqli_close($connection);
		}
	else
		{


		?>
		<script>
		alert('error while uploading file');
        window.location.href='index.php?fail';
        </script>

		<?php 
		mysqli_close($connection);
		}		

	
}
else
{  mysqli_close($connection);
	?>
	    <script>
		alert('error File Format might not be supported, please check and try again');
        window.location.href='index.php?fail';
        </script>
<?php
	
}
}

?>