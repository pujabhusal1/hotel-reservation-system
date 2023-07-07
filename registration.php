<?php
include("register.php");


















?>






<!DOCTYPE html>
<html>
    <head>
        <title> Registration form</title>
        <body>
            <form action="#" method="POST">
                Name:<input type="text" name="name"><br>

                Gender:
                <input type="radio" name="gen" value="male">Male
                <input type="radio" name="gen" value="female">female
   
<br>

                DOB:
                <input type="data" name="dob"><br>
                Email:<input type="email" name="email"><br>
Mobile:
<input type="number" name="mobile"><br>
Password:
<input type="password" name="password"><br>
<input type="submit" name="submit" value="signup">
</form>


<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $gen=$_POST['gen'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $result=mysqli_query($mysqli,"insert into registration value('','$name','$gen','$dob','$email','$mobile','$password')");
  if($result)
  {
    echo "registration successfully";
  }
  else{
    echo "failed";
  }
  }
    

  

?>
</body>
</head>

