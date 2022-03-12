<?php
if(isset($_REQUEST['submit'])) {
    $file = fopen('course.txt', 'r');
    $updatedContent = "";
    while(!feof($file)) {
        $line = fgets($file);
        $user = explode('|', $line);
        if($user[0] == $_REQUEST['id']) {
            $line = $_REQUEST['id'] . '|' . 
                    $_REQUEST['username'] . '|' . 
                    $_REQUEST['password'] . '|' . 
                    $_REQUEST['email'] . "\r\n";
        }
        $updatedContent .= $line;
    }
    // echo $updatedContent;
    fclose($file);
    $file = fopen('user.txt', 'w');
    fwrite($file, $updatedContent);
    fclose($file);
    header('location: user-table.php');
}