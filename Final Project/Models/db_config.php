<?php
    
    function viewAllUser(){
        $con = mysqli_connect('localhost','root', '', 'webtech');
        $sql = 'select * from user';
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_assoc($result)){
            print_r($row);
            echo "<br>";
        }
    }
    function createUser($userName,$email,$password,$type){
        $con = mysqli_connect('localhost','root', '', 'webtech');
        $sql = "insert into user values('','$userName','$password','$email', '$type')";
        $result = mysqli_query($con,$sql);
    }
    
        function checkUserDB($username,$password,$type){
            $con=mysqli_connect('localhost','root','','webtech');
			$sql="select * from user where username ='$username' and password ='$password' and type ='$type'";
            $result=mysqli_query($con,$sql);
			$data = mysqli_fetch_assoc($result);
            if($data>1){
                return $data;
            }
           
        }

        // faculty
        function createFaculty($facultyId,$facultyName,$gender,$email,$contactNo,$salary){
            $con = mysqli_connect('localhost','root', '', 'webtech');
            $sql = "insert into faculty values('','$facultyName','$gender','$email', '$contactNo','$salary')";
            $result = mysqli_query($con,$sql);
        }
        function getFaculty(){
            $con = mysqli_connect('localhost','root', '', 'webtech');
            $sql = 'select * from faculty';
            $result = mysqli_query($con,$sql);
            $ArrayF=array();
            while($row = mysqli_fetch_assoc($result)){
                $ArrayF[]=$row;
            }
            return $ArrayF;
        }
        function getMyProfileInfo($myName){
            $con = mysqli_connect('localhost','root', '', 'webtech');
            $sql = "select * from user where username ='$myName'";
            $result=mysqli_query($con,$sql);
			$data = mysqli_fetch_assoc($result);
            if($data>1){
                return $data;
            }
        }
        function getFacultyInformation($id){
            $con=mysqli_connect('localhost','root','', 'webtech');
			$sql="select * from faculty where id ='$id'";
            $result=mysqli_query($con,$sql);
			$data = mysqli_fetch_assoc($result);
            if($data>1){
                return $data;
            }
        }
        
        function editFacultyInfo($id,$facultyName,$gender,$email,$contact,$salary){
            $con=mysqli_connect('localhost','root','', 'webtech');
            $sql = "UPDATE `faculty` SET `id`='$id',`facultyName`='$facultyName',`gender`='$gender',`email`='$email',`contactNo`='$contact',`salary`='$salary' WHERE id=".$id."";
            $result=mysqli_query($con,$sql);
            if($result){
                return $result;
            }
        }
        function deleteFacultyInfo($id){
            $con=mysqli_connect('localhost','root','', 'webtech');
            $sql = "DELETE FROM `faculty` WHERE id=".$id."";
            $result=mysqli_query($con,$sql);
            if($result){
                return $result;
            }
        }

        function assignCourse($facultyId,$facultyName,$courseName){
            $con = mysqli_connect('localhost','root', '', 'webtech');
            $sql = "insert into acourse values('$facultyId','$facultyName','$courseName')";
            $result = mysqli_query($con,$sql);
        }
        function getCourseInformation(){

            $con = mysqli_connect('localhost','root', '', 'webtech');
            $sql = 'select * from acourse';
            $result = mysqli_query($con,$sql);
            $ArrayF=array();
            while($row = mysqli_fetch_assoc($result)){
                $ArrayF[]=$row;
            }
            return $ArrayF;
        }

        function viewAllStudent(){
            $con = mysqli_connect('localhost','root', '', 'webtech');
            $sql = 'select * from student';
            $result = mysqli_query($con,$sql);
            $ArrayF=array();
            while($row = mysqli_fetch_assoc($result)){
                $ArrayF[]=$row;
            }
            return $ArrayF;
        }

        function viewAllResult(){
            $con = mysqli_connect('localhost','root', '', 'webtech');
            $sql = 'select * from sresult';
            $result = mysqli_query($con,$sql);
            $ArrayF=array();
            while($row = mysqli_fetch_assoc($result)){
                $ArrayF[]=$row;
            }
            return $ArrayF;
        }
        function viewsResult(){
            $con = mysqli_connect('localhost','root', '', 'webtech');
            $sql = 'select * from scourse';
            $result = mysqli_query($con,$sql);
            $ArrayF=array();
            while($row = mysqli_fetch_assoc($result)){
                $ArrayF[]=$row;
            }
            return $ArrayF;
        }
    
        // notice
        function AllNotice(){
            $con = mysqli_connect('localhost','root', '', 'webtech');
            $sql = 'select * from notice';
            $result = mysqli_query($con,$sql);
            $ArrayF=array();
            while($row = mysqli_fetch_assoc($result)){
                $ArrayF[]=$row;
            }
            return $ArrayF;
        }
        function editNoticeInfo($noticeId,$noticeName,$noticeDescription,$Date){
            $con=mysqli_connect('localhost','root','', 'webtech');
            $sql = "UPDATE `notice` SET `No`='$noticeId',`NoticeName`='$noticeName',`NoticeDetails`='$noticeDescription',`Date`='$Date' WHERE No=".$noticeId."";
            $result=mysqli_query($con,$sql);
            if($result){
                return $result;
            }
        }
        function createNotice($id,$noticeTitle,$noiceDescription,$date){
            $con = mysqli_connect('localhost','root', '', 'webtech');
            $sql = "insert into notice values('','$noticeTitle','$noiceDescription','$date','')";
            $result = mysqli_query($con,$sql);
        }
        function createMajor($major){
            $con = mysqli_connect('localhost','root', '', 'webtech');
            $sql = "insert into major values('','$major')";
            $result = mysqli_query($con,$sql);
        }
        function getNoticeInformation($id){
            $con=mysqli_connect('localhost','root','', 'webtech');
			$sql="select * from notice where No ='$id'";
            $result=mysqli_query($con,$sql);
			$data = mysqli_fetch_assoc($result);
            if($data>1){
                return $data;
            }
        }
        function deleteNoticeInfo($id){
            $con=mysqli_connect('localhost','root','', 'webtech');
            $sql = "DELETE FROM `notice` WHERE No=".$id."";
            $result=mysqli_query($con,$sql);
            if($result){
                return $result;
            }
        }

        function AllDepartment(){
            $con = mysqli_connect('localhost','root', '', 'webtech');
            $sql = 'select * from department';
            $result = mysqli_query($con,$sql);
            $ArrayF=array();
            while($row = mysqli_fetch_assoc($result)){
                $ArrayF[]=$row;
            }
            return $ArrayF;
        }
        function createDepartment($departmentId,$departmentName){
            $con = mysqli_connect('localhost','root', '', 'webtech');
            $sql = "insert into department values('','$departmentName')";
            $result = mysqli_query($con,$sql);
        }

        function AllCourse(){
            $con = mysqli_connect('localhost','root', '', 'webtech');
            $sql = 'select * from course';
            $result = mysqli_query($con,$sql);
            $ArrayF=array();
            while($row = mysqli_fetch_assoc($result)){
                $ArrayF[]=$row;
            }
            return $ArrayF;
        }

        function addCourse($courseId,$courseName){
            $con = mysqli_connect('localhost','root', '', 'webtech');
            $sql = "insert into course values('','$courseName')";
            $result = mysqli_query($con,$sql);
        }

        function createRoom($courseId,$courseName,$roomNo,$time){
            $con = mysqli_connect('localhost','root', '', 'webtech');
            $sql = "insert into room values('courseId','$courseName','$roomNo','$time')";
            $result = mysqli_query($con,$sql);
        }
        function AllRoom(){
            $con = mysqli_connect('localhost','root', '', 'webtech');
            $sql = 'select * from room';
            $result = mysqli_query($con,$sql);
            $ArrayF=array();
            while($row = mysqli_fetch_assoc($result)){
                $ArrayF[]=$row;
            }
            return $ArrayF;
        }








?>