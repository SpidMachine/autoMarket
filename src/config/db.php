<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'car_market');

// Check Connection
if (mysqli_connect_errno()) {
    echo 'Failed to connect to MySQL ' . mysqli_connect_errno();
}