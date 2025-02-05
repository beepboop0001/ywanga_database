<?php
include 'database/database.php'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch current data
    $query = "SELECT * FROM exptracker WHERE Tracker_ID = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get updated data from the form
        $food = $_POST['food'];
        $bills = $_POST['bills'];
        $rent = $_POST['rent'];
        $transportation = $_POST['transportation'];

        // Update query
        $update_query = "UPDATE exptracker SET Food = ?, Bills = ?, Rent = ?, Transportation = ? WHERE Tracker_ID = ?";
        if ($stmt = $conn->prepare($update_query)) {
            $stmt->bind_param("iiiii", $food, $bills, $rent, $transportation, $id);
            if ($stmt->execute()) {
                header("Location: index.php");
                exit();
            }
        }
    }
}
?>

<form action="" method="POST">
    <input type="number" name="food" value="<?php echo $data['Food']; ?>" required>
    <input type="number" name="bills" value="<?php echo $data['Bills']; ?>" required>
    <input type="number" name="rent" value="<?php echo $data['Rent']; ?>" required>
    <input type="number" name="transportation" value="<?php echo $data['Transportation']; ?>" required>
    <button type="submit">Save Changes</button>
</form>
