<?php

if (isset($_REQUEST['submit'])) //Checking File is submitted or not (Click on submit button)
{

    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $type = $_POST['type']; //Getting value from form by name=""

    if ($userName != null && $password != null && $email != null) //Checking validation
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
        
        $file2 = fopen('../models/user.txt', 'a+');
        $loginInfo = "|" . $userName . "|" . $password . "|" . $type;
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
