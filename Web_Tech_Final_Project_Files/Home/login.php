<?php
$db_servername = "localhost";
$db_username = "root";
$db_password = "";

// Create connection
$conn = new mysqli($db_servername, $db_username, $db_password,"my_db");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$email = $_POST['email'];
$password = $_POST['password'];
echo $email;
echo $password;

$sql = "SELECT* FROM userTable WHERE gmail='$email' and password='$password'";
// $sql = "SELECT* FROM userTable WHERE gmail='$email' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
    {
    // output data of each row
    // echo "success";
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Login');
    window.location.href='Home_Page.php';
    </script>");

    // header("location:Home_Page.php");
    
    } 
else 
    {
     echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login Failed. Try again');
    window.location.href='login_page.php';
    </script>");

    
     ;
    }
$conn->close();





?>