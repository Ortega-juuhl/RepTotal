<?php
session_start(); // Start the session (if not started already)

include 'db_connect.php'; // Include the file containing your database connection code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $workoutName = $_POST["workoutName"];
    $startTime = $_POST["startTime"];
    $place = $_POST["place"];

    // Assuming you have a user ID, replace '1' with the actual user ID
    $userID = $_SESSION['userID'];

    // Insert data into the Workouts table
    $insert_query = "INSERT INTO Workouts (UserID, WorkoutName, StartTime, EndTime, Place, Rating) VALUES ($userID, '$workoutName', '$startTime', '$endTime', '$place', $rating)";
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
