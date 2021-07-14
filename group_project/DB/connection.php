<?php 

   $db_host = "localhost"; 
   $db_name = "cc_cording";
   $db_user = "root";
   $db_password = "";
   $db_port = "3306";


   $connection= mysqli_connect($db_host,$db_user,$db_password,$db_name,$db_port);

   if($connection->connect_error){

        echo 'Database Connection Error';

        die();

   }

?>