<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = htmlspecialchars($_POST['ad']);
    $soyad = htmlspecialchars($_POST['soyad']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $mesaj = htmlspecialchars($_POST['mesaj']);

    if ($ad && $soyad && $email && $mesaj) {
        echo "<h2>Form Bilgileri</h2>";
        echo "<p><strong>Ad:</strong> $ad</p>";
        echo "<p><strong>Soyad:</strong> $soyad</p>";
        echo "<p><strong>E-posta:</strong> $email</p>";
        echo "<p><strong>Mesaj:</strong> $mesaj</p>";
        echo "<br><a href='index.php?status=success'>Geri Dön</a>";
    } else {
        header("Location: index.php?status=error");
        exit();
    }
} else {
    header("Location: index.php?status=error");
    exit();
}
?>

