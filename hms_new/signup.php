<!DOCTYPE html>
<html>
<head>
  <title>Signup Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
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

    #bookNowForm {
      width: 300px;
      padding: 20px;
      border: 1px solid #000;
      border-radius: 5px;
      background-color: #f2f2f2;
    }

    label {
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="phone"] {
      padding: 5px;
      margin-bottom: 20px;
      width: 100%;
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
  <form id="bookNowForm" onsubmit="validateForm(event)">
    <h2>Signup</h2>
    <label for="name">Name:</label>
    <input type="text" id="name" required><br>
    <span id="nameError" class="error"></span><br>
    <label for="email">Email:</label>
    <input type="email" id="email" required><br>
    <span id="emailError" class="error"></span><br>
    <label for="password">Password:</label>
    <input type="password" id="password" required><br>
    <span id="passwordError" class="error"></span><br>
    <label for="phone">Phone:</label>
    <input type="phone" id="phone" required><br>
    <span id="phoneError" class="error"></span><br>
    <input type="submit" value="Signup">
  </form>

  <script>
    function validateForm(event) {
      event.preventDefault(); // Prevent form submission

      // Reset error messages
      var errorElements = document.getElementsByClassName("error");
      for (var i = 0; i < errorElements.length; i++) {
        errorElements[i].textContent = "";
      }

      // Get form values
      var name = document.getElementById("name").value.trim();
      var email = document.getElementById("email").value.trim();
      var password = document.getElementById("password").value.trim();
      var phone = document.getElementById("phone").value.trim();

      // Validate name
      if (name === "") {
        document.getElementById("nameError").textContent = "Name is required";
      }

      // Validate email
      if (email === "") {
        document.getElementById("emailError").textContent = "Email is required";
      } else if (!validateEmail(email)) {
        document.getElementById("emailError").textContent = "Invalid email format";
      }

      // Validate password
      if (password === "") {
        document.getElementById("passwordError").textContent = "Password is required";
      }

      // Validate phone
      if (phone === "") {
        document.getElementById("phoneError").textContent = "Phone is required";
      } else if (!validatePhone(phone)) {
        document.getElementById("phoneError").textContent = "Invalid phone format";
      }

      // If all fields are valid, submit the form
      if (name !== "" && email !== "" && password !== "" && phone !== "") {
        document.getElementById("bookNowForm").submit();
      }
    }

    function validateEmail(email) {
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }

    function validatePhone(phone) {
      var phoneRegex = /^\d{10}$/;
      return phoneRegex.test(phone);
    }
  </script>
</body>
</html>
