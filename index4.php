<?php
include "upload.php";
error_reporting(0);
?>
<html>
    <body>
        <style>
            body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
        </style>
        <form action="" method="post" enctype="multipart/form-data">
           
        </form> 
    </body>
</html>
<?php
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "uploads/".$filename;
move_uploaded_file($tempname,$folder);
echo "<img src='$folder' height='300' width='300'/>";
?>      
