<?php
$con = mysqli_connect('localhost','root', '', 'webtech');
$sql = "select * from student where name like '%".$_GET['q']."%' or email like '%".$_GET['q']."%'";
$result = mysqli_query($con,$sql);    
$output='';


echo "Result from Search\n";

?>
<table>
        <th>Number</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
    </th>
    <?php
    foreach ($result as $key) {
        echo '<tr>';
        echo '<td>'.$key['id'].'</td>';
        echo '<td>'.$key['name'].'</td>';
        echo '<td>'.$key['email'].'</td>';
        echo '<td>'.$key['address'].'</td>'; 
        echo '</tr>';
        }
        ?>

</table>
