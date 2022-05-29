<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

      <link rel="stylesheet" href="style.css">
   

        
 
    <title>Crud</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg sticky-top  navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand fs-2" href="#">Dkoder</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar_ul">
        <li class="nav-item   nav_button_style">
          <a class="nav-link    active fs-4 text-decoration-underline" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item  nav_button_style">
          <a class="nav-link  active fs-4 text-decoration-underline" aria-current="page" href="add_user.php">ADD User </a>
        </li>
        
        
    </div>
  </div>
</nav>

<div class="container_style">
<button class="btn   "><a class="add_text text-light text-decoration-none fs-3 " href="add_user.php">Add User</a></button>

<table class="  table table-dark table-striped" id="myTable">
<thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Name</th>
          <th scope="col">Number</th>
          <th scope="col">Email</th>
          <th scope="col">profession</th>
          <th scope="col">About</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <?php
      $sql="SELECT * FROM `crudapp`";
      $result=mysqli_query($conn,$sql);
      if($result){
        while ($row=mysqli_fetch_assoc($result)) {
          $srno=$row['Sr.no'];
          $name=$row['name'];
          $number=$row['number'];
          $email=$row['email'];
          $profession=$row['profession'];
          $about=$row['about'];

          echo'<tbody>
          <tr>
               <td>' .$row['Sr.no']. '</td>
               <td>' .$row['name']. '</td>
               <td>' .$row['number']. '</td>
               <td>' .$row['email']. '</td>
               <td>' .$row['profession']. '</td>
               <td>' .$row['about']. '</td>
               <td>      <button class="  btn-primary"><a class="text-light text-decoration-none" href="update.php?updateid= '.$srno.'">Update</a></button>
                          <button class="  btn-danger"><a class="text-light text-decoration-none" href="delete.php?deleteid= '.$srno.'">Delete</a></button>
               </td>
               
            </tr>
               
          </tbody>';
        }
      }

      ?>

 
   
</table>
 


</div>

 

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
 
     
  </body>
</html>