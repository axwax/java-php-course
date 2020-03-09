<?php
$mysqli = new mysqli("localhost", "axwax", "bee109", "ax");
if ($mysqli->connect_errno) {
    die("mysqli_connect failed: " . mysqli_connect_error());
}
print "conectado a " . $mysqli->host_info . "<br/>\n";

$result = $mysqli->query("SELECT name FROM testtable", MYSQLI_USE_RESULT);
//while ($row = $result->fetch_row()) {
//while ($row = $result->fetch_assoc()) {    
while ($row = $result->fetch_object()) {    
    //print $row[0] . "<br>\n";
    print_r($row);
    print "<br>\n";
}
$result->free();
$mysqli->close();