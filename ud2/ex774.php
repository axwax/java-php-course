<?php
// function
$conn = mysqli_connect("localhost",
"axwax", "bee109", "ax");
if (empty($conn)) {
die("mysqli_connect failed: " . mysqli_connect_error());
}
print "conectado a " . mysqli_get_host_info($conn) . "\n";
mysqli_close($conn);

// class
$mysqli = new mysqli("localhost", "axwax", "bee109", "ax");
if ($mysqli->connect_errno) {
die("mysqli_connect failed: " . mysqli_connect_error());
}
print "conectado a " . $mysqli->host_info . "\n";
$mysqli->close();