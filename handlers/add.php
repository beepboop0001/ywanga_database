<?php
include '../database/database.php'; // Fix the include path

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $food = $_POST['food'];
    $bills = $_POST['bills'];
    $rent = $_POST['rent'];
    $transportation = $_POST['transportation'];

    // Prepare the SQL query to insert the data
    $stmt = $conn->prepare("INSERT INTO exptracker (Food, Bills, Rent, Transportation) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiii", $food, $bills, $rent, $transportation);
    
    // Execute the query and check for success
    if ($stmt->execute()) {
        echo "Data added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
