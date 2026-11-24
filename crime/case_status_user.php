
<?php include('connect_userlogin.php')
?>
<?php

// Start the session to track login status
session_start();

// If the user is already logged in, redirect them to the dashboard or home page
if (isset($_SESSION['user_id'])) {
    header("Location: user_dashboard.php"); // Redirect to the user dashboard
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection
    include('db_connect.php');  // Replace with your DB connection file

    // Get form inputs
    $user_id = trim($_POST['user_id']);
    $password = trim($_POST['user_password']);

    // Validate inputs
    if (empty($user_id) || empty($password)) {
        $error_message = "Both fields are required!";
    } else {
        // Check if user exists in the database
        $query = "SELECT * FROM users WHERE user_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // User found, now verify the password
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                // Password is correct, start a session
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['user_name'] = $user['user_name']; // Store user name in session

                // Redirect to the dashboard
                header("Location: user_dashboard.php");
                exit();
            } else {
                $error_message = "Invalid password!";
            }
        } else {
            $error_message = "User ID not found!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            top:100px;
            position: relative;
            background-color: #f4f4f9;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .button {
            width: 100%;
            padding: 12px;
            background-color:rgb(20, 79, 150);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .button:hover {
            background-color:rgb(75, 89, 149);
        }
        .reset-button {
            width: 100%;
            padding: 12px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .reset-button:hover {
            background-color: #e53935;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Check Your Current Status</h2>
        <!-- Display error message if any -->
        <?php if (isset($error_message)): ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <!-- Login Form -->
        <form action="user_login.php" method="POST">
            <label for="user_id">User ID:</label>
            <input type="text" id="user_id" name="user_id" placeholder="Enter your User ID" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <button type="submit" class="button">Login</button>
            <button type="reset" class="reset-button">Reset</button>
        </form>
    </div>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
