<?php

    require_once "vendor/autoload.php";

    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
    ->setUsername('Willzfrankenterprise4@gmail.com')
    ->setPassword('Willz3639.')
    ;

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    function sendAdminMessage($name,$email,$subject,$messages){
        global $mailer;
        $body = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Portfolio</title>
        </head>
        <body>
            <div class="email_wrap">
                <h2>Hi Admin,</h2>
                <p>You have a message from <strong>' . $name . ',</strong></p>
                <h3>Email: <strong>' . $email . '</strong></h4>
                <h4>Subject: <strong>' . $subject . '</strong></h5>
                <p>' . $messages .'</p>
            </div> 
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        </body>
        </html>';
        // Create a message
        $message = (new Swift_Message('You have a new message'))
        ->setFrom('Willzfrankenterprise4@gmail.com')
        ->setTo('Willzfrankenterprise4@gmail.com')
        ->setBody($body, 'text/html');
        // Send the message
        $result = $mailer->send($message);

        return $result;
    }

    function appreciationMessage($name,$email){
        global $mailer;
        $body = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Portfolio</title>
        </head>
        <body>
            <div class="email_wrap">
                <h2>Hi <strong>' . $name . ',</strong>,</h2>
                <p>Thanks for reaching us @Willzfrankenterprise, we will reach to you shortly.</p>
            </div> 
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        </body>
        </html>';
        // Create a message
        $message = (new Swift_Message('Thanks for reaching to us.'))
        ->setFrom('Willzfrankenterprise4@gmail.com')
        ->setTo($email)
        ->setBody($body, 'text/html');
        // Send the message
        $result = $mailer->send($message);

        return $result;
    }


    if (isset($_GET['entPage'])) {
        $error = '';
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $email = $_POST['email'];
        $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        $messages = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

        if (empty($name)) {
            $error = "Name is required";
        }

        if (empty($email)) {
            $error = "Email is required";
        }

        if (! (filter_var($email, FILTER_SANITIZE_EMAIL))) {
            $error = "Invalid email address !";
        }

        if (empty($subject)) {
            $error = "Subject is required";
        }

        if (empty($messages)) {
            $error = "Messages is required";
        }

        if (empty($error)) {
            $send = sendAdminMessage($name,$email,$subject,$messages);
            $return = appreciationMessage($name,$email);

            if (isset($send) && isset($return)) {

                $error = "Message sent successfully...";
            }
        }

        echo json_encode($error); 
    }

    
    

?>