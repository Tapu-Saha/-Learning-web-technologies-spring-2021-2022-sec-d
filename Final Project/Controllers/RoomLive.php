<?php
$con=mysqli_connect('localhost','root','', 'webtech');
			$sql="select * from room where courseId =".$_GET['q']."";
            $result=mysqli_query($con,$sql);
			$data = mysqli_fetch_assoc($result);
            if($data>1){
                // print_r($data);
                $name=$data["courseName"];
                echo $name;
                // foreach($data as $key) {
                //     $name = $key["facultyName"];
                //     return $name;
                // }
                
                
            }
?>
