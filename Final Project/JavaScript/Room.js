function validateform() {
  // var name=document.myform.name.value;
  // var No = document.getElementById("noticeId").value;
  console.log("Hi");
  var courseId = document.getElementById("courseId").value;
  var courseName = document.getElementById("courseName").value;
  var roomNo = document.getElementById("roomNo").value;
  var time = document.getElementById("time").value;
  // var noticeDescription = document.getElementById("noticeDescription").value;
  //var date = document.getElementById("date").value;
  // var password=document.myform.password.value;

  if (courseId == "") {
    document.getElementById("errorId").innerHTML = "Enter Course Id";
    return false;
  } else if (courseName == "") {
    document.getElementById("errorName").innerHTML = "Enter Course Name";
    return false;
  } else if (roomNo == "") {
    document.getElementById("errorRoom").innerHTML = "Enter Room No";
    return false;
  } else if (time == "") {
    document.getElementById("errorTime").innerHTML = "Enter Time";
    return false;
  }
}

function showCourseRoom(str) {
  if (str == "") {
    document.getElementById("courseName").value = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    $students = [];
    //   console.log(this.responseText);
    $students = this.responseText;
    //   console.log(this.responseText);
    document.getElementById("courseName").value = this.responseText;
  };
  //   .$notice['No'].
  xhttp.open("GET", "../Controllers/RoomLive.php?q=" + str);
  xhttp.send();
}
