function showCustomer(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    $students = [];
    console.log(this.responseText);
    $students = this.responseText;
    document.getElementById("txtHint").innerHTML = this.responseText;
    document.getElementById("allStudent").innerHTML = "";
  };
  xhttp.open("GET", "../Controllers/StudentLive.php?q=" + str);
  xhttp.send();
}
