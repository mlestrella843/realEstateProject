<?php include('connection.php');
   session_start();
?>



<?php

if($_POST){  

    $_SESSION['username']= "";
    $_SESSION['password']= "";
    $_SESSION['role']="";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['roleName'];

    $sentence=$connection->prepare("SELECT * FROM `users`;");
    $sentence->execute();
    $arrayUsers = $sentence;
   
    foreach($arrayUsers as $oneUser){
      if( $oneUser['role']=="admin" ){ 
        if( ($oneUser['username']==$username) && ($oneUser['password']==$password) ) {                 
                $_SESSION['username']= $oneUser['username'];
                $_SESSION['password']= $oneUser['password'];  
                $_SESSION['role']=$oneUser['role'];     
                print_r($oneUser['username'])."<br/>";
                print_r($oneUser['password'])."<br/>";
                print_r($oneUser['role'])."<br/>";

                echo "Entro al foreach si tiene rol de ADMIN";       
                header("location:adminSite.php");   
                break;  
              }   
           }       
    else { 
      if( $oneUser['role']=="user" ){ 
        if ( ($oneUser['username']==$username) && ($oneUser['password']==$password) ){ 
              $_SESSION['username']= $oneUser['username'];
              $_SESSION['password']= $oneUser['password'];  
              $_SESSION['role']=$oneUser['role'];  
                print_r($oneUser['username'])."<br/>";
                print_r($oneUser['password'])."<br/>";
                print_r($oneUser['role'])."<br/>";
 
                echo "Entro al foreach si tiene rol de USER";              
                 header("location:projects.php");   
              break;   
            } else {
                $_SESSION['username']= "";
                $_SESSION['password']= "";
                $_SESSION['role']="";   

                print_r($oneUser['username'])."<br/>";
                print_r($oneUser['password'])."<br/>";
                print_r($oneUser['role'])."<br/>";

              echo "The user and password are invalid";
              header("location:session.php");   
              break;  
            }                       
          }    
        }
          
       }
   }




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

   <link rel="stylesheet" href="styles.css">


 <!-- Agregue font Awesome de bootsrap-->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">

<!-- Fonts de google fonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">


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
                                    Username: <input required class="form-control" type="text" name="username" id="">
                                    <br/>
                                    Password: <input required class="form-control" type="password" name="password" id="">
                                    <br/>
                                    <p>
                                    Role:
                                    <div class="input-group mb-3">
                                      <select required class="form-select" name="roleName">
                                        <option selected class="fonts">Choose Admin or User...</option>
                                        <option value="user" class="fonts">User</option>
                                        <option value="admin" class="fonts">Admin</option>
                                      </select>
                                    </div>
                                    <br/>
                                <button style="width:30%" class="btn btn-success" type="submit">Submit</button>            
                            </form>
                            <br/>
                             <p><a class="link-opacity-100" href="register.php">Sign Up / Register</a></p>
                            <br/>

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