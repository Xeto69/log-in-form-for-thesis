const form = document.getElementById("loginForm");
const errorMsg = document.getElementById("errorMsg");

function togglePassword() {
  const pass = document.getElementById("password");
  pass.type = pass.type === "password" ? "text" : "password";
}

form.addEventListener("submit", function (e) {
  e.preventDefault();

  const user = document.getElementById("username").value;
  const pass = document.getElementById("password").value;

  if (user === "admin" && pass === "1234") {
    alert("Login Successful!");
    errorMsg.textContent = "";
  } else {
    errorMsg.textContent = "Invalid credentials";
  }
});
