<?php include('header.php');?>
<?php include('connection.php');?>

<?php
    
    if( isset( $_GET['txtID'] ) ){
        $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
        $sentence=$connection->






    }





?>


<br/>
<div class="container">
    <div class="row">
        <div class="col-md-4">
        <!----------->                      
          <div class="card">
                <div class="card-header">
                    Project Information
                </div>
                <div class="card-body">          
                    <form action="portfolio.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                          <label for="txtID" class="form-label">ID:</label>
                          <input type="text"
                            class="form-control" readonly name="" id="" aria-describedby="helpId" placeholder="ID">
                        </div>


                        <!-- nameproject es el nombre que entro por teclado, y que se guarda en la columna name de la base de datos-->
                        Name of project: <input required class="form-control" type="text" name="nameProject" id=""> 
                        <br/>
                        Image of project: <input required class="form-control" type="file" name="file" id="">
                        <br/>
                        Description:
                        <textarea required class="form-control" name="description" id="" cols="30" rows="4"></textarea>
                        <br/>
                        Address: <input required class="form-control" type="text" name="address" id=""> 
                        <br/>
                        city: <input required class="form-control" type="text" name="city" id=""> 
                        <br/>
                        Status:<input required class="form-control" type="text" name="status" id=""> 
                        <br/>
                        Price: <input required class="form-control" type="text" name="price" id="">
                        <br/>

                        <input class="btn btn-success" type="submit" value="Send project">
                    </form>
                </div>  
            </div>
        <!-------->
        </div>
