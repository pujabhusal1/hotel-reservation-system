<style>
  .grid-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 100px;
    background-color: #f2f2f2;
  }
  
  .grid-row {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
  }
  
  .grid-column {
    flex-basis: 60%;
    max-width: 50%;
    box-sizing: border-box;
    padding: 10px;
  }
  
  .grid-items {
    width: 100%;
    height: 300px;
    margin-bottom: 20px;
    text-align: center;
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden;
  }
  
  .grid-items img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }
  
  .grid-items p {
    font-size: 24px;
    margin-bottom: 10px;
    font-weight: bold;
  }
  
  .book-now-button {
    display: inline-block;
    padding: 8px 20px;
    background-color: #3366ff;
    color: #ffffff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }
  
  .book-now-button:hover {
    background-color: #3355cc;
  }
  
  .grid-heading {
    text-align: center;
    font-size: 30px;
    margin-bottom: 20px;
  }
</style>

<div class="grid-container">
  <h2 class="grid-heading">Make a Reservation</h2>
  
  <div class="grid-row">
    <div class="grid-column">
      <div class="grid-items">
        <img src="images/6.jpg" alt="Image 6">
        <p>Item 6</p>
        <a href="reserve/book.php" class="book-now-button">Book Now</a>
      </div>
    </div>
  
    <div class="grid-column">
      <div class="grid-items">
        <img src="images/2.jpg" alt="Image 2">
        <p>Item 2</p>
        <a href="reserve/book.php" class="book-now-button">Book Now</a>
      </div>
    </div>
  </div>
  
  <div class="grid-row">
    <div class="grid-column">
      <div class="grid-items">
        <img src="images/1.jpg" alt="Image 1">
        <p>Item 1</p>
        <a href="reserve/book.php" class="book-now-button">Book Now</a>
      </div>
    </div>
  
    <div class="grid-column">
      <div class="grid-items">
        <img src="images/4.jpg" alt="Image 4">
        <p>Item 4</p>
        <a href="reserve/book.php" class="book-now-button">Book Now</a>
      </div>
    </div>
  </div>
  
  <div class="grid-row">
    <div class="grid-column">
      <div class="grid-items">
        <img src="images/5.jpg" alt="Image 5">
        <p>Item 5</p>
        <a href="reserve/book.php" class="book-now-button">Book Now</a>
      </div>
    </div>
  
    <div class="grid-column">
      <div class="grid-items">
        <img src="images/3.jpg" alt="Image 3">
        <p>RS 2500</p>
        <a href="reserve/book.php" class="book-now-button">Book Now</a>
      </div>
    </div>
  </div>
</div>
