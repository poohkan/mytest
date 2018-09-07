<?php
$dbname = "plearnja_poem"; 
$servername = "plearnjai.com";
$username = "plearnja_poohnut";
$password = "ExRXqS2A"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT poem_ID, poem_name, poem_poet_id FROM poem_tbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["poem_ID"]. " - Name: " . $row["poem_name"]. " " . $row["poem_poet_id"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>