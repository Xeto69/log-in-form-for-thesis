const form = document.getElementById("loginForm");
const errorMsg = document.getElementById("errorMsg");

form.addEventListener("submit", function (e) {
  e.preventDefault();

  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  // Simple validation
  if (username === "" || password === "") {
    errorMsg.textContent = "All fields are required!";
    return;
  }

  // Demo credentials
  if (username === "admin" && password === "1234") {
    alert("Login successful!");
    errorMsg.textContent = "";
  } else {
    errorMsg.textContent = "Invalid username or password";
  }
});
