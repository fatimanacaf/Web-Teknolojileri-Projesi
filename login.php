<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Kendi okul mailini ve öğrenci numaranı buraya yaz
    if ($user == "fatima.nacafzade@ogr.sakarya.edu.tr" && $pass == "g211210001") { 
        echo "<div style='text-align:center; margin-top:50px; font-family:sans-serif;'>
                <h2>Hoş Geldiniz Fatima</h2>
                <p>Giriş Başarılı! Ana sayfaya yönlendiriliyorsunuz...</p>
                <a href='index.html' class='btn btn-primary'>Hemen Git</a>
              </div>";
        header("Refresh: 3; url=index.html"); // 3 saniye sonra otomatik yönlendirme
    } else {
        // Hatalı girişte tekrar login sayfasına gönderir
        header("Location: login.html?hata=true");
    }
}
?>