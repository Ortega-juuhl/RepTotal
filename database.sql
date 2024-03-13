-- Create Users Table
CREATE TABLE Users (
  UserID INT PRIMARY KEY,
  Username VARCHAR(255) NOT NULL,
  Password VARCHAR(255) NOT NULL
);

-- Create Workouts Table
CREATE TABLE Workouts (
  WorkoutID INT PRIMARY KEY,
  UserID INT,
  WorkoutName VARCHAR(255) NOT NULL,
  StartTime INT
  EndTime INT
  Place VARCHAR(255),
  Rating INT,
  FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

-- Create MuscleGroups Table
CREATE TABLE MuscleGroups (
  MuscleGroupID INT AUTO_INCREMENT PRIMARY KEY,
  MuscleGroupName VARCHAR(255) NOT NULL
);

-- Create Exercises Table
CREATE TABLE Exercises (
  ExerciseID INT AUTO_INCREMENT PRIMARY KEY,
  MuscleGroupID INT,
  ExerciseName VARCHAR(255) NOT NULL,
  FOREIGN KEY (MuscleGroupID) REFERENCES MuscleGroups(MuscleGroupID)
);

-- Create Customizations Table
CREATE TABLE Customizations (
  CustomizationID INT PRIMARY KEY,
  ExerciseID INT,
  Equipment VARCHAR(255),
  Variation VARCHAR(255),
  Handle VARCHAR(255),
  FOREIGN KEY (ExerciseID) REFERENCES Exercises(ExerciseID)
);

-- Create WorkoutHistory Table
CREATE TABLE WorkoutHistory (
  HistoryID INT PRIMARY KEY,
  UserID INT,
  ExerciseID INT,
  Weight DECIMAL(10, 2),
  Sets INT,
  Reps INT,
  Date DATE,
  FOREIGN KEY (UserID) REFERENCES Users(UserID),
  FOREIGN KEY (ExerciseID) REFERENCES Exercises(ExerciseID)
);

CREATE TABLE CustomExercises (
  CustomizationID INT PRIMARY KEY,
  UserID INT,
  ExerciseID INT,
  Equipment VARCHAR(255),
  Variation VARCHAR(255),
  Handle VARCHAR(255),
  FOREIGN KEY (UserID) REFERENCES Users(UserID),
  FOREIGN KEY (ExerciseID) REFERENCES Exercises(ExerciseID)
);

/* Add standar musclegroups, exercises and customizations: */

INSERT INTO MuscleGroups (MuscleGroupName)
VALUES
  ('Chest'),
  ('Back'),
  ('Biceps'),
  ('Triceps'),
  ('Shoulders'),
  ('Legs');

INSERT INTO Exercises (MuscleGroupID, ExerciseName)
VALUES 
(1, 'Bench Press'),
(1, 'Chest Press'),
(1, 'Chest Fly'),
(1, 'Floor Press'),
(1, 'Incline Bench Press'),
(1, 'Push Ups');

(2, 'Row'),
(2, 'Facepull'),
(2, 'T-bar Row'),
(2, 'Lat Pulldown'),
(2, 'Pull Ups'),

(3, 'Bicep Curl'),
(3, 'Preacher Curl'),
(3, 'Spider Curl'),
(3, 'Incline Bicep Curl'),

(4, 'Dips'),
(4, 'Over Tricep Extensions'),
(4, 'Triceps Pushdowns'),
(4, 'Skull Crusher'),

(5, 'Military Press'),
(5, 'Overhead Press'),
(5, 'Lateral Raises'),
(5, 'Shurgs'),

(6, 'Leg Extensions'),
(6, 'Leg Curls'),
(6, 'Leg Press'),
(6, 'Squats'),
(6, 'Lunges'),
(6, 'Romanial Deadlift'),
(6, 'Deadlift'),
(6, 'Calf Raises');