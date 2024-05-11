<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['action'] == "giris") {
        $id = $_POST['gid'];
        $pass = $_POST['gpass'];

        $db = new PDO("mysql:host=localhost;dbname=funree;charset=utf8","root",'');
        $statement = $db->prepare("SELECT * FROM users WHERE id = :id AND pass = :pass");
        $statement->execute(array(':id' => $id, ':pass' => $pass));
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Başarılı giriş
            $_SESSION['user_id'] = $user['id'];

            // Kullanıcının puanını veritabanından al
            $statement = $db->prepare("SELECT puan FROM users WHERE id = :id");
            $statement->execute(array(':id' => $user['id']));
            $user_points = $statement->fetchColumn();
            $_SESSION['user_points'] = $user_points;

            header("Location: ../anasayfa.php");
            exit;
        } else {
            // Başarısız giriş
            echo "Kullanıcı adı veya şifre yanlış!";
            header("location: giris.html");
        }
    } elseif ($_POST['action'] == "kayit") {
        function sifreKontrol($pass, $passt) {
            // Şifrenin uzunluğunu kontrol et
            if (strlen($pass) < 8) {
                return "Şifre en az 8 karakterden oluşmalıdır.";
            }
            
            // Özel karakter kontrolü
            if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $pass)) {
                return "Şifre özel karakter içeremez.";
            }
            
            if($pass !== $passt) {
                return "Girdiğiniz şifreler aynı değil!";
            }

            // Şifre geçerli ise
            return true;
        }

        $adsoy = $_POST['adsoy'];
        $id = $_POST['id'];
        $pass = $_POST['pass'];
        $passt = $_POST['passt'];

        // Şifre kontrolü
        $sifreKontrolSonuc = sifreKontrol($pass,$passt);
        if ($sifreKontrolSonuc !== true) {
            // Şifre uygun değilse hata mesajını göster
            echo "<h2>$sifreKontrolSonuc</h2>";
        } else {
            $db = new PDO("mysql:host=localhost;dbname=funree;charset=utf8","root",'');
            $statement = $db->prepare("INSERT INTO users(adsoy,id,pass) VALUES(:adsoy,:id,:pass)");
            $statement->bindParam(':adsoy', $adsoy);
            $statement->bindParam(':id', $id);
            $statement->bindParam(':pass', $pass);
            $success = $statement->execute();

            if ($success) {
                echo "Kayıt işlemi başarılı!";
                header("location:loading.html");
            } else {
                echo "Kayıt işlemi başarısız oldu.";
            }
        }
    }
}
?>
