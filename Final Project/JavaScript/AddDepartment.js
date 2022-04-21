function validateform() {
  var departmentName = document.getElementById("departmentName").value;

  if (departmentName == "") {
    document.getElementById("errorName").innerHTML = "Enter DepartmentName";
    return false;
  }
}
