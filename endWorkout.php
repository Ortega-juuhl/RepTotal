<?php
session_start(); // Start the session (if not started already)

include 'db_connect.php'; // Include the file containing your database connection code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $endTime = $_POST["endTime"];
    $rating = $_POST["rating"];

    $userID = $_SESSION['userID'];

    // Insert data into the Workouts table
    $insert_query = "INSERT INTO Workouts (endTime, Rating) VALUES ('$endTime', '$rating')";
    $stmt = $mysqli->prepare($insert_query);

    if ($stmt->execute()) {
        echo "Workout details added successfully!";
    } else {
        echo "Error adding workout details: " . $stmt->error;
    }

    $stmt->close();
    $mysqli->close();
}
?>
