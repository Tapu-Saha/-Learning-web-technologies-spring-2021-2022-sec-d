function validateform() {
  // var name=document.myform.name.value;
  // var name = document.getElementById("id").value;
  var facultyName = document.getElementById("facultyName").value;
  var gender = document.getElementById("gender").value;
  var email = document.getElementById("email").value;
  var contactNo = document.getElementById("contactNo").value;
  var salary = document.getElementById("salary").value;
  // var password=document.myform.password.value;

  if (facultyName == "") {
    document.getElementById("errorName").innerHTML = "Enter Faculty Name";
    return false;
  } else if (gender == "") {
    document.getElementById("errorGender").innerHTML = "Enter Gender";
    return false;
  } else if (email == "") {
    document.getElementById("errorEmail").innerHTML = "Enter Email";
    return false;
  } else if (contactNo == "") {
    document.getElementById("errorContact").innerHTML = "Enter Contact No";
    return false;
  } else if (salary == "") {
    document.getElementById("errorSalary").innerHTML = "Enter Salary";
    return false;
  }
}
