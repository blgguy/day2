<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$error = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page Day2 ICA Challenge.......</title>
    <style type="text/css">
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url(bg.jpg);
  color: #fff;
}

.container {
    vertical-align: middle;
    font-size: 16px;
    text-align: center;
}
input{
    height: 20px;
    width: 60%;
    font-size: 14px;
    color: blue;
    border: 5px solid rgb(54, 54, 194);
    border-radius: 0% 50% 50% 0%;
}
label{
    font-size: large;
}
button{
    border: blue;
    font-size: 18px;
    border-style: outset;
    border-radius: 60% 30% 30% 60%;
    color: #fff;
    background-color: blue;
}

.output {
  padding: 10px 16px;
  background: #555;
  color: #f1f1f1;
}
error{
    color: red;
    font-size: 12px;
    font-weight: bold;
}

    </style>
</head>
<body>
    <div class="output">
        <h5>Your Data</h5>
    </div>
    <div class="container">
        <div>
            <h4>ICA Challenge Day -2</h4>
            <h5>SignUp Page</h5>
        </div>
        <h5 class="error"><?php echo $error;?></h5>
            <form method="post" action="">
                <label>First Name:</label><br>
                <input type="text" name="fname" placeholder="Type your first name (e.g Aminu)" required><br>
                <label>Last Name:</label><br>
                <input type="text" name="lname" placeholder="Type your last name (e.g Bulangu)"required><br>
                <label>Email</label><br>
                <input type="text" name="email" placeholder="type your email (e.g email@gmail.com)" required><br>
                <label>Number:</label><br>
                <input type="text" name="phone" placeholder="+2349012345678"><br>
                <label>Password</label><br>
                <input type="password" name="pass" placeholder="*****" required><br>
                <label>Comfirm Password:</label><br>
                <input type="password" name="vpass" placeholder="****" required><br><br>
                <button id="signupbtn" type="submit" name="signupbtn">SignUp</button><br><br>
            </form>
    </div>

</body>
</html>
<?php

if (isset($_POST['signupbtn'])) {
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['pass'];
    $vpassword = $_POST['vpass'];

    if ($password != $vpassword ) {
        $error = "your password dosen't mathch";
    }else{
        $data = array();
        $data = array(
            'Your First name: '     =>  $firstName,
            'Your Last name: '      =>  $lastName,
            'Your email address: '  =>  $email,
            'Your Mobile Number: '  =>  $phone,
        );
        echo json_decode($data);
    }
}

?>