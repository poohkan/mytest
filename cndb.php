<?php
$servername = "goingontrip.com";
$username = "goingont";
$password = "poohnut419";
$dbname = "goingont_poem";

/* $dbname = "poem_research_classify"; 
$servername = "plearnjai.com";
$username = "plearnja_poohnut";
$password = "PoohNut419"; */

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT poet_ID, poet_name, poet_type FROM poet_tbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["poet_ID"]. " - Name: " . $row["poet_name"]. " " . $row["poet_type"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>