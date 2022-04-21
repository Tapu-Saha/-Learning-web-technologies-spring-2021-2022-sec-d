function validateform() {
  // var name=document.myform.name.value;
  // var No = document.getElementById("noticeId").value;
  var noticeTitle = document.getElementById("noticeTitle").value;
  // var noticeDescription = document.getElementById("noticeDescription").value;
  var date = document.getElementById("date").value;
  // var password=document.myform.password.value;

  if (noticeTitle == "") {
    document.getElementById("errorTitle").innerHTML = "Enter Notice Title";
    return false;
  } else if (date == "") {
    document.getElementById("errorDate").innerHTML = "Enter Notice Date";
    return false;
  }
}
