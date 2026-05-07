<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Basit doğrulama (Ödev kuralına göre: kullanıcı adı mail, şifre öğrenci nosu olabilir)
    if ($user == "g211210001@sakarya.edu.tr" && $pass == "g211210001") {
        echo "<div style='text-align:center; margin-top:50px;'>
                <h2>Hoşgeldiniz b211210573</h2>
                <p>Giriş Başarılı!</p>
                <a href='index.html'>Anasayfaya Dön</a>
              </div>";
    } else {
        header("Location: login.html?hata=1");
    }
}
?>