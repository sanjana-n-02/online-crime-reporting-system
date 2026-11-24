<?php include('ademo2.html'); ?> <!-- Include the header file properly -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>

    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: serif;
        }

        body {
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            width: 100%;
        }

        /* Header & Footer Styling */
        .footer {
            width: 100%;
            position: relative;
            text-align: center;
            background-color: #007bff;
            color: white;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
        }

        /* User Login Container */
        .container {
            width: 100%;
            margin: 35px;
            display: flex;
            justify-content: center;
        }

        #userlogin {
            background: white;
            padding: 20px;
            border: 3px solid black;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            text-align: center;
            margin-bottom: 15px;
            font-weight: bold;
            font-size: 24px;
        }

        table {
            width: 100%;
            font-size: 18px;
        }

        td {
            padding: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 17px;
        }

        .button-container {
            display: flex;
            justify-content: space-between; /* Aligns buttons */
            left:120px;
            position: relative;
        }

        .button {
            padding: 12px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            font-size: 18px;
            transition: 0.3s;
            width: 48%; /* Ensures buttons are aligned properly */
        }

        .button:hover {
            background-color: #0056b3;
        }

        .reset-button {
            background-color: #dc3545; /* Red color for reset */
        }

        .reset-button:hover {
            background-color: #b02a37;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            #userlogin {
                padding: 15px;
            }

            table {
                font-size: 16px;
            }

            input {
                font-size: 14px;
                padding: 8px;
            }

            .button {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            #userlogin {
                padding: 10px;
            }

            h2 {
                font-size: 18px;
            }

            table {
                font-size: 14px;
            }

            input {
                font-size: 12px;
                padding: 6px;
            }

            .button {
                font-size: 14px;
                padding: 10px;
            }
        }

    </style>
</head>
<body>

    <div class="container">
        <form action="save_userlogin1.php" method="POST">
            <div id="userlogin">
                <h2>CRIME REPORTING SYSTEM - USER LOGIN</h2>
                <table>
                    <tr>
                        <td><label for="">User ID:</label></td>
                        <td><input type="text" name="user_id" maxlength="6" placeholder="ENTER YOUR ID" required></td>
                    </tr>
                    <tr>
                        <td><label for="">User Name:</label></td>
                        <td><input type="text" name="user_name" maxlength="15" placeholder="ENTER YOUR NAME" required></td>
                    </tr>
                    <tr>
                        <td><label for="">Email-id:</label></td>
                        <td><input type="email" name="user_email_id"maxlength="30" placeholder="EMAIL-ID" required></td>
                    </tr>
                    <tr>
                        <td><label for="">Password:</label></td>
                        <td><input type="password" name="user_password" maxlength="10" placeholder="PASSWORD" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="button-container">
                            <input class="button" type="submit" value="LOGIN">
                            <input class="button reset-button" type="reset" value="RESET">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>

</body>
</html>

<?php include('sanjana.html'); ?> <!-- Include the footer file properly -->
