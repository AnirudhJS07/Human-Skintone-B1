<?php

//$command = escapeshellcmd('C:/Users/Maadurga computer/AppData/Local/Programs/Python/Python38-32/skin.py 2>&1');

                $option = $_POST['url'];
               // echo $option;

              exec('python skin.py 2>&1', $skin2);
            

shell_exec("python skin.py 2>&1");
ini_set('max_execution_time', '120');


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

include "db_conn.php";

 if(isset($_POST['submit']))
 {
   $image_url=$_POST['url'];
   $data = file_get_contents($image_url);
   $new = 'images/myimage.jpg';
   $upload =file_put_contents($new, $data);
 if($upload) {
     echo "<img src='images/myimage.jpg'>";
 }else{
    echo "Please upload only image files";
 } 
}


		/*	$img_ex = pathinfo($upload, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 
			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($upload, $img_upload_path); */

				// Insert into Database
				$sql = "INSERT INTO images(image_url) 
				        VALUES('$new')";
				mysqli_query($conn, $sql);
				//header("Location: view.php");


?>
