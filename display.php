<?php
include 'connect.php';


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.rtl.min.css" integrity="sha384-Xbg45MqvDIk1e563NLpGEulpX6AvL404DP+/iCgW9eFa2BqztiwTexswJo2jLMue" crossorigin="anonymous">

    <title>crud operation</title>
  </head>
  <body>
    <div class="container">
<button class="btn btn-primary my-5" ><a href="user.php" class="text-light">Add user</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select *from `crud`";
    $result=mysqli_query($con,$sql);
    if($result){
      while(  $row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
         $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td>
<button class="btn btn-primary"><a href="update.php? 
updateid='.$id.'" class="text-light">Update</a></button>
<button class="btn btn-danger"><a href="delete.php? 
deleteid='.$id.'" class="text-light">Delete</a></button>
</td>
    </tr>';
      }
        
    }


    ?>


  </tbody>
</table>
</div>
</body>
<html>