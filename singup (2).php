<?php 
// include "connection.php";

$name_error = "";
$email_error = "";
$phone_error = "";
$password_error = "";
$massage_error = "";


if($_SERVER['REQUEST_METHOD']== "POST"){


  if(empty($name = $_POST['name'])){
    $name_error = "enter your name";
  }
else{
  $name_pattern = "/^[a-zA-Zs ]*$/";
 if(!preg_match($name_pattern,$name)){
  $name_error = "valid name";
 }
}
if(empty($email=$_POST['email'])){
  $email_error = "enter your email";
}
else{
  $email_pattern = '/^[a-zA-Z]+[0-9]*@gmail.com$/';
  if(!preg_match($email_pattern,$email)){
    $email_error = "enter a valid name ";
  }
}
if(empty($phone = $_POST['phone'])){
  $phone_error = "enter your phone number";
}
else{
  $phone_pattern = "/^[0-9]{10,10}$/";
  if(!preg_match($phone_pattern,$phone)){
$phone_error = "enter a valid phone number";
  }
}
if(empty($password = $_POST['password'])){
  $password_error = "enter your password"; 
}
else{
  $password_pattern = "/^[a-zA-Z]+$/";
  if(!preg_match($password_pattern,$password)){
    $password_error = "valid password";
  }
}


$folder = "images/";
$filename = $_FILES['image']['name'];
$filetrgt = $folder.$filename;
$tmpfile = $_FILES['image']['tmp_name'];
$filesize = $_FILES['image']['size'];


if($filesize >1024000){
  echo "<h5 style='color: red;'>onliy 1mb</h5>";
}
else{
  move_uploaded_file($tmpfile,$filetrgt);
  echo " <h5>uploaded scssfully</h5>";
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$img_url = $filetrgt;

echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $password;
echo "<br>";
echo $img_url;
$sqlquery = "INSERT INTO users(name,email,phone,password,img_url)VALUES('$name','$email','$phone','$password','$img_url')";
$conn->query($sqlquery);
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="alon.jpg">
    <title>sing up</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="singup.css">
</head>

  <body>
    <div class="con">
  <div class="container">
    <div class="calon">
    <a href="index.php"><span class="material-symbols-outlined">
close
</span></i></a>
    </div>
   
  <form method="post" action="" enctype="multipart/form-data">
    <!-- <img src="http://localhost/furni/images/images.jpg" alt=""> -->
  <!-- <div class="mb-3">
    <label for="name" class="form-label">NAME</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="enter your name">
    <div class="text-danger"><?php echo $name_error; ?></div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="enter your email">
    <div class="text-danger"><?php echo $email_error; ?></div>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="number" class="form-control" id="phone" name="phone" placeholder="enter your phone number">
    <div class="text-danger"> <?php echo $phone_error; ?> </div>
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">uplodad</label>
    <input type="file" class="form-control" name="image" id="image"> -->
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="enter your password">
    <div class="text-danger"> <?php echo $password_error; ?> </div>
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>