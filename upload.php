
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

if (isset($_POST['submit']) && isset($_FILES['uploadfile'])) {
	include "db_conn.php";

	echo "<pre>";
	print_r($_FILES['uploadfile']);
	echo "</pre>";

	$img_name = $_FILES['uploadfile']['name'];
	$img_size = $_FILES['uploadfile']['size'];
	$tmp_name = $_FILES['uploadfile']['tmp_name'];
	$error = $_FILES['uploadfile']['error'];

	if ($error === 0) {
		if ($img_size > 129000) {
			$em = "Sorry, your file is too large.";
		    header("Location: index2.html?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 
			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				echo "<img src='$img_upload_path' height='300' width='300'/>";
				echo "!!..'Your file uploaded successfully'..!!";

				// Insert into Database
				$sql = "INSERT INTO images(image_url) 
				        VALUES('$new_img_name')";
				mysqli_query($conn, $sql);
				//header("Location: view.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: index2.php?error=$em");
			}
			
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: index2.php?error=$em");
	}

}else {
	header("Location: index2.php");
} ?>