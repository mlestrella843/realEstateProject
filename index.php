<?php include('header.php'); ?>
<?php include('connection.php');?>

<?php  
$objConnection=new connection();
$properties = $objConnection->consult("SELECT * FROM `properties`");
//print_r($projects);
?>
    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">Dreamers Real Estate!</h1>
            <p class="lead">Our properties waiting for you!</p>
            <hr class="my-2">
            <p>More info</p>    
        </div>
    </div>
  
<!-- this is a card that contains each project-->

<div class="row row-cols-1 row-cols-md-3 g-4">

   <?php foreach($properties as $property) { ?>

    <div class="col">
        <div class="card">
        <img style="widht: 250px; height:300px;"  src="Images/<?php echo $property['image']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $property['name']; ?></h5>
            <p class="card-text"><?php echo $property['description']; ?></p>
            <p class="card-text">Address: <?php echo $property['address']; ?></p>
            <p class="card-text">City: <?php echo $property['city']; ?></p>
            <p class="card-text">Status: <?php echo $property['status']; ?></p>
            <p class="card-text">Price: <?php echo $property['price']; ?></p>

        </div>
        </div>
    </div>   
    
    <?php } ?>

</div>


    
<?php include('footer.php');  ?>