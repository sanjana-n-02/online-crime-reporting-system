<?php
// Include the database connection
include('connect_officerlogin.php');

// Process the form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $officer_id = $_POST['officer_id'];
    $officer_name = $_POST['officer_name'];
    $officer_password = $_POST['officer_password'];
    $role = $_POST['role'];

    // Query to find the officer
    $sql = "SELECT * FROM officers WHERE officer_id = ? AND officer_name = ? AND role = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $officer_id, $officer_name, $role);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch the officer details
        $row = $result->fetch_assoc();
        // Verify the password
        if (password_verify($officer_password, $row['officer_password'])) {
            echo "<h3>Login successful! Welcome, " . $row['officer_name'] . ".</h3>";
        } else {
            echo "<h3>Invalid password. Please try again.</h3>";
        }
    } else {
        echo "<h3>Login successful! Welcome </h3>";
    }
}
?>
