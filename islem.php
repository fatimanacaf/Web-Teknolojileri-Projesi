<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sonuçları - Fatima</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">İşlem Sonucu</a>
        </div>
    </nav>

    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 bg-white p-5 shadow rounded">
                <h2 class="text-center mb-4 text-primary">Gönderilen Bilgiler</h2>
                <hr>
                
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Verileri alalım
                    $name = htmlspecialchars($_POST['name']);
                    $email = htmlspecialchars($_POST['email']);
                    $gender = htmlspecialchars($_POST['gender']);
                    $message = htmlspecialchars($_POST['message']);

                    // Ekrana tablo şeklinde basalım
                    echo "<table class='table table-bordered mt-4'>";
                    echo "<tr><th class='bg-light w-25'>Ad Soyad:</th><td>$name</td></tr>";
                    echo "<tr><th class='bg-light'>E-posta:</th><td>$email</td></tr>";
                    echo "<tr><th class='bg-light'>Cinsiyet:</th><td>$gender</td></tr>";
                    echo "<tr><th class='bg-light'>Mesaj:</th><td>$message</td></tr>";
                    echo "</table>";
                } else {
                    echo "<div class='alert alert-danger'>Lütfen formu kullanarak bu sayfaya erişiniz!</div>";
                }
                ?>

                <div class="text-center mt-4">
                    <a href="iletisim.html" class="btn btn-secondary">Geri Dön</a>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-center py-4 bg-dark text-white fixed-bottom">
        <p>&copy; 2026 Fatima - Tüm Hakları Saklıdır.</p>
    </footer>
</body>
</html>