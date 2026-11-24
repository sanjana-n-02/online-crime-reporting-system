<?php include('header2.html')
?>
<head>
    <style>
        #crimereport {
            margin: 50px;
            padding: 20px;
            border: 3px solid black; /* Adds a black border around the entire form */
            border-radius: 10px; /* Rounds the corners */
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2); /* Adds a subtle shadow for better visuals */
            
        }
        table {
            width: 90%; /* Makes the table stretch to fit the container */
            border-collapse: collapse; /* Combines adjacent borders into a single line */
            font-size:25px;
            background-color:#E0E0E0;
            left:60px;
            position: relative;
        }
        h3{
            font-size:33px;
            left:450px;
            float:left;
            position: relative;
        }
        th, td {
            border: 1px solid black; /* Adds a border around table cells */
            padding: 20px; /* Adds spacing inside cells */
            text-align: left; /* Aligns text to the left inside cells */
        }
        input, textarea, select {
            width: 100%; /* Makes form elements stretch to fit their container */
            
        }
        .row{
            height:50px;
            width:10%;
            left:700px;
            position: relative;
        }
        
    </style>
</head>
<body>
<form action="save_data1.php" method="POST">
    <div id="crimereport">
        <h3>CRIME REGISTRATION FORM</h3>
        <table>
            <tr>
                <td><label for="user_name">Name:</label></td>
                <td><input type="text" name="user_name" placeholder="ENTER YOUR NAME"></td>
            </tr>
            <tr>
                <td><label for="user_mobile">Phone Number:</label></td>
                <td><input type="number" name="user_mobile" maxlength="12"></td>
            </tr>
            <tr>
                <td><label for="user_email">Email-id:</label></td>
                <td><input type="email" name="user_email"></td>
            </tr>
            <tr>
                <td><label for="user_address">Address:</label></td>
                <td><input type="text" name="user_address" maxlength="100"></td>
            </tr>
            <tr>
                <td><label for="date">Date:</label></td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td><label for="category">Select Category:</label></td>
                <td>
                    <select name="category">
                        <option value=""></option>
                        <option value="Cyberbullying">Cyberbullying</option>
                        <option value="Fraud(Tax Evasion)">Fraud (Tax Evasion)</option>
                        <option value="Drug Possession">Drug Possession</option>
                        <option value="Robbery">Robbery</option>
                        <option value="Kidnapping">Kidnapping</option>
                        <option value="Vandalism">Vandalism</option>
                        <option value="Hacking/Unauthorized Access">Hacking/Unauthorized Access</option>
                        <option value="Harassment/Stalking">Harassment/Stalking</option>
                        <option value="Illegal Parking or Speeding">Illegal Parking or Speeding</option>
                        <option value="others">Others</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="user_description">Description:</label></td>
                <td><textarea name="user_description" rows="4" cols="50"></textarea></td>
            </tr>
        </table>
    </div>
    <div class="row">
         <input type="submit" value="SUBMIT">
         
    </div>

    
<?php include('sanjana.html');
    ?>

    
</form>
</body>
