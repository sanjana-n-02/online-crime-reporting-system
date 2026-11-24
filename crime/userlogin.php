<?php include('header2.html')
?>
<head>
    <style>
        #userlogin{
            height:350px;
            width:48%;
            margin: 48px auto;
            border: 3px solid ;
            border-radius: 6px;
            border-color: black;
            background-color:#E0E0E0;
        }
        h2{
            height:100px;
            width:100%;
            top:40px;
            left:28px;
            color:black;
            font-size:30px;
            position: relative;
            
        }
        table{
            font-size:25px;
            left:200px;
            position: relative;
        }
        
        
        
        
    </style>
</head>
<body>
<form action="save_userlogin1.php" method="POST">
    <div id="userlogin">
        <h2>CRIME REPORTING SYSTEM-USER LOGIN</h2>
        <form action="connectuserlogin"   method="POST">
        <table>
        <tr>
                <td><label for="">User ID:</label></td>
                <td><input type="text" name="user_id" placeholder="ENTER YOUR ID"></td>
            </tr>
            <tr>
                <td>
                    <label for="">User Name:</label>
                </td>
                <td>
                    <input type="text" name="user_name" placeholder="ENTER YOUR NAME">
                </td>
            </tr>
            <tr>
                <td>
                    Email-id:
                </td>
                <td>
                    <input type="email" name="user_email_id" placeholder=" EMAIL-ID">
                </td>
            </tr>
            <tr>
                <td>
                    Password:
                </td>
                <td>
                    <input type="password" name="user_password" maxlength="10" placeholder="PASSWORD">
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
<?php include('sanjana.html')
?>