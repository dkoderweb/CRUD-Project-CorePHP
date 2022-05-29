<?php
include 'connect.php';
$srno=$_GET['updateid'];

$sql="SELECT * FROM `crudapp` WHERE `Sr.no`=$srno";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$number=$row['number'];
$email=$row['email'];
$profession=$row['profession'];
$about=$row['about'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$profession=$_POST['profession'];
$about=$_POST['about'];

$sql="UPDATE `crudapp` SET `Sr.no`=$srno,`name`='$name',`number`='$number',`email`='$email',`profession`='$profession',`about`='$about' WHERE `Sr.no`=$srno";
$result=mysqli_query($conn, $sql);
if($result){
    header('location:home.php');

}
else{
    die(mysqli_connect_error($conn));
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
 
    <title>Add User</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg   navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand fs-2" href="#">Dkoder</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar_ul">
        <li class="nav-item nav_button_style">
          <a class="nav-link active fs-4 text-decoration-underline" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item nav_button_style">
          <a class="nav-link active fs-4 text-decoration-underline" aria-current="page" href="add_user.php">ADD User </a>
        </li>
        
        
    </div>
  </div>
</nav>

<div class="container_style">
<form class="form_style" method="post">
  <div class="form_input ">
    <label for="name  " class="text-light" >Name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" value=<?php echo$name?>>
   </div>
   <div class="form_input ">
    <label for="number  " class="text-light" >Mobile Number</label>
    <input type="text" class="form-control" name="number" id="number" placeholder="Enter Your Mobile Number" value=<?php echo$number?>>
   </div>
   <div class="form_input ">
    <label for="email  " class="text-light" >Email</label>
    <input type="email" class="form-control" name="email"  id="email" placeholder="Enter Your Email Id"  value=<?php echo$email?>>
   </div>
   <div class="form_input ">
    <label for="profession  " class="text-light" >Profession</label>
    <input type="txet" class="form-control" name="profession" id="profession" placeholder="Enter Your profession" value=<?php echo$profession?>>
   </div>
   <div class="form_input ">
    <label for="about  " class="text-light" >About</label> <br>
    <textarea   name="about" id="about" cols="30" rows="10" value=<?php echo$about?>></textarea>
   </div>

 
   
  
   <button type="submit" name="submit" class="  btn-primary">Update</button>
   <button type="submit" name="submit" class="  btn-danger"><a class="text-light text-decoration-none" href="home.php">Cancel</a></button>


</form>
 </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>