
    function validateForm() {
// Get the values of the input fields
var name = document.getElementById("name").value;
var surname = document.getElementById("surname").value;
var username = document.getElementById("username").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var city = document.getElementById("city").value;
var gender = document.getElementById("gender").value;

// Check if the fields are empty
if (name == "" || surname == "" || username == "" ||  email == "" || password == "" || gender == "" || city == "") {
    alert("All fields are required!");
    return false;
}
if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
    alert("Invalid email address!");
    return false;
    }
if (password.search(/\d/) == -1) {
    alert("Password must contain at least one digit");
    return false;
}

else {
alert("Form submitted successfully!");
return true;
}
}
