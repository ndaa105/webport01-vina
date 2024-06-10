<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'vinawanda518@gmail.com';
    $subject = 'Pesan Personal';
    $message_body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";

    // Kirim email
    if (mail($to, $subject, $message_body)) {
        echo 'Message send successfully';
    } else {
        echo 'Message failed to send, please use the icon feature available on the website page';
    }
}
?>