<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "nomnom";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $inputUsername = $_POST['username-input'];
        $inputPassword = $_POST['password-input'];
        

        // Secure the input to prevent SQL injection
        $inputUsername = $conn->real_escape_string($inputUsername);
        $inputPassword = $conn->real_escape_string($inputPassword);
        
        
        // Query to check if the username and password are correct
        $sql = "SELECT * FROM users_data WHERE username = '$inputUsername' AND password = '$inputPassword'";
        $result = $conn->query($sql);
        
       


        if ($result->num_rows > 0) {
            // Set session variables
            $_SESSION['username'] = $inputUsername;
            // Redirect to index.php
            header('Location: index.php');
            exit();
        } else {
            echo "Invalid username or password.";
        }
    
        $conn->close();
    }
?>