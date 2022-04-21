function validateform() {
  // var name=document.myform.name.value;
  // var name = document.getElementById("id").value;
  var courseName = document.getElementById("courseName").value;
  // var password=document.myform.password.value;

  if (courseName == "") {
    document.getElementById("errorName").innerHTML = "Enter CourseName";
    return false;
  }
}
