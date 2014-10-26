<?php
require("phpMailer/class.phpmailer.php");

if(isset($_POST['subject']) && $_POST['subject'] != ''){
    
    $from = $_POST['from'];
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    //$mail2->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "johnbrycephpcinema@gmail.com";
    $mail->Password = "phpcinema1234";
    $mail->SetFrom($from);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AddAddress($to);
    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        die;
    }
    
    
    
}



?>
<html>
    <head>
        <title>
            email test
        </title>
    </head>
    <body>
        <form action="" method="post">
            <label for="subject">Subject:</label><input type="text" name="subject"/><br/>
            <label for="message">Message:</label><input type="text" name="message"/><br/>
            <label for="to">To:</label><input type="email" name="to"/><br/>
            <label for="from">From:</label><input type="email" name="from"/><br/>
            <input type="submit" value="Send" />
        </form>
    </body>
</html>

