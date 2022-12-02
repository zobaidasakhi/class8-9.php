<?php

  $query = "SELECT * FROM users  "; 
 include './inc/env.php';
 $result = mysqli_query($connection,$query);
 $resul = mysqli_fetch_all( $result,1);
 
 



?>
<!Doctype html>
<html long="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ALL POST</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>


<body>


<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">POST SYSTEM </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Add Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./all_save.php">All Post</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<div class="container mt-6">
<h2>ALL POST</h2>

<table class="table table-responsive">
<tr>
    <th>#</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Password</th>
    <th>Actions</th>
</tr>
<?php
foreach($resul as $snum => $post){
  
?>
  <tr>
  
  <td><?= ++$snum ?></td>
  <td><?=strlen($post['First']) > 20 ? substr( $post['First'],0,20) . '...': $post['First']  ?></td>
  <td><?= $post['Last'] ?></td>
  <td><?= $post['Password'] ?></td>
  <td>
      <div class="btn-groups">
          <a href="./show_save.php?Id=<?= $post['Id'] ?>" class="btn btn-sm btn-primary">Show</a>
          <a href="#" class="btn  btn-sm btn-warning">Edit</a>
          <a href="#" class="btn btn-sm btn-danger">Delete</a>

      </div>
  </td>
</tr>


<?php

}
?>
      






</table>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>



</html>