<?php
$to = 'izabela.sosnowska23@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['text'];
$subject= 'Elhambre from ' . $name . ' (' . $phone .')';
$message = $_POST['message'];
// $headers = 'From: ' . $name'' . ' (' . $email .')';
$headers = 'From: ' . $_POST['email'] . "\r\n" .
$headers .= 'Content-type: text/html; charset=utf-8\r\n';

mail($to, $subject, $message, $headers);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/2fe14bc8b9.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="img/logos/favicon-16x16.png">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mobile.css">
    <link rel="stylesheet" media="screen and (min-width: 1100px)" href="css/widescreen.css">
    <title>SmartEdge Life | Safe and Secure</title>
</head>

<body>
<nav id="navbar">
        <h1 class="logo">
            <span class="text-primary"><i class="fas fa-user-shield"></i>
           Smart</span>Edge</h1></nav>
    <header id="showcase">
        <div class="showcase-content">

            <?php
$to = 'is.contact@izabelasosnowska.pl';
$name = $_POST['name'];
$email = $_POST['email'];
$subject= 'Contact Form ElHambre ' . $name . ' (' . $email .')';
$message = $_POST['message'];
$headers = 'From: ' . $_POST['email'] . "\r\n" .
$headers .= 'Content-type: text/html; charset=utf-8\r\n';

mail($to, $subject, $message, $headers);

?>
                <h2 class="m-heading text-center"><span class="text-primary">Your</span> Message is sent</h2>
               <a href="index.html" class="btn btn-light">Go Back</a>
            </div>
        </div>
    </header>
    <footer id="main-footer" class="bg-dark text-center py-1">
        <div class="container">
            <p>Copyright &copy; 2019, SmartEdge, All Rights Reserved</p>
        </div>
    </footer>
</body>

</html>

