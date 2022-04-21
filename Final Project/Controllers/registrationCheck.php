<?php
 require '../Models/db_config.php';
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
        createUser($userName,$email,$password,$type);
        header('location: ../Index.php');


    }
    else
    {
        echo "Please Fill up the box properly";
    }
}

?>
