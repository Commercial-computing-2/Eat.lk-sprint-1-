<?php

require_once "../DB/connection.php";

global $connection;

$username=$_POST['Ename'];
$password=$_POST['Pass'];

$userType="2";

$sql_login="SELECT * FROM cc_cording.users left join login on login.users_id=users.id WHERE login.email='$username' AND login.password='$password' AND users.user_types_id='$userType';";

$result_login = mysqli_query($connection, $sql_login);
    if (mysqli_num_rows($result_login) > 0) {

        echo 'Done';

    }else{
        
        echo 'Login Fail';

    }

?>