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
    errorMsg.textContent = "Invalid username or password";
  }
});

function openForgot() {
  document.getElementById("forgotModal").style.display = "flex";
}

function closeForgot() {
  document.getElementById("forgotModal").style.display = "none";
}

function openSignup() {
  document.getElementById("signupModal").style.display = "flex";
}

function closeSignup() {
  document.getElementById("signupModal").style.display = "none";
}

window.onclick = function(e) {
  if (e.target.classList.contains("modal")) {
    e.target.style.display = "none";
  }
};
