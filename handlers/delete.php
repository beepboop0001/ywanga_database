<?php
include 'database/database.php'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM exptracker WHERE Tracker_ID = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        }
    }
}
?>
