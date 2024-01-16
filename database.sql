-- Brukere
CREATE TABLE Users (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    Password VARCHAR(255),
    Email VARCHAR(255),
    Age INT,
    Gender VARCHAR(20)
);

-- Treningsøkter
CREATE TABLE Workouts (
    WorkoutID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    Date DATE,
    Duration TIME,
    Rate INT,
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

-- Øvelser
CREATE TABLE Exercises (
    ExerciseID INT AUTO_INCREMENT PRIMARY KEY,
    ExerciseName VARCHAR(255),
    BodyPart VARCHAR(50),
    Description TEXT
);

-- Rutiner
CREATE TABLE Routines (
    RoutineID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    RoutineName VARCHAR(255),
    Description TEXT,
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

-- ORM
CREATE TABLE OneRepMax (
    ORMID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    ExerciseID INT,
    Repetitions INT,
    MaxWeight FLOAT,
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (ExerciseID) REFERENCES Exercises(ExerciseID)
);

-- Styrkenivå
CREATE TABLE StrengthLevel (
    SLID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    StrengthLevel INT,
    BodyWeight FLOAT,
    Age INT,
    Gender VARCHAR(20),
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);
