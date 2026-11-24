<?php include('header1.html')
?>
<head>
    <style>
       #crimereport{
        height:420px;
        width:100%;
        
       } 
       
       h1{
           height:100px;
            width:100%;
            top:40px;
            
            position: relative;
       }
       
       table{
        height:380px;
        width:40%;
        bottom:15px;
        font-size:25px;
        position: relative;
       }
    </style>
</head>
<body>
    <center>
    <div id="crimereport">
        <h1>CRIME REGISTRATION FORM</h1>
        
        <table>
            <tr>
                <td>
                    <label for="">Name:</label>
                </td>
                <td>
                    <input type="text" name="user_name" placeholder="ENTER YOUR NAME">
                </td>
            </tr>
            <tr>
                <td>
                    Phone Number:
                </td>
                <td>
                    <input type="number" name="user_mobile" maxlength="12" >
                </td>
            </tr>
            <tr>
                <td>
                    Email-id:
                </td>
                <td>
                    <input type="email" naame="user_email" >
                </td>
            </tr>
            <tr>
                <td>
                    Address:
                </td>
                <td>
                    <input type="address" name="user_address" maxlength="100 words">
                </td>
            </tr>
            <tr>
                <td>
                    Date:
                </td>
                <td>
                    <input type="date" name="date" id="">
                </td>

            </tr>
            <tr>
                <td>
                    Select Category:
                </td>
                <td>
                    <select name="category" id="">
                        <option value=""></option>
                        <option value="Cyberbullying">Cyber bullying</option>
                        <option value="Fraud(Tax Evasion)">Fraud (Tax Evasion)</option>
                        <option value="Drug Possession">Drug Possession</option>
                        <option value="Robbery">Robbery</option>
                        <option value="Kidnapping">Kidnapping</option>
                        <option value="Vandalism">Vandalism</option>
                        <option value="Hacking/Unauthorized Access">Hacking/ Unauthorized Access</option>
                        <option value="Harassment/Stalking">Harassment/ Stalking</option>
                        <option value="Illegal Parking or Speeding">Illegal Parking or Speeding</option>
                        <option value="others">Others</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Description:
                </td>
                <td>
                <textarea name="user_description" rows="4" cols="50"></textarea>
                </td>
            </tr>
        </table>
    </center>
</body>

<?php include('footer.html')
?>