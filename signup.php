<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Sign In</title>
    <link rel="stylesheet" href="style1.css">
    <style>
       
    </style>
</head>
<body>
    <div class="logo">
        <img src="amazon_logo.png" alt="Amazon Logo">
    </div>
    <form method="POST">
    <div class="container">
        <div class="title">Sign in or create account</div>
        <div class="input-group">
            <label for="email">Enter mobile number or email</label>
            <input type="email" id="email" name="e" >
            <label for="password">Enter password</label>
            <input type="password" id="password" name="p" >
        </div>
        <button class="btn" name="s">Create Account</button>
</form>
        <div class="footer">
            <p>By continuing, you agree to Amazon's <a href="#">Conditions of Use</a> and <a href="#">Privacy Notice</a>.</p>
            <p>
                <a href="#">Conditions of Use</a> | 
                <a href="#">Privacy Notice</a> | 
                <a href="#">Help</a>
            </p>
            <p>&copy; 1996-2024, Amazon.com, Inc. or its affiliates</p>
        </div>
    </div>
</body>
</html>
<?php
include './conn.php';
if(isset($_POST['s'])){
    $em=$_POST['e'];
    $ps=$_POST['p'];
    $emq="select * from users where email='$em'";
    $res=mysqli_query($conn,$emq);
    $c=mysqli_num_rows($res);
    if($c){
        ?>
        <script>alert("User already exists!");</script>
        <?php
    }
    else{
        $ins="insert into users(email,password) values('$em','$ps')";
        $res=mysqli_query($conn,$ins);
        if($res){
            ?>
            <script>alert("user account created succesfully!");</script>
            <?php
        }
    }
}
?>