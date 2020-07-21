<?php
$localhost = "localhost";
$username = "root";
$password = "root";
$dbname = "car_market";

$conn = new mysqli($localhost, $username, $password, $dbname);

$sql = "select * from car";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $car = new Car();
        echo "id: " . $row["id"] . "<br>" . " Name: " . $row["year_of_issue"] . " " . $row["condition"];
    }
} else {
    echo "0 results";
}

$conn->close();
require_once('../../public/html.php');

?>

