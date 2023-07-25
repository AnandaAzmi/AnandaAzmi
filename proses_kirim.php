<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];

    // Konfigurasi email
    $tujuan_email = "anandaazmi2907@gmail.com"; // Ganti dengan alamat email tujuan Anda
    $subjek = "Pesan dari $nama";
    $pesan_email = "Pesan dari: $nama\nEmail: $email\n\n$pesan";

    // Kirim email
    if (mail($tujuan_email, $subjek, $pesan_email)) {
        echo "Pesan terkirim. Terima kasih telah menghubungi kami!";
    } else {
        echo "Maaf, pesan gagal terkirim. Silakan coba lagi nanti.";
    }
}
?>
