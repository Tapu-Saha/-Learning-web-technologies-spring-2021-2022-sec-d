<?php	
 require '../Models/db_config.php';
 deleteFacultyInfo($_GET['id']);
 header('location: ../../views/Faculty.php');
?>