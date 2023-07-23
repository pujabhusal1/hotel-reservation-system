<?php
include "admin/connect.php";

$query= "SELECT * from room";
$result=mysqli_query($conn,$query);
$row= mysqli_num_rows($result);

?>

<section class="services py-5 bg-light" id="Offer"> <!----------------------------TEAMS SECTION0---------------->
  <div class="container">
  <div class="text-center my-5">
    <h1>Offer</h1>
    <hr  class="w-25 m-auto">
    </div>
  
  <div class="row">

  <?php

  if($row)
  {
    while($row=mysqli_fetch_assoc($result))
    {
      ?>
  

  <div class="col-sm-12 col-md-4 col-lg-4 col-12">
  <div class="card">
  <div class="card-body">
    <img src="admin/photo/<?php echo $row["photo"]; ?>" class="img-fluid rounded-circle border border-primary ">
    <h5> <?php echo $row["room_type"]; ?> </h5>
    <h5> Rs.<?php echo $row["price"]; ?> </h5>
    <p class="card-text"></p>
    <a href="contact.php" class="btn btn-primary">Book Now</a>
    
    
</div>
</div>
</div> 
<?php
}
  }
  ?>





  </div>




</section>
