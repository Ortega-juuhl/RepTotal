<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RepTotal</title>
    <link rel ="stylesheet" href="style1.css">
</head>
<body>

<?php
    // PHP code to display the exercise name when a button is clicked
    if (isset($_GET['exerciseName'])) {
        $clickedExercise = $_GET['exerciseName'];
        // You can handle the exercise name as needed
    }
?>

<form class="startWorkoutList" action="" method="post">
    <button id="endBtn">x</button>
    <p>Name</p><input type="text" id="workoutName" name="workoutName" placeholder="Workout Name...">
    <p>Start time</p><input type="datetime-local">
    <p>Place</p><input type="text" id="place" name="place" placeholder="Place...">
    <button id="addExerciseButton" onclick="showMuscleGroupList()">Add Exercise</button>
</form>

<form class="endWorkoutList" action="">
    <p>End time</p><input type="datetime-local" id="endTime" name="endTime" placeholder="End Time...">
    <p>Rating</p>
    <form action="process_rating.php" method="post">
        <select id="rating" name="rating">
            <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo '<option value="' . $i . '">' . $i . '</option>';
                }
            ?>
        </select>
    </form>
</form>

<!-- Muscle Group Selection -->
<div class="musclegroup-list">
    <?php
        include 'db_connect.php';

        $sql = "SELECT * FROM MuscleGroups";
        $result = $conn->query($sql);
        if ($result) {
            echo '<ul class="muscle-groups">';
            while ($row = $result->fetch_assoc()) {
                echo '<button class="muscle-group-item">' . $row["MuscleGroupName"] . '</button>';
            }
            echo '</ul>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    ?>
</div>

<div class="chest-list hidden">
    <?php
        include 'db_connect.php';

        $sql = "SELECT * FROM exercises WHERE MuscleGroupID = '1'";
        $result = $conn->query($sql);
        if ($result) {
            echo '<ul class="muscle-groups">';
            while ($row = $result->fetch_assoc()) {
                echo '<button class="exercise-btn" data-exercise-name="' . $row["ExerciseName"] . '">' . $row["ExerciseName"] . '</button>';
            }
            echo '</ul>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    ?>
</div>

<div class="back-list hidden">
    <?php
        include 'db_connect.php';
        $sql = "SELECT * FROM exercises WHERE MuscleGroupID = '2'";
        $result = $conn->query($sql);
        if ($result) {
            echo '<ul class="muscle-groups">';
            while ($row = $result->fetch_assoc()) {
                echo '<button class="exercise-btn" data-exercise-name="' . $row["ExerciseName"] . '">' . $row["ExerciseName"] . '</button>';
            }
            echo '</ul>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    ?>
</div>

<div class="Biceps-list hidden">
    <?php
        include 'db_connect.php';

        $sql = "SELECT * FROM exercises WHERE MuscleGroupID = '3'";
        $result = $conn->query($sql);
        if ($result) {
            echo '<ul class="muscle-groups">';
            while ($row = $result->fetch_assoc()) {
                echo '<button class="exercise-btn" data-exercise-name="' . $row["ExerciseName"] . '">' . $row["ExerciseName"] . '</button>';
            }
            echo '</ul>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    ?>
</div>

<div class="Triceps-list hidden">
    <?php
        include 'db_connect.php';

        $sql = "SELECT * FROM exercises WHERE MuscleGroupID = '4'";
        $result = $conn->query($sql);
        if ($result) {
            echo '<ul class="muscle-groups">';
            while ($row = $result->fetch_assoc()) {
                echo '<button class="exercise-btn" data-exercise-name="' . $row["ExerciseName"] . '">' . $row["ExerciseName"] . '</button>';
            }
            echo '</ul>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    ?>
</div>

<div class="Shoulders-list hidden">
    <?php
        include 'db_connect.php';

        $sql = "SELECT * FROM exercises WHERE MuscleGroupID = '5'";
        $result = $conn->query($sql);
        if ($result) {
            echo '<ul class="muscle-groups">';
            while ($row = $result->fetch_assoc()) {
                echo '<button class="exercise-btn" data-exercise-name="' . $row["ExerciseName"] . '">' . $row["ExerciseName"] . '</button>';
            }
            echo '</ul>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    ?>
</div>

<div class="Legs-list hidden">
   

 <?php
        include 'db_connect.php';

        $sql = "SELECT * FROM exercises WHERE MuscleGroupID = '6'";
        $result = $conn->query($sql);
        if ($result) {
            echo '<ul class="muscle-groups">';
            while ($row = $result->fetch_assoc()) {
                echo '<button class="exercise-btn" data-exercise-name="' . $row["ExerciseName"] . '">' . $row["ExerciseName"] . '</button>';
            }
            echo '</ul>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    ?>
</div>

<div id="sets-container"></div>

<script src="addSet.js"></script>
<script src="log.js"></script>
</body>
</html>