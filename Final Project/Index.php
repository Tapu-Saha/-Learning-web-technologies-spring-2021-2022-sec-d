<html>
<head>
	<title>Login form</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
body {font-family: 'Poppins', sans-serif;}
form {border: 3px solid #f1f1f1;}

input{
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

<form method="POST" name='myform' action="controllers/loginCheck.php" onsubmit="return validateform()"  style="width: 27%;margin: 5% auto;">
  <div class="imgcontainer">
    <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
	<h2>Please Login</h2>
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="name">
    <p id="errorName" style="color: red;"></p>   

    <label for="psw"><b>Password</b></label>
    <input type="password" name="password" placeholder="Enter Password" name="psw" id="password">
    <p id="errorPassword" style="color: red;"></p>



    <label for="role"><b>Login as</b></label>
    <select name="role" id="role" name="role"  style="width: 100%;height: 40px;">
      <option value="" selected>-- Select Role --</option>
      <option value="Admin">Admin</option>
      <option value="student">Student</option>
    </select>
    <p id="errorPassword" style="color: red;"></p>

    <input type="submit" name="submit" value="Login" class="button" onclick="handleLogin()">
    <p id="msg"></p>
    


     
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"><a href="Views/Register.php"  style="text-decoration: none;color: white;">New User?</a></button>
    
  </div>
</form>
</body>
<script src="JavaScript/Login.js"></script>
</fieldset>
</html>