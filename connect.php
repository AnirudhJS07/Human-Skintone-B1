<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="skin";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $projectTopic = $_POST['projectTopic'];

    $sql_query = "INSERT INTO contact (Name,Mobile_No,Query) 
    VALUES ('$user_name','$email','$projectTopic')";

    if (mysqli_query($conn, $sql_query))
    {
        echo include('submit.html');  // "New Details Entry inserted successfully !";
    }
    else
    {
        echo "ERROR: " . $sql . "" . mysqli_error($conn);
    }  
    mysqli_close($conn);
}
?>