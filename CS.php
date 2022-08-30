<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counselling Service IITK</title>
    <link rel="stylesheet" href="CS.css">
</head>

<body>
    <div class="container">
        <div class="login-container">
            <div class="login-box">
                <div id="register-form">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']">
                    <input type="email" id="register-email" name="email" placeholder="email">
                    <input type="text" id="subject" name="subject" placeholder="subject">
                    <input type="text" id="Message" name="Message" placeholder="message">
                    <input type="submit" name="esubmit" id="esubmit">
                    </form>
                </div>
                <div class="form-background"></div>
            </div>
        </div>(
    </div>
</body>

</html>
<?php
if(isset($_POST['esubmit'])){
    $to="shrishs21@iitk.ac.in";
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $from=$_POST['email'];
    $headers="FROM : $from";
    mail($to,$subject,$message,$headers);
    echo "mail sent.";
}