<?php include('ademo2.html'); ?> <!-- Include the header file properly -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Officer Login</title>

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

        /* Officer Login Container */
        .container {
            width: 100%;
            margin: 35px;
            display: flex;
            justify-content: center;
            
        }

        #officerlogin {
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

        input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 17px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
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
            width: 48%;
            left:130px;
            position: relative;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .reset-button {
            background-color: #dc3545;
        }

        .reset-button:hover {
            background-color: #b02a37;
        }
        .footer {
    width: 100%;
    margin: 0;
    padding: 0;
}


        /* Responsive Styles */
        @media (max-width: 768px) {
            #officerlogin {
                padding: 15px;
            }

            table {
                font-size: 16px;
            }

            input, select {
                font-size: 14px;
                padding: 8px;
            }

            .button {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            #officerlogin {
                padding: 10px;
            }

            h2 {
                font-size: 18px;
            }

            table {
                font-size: 14px;
            }

            input, select {
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
        <form action="save_officer2.php" method="POST">
            <div id="officerlogin">
                <h2>CRIME REPORTING SYSTEM - OFFICER LOGIN</h2>
                <table>
                    <tr>
                        <td><label for="">Officer ID:</label></td>
                        <td><input type="text" name="officer_id" maxlength="6" placeholder="ENTER YOUR ID" required></td>
                    </tr>
                    <tr>
                        <td><label for="">Officer Name:</label></td>
                        <td><input type="text" name="officer_name" maxlength="15" placeholder="ENTER YOUR NAME" required></td>
                    </tr>
                    <tr>
                        <td><label for="">Password:</label></td>
                        <td><input type="password" name="officer_password" maxlength="10" placeholder="PASSWORD" required></td>
                    </tr>
                    <tr>
                        <td><label for="">Role:</label></td>
                        <td>
                            <select name="role" required>
                                <option value="" disabled selected>SELECT ROLE</option>
                                <option value="admin">Admin</option>
                                <option value="officer">Officer</option>
                                <option value="supervisor">Supervisor</option>
                            </select>
                        </td>
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
