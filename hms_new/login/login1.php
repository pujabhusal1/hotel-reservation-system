<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    body {
      font-family: grey, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      padding: 0;
    }

    h2 {
      color: #333;
      text-align: center;
    }
    
    .error {
      color: red;
    }

    #loginForm {
      width: 300px;
      padding: 20px;
      border: 1px solid #000;
      border-radius: 5px;
      background-color: #f2f2f2;
    }

    label {
      font-weight: bold;
    }

    input[type="email"],
    input[type="password"] {
      padding: 10px;
      margin-bottom: 15px;
      width: 100%;
      box-sizing: border-box;
    }

    input[type="submit"] {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <form id="loginForm" action="signup.php" onsubmit="validateForm(event)">
    <h2>Login here</h2>
    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" required>
      <span id="emailError" class="error"></span>
    </div>
    <div>
      <label for="password">Password:</label>
      <input type="password" id="password" required>
      <span id="passwordError" class="error"></span>
    </div>
    <div style="display: flex; justify-content: center;">
      <input type="submit" value="Login">
    </div>
  </form>

  <script>
    function validateEmail(email) {
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }

    function validateForm(event) {
      event.preventDefault(); // Prevent form submission

      // Reset error messages
      var errorElements = document.getElementsByClassName("error");
      for (var i = 0; i < errorElements.length; i++) {
        errorElements[i].textContent = "";
      }

      var email = document.getElementById("email").value.trim();
      var password = document.getElementById("password").value.trim();

      // Validate email
      if (email === "") {
        document.getElementById("emailError").textContent = "Email is required";
      } else if (!validateEmail(email)) {
        document.getElementById("emailError").textContent = "Invalid email format";
      }

      // Validate password
      if (password === "") {
        document.getElementById("passwordError").textContent = "Password is required";
      } else if (!validatePassword(password)) {
        document.getElementById("passwordError").textContent = "Invalid password format";
      }

      // If all fields are valid, submit the form
      if (email !== "" && password !== "") {
        document.getElementById("loginForm").submit();
      }
    }

    function validatePassword(password) {
      // Add your password validation logic here
      // For example, you can use a regular expression to validate the password format
      var passwordRegex = /^(?=.*[a-zA-Z])(?=.*\d.*\d)[a-zA-Z0-9]{8,}$/;
      return passwordRegex.test(password);
    }
  </script>
</body>
</html>
