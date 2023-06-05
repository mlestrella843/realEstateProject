
<?php 

        $server="localhost";
        $database="real_estate";
        $user="root";
        $password="";
        try{
            $connection=new PDO("mysql:host=$server;dbname=$database",$user,$password);
         
        }catch(Exception $error){
            echo $error->getMessage();
        }
      

?>