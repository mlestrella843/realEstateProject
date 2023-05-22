<?php include('connection.php');?>

<?php
if($_POST){    

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['roleName'];

    $objConnection=new connection();
    $sql="SELECT * FROM `users`;";
    $arrayUsers[] = $objConnection->consult($sql);

    print_r($arrayUsers);

}
    /*
    foreach($arrayUsers as $oneUser){

      echo "entro al array Users";

      if($role=='user'){  
              if( ($oneUser['username']==$username) && ($oneUser['password']==$password) && ($oneUser['role']==$role) )
                echo ("darle solo acceso a pagina portfolio");
              }
               else{
                echo ("El usuario no existe");
              }
      if($role=='admin'){  
              if( ($oneUser['username']==$username) && ($oneUser['password']==$password) && ($oneUser['role']==$role) )
                 echo ("darle acceso a todo");
              }
               else{
                echo ("El usuario no existe");
              }
     
          }      
  
   // header("location:portfolio.php");

} */

/*
 session_start();
    if($_POST){ 

        if( ( $_POST['user']=="Mestrella" ) && ( $_POST['password']=="123456" ) ) {

            $_SESSION['user']="Mestrella";

           header("location:index.php");
        }
        else{
            echo "<script> alert('User or password incorrect'); </script>";
        }
} */

?>


<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>

  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  
<div class="container"> <!-- esta es la clase bs-5 grid container -->
    <div class="row justify-content-center align-items-center g-2"> <!-- clase bs-5 grid row-->  
        <!-- Aqui dividmos la pantalla de 12 en 3 divis, y llenamos con el segundo para centrar el formulario-->
            <div class="col-md-4">

            </div>
            <!--Segundo divi con forumlario dentro-->
        <div class="col-md-4">
            <div class="card">
                        <div class="card-header">
                            Login Page
                        </div>          
            
                        <div class="card-body">
                            <form action="session.php" method="post">
                                    Username: <input class="form-control" type="text" name="username" id="">
                                    <br/>
                                    Password: <input class="form-control" type="text" name="password" id="">
                                    <br/>
                                    <p>
                                    Role:
                                    <div class="input-group mb-3">
                                      <select class="form-select" name="roleName">
                                        <option selected>Choose Admin or User...</option>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                      </select>
                                    </div>
                                    <br/>
                                <button style="width:30%" class="btn btn-success" type="submit">Submit</button>            
                            </form>
                        </div>
            <div class="card-footer text-muted">
        </div>
    </div>  
</div>
        <!-- tercer divi columna 3-->
        <div class="col-md-4">
        </div>
</div>
    

  <main>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>