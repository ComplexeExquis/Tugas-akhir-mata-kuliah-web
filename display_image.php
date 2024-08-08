<?php
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

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "SELECT image, image_type FROM images WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        header("Content-Type: " . $row["image_type"]);
        echo $row["image"];
    } else {
        echo "Image not found.";
    }
} else {
    echo "No image ID specified.";
}

$conn->close();
?>
