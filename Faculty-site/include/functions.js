function validateForm() {
    var x = document.forms["logForm"]["username"].value;
    var y = document.forms["logForm"]["pass"].value;
    if (x == "" && y == "" || x == "" || y == "") {
      alert("All logging fields must be filled out!");
      return false;
    }else {
      alert("Thank you for logging in! Have a grate day :)");
      return true;
    }
  }
