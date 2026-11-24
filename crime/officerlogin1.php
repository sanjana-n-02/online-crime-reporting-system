<?php 
session_start(); // Start session at the very beginning

include('header2.html'); // Include after session_start()
?>
<head>
    <style>
        #officerlogin{
            height:400px;
            width:50%;
            border:1px solid;
            position: relative;
            background-color:#E0E0E0;
        }
        .one {
            height:50px;
            width: 49.7%;
            text-align: center;
            font-size:28px;
            left:378px;
            top:35px;
            border: 3px solid;
            position: relative;
            border-radius:5px;
            background-color:#E0E0E0;
        }
        table{
            font-size:25px;
            height:250px;
            width:50%;
            margin:30px auto;
            border: 3px solid;
            border-radius: 5px;
            top:17px;
            position: relative;
            background-color:#E0E0E0;
        }
    </style>
</head>

<?php
// Display session message if set
if (isset($_SESSION['message'])) {
    echo "<script>alert('" . $_SESSION['message'] . "');</script>";
    unset($_SESSION['message']); // Clear the message after displaying
}
?>

<body>
    <div class="officerlogin">
        <form action="save_officer2.php" method="POST">
            <h4 class="one">OFFICER LOGIN</h4>
            <table>
                <tr>
                    <td><label for="">Officer-ID</label></td>
                    <td><input type="text" name="officer_id" placeholder="ENTER YOUR ID" maxlength="25"></td>
                </tr> 
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="officer_name" maxlength="25"></td>
                </tr>  
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="officer_password" maxlength="20"></td>
                </tr> 
                <tr>
                    <td>Role:</td>
                    <td>
                        <select name="role">   
                            <option value=""></option>
                            <option value="admin">admin</option>
                            <option value="officer">officer</option>
                            <option value="supervisor">supervisor</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="button" type="SUBMIT">
                        <input class="button" type="RESET">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

<?php include('sanjana.html'); ?>
