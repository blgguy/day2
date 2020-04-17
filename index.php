<?php
//header("Content-Type: application/json; charset=UTF-8");
$error = '';
$data = '';
$firstName  = '';
    $lastName   = '';
    $email      = '';
    $phone      = '';
    $password  = '';
    $vpassword  = '';
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
.error{
    color: red;
    font-size: 12px;
    font-weight: bold;
}
.btn{
    text-decoration: none;
    color: #ffffff;
    font-size: 20px;
    line-height: 1;
    cursor: pointer;
}
.k{
    float: right;
    text-decoration: none;
}

    </style>
</head>
<body>
    <div class="output">
        <div class="k"><b>View the </b><a href="https://github.com/blgguy/day2" title="ICA Challenge Day 2 Code">Codes</a></div>
        <h5>ICA Challenge</h5>
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
                <input type="email" name="email" placeholder="type your email (e.g email@gmail.com)" required><br>
                <label>Number:</label><br>
                <input type="tel" name="phone" placeholder="+2349012345678"><br>
                <label>Password</label><br>
                <input type="password" name="pass" placeholder="*****" required><br>
                <label>Comfirm Password:</label><br>
                <input type="password" name="vpass" placeholder="****" required><br><br>
                <button type="submit" name="signupbtn">SignUp</button><br>
            </form>
    </div>
    <h4><?php echo $data;?></h4>
<script type="text/javascript">
    function btn() {
        alert('You have sucessfully register.')
    }
</script>
</body>
</html>
<?php


function escape($string) {
    return htmlentities($string, ENT_QUOTES, 'UTF-8');
}
if (isset($_POST['signupbtn'])) {
    $firstName      =    escape($_POST['fname']);
    $lastName       =    escape($_POST['lname']);
    $email          =    escape($_POST['email']);
    $phone          =    escape($_POST['phone']);
    $password       =    escape($_POST['pass']);
    $vpassword      =    escape($_POST['vpass']);
}

    $data = "<h4>you're welcome Mr. ".$firstName."</h4><br><h6>Below is your data<h6>";

            echo '<b>Your First name:</b> <em>'.$firstName.'</em><br>';
            echo '<b>Your Last name:</b> <em>'.$lastName.'</em><br>';
            echo '<b>Your email address:</b> <em>'.$email.'</em><br>';
            echo '<b>Your Mobile Number:</b> <em>'.$phone.'</em><br>';
        //echo json_decode($data);
        echo "<button onclick='btn()' class='btn'>Cick to comfirm</button>";
    

?>