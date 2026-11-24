<?php
// Include the database connection file
include('connect_userlogin.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs
    $user_id = trim($_POST['user_id']);
    $user_name = trim($_POST['user_name']);
    $user_email_id = trim($_POST['user_email_id']);
    $user_password = trim($_POST['user_password']);

    // Check if any field is empty
    if (empty($user_id) || empty($user_name) || empty($user_email_id) || empty($user_password)) {
        echo "<script>alert('⚠ All fields are required! Please fill in all details.'); window.history.back();</script>";
        exit();
    }

    // Check if the User ID, email, or username already exists
    $check_duplicate = "SELECT * FROM users WHERE user_id = ? OR user_name = ? OR user_email_id = ?";
    $stmt = $conn->prepare($check_duplicate);
    $stmt->bind_param("sss", $user_id, $user_name, $user_email_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('❌ User already exists! Please use a different ID, email, or username.'); window.history.back();</script>";
    } else {
        // Hash the password for security
        $hashed_password = password_hash($user_password, PASSWORD_BCRYPT);

        // Insert user into the database
        $insert_query = "INSERT INTO users (user_id, user_name, user_email_id, user_password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("ssss", $user_id, $user_name, $user_email_id, $hashed_password);

        if ($stmt->execute()) {
            echo "<script>alert('✅ User Registered Successfully! Redirecting to Crime Report...'); window.location.href='crimereport1.php';</script>";
        } else {
            echo "<script>alert('❌ Error: " . $conn->error . "'); window.history.back();</script>";
        }
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
