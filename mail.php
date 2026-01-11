<?php
require 'includes/PHPMailer/class.phpmailer.php'; 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // composer install

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(403);
    exit("Forbidden");
}

$name    = trim($_POST["name"] ?? "");
$email   = trim($_POST["email"] ?? "");
$message = trim($_POST["message"] ?? "");
$subject = trim($_POST["subject"] ?? "");

if ($name === "" || $email === "" || $message === "" ) {
    exit("All fields are required.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("Invalid email address.");
}

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'blowaballoon@gmail.com';      // your Gmail
    $mail->Password   = 'tcah pwmw vbgm alhc';        // app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom('blowaballoon@gmail.com', 'Website Contact');
    $mail->addAddress('blowaballoon@gmail.com');        // where messages go
    $mail->addReplyTo($email, $name);

    // Content
    $mail->isHTML(false);
    $mail->Subject = 'New Contact Form Message: '. $subject;
    $mail->Body    =
        "Name: {$name}\n" .
        "Email: {$email}\n\n" .
        "Message:\n{$message}";

    $mail->send();
    echo "Message sent successfully.";

} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}


                                                if ($_SERVER["REQUEST_METHOD"] !== "POST") {
                                                    http_response_code(403);
                                                    exit("Forbidden");
                                                }

                                                $name    = trim($_POST["name"] ?? "");
                                                $email   = trim($_POST["email"] ?? "");
                                                $message = trim($_POST["message"] ?? "");
                                                $subject = trim($_POST["subject"] ?? "");

                                                if ($name === "" || $email === "" || $message === "" ) {
                                                    exit("All fields are required.");
                                                }

                                                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                                    exit("Invalid email address.");
                                                }

                                                $mail = new PHPMailer(true);

                                                try {
                                                    // Server settings
                                                    $mail->isSMTP();
                                                    $mail->Host       = 'smtp.gmail.com';
                                                    $mail->SMTPAuth   = true;
                                                    $mail->Username   = 'blowaballoon@gmail.com';      // your Gmail
                                                    $mail->Password   = 'tcah pwmw vbgm alhc';        // app password
                                                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                                                    $mail->Port       = 587;

                                                    // Recipients
                                                    $mail->setFrom('blowaballoon@gmail.com', 'Portfolio Contact');
                                                    $mail->addAddress('blowaballoon@gmail.com');        // where messages go
                                                    $mail->addReplyTo($email, $name);

                                                    // Content
                                                    $mail->isHTML(false);
                                                    $mail->Subject = 'New Contact Form Message: '. $subject;
                                                    $mail->Body    =
                                                        "Name: {$name}\n" .
                                                        "Email: {$email}\n\n" .
                                                        "Message:\n{$message}";

                                                    $mail->send();
                                                    echo "Message sent successfully.";

                                                } catch (Exception $e) {
                                                    echo "Mailer Error: {$mail->ErrorInfo}";
                                                }




















// require_once __DIR__ . '/vendor/autoload.php';

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// // Load environment variables (Vercel automatically provides them)

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $mail = new PHPMailer(true);

//     try {
//         // Server settings for your ESP (e.g., SendGrid, Mailtrap, Resend)
//         $mail->isSMTP();
//         $mail->Host = getenv('SMTP_HOST');
//         $mail->SMTPAuth = true;
//         $mail->Username = getenv('SMTP_USER');
//         $mail->Password = getenv('SMTP_PASS');
//         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // or ENCRYPTION_SMTPS
//         $mail->Port = getenv('SMTP_PORT'); // e.g., 587 or 465

//         // Recipients
//         $mail->setFrom('blowaballoon@gmail.com', 'Mailer'); // Use a verified sender address
//         $mail->addAddress('blowaballoon@gmail.com', 'Recipient Name');

//         // Content
//         $mail->isHTML(true);
//         $mail->Subject = 'New Contact Form Message: '. $subject;
//         $mail->Body    =
//             "Name: {$name}\n" .
//             "Email: {$email}\n\n" .
//             "Message:\n{$message}";

//         $mail->send();
//         echo 'Message has been sent';
//     } catch (Exception $e) {
//         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//     }
// }
                                           