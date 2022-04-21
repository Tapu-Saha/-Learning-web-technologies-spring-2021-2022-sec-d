function showFacultyName(str) {
  if (str == "") {
    document.getElementById("txtHint").value = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    $students = [];
    //   console.log(this.responseText);
    $students = this.responseText;
    //   console.log(this.responseText);
    document.getElementById("txtHint").value = this.responseText;
  };
  //   .$notice['No'].
  xhttp.open("GET", "../Controllers/FacultyNameLive.php?q=" + str);
  xhttp.send();
}
