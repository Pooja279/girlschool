<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="theschool";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
$sql = "CREATE TABLE IF NOT EXISTS teachers (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    password VARCHAR(30),
    name VARCHAR(30),
    age INT,
    email VARCHAR(50),
    subject VARCHAR(50),
    )";
    
    if ($conn->query($sql) === TRUE) {
    //   echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }

    $sql = "CREATE TABLE IF NOT EXISTS students (
        ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        password VARCHAR(30),
        name VARCHAR(30),
        age INT,
        email VARCHAR(50),
        class VARCHAR(50),
        enroll INT,
        )";
        
        if ($conn->query($sql) === TRUE) {
        //   echo "Table MyGuests created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }

        $sql = "CREATE TABLE IF NOT EXISTS contact (
            ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30),
            email VARCHAR(30),
            message VARCHAR(255),
            )";
            
            if ($conn->query($sql) === TRUE) {
            //   echo "Table MyGuests created successfully";
            } else {
              echo "Error creating table: " . $conn->error;
            }
?>