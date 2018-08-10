<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
// Afficher les erreurs et les avertissements
// error_reporting(e_all);
?>

<?php
    require __DIR__.'/password.php';

    if(!defined("GMAIL_ID") || !defined("GMAIL_PW")) {
      echo "<p>Constantes manquantes. (GMAIL_ID ou GMAIL_PW)</p>";
      exit;
    }
?>

<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/autoload.php';

    $subject_mail = $_POST['object-list'];
    if (isset($_POST['submit'])){
        $button_submit = $_POST['submit'];
    }
    if (isset($button_submit)){
        $gender = $_POST['gender'];
        $lastname = $_POST['lastname'];
        $san_lastname = filter_var($lastname, FILTER_SANITIZE_STRING);
        // $val_lastname = filter_var($lastname, FILTER_VALIDATE_EMAIL);
        $firstname = $_POST['firstname'];
        $san_firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
        // $val_firstname = filter_var($firstname, FILTER_VALIDATE_EMAIL);
        $email = $_POST['email'];
        $san_email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $val_email = filter_var($san_email, FILTER_VALIDATE_EMAIL);
        $objet = $_POST['object-list'];
        $san_objet = filter_var($objet,FILTER_SANITIZE_STRING);
        $message = $_POST['message'];
        $san_message = filter_var($message,FILTER_SANITIZE_STRING);
    }    
    if (isset($button_submit)){
        //Create a new PHPMailer instance
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        //Tell PHPMailer to use SMTP
        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 1;
        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = GMAIL_ID;
        //Password to use for SMTP authentication
        $mail->Password = GMAIL_PW;
        //Set who the message is to be sent from
        $mail->setFrom('nadir.medlee@gmail.com', 'Nadir Mohamed Ali');
        //Set an alternative reply-to address
        // $mail->addReplyTo('replyto@example.com', 'First Last');
        //Set who the message is to be sent to
        $mail->addAddress($email, $subject_mail);
        //Set the subject line
        $mail->Subject = $_POST['object-list'];
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->Body    = $_POST['message'];
        //Replace the plain text body with one created manually
        $mail->AltBody = $_POST['message'];
        //Attach an image file
        // $mail->addAttachment('images/phpmailer_mini.png');
        //send the message, check for errors
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
            //Section 2: IMAP
            //Uncomment these to save your message in the 'Sent Mail' folder.
            #if (save_mail($mail)) {
            #    echo "Message saved!";
            #}
        }
        //Section 2: IMAP
        //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
        //Function to call which uses the PHP imap_*() functions to save messages:
        // https://php.net/manual/en/book.imap.php
        //You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders 
        //or labels, this can
        //be useful if you are trying to get this working on a non-Gmail IMAP server.
        function save_mail($mail) {
            //You can change 'Sent Mail' to any other folder or tag
            $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
            //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
            $imapStream = imap_open($path, $mail->Username, $mail->Password);
            $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
            imap_close($imapStream);
            return $result;
        }

        // function uploadImage($value='') {
        //     if (isset($_FILES['button-file']['name'])) {
        //       //le dossier vers où uploader
        //       $uploaddir = 'uploads/';
        //       //la destination complete
        //       $uploadfile = $uploaddir . basename($_FILES['button-file']['name']);
        //       //le movement du fichier
        //       //move_uploaded_file($Nomdufichier à uploader, $destination)
        //       if (move_uploaded_file($_FILES['button-file']['tmp_name'], $uploadfile)) {
        //         // return "<img src='$uploadfile' style='max-width:300px' alt=''>";
        //         return "Fichier uploadé avec succès.";
        //       } else {
        //         return "Aucun fichier à uploader.\n";
        //       }
        //       var_dump($_FILES);
        //     }
        //  }

    }

    ?>

    <?php
        // if(isset($_FILES['userfile']['name'])){
        // //le dossier vers où uploader
        // $uploaddir = 'uploads/';
        // //la destination complete
        // $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
        // echo '<pre>';
        // //le movement du fichier
        // //move_uploaded_file($Nomdufichier à uploader, $destination)
        // if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        // echo "<img src='$uploadfile' style='max-width:300px' alt=''>";
        // } else {
        // echo "Possible file upload attack\n";
        // }
        // // var_dump($_FILES);
        // // print "</pre>";
        // };
    ?>


