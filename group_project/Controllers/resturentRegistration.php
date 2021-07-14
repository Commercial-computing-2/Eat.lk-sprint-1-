<?php 

    require_once "../DB/connection.php";
    global $connection;

    session_start();

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    if($password==$cpassword){

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
        '3');";


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

                $sql_resturent="INSERT INTO `cc_cording`.`resturent`
                (`store_name`,
                `address`,
                `phone_number`,
                `email`,
                `users_id`)
                VALUES
                ('$name',
                '$address',
                '$phone',
                '$email',
                '$user_id');";

                if(mysqli_query($connection,$sql_resturent)){

                    echo 'Done';

                }else{

                    echo 'Database Error - Resturent Creation';

                }

            }else{

                echo 'Database Error - User Login Creation';

            }

        }else{

            echo 'Database Error - User Creation';

        }


    }else{

        $_SESSION['resturentRegMessage']="Passwords are not matching";
        echo 'Passwords are not matching';

    }

?>