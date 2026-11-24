<?php
// Include the database connection
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent SQL injection
    $name = trim(mysqli_real_escape_string($conn, $_POST['user_name']));
    $phone_number = trim(mysqli_real_escape_string($conn, $_POST['user_mobile']));
    $email = trim(mysqli_real_escape_string($conn, $_POST['user_email']));
    $address = trim(mysqli_real_escape_string($conn, $_POST['user_address']));
    $date = $_POST['date'];
    $category = trim(mysqli_real_escape_string($conn, $_POST['category']));
    $description = trim(mysqli_real_escape_string($conn, $_POST['user_description']));

    // Check if any field is empty
    if (empty($name) || empty($phone_number) || empty($email) || empty($address) || empty($date) || empty($category) || empty($description)) {
        echo "<script>alert('⚠ All fields are required. Please fill in all details.'); window.history.back();</script>";
        exit();
    }

    // Check for duplicate entry (Same Name, Phone, Email, Category, and Date)
    $check_duplicate = "SELECT * FROM crime_reports WHERE user_name='$name' 
        AND phone_number='$phone_number' AND email='$email' 
        AND category='$category' AND date='$date'";

    $result = $conn->query($check_duplicate);

    if ($result->num_rows > 0) {
        echo "<script>alert('Duplicate Entry! This report already exists.'); window.history.back();</script>";
    } else {
        // Insert new crime report
        $sql = "INSERT INTO crime_reports (user_name, phone_number, email, address, date, category, description) 
                VALUES ('$name', '$phone_number', '$email', '$address', '$date', '$category', '$description')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Crime Report Submitted Successfully!'); window.location.href='home-main.php';</script>";
        } else {
            echo "<script>alert('Error: " . $conn->error . "'); window.history.back();</script>";
        }
    }

    // Close connection
    $conn->close();
}
?>
