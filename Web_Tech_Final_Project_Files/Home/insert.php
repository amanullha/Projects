<?php
include_once 'db.php';

if(isset($_POST['submit']))
{    
     $firstName = $_POST['firstName'];
     $lastName = $_POST['lastName'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $sql = "INSERT INTO userTable (firstName,lastName,gmail,password)
     VALUES ('$firstName','$lastName','$email','$password')";
     if (mysqli_query($conn, $sql)) {
        // echo "New record has been added successfully !";
        // echo "<h1><center> Login successful </center></h1>"; 
               echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sign up Successfully');
    window.location.href='login_page.php';
    </script>");

        // header("location:login_page.php");
      exit;
     } else {

       echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sign up failed');
    window.location.href='login_page.php';
    </script>");
       
        // echo "Error: " . $sql . ":-" . mysqli_error($conn);
      // echo "<script>alert('same message');</script>";

     }
     mysqli_close($conn);
}
?>