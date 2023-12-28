<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'hop2job';

$conn = mysqli_connect($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Retrieve the company parameter from the URL
// $company = isset($_GET['company']) ? urldecode($_GET['company']) : '';
$company = isset($_GET['company']) ? urldecode($_GET['company']) : '';

// Now you can use $company in your SQL query or any other logic
echo "Company Name: " . $company;
// Use $company in your SQL query
// $sql = "SELECT * FROM `job` WHERE `company` = '$company'";
// $result = mysqli_query($conn, $sql);

// if ($result->num_rows > 0) {
//     // Loop through the results and display the details
//     while ($row = $result->fetch_assoc()) {
//         echo "Company Name: " . $row['company'] . "<br>";
//         echo "Position: " . $row['position'] . "<br>";
//         echo "CTC: " . $row['CTC'] . "<br>";
//         echo "Roles & Responsibilities: " . $row['rolres'] . "<br>";
//         echo "Skills: " . $row['skills'] . "<br>";
//     }
// } else {
//     echo "No details found for the selected company.";
// }

mysqli_close($conn);
?>
