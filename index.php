<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel website</title>
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <!-- boxicon -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!--  -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!--  googlefonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        #formContainer {
            display: none; /* Initially hide the form */
        }
    </style>
</head>

<body>
    <!-- header -->
    <header>
        <a href="#" class="logo">Travel<span>Vista</span></a>
        <ul class="navbar">
            <li><a href="#">Home</a></li>
            <li><a href="#holi">Holidays</a></li>
            <li><a href="#culture">Culture</a></li>
            <li><a href="#aboutus">About us</a></li>
            <li><a href="#contactus">Contact us</a></li>
        </ul>
        <div class="h-right">
            <a href="#">Follow us</a>
            <a href="https://www.instagram.com/"><i class="ri-instagram-line"></i></a>
            <a href="https://twitter.com/i/flow/login"><i class="ri-twitter-fill"></i></a>
            <a href="https://www.facebook.com/"><i class="ri-facebook-fill"></i></a>
            <div class="bx bx-menu" id="menu-icon"> </div>

        </div>
    </header>


<!-- Home section -->
<section class="home">
    <div class="home-text">
        <h5>Let's</h5>
        <h1>Discover Your <br> Next Destination</h1>
        <p>
            Explore effortlessly, travel endlessly. Welcome to your ultimate travel companion. Our booking platform simplifies your journey,
             offering instant access to top destinations and exclusive deals. Discover, book, and experience – it’s that easy. Your adventure begins here.
        </p>
        <a href="#booking-form" class="btn">Book a trip</a>
    </div>
</section>

<!-- feature section -->
<section class="feature">
    <div class="feature-content">
        <div class="row">
            <div class="row-img">
                <a href="https://www.ridestore.com/mag/ski-touring-for-beginners/">  <img src="./img/nap1.jpg" alt="row-img"> </a>
            </div>
           <h4>Ski tours</h4> 
        </div>

        <div class="row">
            <div class="row-img">
               <a href="https://www.peakadventuretour.com/"> <img src="./img/nap2.jpg" alt="row-img"></a>
            </div>
            <h4>Adventure Tours</h4>
        </div>
        
        <div class="row">
            <div class="row-img">
               <a href="https://www.eziholiday.com/educational-tours/"><img src="./img/nap3.jpg" alt="row-img"></a> 
            </div>
            <h4>Educational Tours</h4>
        </div>

        <div class="row">
            <div class="row-img">
             <a href="https://internationalyouthclub.org/category/theme/ladakh-tour-package/?gad_source=1&gclid=Cj0KCQjwhfipBhCqARIsAH9msblQIPv90xFxaUn5pKC7p-a4Mep1G4JuwRCbGPY7fUtf4AQQNqlYx9YaAhufEALw_wcB">  <img src="./img/nap4.jpg" alt="row-img"></a> 
            </div>
            <h4>Honeymoon Packages</h4>
        </div>

        <div class="row">
            <div class="row-img">
               <a href="https://www.fabhotels.com/blog/road-trip-guide/"><img src="./img/nap5.jpg" alt="row-img"></a> 
            </div>
            <h4>Road Trips</h4>
        </div>

    </div>
</section>



<!-- HOliday section -->
<section id="holi" class="holiday"> 
    <div class="holiday-img">
        <img src="./img/h4.jpeg" alt="holiday">
    </div>
    <div class="holiday-text">
        <h5>Why Choose Our Holidays?</h5>
        <h2>Your Dream Holidays Await</h2>
        <p>Indulge in the art of relaxation and exploration with our curated holiday getaways. Each destination is a story waiting to be written, a canvas waiting for your brushstroke. Dive into the azure waters of Bali, where tranquility meets adventure. Or experience the romance of Paris,
             where every street whispers tales of love.
        </p>
        <a href="#" class="btn">Read more</a>

    </div>
    <!--  -->
    <div class="culture-text">
        <h5>WHY CHOOSE OUR HOLIDAYS?</h5>
        <h2>Unveiling Nepal: Where Every Step is an Adventure!</h2>
        <p>Embark on a soul-stirring journey in Nepal, where ancient temples whisper tales of history, and majestic Himalayas echo with adventure. From the tranquility of Pokhara's lakes to the vibrant markets of Kathmandu, Nepal's beauty knows no bounds. Immerse in rich culture, savor exotic cuisine, and trek paths that lead to awe-inspiring vistas. Every moment in Nepal is an adventure waiting to be embraced. 
            Let Nepal paint your holiday with unforgettable moments and lifelong memories."</p>
        <a href="#" class="btn">Read more</a>
    </div>
    <div class="culture-img">
        <img src="./img/h5.jpeg" alt="">
    </div>
    
</section>

    

<!-- Tour section -->
<section class="tour">
    <div class="center-text">
        <h2>Popular Tours</h2>
    </div>

    <div class="tour-content">
        <div class="box">
                <img src="./img/t1.jpg" alt="">
                <h6>East java</h6>
                <h4>Mount Bromo</h4>
        </div>

        <div class="box">
            <img src="./img/t2.jpg" alt="">
            <h6>East java</h6>
            <h4>Mount Bromo</h4>
    </div>

    <div class="box">
        <img src="./img/t3.jpg" alt="">
        <h6>East java</h6>
        <h4>Mount Bromo</h4>
</div>


    </div>
    <div class="center-btn">
        <a href="#" class="btn">See Tours</a>
    </div>
</section>


<!-- culture section -->
<section id="culture" class="culture">
    <div class="culture-text">
        <h5>INDIAN CULTURE</h5>
        <h2>India: Where Traditions Thrive!</h2>
        <p>India: Where Tradition and Modernity Dance Together. Dive into a world of vivid colors, ancient traditions, and timeless spirituality. Experience the rhythm of festivals, the artistry of dance, and the flavor of diverse cuisines. India's culture is a tapestry woven with warmth, respect, and unparalleled hospitality. Every moment here is a celebration, making it a journey that ignites
             the soul and leaves an indelible mark on the heart.
        </p>
        <a href="#" class="btn">Read more</a>
    </div>
    <div class="culture-img">
        <img src="./img/c1.png" alt="">
    </div>

    <div class="holiday-img">
        <img src="./img/c2.jpg" alt="holiday">
    </div>
    <div class="holiday-text">
        <h5>NEPALI CULTURE</h5>
        <h2>Where Tradition Sparks Life's Most Vibrant Colors!</h2>
        <p>Dive into Nepal's Cultural Tapestry: Where Tradition Meets Timeless Charm. Experience the warm hospitality, vibrant festivals, and ancient customs that make Nepal's culture truly enchanting. Discover a land where every smile tells a story and every gesture is a dance of tradition. Immerse
             yourself in the harmony of Nepali traditions, where past and present blend seamlessly, creating an experience that lingers in your heart forever.
        </p>
        <a href="#" class="btn">Read more</a>

    </div>
    
</section>



<!-- php code  -->
 
<?php
include("database.php"); // Ensure this file contains the correct connection setup

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve booking data from the form
    $name = $_POST['name'];
    $gmail = $_POST['gmail'];
    $number = $_POST['number'];
    $destination = $_POST['destination'];
    $travel_date = $_POST['date'];
    $passengers = (int)$_POST['passengers']; // Cast to integer
    $transportation = $_POST['transportation'];

    // Insert into bookings table
    $sql = "INSERT INTO bookings (name, gmail, number, destination, travel_date, passengers, transportation)
            VALUES ('$name', '$gmail', '$number', '$destination', '$travel_date', $passengers, '$transportation')";

    if ($conn->query($sql) === TRUE) {
        // Get the last inserted booking ID
        $booking_id = $conn->insert_id;

        // Insert passenger names
        for ($i = 1; $i <= $passengers; $i++) {
            $passenger_name = $_POST["passenger$i"];
            $sql_passenger = "INSERT INTO passengers (booking_id, passenger_name)
                              VALUES ($booking_id, '$passenger_name')";
            $conn->query($sql_passenger);
        }

        // Trigger an alert after successful insertion
        echo "<script>
                alert('Ticket Booked successfully!');
                window.location.href = '" . $_SERVER['PHP_SELF'] . "';
              </script>";
    } else {
        echo "<script>
                alert('Error Booking Ticket ~ Contact Admin: " . $conn->error . "');
              </script>";
    }
}
?>



<!-- <booking -->

<section class="holiday" >
    <!-- Left Side: Form -->
    <div class="holiday-img">
        <section id="booking-form">


            <div class="container">
                <h1>Travel Ticket Booking</h1>
                <form id="booking-form" action="" method="post">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" placeholder="John Doe" required><br><br>

                    <label for="gmail">Enter Gmail:</label>
                    <input type="text" id="gmail" name="gmail" placeholder="Ex. John.doe@gamil.com" required><br><br>


                    <label for="number">Mobile Number:</label>
                    <input type="number" id="number" name="number"   placeholder="Ex. 88xxxxxxxx"><br><br>

                    <label for="destination">Destination:</label>
                    <input type="text" id="destination" name="destination" placeholder="Ex. pune" required><br><br>

                    <label for="date">Travel Date:</label>
                    <input type="date" id="date" name="date" required><br><br>

                    <label for="passengers">Number of Passengers:</label>
                    <input type="number" id="passengers" name="passengers" min="1" placeholder="Ex. 1" required><br><br>

                    <div id="passenger-names"></div> <!-- Container for passenger names -->

                    <label for="transportation">Transportation Choice:</label>
                    <select id="transportation" name="transportation" required>
                        <option value="">Select</option>
                        <option value="flight">Flight</option>
                        <option value="train">Train</option>
                        <option value="car">Car</option>
                        <option value="bus">Bus</option>
                    </select><br><br>

                        <input type="submit" value="Submit" class="btn"/>
                </form>
            </div>






            <div class="modal" id="myModal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <p id="modal-text"></p>
                </div>
            </div>
        </section>
    </div>




<!-- Right Side: Holiday Text and Fetching Details -->
<div class="holiday-text" id="holiday-text-container">
    <div id="initial-info">
        <h5>Your Journey, Our Passion - Book Beyond Boundaries!</h5>
        <h2>Book Your Next Getaway with Ease!</h2>
        <p>
            Discover seamless travel experiences at our website, where every booking is a promise of unmatched quality and convenience. With an extensive range of destinations, exclusive deals, and a user-friendly interface, we ensure your journey is as enjoyable to plan as it is to experience. Trustworthy reviews, secure payments, and personalized recommendations are at your fingertips, offering a hassle-free booking process. Plus, our transparent pricing and dedicated customer support guarantee peace of mind. Book with us and unlock a world of adventures, where your dream vacations come to life effortlessly.
        </p>

        <!-- Button to show the form -->
        <button id="showFormButton" onclick="showForm()" class="btn">Ticket Information</button>
    </div>

    <!-- Form -->
    <div id="formContainer" style="display: none;">
        <form id="ticketForm">
            <label for="email">Enter your Booking Email Address:</label>
            <input type="text" name="email" id="email" required>
            <button type="submit" class="btn">Get Your Ticket Details</button>
        </form>
    </div>

    <!-- Section to display results -->
    <div id="resultContainer" style="display: none;"></div>
</div>


</section>






<section id="aboutus" class="about">
<h1 style="color: rgb(247, 179, 106); text-align: center;">About us</h1>
 <h3 style="color: rgb(255, 255, 255); text-align: center;"><b>Welcome to our Travel World, A trusted gateway to extraordinary journeys and unforgettable experiences. We believe that every traveler has a unique tale waiting to be written. With a passion for exploration and a commitment to curating seamless adventures,
     we invite you to join us on a journey beyond borders.</b></h3>
    </section>

<!-- newletter section -->
<section class="newsletter">
    <div class="newsletter-content">
        <div class="newsletter-text">
            <h2>Ready to explore?</h2>
            <p>Let's go on vacation, make your day</p>
        </div>
        <form action="">
            <input type="email" placeholder="Enter your email.." required>
            <input type="submit" value="Get started" class="btn">
        </form>
    </div>
</section>
<!-- arrow -->
<div class="scroll-to-top" onclick="scrollToTop()">
    <img src="./img/a1.png" alt="Scroll to Top">

</div>

<!-- footer section -->
<section class="footer">
    <div class="footer-box">
        <h3>Services</h3>
        <a href="#">Email Marketing</a>
        <a href="#">Campaigns</a>
        <a href="#">Offline</a>
        <a href="#">Branding</a>

    </div>

    <div class="footer-box">
        <h3>About</h3>
        <a href="#">Our story</a>
        <a href="#">Benefits</a>
        <a href="#">Team</a>
        <a href="#">Careers</a>

    </div>

    <div class="footer-box">
        <h3>Help</h3>
        <a href="#">FAQs</a>
        <a href="#">Contact us</a>
         </div>

         <div id="contactus" class="footer-box">
            <h3>Social</h3>
           <div class="social">
            <a href="https://www.instagram.com/"><i class="ri-instagram-line"></i></a>
            <a href="https://twitter.com/i/flow/login"><i class="ri-twitter-fill"></i></a>
            <a href="https://www.facebook.com/"><i class="ri-facebook-fill"></i></a>
             </div>
             </div>

</section>
<!-- COpyright -->
<div class="copyright">
    <p>&copy; Copyright 2024</p>
</div>

 
 <!-- this is script to look better navigation bar -->
 <script>
    const header =document.querySelector("header");

window.addEventListener("scroll",function(){
    header.classList.toggle("sticky", window.scrollY > 60)
}
); 
let menu=document.querySelector('#menu-icon');
let navbar=document.querySelector('.navbar');

menu.onclick =() =>{
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
};





// to ask name of the passangers as per input given 

const passengersInput = document.getElementById('passengers');
    const passengerNamesContainer = document.getElementById('passenger-names');

    passengersInput.addEventListener('input', function () {
        const numPassengers = parseInt(passengersInput.value);
        passengerNamesContainer.innerHTML = ''; // Clear previous inputs

        if (numPassengers > 0) {
            for (let i = 1; i <= numPassengers; i++) {
                const label = document.createElement('label');
                label.textContent = `Passenger ${i} Name:`;
                label.setAttribute('for', `passenger${i}`);

                const input = document.createElement('input');
                input.type = 'text';
                input.id = `passenger${i}`;
                input.name = `passenger${i}`;
                input.required = true;

                passengerNamesContainer.appendChild(label);
                passengerNamesContainer.appendChild(input);
                passengerNamesContainer.appendChild(document.createElement('br'));
                passengerNamesContainer.appendChild(document.createElement('br'));
            }
        }
    });



    // this is for hiding form
        function showForm() {
            // Show the form
            document.getElementById('formContainer').style.display = 'block';

            // Hide the button
            document.getElementById('showFormButton').style.display = 'none';
         }





        // display data  in the same page using ajax

        function showForm() {
        // Show the form and hide the initial info section
        document.getElementById('formContainer').style.display = 'block';
        document.getElementById('initial-info').style.display = 'none';
    }

    // Handle the form submission via AJAX
    document.getElementById('ticketForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form from submitting normally

        const email = document.getElementById('email').value;

        // Make an AJAX request to fetch the ticket details
        fetch('fetch_from_database.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({
                email: email,
            }),
        })
            .then((response) => response.text())
            .then((data) => {
                // Hide the form and display the results
                document.getElementById('formContainer').style.display = 'none';
                const resultContainer = document.getElementById('resultContainer');
                resultContainer.style.display = 'block';
                resultContainer.innerHTML = data; // Display the fetched data
            })
            .catch((error) => {
                console.error('Error fetching data:', error);
            });
    });

 </script>

    
</body>
</html>