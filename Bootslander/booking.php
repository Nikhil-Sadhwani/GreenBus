<?php
  session_start();
  include '../_dbconnect.php';
  include './Navbar.php';

?>


  <section class="background-radial-gradient overflow-hidden">

    <form method="post" style="    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding:21px;">
      <div class="my-2">
        <label for="fullname" style="margin-right:32px;">Full Name</label>
        <input type="text" style="font-size:13px; padding:8px; border-radius:7px; border:none;" name="fullname" id="fullnamei" placeholder="Enter your Name" required>
      </div>
      <div class="my-2">
        <label for="phonenumber">Phone Number</label>
        <input type="text" style="font-size:13px; padding:8px; border-radius:7px; border:none;" name="phonenumber" id="phonenumberi" placeholder="Enter your Number" required>
      </div>
        <div class="book-box">
          <div class="movie-container" style="text-align: center;margin:10px 0px;width:100%;">
            <select id="movie-seat">
              <option value="" disabled selected>Enter Destination</option>
              <option value=""> Ajmer</option>
              <option value="">Badliya</option>
              <option value="">Daurai</option>
              <option value="">Nosar</option>
              <option value="">Nareli Jain Mandir</option>
              <option value="">Janana Hospital</option>
              <option value="">Kishangarh</option>
              <option value="">Foysagar</option>
              <option value="">Pushkar</option>
              <option value="">Makdwali</option>
              <option value="">Hatundi</option>
            </select>
          </div>
          <div class="movie-container" style="text-align: center; margin: 10px 0px;width:100%;">
         
            <select id="movie" name = "arrival">
              <option value="" disabled selected>To Destination</option>
              <option value="25"> Ajmer</option>
              <option value="18">Badliya</option>
              <option value="25">Daurai</option>
              <option value="20">Nosar</option>
              <option value="19">Nareli Jain Mandir</option>
              <option value="28">Janana Hospital</option>
              <option value="35">Kishangarh</option>
              <option value="15">Foysagar</option>
              <option value="20">Pushkar</option>
              <option value="17">Makdwali</option>
              <option value="19">Hatundi</option>
            </select>
          </div>
          <h6>Select number of seats</h6>
          <input type="number" class="select-box" id="Numseats" >
          <p style="display: inline-block;">(Optional)</p>
          <ul class="showcase">
            <li>
              <div class="seat"></div>
              <small style="color: black;">N/A</small>
            </li>
            <li>
              <div class="seat selected"></div>
              <small style="color: black;">Selected</small>
            </li>
            <li>
              <div class="seat occupied"></div>
              <small style="color: black;">Occupied</small>
            </li>
          </ul>

          <div class="m-container">
            <div class="movie-screen">
              <h3> Front </h3>
            </div>

            <div class="row-container">
              <div class="row">

                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
              </div>
              <div class="row">

                <div class="seat occupied"></div>
                <div class="seat occupied"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
              </div>
              <div class="row">

                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat occupied"></div>
              </div>
              <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>

              </div>
              <div class="row">

                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat occupied"></div>
                <div class="seat occupied"></div>
                <div class="seat"></div>
              </div>

              <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
              </div>

              <div class="row">

                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat occupied"></div>
                <div class="seat occupied"></div>
                <div class=" seat" style="margin-left: 4px;"></div>
                <div class=" seat"></div>
              </div>
              <div class="text-wrapper">
                <p class="text">Selected Seats <span id='count'>0</span>
                <p class="text">Total Price ₹<span id="total">0</span></p>
              </div>
            </div>

          </div>
          <!-- <a href="payment.php"><button type="submit" style="width: 100px; margin-left: 39%;" class="custom-btn btn-4"><span>Payment</span></button></a> -->
          <button type="submit" name="sub" style="width: 100px; margin-left: 39%;" class="custom-btn btn-4"><span>Payment</span></button>
        </div>
    </form>
    

  </section>
  <!-- Section: Design Block -->


  <?php include './Footer.php';?>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
<script>
  const seats = document.querySelectorAll(".row .seat:not(.occupied)");
  const seatContainer = document.querySelector(".row-container");
  const count = document.getElementById("count");
  const total = document.getElementById("total");
  const movieSelect = document.getElementById("movie");
  const seatsSelect = document.getElementById("Numseats");
  
  
  <?php
      if(isset($_POST['sub'])){
          $fullname = $_POST["fullname"];
          $pno = $_POST["phonenumber"];
          $arr = $_POST["arrival"];
          
          $str="INSERT INTO usersbook (Fullname ,Phonenumber) VALUES ('$fullname','$pno')";
          $result = mysqli_query($conn , $str);
          $_SESSION['fullnamei'] = $fullname ; 
          $_SESSION['movie'] = $arr ; 

          echo "<script>alert('Ticket is booked');</script>";
          echo "<script>document.location.href='payment.php';</script>";      
        }
    ?>

  populateUI();

  let ticketPrice = +movieSelect.value;

  // Save selected movie index and price
  function setMovieData(movieIndex, moviePrice) {
    localStorage.setItem("selectedMovieIndex", movieIndex);
    localStorage.setItem("selectedMoviePrice", moviePrice);
  }

  function updateSelectedCount() {
    const selectedSeats = document.querySelectorAll(".m-container .selected");

    seatsIndex = [...selectedSeats].map(function (seat) {
      return [...seats].indexOf(seat);
    });

    localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

    let selectedSeatsCount = selectedSeats.length;
    count.textContent = selectedSeatsCount;
    total.textContent = selectedSeatsCount * ticketPrice;
  }

  // Get data from localstorage and populate
  function populateUI() {
    const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));

    if (selectedSeats !== null && selectedSeats.length > 0) {
      seats.forEach(function (seat, index) {
        if (selectedSeats.indexOf(index) > -1) {
          seat.classList.add("selected");
        }
      });
    }

    const selectedMovieIndex = localStorage.getItem("selectedMovieIndex");

    if (selectedMovieIndex !== null) {
      movieSelect.selectedIndex = selectedMovieIndex;
    }
  }

  // Movie select event

  movieSelect.addEventListener("change", function (e) {
    ticketPrice = +movieSelect.value;
    setMovieData(e.target.selectedIndex, e.target.value);
    updateSelectedCount();
  });

  // Adding selected class to only non-occupied seats on 'click'

  seatContainer.addEventListener("click", function (e) {
    const selectedSeats = document.querySelectorAll(".m-container .selected").length;
    const maxSeatsSelected = parseInt(document.getElementById("Numseats").value);
    if (selectedSeats >= maxSeatsSelected && !e.target.classList.contains("selected")) {
      alert('Max seats reached! Please de-select any seat to continue!')
    }
    else if (
      e.target.classList.contains("selected") ||
      e.target.classList.contains("seat") &&
      !e.target.classList.contains("occupied")
    ) {
      e.target.classList.toggle("selected");
      updateSelectedCount();
    }
  });

  // Initial count and total rendering
  updateSelectedCount();


  
</script>

</html>