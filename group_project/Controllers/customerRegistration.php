<?php

    require_once '../DB/connection.php';
    global $connection;

    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $sql_user="INSERT INTO `cc_cording`.`users`
    (`full_name`,
    `address`,
    `contact_number`,
    `email`,
    `user_types_id`)
    VALUES
    ('$name',
    '$address',
    '$phone',
    '$email',
    '2');";

    if($password==$cpassword){

        if(mysqli_query($connection,$sql_user)){

            $user_id=mysqli_insert_id($connection);

            $sql_login="INSERT INTO `cc_cording`.`login`
            (`email`,
            `password`,
            `users_id`)
            VALUES
            ('$email',
            '$password',
            '$user_id');";

            if(mysqli_query($connection,$sql_login)){

                echo 'Done';

            }else{

                echo 'Error Login Creation';
    
            }

        }else{

            echo 'Error User Creation';

        }

    }else{

        echo 'Passwords are not matched';

    }

?>