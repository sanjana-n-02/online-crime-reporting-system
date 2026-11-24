<?php
session_start();

// Check role and include the correct connection file
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $id = $_POST['id'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if ($role == "user") {
        include('connect_userlogin.php'); // Use user DB connection
        $query = "SELECT * FROM users WHERE user_id = ? AND user_password = ?";
    } elseif ($role == "officer") {
        include('connect_officerlogin.php'); // Use officer DB connection
        $query = "SELECT * FROM officers WHERE officer_id = ? AND officer_password = ?";
    } else {
        echo "<script>alert('Invalid role selection!');</script>";
        exit();
    }

    // Prepare statement
    $stmt = $conn->prepare($query);
    if (!$stmt) {
        die("SQL Error: " . $conn->error);
    }

    $stmt->bind_param("ss", $id, $password); // Both user_id and password are strings
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $_SESSION['id'] = $id;
        $_SESSION['role'] = $role;
    } else {
        echo "<script>alert('Valid credentials!');</script>";
    }
}

// Fetch case details based on role
if (isset($_SESSION['id'])) {
    if ($_SESSION['role'] == "user") {
        include('connect_userlogin.php'); // Use user DB connection
        $user_id = $_SESSION['id'];
        $query = "SELECT * FROM cases WHERE user_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $user_id);
    } elseif ($_SESSION['role'] == "officer") {
        include('connect_officerlogin.php'); // Use officer DB connection
        $query = "SELECT * FROM cases";
        $stmt = $conn->prepare($query);
    }

    $stmt->execute();
    $cases = $stmt->get_result();
}

// Handle case status update by an officer
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_case'])) {
    if ($_SESSION['role'] == "officer") {
        include('connect_officerlogin.php'); // Use officer DB connection
        $case_id = $_POST['case_id'];
        $new_status = $_POST['case_status'];

        $update_query = "UPDATE cases SET case_status = ? WHERE case_id = ?";
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param("si", $new_status, $case_id);

        if ($stmt->execute()) {
            echo "<script>alert('Case status updated successfully!');</script>";
            header("Location: casestatus.php");
            exit();
        } else {
            echo "<script>alert('Error updating case status.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Case Status</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 50%; margin: auto; text-align: center; }
        table { width: 80%; margin: 20px auto; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 10px; text-align: center; }
    </style>
</head>
<body>

<div class="container">
    <h2>Check Your Case Status</h2>
    <form method="POST" action="">
        <label>User/Officer ID:</label>
        <input type="text" name="id" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <label>Role:</label>
        <select name="role">
            <option value="user">User</option>
            <option value="officer">Officer</option>
        </select>
        <button type="submit" name="login">Login</button>
        <button type="reset">Reset</button> <!-- Added Reset Button -->
    </form>
</div>

<?php if (isset($_SESSION['id'])): ?>
    <h2 allign="center">Case Status</h2>
    <table>
        <tr>
            <th>Case ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <?php if ($_SESSION['role'] == "officer") echo "<th>Update Status</th>"; ?>
        </tr>
        <?php while ($row = $cases->fetch_assoc()): ?>
            <tr>
                <td><?= $row['case_id']; ?></td>
                <td><?= $row['case_title']; ?></td>
                <td><?= $row['case_description']; ?></td>
                <td><?= $row['case_status']; ?></td>
                <?php if ($_SESSION['role'] == "officer"): ?>
                    <td>
                        <form method="POST" action="">
                            <input type="hidden" name="case_id" value="<?= $row['case_id']; ?>">
                            <select name="case_status">
                                <option value="Pending" <?= $row['case_status'] == "Pending" ? "selected" : ""; ?>>Pending</option>
                                <option value="In Progress" <?= $row['case_status'] == "In Progress" ? "selected" : ""; ?>>In Progress</option>
                                <option value="Resolved" <?= $row['case_status'] == "Resolved" ? "selected" : ""; ?>>Resolved</option>
                            </select>
                            <button type="submit" name="update_case">Update</button>
                        </form>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endwhile; ?>
    </table>
<?php endif; ?>

</body>
</html>
