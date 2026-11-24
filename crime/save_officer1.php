<?php
// Include the database connection
include('connect_officerlogin.php'); // Replace with your actual DB connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent SQL injection
    $officer_id = trim(mysqli_real_escape_string($conn, $_POST['officer_id']));
    $officer_name = trim(mysqli_real_escape_string($conn, $_POST['officer_name']));
    $officer_password = trim(mysqli_real_escape_string($conn, $_POST['officer_password']));
    $role = trim(mysqli_real_escape_string($conn, $_POST['role']));

    // Check if any field is empty
    if (empty($officer_id) || empty($officer_name) || empty($officer_password) || empty($role)) {
        echo "<script>alert('⚠ All fields are required! Please fill in all details.'); window.history.back();</script>";
        exit();
    }

    // Check if officer already exists in the database
    $check_query = "SELECT * FROM officers WHERE officer_id = ? OR officer_name = ?";
    $stmt = $conn->prepare($check_query);
    $stmt->bind_param("ss", $officer_id, $officer_name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Officer already exists
        echo "<script>alert('❌ Officer already exists! Please enter valid details.'); window.history.back();</script>";
        exit();
    } else {
        // Hash the password before storing it in the database
        $hashed_password = password_hash($officer_password, PASSWORD_BCRYPT);

        // Insert officer details into the database
        $insert_query = "INSERT INTO officers (officer_id, officer_name, officer_password, role) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("ssss", $officer_id, $officer_name, $hashed_password, $role);

        if ($stmt->execute()) {
            // Success: Redirect to officer login page with success message
            echo "<script>
                    alert('✅ Officer Registered Successfully!');
                    window.location.href='officerlogin_page.php';  // Redirect to login page
                  </script>";
            exit();  // Ensure no further PHP code is executed
        } else {
            // Error during insertion
            echo "<script>alert('❌ Error: " . $stmt->error . "'); window.history.back();</script>";
            exit();  // Ensure no further PHP code is executed
        }
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
