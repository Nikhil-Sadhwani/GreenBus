<?php
  include './Navbar.php';
?>
 

    <section class="background-radial-gradient overflow-hidden">

        <section class="pricing-columns">


            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="width: 46%;
        ">
                    <label class="toggler toggler--is-active" id="filt-monthly">From</label>
                    <div class="toggle">
                        <input type="checkbox" id="switcher" class="check">
                        <b class="b switch"></b>
                    </div>
                    <label class="toggler" id="filt-hourly">To</label>
                </div>
            </div>


            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div id="monthly" class="wrapper-full hide">
                        <div class="table background-1">
                            <div class="scroll">
                                <div class="first">
                                <p>Bus Number</p>
                                    <p style="margin-right:95px;">From</p>
                                    <p style="margin-right:137px;">To</p>
                                    <p style="margin-right:85px;">Timing</p>
                                    <p style="margin-right:85px;">Book Tickets</p>
                                </div>

                                <?php 
                                    $dep1 = array("08:00 AM - 08:50 AM","10:00 AM - 10:50 AM" , "12:00 PM - 12:55 PM" ,"01:00 PM - 01:55 PM" , "02:30 PM - 03:25 PM" ,"3:25 PM - 04:35 PM");
                                    $dep2 = array("08:30 AM - 09:25 AM" ,"10:30 AM - 11:25 AM" , "12:30 PM - 01:25 PM" , "01:25 PM - 02:30 PM" , "2:35 PM - 03:25 PM" , "3:30 PM - 04:25 PM");

                                    $i=0;
                                    while($i < sizeof($dep1)){
                                        echo "<div class='line mr-R'>
                                        <p>5309</p>
                                        <p>Hantundi</p>
                                        <p>Nareli</p>
                                        <p style='width: 20%;'>".$dep1[$i]."</p>
                        
                                        <a href='booking.php'> <button style='width: 120%;' class='custom-btn btn-4'><span>Book Ticket</span></button></a>
                                        </p>
                                        </div>";
                                        echo "<div class='line2 mr-R'>
                                        <p>5319</p>
                                        <p>Hantundi</p>
                                        <p>Nareli</p>
                                        <p style='width: 20%;'>".$dep2[$i]."</p>
                        
                                        <a href='booking.php'> <button style='width: 120%;' class='custom-btn btn-4'><span>Book Ticket</span></button></a>
                                        </p>
                                        </div>";
                                        $i++;
                                    }

                                ?>
                            </div>
                        </div>
                    </div>

                    <div id="hourly" class="wrapper-full ">
                        <div class="table background-1">
                        <div class="scroll">
                            <div class="first">
                            <p>Bus Number</p>
                            <p style="margin-right:95px;">From</p>
                            <p style="margin-right:137px;">To</p>
                            <p style="margin-right:85px;">Timing</p>
                            <p style="margin-right:85px;">Book Tickets</p>
                            </div>
                            <?php 
                            $dep1 = array("09:00 AM - 09:50 AM","10:00 AM - 11:55 AM" , "11:05 AM - 11:55 AM" ,"12:00 PM - 01:50 PM");
                            $dep2 = array("09:35 AM - 10:10 AM" ,"10:30 AM - 11:25 AM" , "11:35 AM - 12:30 PM" ,"12:25 PM - 01:20 PM");

                            $i=0;
                            while($i < sizeof($dep1)){
                                echo "<div class='line mr-R'>
                                <p>5309</p>
                                <p>Nareli</p>
                                <p>Hantundi</p>
                                <p style='width: 20%;'>".$dep1[$i]."</p>
                
                                <a href='booking.php'> <button style='width: 120%;' class='custom-btn btn-4'><span>Book Ticket</span></button></a>
                                </p>
                                </div>";
                                echo "<div class='line2 mr-R'>
                                <p>5319</p>
                                <p>Nareli</p>
                                <p>Hantundi</p>
                                <p style='width: 20%;'>".$dep2[$i]."</p>
                
                                <a href='booking.php'> <button style='width: 120%;' class='custom-btn btn-4'><span>Book Ticket</span></button></a>
                                </p>
                                </div>";
                                $i++;
                            }
                            
                            ?>
                        
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/d/embed?mid=10HLoLy6QfsoJHgkqNNaKO3wFyD3UKHw&ehbc=2E312F" width="640" height="480"></iframe>
            </div>

        </section>


    </section>
    <!-- Section: Design Block -->



    <?php  include './Footer.php' ?>


    <!-- Template Main JS File -->

    <script src="assets/js/main.js"></script>

    <script>
        var e = document.getElementById("filt-monthly"),
            d = document.getElementById("filt-hourly"),
            t = document.getElementById("switcher"),
            m = document.getElementById("monthly"),
            y = document.getElementById("hourly");

        e.addEventListener("click", function () {
            t.checked = false;
            e.classList.add("toggler--is-active");
            d.classList.remove("toggler--is-active");
            m.classList.remove("hide");
            y.classList.add("hide");
        });

        d.addEventListener("click", function () {
            t.checked = true;
            d.classList.add("toggler--is-active");
            e.classList.remove("toggler--is-active");
            m.classList.add("hide");
            y.classList.remove("hide");
        });

        t.addEventListener("click", function () {
            d.classList.toggle("toggler--is-active");
            e.classList.toggle("toggler--is-active");
            m.classList.toggle("hide");
            y.classList.toggle("hide");
        })
    </script>


</body>

</html>