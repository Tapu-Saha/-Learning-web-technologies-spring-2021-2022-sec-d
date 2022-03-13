<?php

if (isset($_REQUEST['submit']))
{

    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $type = $_POST['type'];

    if ($userName != null && $password != null && $email != null)
    {
        if (strlen($password) < 4)
        {
            echo "Password should be at least 4";
            return;
        }
        if ($password !== $confirmPassword)
        {

            echo "confirm password should be matched with password";
            return;
        }
        // if( $userName == null &&  $password == null &&  $type == null){
        //     header('location: ../views/Register.php');
        // }
        

        $user = "|" . $userName . "|" . $email . "|" . $password . "|" . $type;

        $file = fopen('../models/reg.txt', 'a+');
        fwrite($file, "$user");
        fclose($file);
        $loginInfo = "|" . $userName . "|" . $password . "|" . $type;
        $file2 = fopen('../models/user.txt', 'a+');
        fwrite($file2, "$loginInfo");
        fclose($file2);
        header('location: ../views/Index.php');

        $userArray = explode('|', $user);

    }
    else
    {
        echo "Please Fill up the box properly";
    }
}

?>
