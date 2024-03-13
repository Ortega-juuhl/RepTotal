<?php
session_start(); // Start the session (if not started already)

include 'db_connect.php'; // Include the file containing your database connection code

// Process registration form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username is already taken
    $check_query = "SELECT * FROM users WHERE username = '$username'";

    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        // Username is already taken
        echo "Email or username already in use, please log in.";
    } else {
        // Example hashing (replace with appropriate secure password hashing)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into 'users' table
        $insert_query = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

        if ($conn->query($insert_query) === TRUE) {
            echo '<script type="text/javascript">window.onload = function () { alert("You have successfully created an account! Click OK to log in."); }</script>';
            header('Location: login.html');
            exit();
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }
}
?>
