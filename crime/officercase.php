<?php
session_start();

// Check if officer is logged in
if (!isset($_SESSION['officer_id'])) {
    header("Location: officer_login.php"); // Redirect to login if not logged in
    exit();
}

// You can now fetch case details from the database
include('db_connection.php'); // Include your DB connection

$query = "SELECT * FROM cases"; // Assuming you have a 'cases' table
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Details</title>
    <style>
        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Welcome Officer, here are the Case Details</h1>

    <?php if (isset($_SESSION['message'])): ?>
        <div style="color: red;">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']); // Clear message after displaying
            ?>
        </div>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>Case ID</th>
                <th>Case Name</th>
                <th>Status</th>
                <th>Assigned Officer</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['case_id'] . "</td>";
                    echo "<td>" . $row['case_name'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "<td>" . $row['assigned_officer'] . "</td>";
                    echo "<td><a href='view_case_details.php?case_id=" . $row['case_id'] . "'>View Details</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No cases found.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="logout.php">Logout</a>
</body>
</html>
