<html>
<head>
    <title>Registration</title>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
/* form {border: 3px solid #f1f1f1;} */

.inputCustom{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

</style>
<body>
<div class="imgcontainer">
    <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
	<h2>Please Register</h2>
  </div>
    
        <form method="POST" name="myform" action="../controllers/registrationCheck.php" onsubmit="return validateform()"  style="width: 27%;margin: 5% auto;">

                    Username<br>
                    <input name="userName" type="text" id='name'  class="inputCustom"><br>
                    <p id="errorName" style="color: red;"></p>
                    Email<br>
                    <input name="email" type="text" id='email'  class="inputCustom"><br>
                    <p id="errorEmail" style="color: red;"></p>
                    Password<br>
                        <input name="password" type="password" id='pass' class="inputCustom"><br>
                        <p id="errorPass" style="color: red;"></p>
                    Confirm Password<br>
                    <input name="confirmPassword" type="password"  id='conPass' class="inputCustom"><br>
                    <p id="errorConPass" style="color: red;"></p>
                    <div  style="display: flex;">
                    <div  style="width: 38%;">
                    User Type
                    </div>
                            <div><input type="radio" name="type" value ="none" checked>None
                            <input type="radio" name="type" value ="Admin" >Admin
                            <input type="radio" name="type" value ="universityManagement">University
                            <input type="radio" name="type" value ="faculty">Faculty
                            <input type="radio" name="type" value ="student">Student</div>
                    </div>
            <hr/>
            <input type="submit" name="submit" value="Sign Up" class="button">
            <button type="button" class="cancelbtn"><a href="../Index.php"  style="text-decoration: none;color: white;">Already Registered?</a></button>


            
        </form>
</body>
<script src="../JavaScript/Register.js"></script>
</html>