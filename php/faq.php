<style>
    .preloader{position:fixed; left:0px; top:0px; width:100%; height:100%; z-index:99999999; background-color:#ffffff; background-position:center center;	background-repeat:no-repeat; background-image:url(../images/preloader2.gif);}
</style>
<?php

//Variable Declaraton

    $name = $_POST['name'];
    $email = $_POST['email'];
    $to_email = "info@aggtedeck.com";
    $subject = "New Inquiry";
    $phoneNumber = $_POST['phone_number'];
    $call = $_POST['call'];
    $message = "From: $email\n" ."Client Name: $name \n" . "Client Number: $phoneNumber \n" . "Call Back?: $call\n" . "\n\n" . "Message: \n\n" .  $_POST['message'];
    $headers = 'AGGTE Mail System>';


//EMAIL CONFIRMATION
// --- Subject of confirmation email. ---------

$conf_subject = 'Your recent inquiry';

// Who should the confirmation email be from?
$conf_sender = 'AGGTE WPC Cladding & Decking <no-reply@aggtedeck.com>';
$msg = "Your email: $email\n" . "\n" ."Hi" ." ". $_POST['name'] . ",\n\nThank you for your inquiries. A member of our
team will respond to your message as soon as possible.";
mail( $_POST['email'], $conf_subject, $msg, 'From: ' . $conf_sender );

//----------Send to company email. ---------

    /* $send = @mail($to_email,$subject,$message,$headers); */
    if(@mail($to_email,$subject,$message,$headers)) {
        echo "<div class='preloader'></div><center><h1 style='position: relative;top: 250px;font-family:Arial;'>Your message was successfully sent!</h1></center>";
        echo "<script>
            window.setTimeout(function() {
            window.location.href='../faq.php';
            }, 2000);
            </script>";
    }
    else{
        echo "<script>
            window.location.href='errorfaq.php';
            </script>";
}
?>
