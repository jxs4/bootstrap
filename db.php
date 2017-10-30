<?php
$servername = "sql1.njit.edu";
$username = "jxs4";
$password = "clbrkJhJ";
$dbname = "jxs4";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully <br>";

$sql = "SELECT * FROM accounts where 'user ID' < 6";
$result = $conn->query($sql);
echo $result->num_rows.' results <br>';

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["user ID"]."</td><td>".$row["name"]." </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>