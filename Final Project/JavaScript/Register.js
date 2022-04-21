function validateform() {
  var name = document.myform.name.value;
  var email = document.myform.email.value;
  var pass = document.myform.pass.value;
  var conPass = document.myform.conPass.value;

  if (name == null || name == "") {
    document.getElementById("errorName").innerHTML = "Enter UserName";
    return false;
  } else if (email == null || email == "") {
    document.getElementById("errorEmail").innerHTML = "Enter Email";
    return false;
  } else if (pass.length < 4) {
    document.getElementById("errorPass").innerHTML =
      "Password must be at least 4 characters long.";
    return false;
  } else if (conPass.length < 4) {
    document.getElementById("errorConPass").innerHTML =
      "Confirm Password must be at least 4 characters long.";
    return false;
  }
}
