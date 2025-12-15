<!DOCTYPE html>
<html>
<head>
  <script>
    function checkCode() {
      const code = document.getElementById("code").value;
      if (code.includes("print")) {
        alert("✅ Correct!");
      } else {
        alert("❌ Try again");
      }
    }
  </script>
</head>
<body>

<h1>Challenge: Print Hello</h1>

<textarea id="code" rows="6" cols="40"></textarea><br>
<button onclick="checkCode()">Run Code</button>

</body>
</html>
