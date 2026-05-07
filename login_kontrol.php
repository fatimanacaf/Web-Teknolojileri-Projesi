<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Kontrolü - Fatima</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0; }
        .result-card { background: white; padding: 40px; border-radius: 15px; shadow: 0 4px 15px rgba(0,0,0,0.1); text-align: center; }
    </style>
</head>
<body>

    <div class="result-card shadow border">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Formdan gelen verileri alıyoruz
            $user = isset($_POST['username']) ? $_POST['username'] : '';
            $pass = isset($_POST['password']) ? $_POST['password'] : '';

            // Senin öğrenci numaran ve mailinle yapılan kontrol
            if ($user == "b231210573@sakarya.edu.tr" && $pass == "b231210573") {
                echo "<h2 class='text-success'>Hoş Geldiniz Fatima!</h2>";
                echo "<p class='lead'>Öğrenci Numaranız: <b>b231210573</b></p>";
                echo "<div class='alert alert-info'>Giriş Başarılı! 3 saniye içinde ana sayfaya yönlendiriliyorsunuz...</div>";
                
                // 3 saniye sonra otomatik olarak anasayfaya (index.html) yönlendirir
                header("Refresh: 3; url=index.html");
            } else {
                // Bilgiler yanlışsa kırmızı bir hata mesajı verir
                echo "<h2 class='text-danger'>Hatalı Giriş!</h2>";
                echo "<p>Kullanıcı adı veya şifre yanlış.</p>";
                echo "<a href='login.html' class='btn btn-warning mt-3'>Tekrar Dene</a>";
            }
        } else {
            // Eğer dosya form gönderilmeden direkt açılırsa uyarı verir
            echo "<div class='alert alert-warning'>Lütfen giriş formunu kullanın.</div>";
            echo "<a href='login.html' class='btn btn-secondary'>Giriş Sayfasına Git</a>";
        }
        ?>
    </div>

</body>
</html>