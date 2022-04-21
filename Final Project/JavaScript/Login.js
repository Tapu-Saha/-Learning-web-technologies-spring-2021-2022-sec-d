// JSON + AJAX
function handleLogin() {
  var name = document.getElementById("name").value;
  var password = document.getElementById("password").value;
  var role = document.getElementById("role").value;
  // ajax started
  let http = new XMLHttpRequest();
  let loginInInfo = {
    name: name,
    password: password,
    type: role,
  };
  let json = JSON.stringify(loginInInfo);
  http.open("POST", "Controllers/LoginLive.php", true);
  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.send("data=" + json);
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText);
      document.getElementById("msg").innerHTML = this.responseText;
    } else {
      false;
    }
  };
}

function validateform() {
  var name = document.getElementById("name").value;
  var password = document.getElementById("password").value;

  if (name == "") {
    document.getElementById("errorName").innerHTML = "Enter UserName";
    return false;
  } else if (password.length < 4) {
    document.getElementById("errorPassword").innerHTML =
      "Password must be at least 4 characters long.";
    return false;
  }
}
