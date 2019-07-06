<?php
/**
 * Template Name: Afiliate Program
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *
 * @package filiprastovic
 */

get_header();

$servername = "127.0.0.1";
$username = "u111992089_isot";
$password = "jXuETTKh5jHw";
$dbname = "u111992089_isot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$data = $_POST['afiliateName'] or $_REQUEST['afiliateName'];


if ( $data !== null ) {

	$sql = "INSERT INTO afiliates ( Name ) VALUES ('$data')";

}

header("Content-Type: text/html");


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT Name FROM afiliates";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Affiliate Name: " . $row["Name"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>