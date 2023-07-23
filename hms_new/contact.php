
<link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-DfXdzJYeAM3LOn/qy5Kp+6LHAXp0V54Z3qyKcAu+Ek9tO5Uo5nNf8k0abRYI7yxy" crossorigin="anonymous">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

<link rel="css/stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">


<section class="contact py-5" id="contact">
  <div class="container">
  <div class="text-center my-5">
    <h1>Contact US <span class="text-primary"> </span></h1>
    <hr class="w-25 m-auto">
    <br><br>
    



    <form class="row g-3" method="POST" action="reservation.php">
  <div class="col-md-4">
    <label for="inputName" class="form-label">First Name</label>
    <input type="text" name="firstname" class="form-control" id="inputName" required>
  </div>
  <div class="col-md-4">
    <label for="inputMiddleName" class="form-label">Middle Name</label>
    <input type="text" name="middlename" class="form-control" id="inputMiddleName">
  </div>
  <div class="col-md-4">
    <label for="inputLastName" class="form-label">Last Name</label>
    <input type="text" name="lastname" class="form-control" id="inputLastName" required>
  </div>
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail" required>
  </div>
  <div class="col-md-6">
    <label for="inputPhone" class="form-label">Phone Number</label>
    <input type="text" name="phone" class="form-control" id="inputPhone" required>

    
   
  
  </div>
  <div class="col-md-6">
    <label for="inputCheckIn" class="form-label">Check-In Date</label>
    <input type="date" name="checkin" class="form-control" id="inputCheckIn" required>
  </div>
  <div class="col-md-6">
    <label for="inputCheckOut" class="form-label">Check-Out Date</label>
    <input type="date" name="checkout" class="form-control" id="inputCheckOut" required>
  </div>
  <div class="col-md-6">
    <label for="inputRoomType" class="form-label">Room Type</label>
    <select class="form-select" name="roomtype" id="inputRoomType" required>
      <option value="Single">Single</option>
      <option value="Double">Double</option>
      <option value="Suite">Suite</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputNumberOfGuests" class="form-label">Number of Guests</label>
    <input type="number" name="guests" class="form-control" id="inputNumberOfGuests" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Define error variables
    $errors = array();

    // Validate first name
    if (empty($_POST['firstname'])) {
        $errors['firstname'] = 'First name is required';
    }

    // Validate last name
    if (empty($_POST['lastname'])) {
        $errors['lastname'] = 'Last name is required';
    }

    // Validate email
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email is required';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }

    // Validate phone number
    if (empty($_POST['phone'])) {
        $errors['phone'] = 'Phone number is required';
    }

    // Validate check-in date
    if (empty($_POST['checkin'])) {
        $errors['checkin'] = 'Check-in date is required';
    }

    // Validate check-out date
    if (empty($_POST['checkout'])) {
        $errors['checkout'] = 'Check-out date is required';
    }

    // Validate room type
    if (empty($_POST['roomtype'])) {
        $errors['roomtype'] = 'Room type is required';
    }

    // Validate number of guests
    if (empty($_POST['guests'])) {
        $errors['guests'] = 'Number of guests is required';
    }

    // If there are no errors, you can process the form data
    if (empty($errors)) {
        // Access the form data
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        $roomtype = $_POST['roomtype'];
        $guests = $_POST['guests'];

        // Perform further actions with the validated data
        // For example, save it to a database or send an email

        // Redirect the user to a success page
        header('Location: success.php');
        exit;
    }
}
?>







