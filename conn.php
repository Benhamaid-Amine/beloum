<?php
$servername = "localhost";
$username = "root";
$password = ""; // By default, XAMPP has an empty password
$dbname = "client"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";


// Assuming you've established the database connection here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Company = $_POST['Company'];
    $Sujet = $_POST['Sujet'];

    // SQL query to insert form data into a table
    $sql = "INSERT INTO informations (FirstName, LastName,Email,Phone,Company,Sujet) VALUES ('$FirstName', '$LastName', '$Email','$Phone', '$Company', '$Sujet')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
  
}
?>