<?php
include("database.php");

$email = isset($_POST['email']) ? $_POST['email'] : '';

if (!empty($email)) {
    $stmt = $conn->prepare("
        SELECT bookings.id, bookings.name, bookings.destination, bookings.travel_date, bookings.passengers, bookings.transportation, passengers.passenger_name 
        FROM bookings 
        LEFT JOIN passengers ON bookings.id = passengers.booking_id
        WHERE bookings.gmail = ?
    ");
    $stmt->bind_param("s", $email); // Bind the email parameter
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h2 style='color: #ffa343;'>Booking Details:</h2> <h3 style='color: #ffa343;'>Registered Email: $email </h3>";
        $currentBookingId = null;
        $passengerList = [];

        while ($row = $result->fetch_assoc()) {
            // Check if we're processing a new booking
            if ($currentBookingId !== $row['id']) {
                // If we have passengers from the previous booking, display them
                if (!empty($passengerList)) {
                    echo "<strong>Passengers:</strong><ul>";
                    foreach ($passengerList as $passenger) {
                        echo "<li>" . htmlspecialchars($passenger) . "</li>";
                    }
                    echo "</ul><hr>";
                }

                // Display new booking details
                $currentBookingId = $row['id'];
                $passengerList = []; // Reset passenger list
                echo "<br><br><br>";
                echo "<strong>Booking ID:</strong> " . htmlspecialchars($row['id']) . "<br><br>";
                echo "<strong>Name:</strong> " . htmlspecialchars($row['name']) . "<br><br>";
                echo "<strong>Destination:</strong> " . htmlspecialchars($row['destination']) . "<br><br>";
                echo "<strong>Travel Date:</strong> " . htmlspecialchars($row['travel_date']) . "<br><br>";
                echo "<strong>Transportation:</strong> " . htmlspecialchars($row['transportation']) . "<br><br>";
            }

            // Add passenger to the list
            if (!empty($row['passenger_name'])) {
                $passengerList[] = $row['passenger_name'];
            }
        }

        // Display passengers for the last booking
        if (!empty($passengerList)) {
            echo "<strong>Passengers:</strong><ul>";
            $index = 1;
            foreach ($passengerList as $passenger) {
                echo "<li>" . $index . ". " . htmlspecialchars($passenger) . "</li>";
                $index++;
            }
            echo "</ul><hr>";
        }              
    } else {
        echo "No registrations found for the provided email.";
    }
    $stmt->close();
} else {
    echo "Please provide an email address.";
}
?>
