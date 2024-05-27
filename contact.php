<?php 

if (isset($_POST['submit'])) {
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "lukivecera@seznam.cz";
    $headers = "from: ".$mailFrom;
    $txt = "Obdržel jste e-mail od:".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: contact.php?mailsend");
}
?>