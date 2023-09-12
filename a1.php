<?php
    if($_POST['SignUp'])
{
     $username   = $_POST['username'];
     $email      = $_POST['email'];
     $password   = $_POST['password'];
     $password2  = $_POST['password2'];
     

     $query = "INSERT INTO REGFORM VALUES('$username', '$email' ,' $password' , '$password2' )";
     $data = mysqli_query($conn,$query);

     if($data)
   {
   echo 'Data inserted'; }
   else
    { 
   echo 'not inserted';}
}
?>