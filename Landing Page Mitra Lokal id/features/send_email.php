<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['website']);

    $to = "mitralokal2024@gmail.com"; // Ganti dengan email bisnis MitraLokal
    $subject = "Pesan dari $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    $body = "Nama: $name\n";
    $body .= "Email: $email\n";
    $body .= "Pesan:\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Maaf, pesan gagal dikirim.";
    }
}
?>
