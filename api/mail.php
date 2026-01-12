<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


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
   

     $register="<style>
                                                        html,
                                                        body {
                                                            margin: 0 auto !important;
                                                            padding: 0 !important;
                                                            height: 100% !important;
                                                            width: 100% !important;
                                                            font-family: 'myFontII', sans-serif;
                                                            font-size: 14px !important;
                                                            margin-bottom: 10px !important;
                                                            line-height: 24px;
                                                            color: #8094ae;
                                                            font-weight: 400 !important;
                                                        }
                                                        * {
                                                            -ms-text-size-adjust: 100%;
                                                            -webkit-text-size-adjust: 100%;
                                                            margin: 0;
                                                            padding: 0;
                                                        }
                                                        table,
                                                        td {
                                                            mso-table-lspace: 0pt !important;
                                                            mso-table-rspace: 0pt !important;
                                                        }
                                                        table {
                                                            border-spacing: 0 !important;
                                                            border-collapse: collapse !important;
                                                            table-layout: fixed !important;
                                                            margin: 0 auto !important;
                                                        }
                                                        table table table {
                                                            table-layout: auto;
                                                        }
                                                        a {
                                                            text-decoration: none;
                                                        }
                                                        img {
                                                            -ms-interpolation-mode:bicubic;
                                                        }
                                                        </style>

                                                        <center style='width: 100%; background-color: #f5f6fa;'>
                                                        <table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#f0f0f0'>
                                                            <tr>
                                                            <td style='padding: 40px 0;'>
                                                                    <table style='width:100%;max-width:620px;margin:0 auto;'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style='text-align: center; padding-bottom:25px'>
                                                                                    <a href='https://www.reelfruit.com'><img style='height: 50px' src='https://reelfruit.com/images/favicon.png' alt=''></a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <center>
                                                                        <table style='width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style='padding: 30px 30px 15px 30px;'>
                                                                                        <h2 style='margin: 0;'>Welcome</h2>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style='padding: 0 30px 20px;'>

                                                                                        <h4 style='margin-bottom: 10px;''>Thank you for keeping it Reel. Here's your one-time passcode to verify your email address</h4>

                                                                                        <br>
                                                                                        <div style='display: flex; justify-content: center; align-items: center; padding:2rem; border: 1px solid #057a4a; color: #212120; font-size: 2rem; letter-spacing: 1rem; font-weight: 600;'>
                                                                                        yello
                                                                                        </div>

                                                                                    </td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </center>
                                                                    
                                                                    <br><br>
                                                    
                                                                    <center>
                                                                        <table style='width:100%;max-width:620px;margin-top:0 auto;'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style='text-align: center;'>
                                                                                        
                                                                                        <span style='font-size: 13px;'><strong>CONNECT WITH US:</strong></span>
                                                                                        <br><br>

                                                                                        <a href='www.instagram.com/reelfruit'><img style='height: 20px' src='https://reelfruit.com/images/files/ig.png' alt='IG'></a>

                                                                                        <a href='www.twitter.com/reelfruit'><img style='height: 20px' src='https://reelfruit.com/images/files/tw.png' alt='twitter'></a>

                                                                                        <a href='https://www.linkedin.com/company/reelfruit'><img style='height: 20px' src='https://reelfruit.com/images/files/IN.png' alt='linkedin'></a>
                                                                        
                                                                        <a href='www.facebook.com/reelfruit'><img style='height: 20px' src='https://reelfruit.com/images/files/fb2.png' alt='facebook'></a>

                                                                                        

                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </center>";
    $mail = new PHPMailer(true); 

                                                            $mail->IsSMTP();                           
                                                            $mail->SMTPAuth   = false;                 
                                                            $mail->Port       = 25;                    
                                                            $mail->Host       = "localhost"; 
                                                            $mail->Username   = "reelfruit@reelfruit.com";   
                                                            $mail->Password   = "r@@lsales";            
                                                            
                                                            $mail->IsSendmail();  
                                                            
                                                            $mail->From       = "blowaballoon@gmail.com";
                                                            $mail->FromName   = "ReelFruit";
                                                            
                                                            $mail->AddAddress("blowaballoon@gmail.com");
                                                                $mail->Subject  = "[ReelFruit] To be REEL";
                                                            $mail->WordWrap   = 80; 
                                                            
                                                                $mail->MsgHTML($register);
                                                            $mail->IsHTML(true); 
                                                            
                                                            
                                                            $mail->Send();
                                                            echo "<h4 class='title-bg success'>Successful!</h4>";

} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}



// Load environment variables (Vercel automatically provides them)

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
//         $mail->addReplyTo($email, $name);

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
