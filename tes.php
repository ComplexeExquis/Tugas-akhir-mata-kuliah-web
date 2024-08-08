<?php
// Include the database connection file
include 'db_connect.php';

// Write the query to fetch data
$sql = "SELECT * FROM resep";
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>
            <tr>
                <th>pemilik resep</th>
                <th>Nama resep</th>
                <th>foto resep</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["pemilik_resep"] . "</td>
                <td>" . $row["nama_resep"] . "</td>
                <td> <img src=".$row['foto_resep'].">  </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>
