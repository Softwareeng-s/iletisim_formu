<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İLETİŞİM FORMU</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; padding: 20px; }
        form { width: 50%; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; }
        label, input, textarea { display: block; width: 100%; margin-bottom: 10px; }
        button { background-color: purple ; color: white; padding: 10px; border: none; }
        .success { color: green; font-weight: bold; }
        .error { color: red; font-weight: bold; }
    </style>
</head>
<body>

<style>
    form {
        width: 400px; /* Formun maksimum genişliğini belirler */
        margin: 0 auto; /* Sayfa ortasına alır */
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    textarea {
        width: 100%; /* Form genişliği kadar olsun */
        max-width: 100%; /* Daha fazla büyümesini engeller */
        resize: vertical; /* Yalnızca dikey olarak büyümesine izin verir */
    }
</style>

    <h2>İLETİŞİM FORMU</h2>

    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'success') {
            echo "<p class='success'>Form başarıyla gönderildi!</p>";
        } elseif ($_GET['status'] == 'error') {
            echo "<p class='error'>Form gönderilirken bir hata oluştu. Lütfen tekrar deneyin.</p>";
        }
    }
    ?>

    <form action="process.php" method="post">
        <label for="ad">Ad:</label>
        <input type="text" id="ad" name="ad" required>

        <label for="soyad">Soyad:</label>
        <input type="text" id="soyad" name="soyad" required>

        <label for="email">E-posta:</label>
        <input type="email" id="email" name="email" required>

        <label for="mesaj">Mesaj:</label>
        <textarea id="mesaj" name="mesaj" required></textarea>

        <button type="submit">Gönder</button>
    </form>

</body>
</html>
