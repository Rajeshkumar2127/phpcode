<?php

use function PHPSTORM_META\type;

session_start();

include "connection.php";
$email_error = "";
$password_error = "";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty($email=$_POST['email'])){
        $email_error = "enter your email";
    }
    else{
        // $email_pattern = "/^[a-zA-Z]+[0-9]*gmail.com*$/";
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_error = "vaild email";
        }
    }
    if(empty($password=$_POST['password'])){
    $password_error = "enter your password";
}
// else{
//   $password_pattern = "/[a-zA-Z]+[0-9]*$/";
// if(preg_match($password_pattern,$password)){
//     $password_error = "vaild password";
// }
// }
echo $email;
echo "<br>";
echo $password;
echo "<br>";
if(empty($email_error)&& empty($password_error)){
  
  $sqlquery = "SELECT name,email,phone,password,img_url FROM users WHERE email = '$email' ";
   
  $result = $conn->query($sqlquery);
      
    // var_dump($result);type
    // print_r($result->fetch_assoc()); 
    if($result->num_rows>0){
     $row = $result->fetch_assoc();
    if($password == $row['password']){
$_SESSION['users_name'] = $row['name'];
$_SESSION['users_email'] = $row['email'];
$_SESSION['users_phone'] = $row['phone'];
$_SESSION['$img_url'] = $row['img_url'];
header("location: index.php");
      // echo "users scessfully";
    }
    else{
      echo "unscessfully";
    }
    }

  
  
}

}
// $email_error=$password_error="";
// if($_SERVER['REQUEST_METHOD'] == "POST"){
//   $email =$_POST['email'];
//   $password=$_POST['password'];


//   if(empty($email)){
//     $email_error ="enter yuor email";
//   }

//   if(empty($password)){
//     $password_error="enter your password";
//   }


//   if(empty($email_error) && empty($password_error)){
//     $sql ="SELECT * FROM `users` WHERE email='$email' && password='$password'";
//     $result=$conn->query($sql);

//     if($result->num_rows>0){
//       echo "loggin succefull";
//       header("location:index.php");
//     }else{
//       echo "confrom password";
//     }
//   }

// }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="Ramdefaul8.jpg">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="singup.css">
  <body>
    <div class="style">
  <div class="container">
  <div class="calon">
    <a href="index.php"><span class="material-symbols-outlined">
close
</span></i></a>
    </div>
  <form method="post" action="" enctype="multipart/form-data">

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="enter your email">
    <div class="text-danger"><?php echo $email_error; ?></div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="text" class="form-control" id="password" name="password" placeholder="enter your password">
    <div class="text-danger"> <?php echo $password_error; ?> </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>