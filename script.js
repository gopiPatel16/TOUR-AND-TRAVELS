// Register User
function registerUser() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "register.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        alert(this.responseText);
    };
    xhr.send(`username=${username}&password=${password}`);
}

// Login User
function loginUser() {
    const username = document.getElementById("loginUsername").value;
    const password = document.getElementById("loginPassword").value;

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "login.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        alert(this.responseText);
    };
    xhr.send(`username=${username}&password=${password}`);
}

// Book a Tour
function bookTour() {
    const destination = document.getElementById("destination").value;
    const date = document.getElementById("date").value;

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "book.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        alert(this.responseText);
    };
    xhr.send(`destination=${destination}&date=${date}`);
}

// Generate Reports
function generateReports() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "reports.php", true);
    xhr.onload = function () {
        document.getElementById("reportSection").innerHTML = this.responseText;
    };
    xhr.send();
}
