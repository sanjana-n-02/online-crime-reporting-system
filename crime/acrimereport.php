<?php include('ademo2.html'); ?> <!-- Include the header file properly -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crime Registration Form</title>

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
            top:10px;
            position: relative;
            text-align: center;
            background-color: #007bff;
            color: white;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
        }

        /* Form Container */
        .container {
            width: 100%;
            margin:35px;
            display: flex;
            justify-content: center;
        }

        .form-container {
            font-size:23px;
            background: white;
            padding: 20px;
            top:5px;
            position: relative;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        h2 {
            text-align: center;
            margin-bottom: 15px;
            font-weight: bold;
        }

        form {
            width: 100%;
        }

        .form-group {
            width: 100%;
            margin-bottom: 10px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input, select, textarea, button {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 17px;
        }

        textarea {
            resize: none;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
            padding: 12px;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .form-container {
                padding: 15px;
            }

            input, select, textarea, button {
                font-size: 14px;
                padding: 8px;
            }

            button {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 10px;
            }

            h2 {
                font-size: 18px;
            }

            input, select, textarea, button {
                font-size: 12px;
                padding: 6px;
            }

            button {
                font-size: 14px;
            }
        }

    </style>
</head>
<body>

    

    <!-- Form Section (Centered & Responsive) -->
    <div class="container">
        <div class="form-container">
            <h2>CRIME REGISTRATION FORM</h2>
            <form action="save_data1.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="user_name" maxlength="28" placeholder="Enter your name" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="user_mobile" maxlength="10"placeholder="Enter your phone number" required>
                </div>

                <div class="form-group">
                    <label for="email">Email ID:</label>
                    <input type="email" id="email" name="user_email"maxlength="35" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="user_address" maxlength="150"placeholder="Enter your address" required>
                </div>

                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required>
                </div>

                <div class="form-group">
                    <label for="category">Select Category:</label>
                    <select id="category" name="category" required>
                        <option value="">Select category</option>
                        <option value="Theft">Theft</option>
                        <option value="Fraud">Fraud</option>
                        <option value="Assault">Assault</option>
                        <option value="Others">Others</option>
                        
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="user_description" rows="3" placeholder="Enter details of the crime" required></textarea>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>


</body>
</html>

<?php include('sanjana.html'); ?> <!-- Include the footer file properly -->
