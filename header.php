<?php 
    session_start(); 
?>
<?php 
  // if( $_SESSION['role']=="admin") {
   // header("location:adminSite.php");  
  // }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- Styles with Css and Bootstrap-->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

  <header class="container-fluid bg-secondary d-flex justify-content-center">
    <p class="text-light mb-0 p-2 fs-6">Contact Us 1-(587)-444-4444</p>
  </header>

  <nav class="navbar navbar-expand-lg navbar-light bg-light p-3" id="menu">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <span class="text-secondary fs-5 fw-bold">Dreamer Real Estate</span> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="projects.php">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminSite.php">Administration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="closeSession.php">Sign Out</a>
        </li>
      </ul>

      <form class="d-flex">
        <input class="form-control me-2" type="email" placeholder="email" aria-label="email">
        <button class="btn btn-secondary  btn-secondary-outline-success" type="button">Search</button>
      </form>

    </div>
  </div>
</nav>

</body>

</html>


        



 







    