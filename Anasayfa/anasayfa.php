<?php
    session_start();
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNREE</title>
    <link rel="stylesheet" href="style.css">
    <style>
    #userinfo {
    position: absolute; /*önemli */
    top: 0;
    right: 5px;
    margin-left: auto;  /*Çakışma sebebiyle özel margin verildi.*/
}
    </style>
</head>
<body>
    <div class="container">
        <div class="card-container">
            <a href="Oyun/index.html">
                <div class="card">
                    <svg class="w-[48px] h-[48px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M11 21V2.352A3.451 3.451 0 0 0 9.5 2a3.5 3.5 0 0 0-3.261 2.238A3.5 3.5 0 0 0 4.04 8.015a3.518 3.518 0 0 0-.766 1.128c-.042.1-.064.209-.1.313a3.34 3.34 0 0 0-.106.344 3.463 3.463 0 0 0 .02 1.468A4.017 4.017 0 0 0 2.3 12.5l-.015.036a3.861 3.861 0 0 0-.216.779A3.968 3.968 0 0 0 2 14c.003.24.027.48.072.716a4 4 0 0 0 .235.832c.006.014.015.027.021.041a3.85 3.85 0 0 0 .417.727c.105.146.219.285.342.415.072.076.148.146.225.216.1.091.205.179.315.26.11.081.2.14.308.2.02.013.039.028.059.04v.053a3.506 3.506 0 0 0 3.03 3.469 3.426 3.426 0 0 0 4.154.577A.972.972 0 0 1 11 21Zm10.934-7.68a3.956 3.956 0 0 0-.215-.779l-.017-.038a4.016 4.016 0 0 0-.79-1.235 3.417 3.417 0 0 0 .017-1.468 3.387 3.387 0 0 0-.1-.333c-.034-.108-.057-.22-.1-.324a3.517 3.517 0 0 0-.766-1.128 3.5 3.5 0 0 0-2.202-3.777A3.5 3.5 0 0 0 14.5 2a3.451 3.451 0 0 0-1.5.352V21a.972.972 0 0 1-.184.546 3.426 3.426 0 0 0 4.154-.577A3.506 3.506 0 0 0 20 17.5v-.049c.02-.012.039-.027.059-.04.106-.064.208-.13.308-.2s.214-.169.315-.26c.077-.07.153-.14.225-.216a4.007 4.007 0 0 0 .459-.588c.115-.176.215-.361.3-.554.006-.014.015-.027.021-.041.087-.213.156-.434.205-.659.013-.057.024-.115.035-.173.046-.237.07-.478.073-.72a3.948 3.948 0 0 0-.066-.68Z"/>
                    </svg>                                            
                    <div class="card__content">
                        <p class="card__title">Bilgi Yarışması</p>
                        <p class="card__description">Heyecan dolu bir bilgi yarışması! Her doğru cevap +10 puan kazandırır! Katılmak için tıklayınız!</p>
                    </div>
                </div>
            </a>
            <a href="sayitahminoyunu/index.html">
                <div class="card">
                    <svg class="w-[48px] h-[48px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12.832 3.445a1 1 0 0 0-1.664 0l-4 6A1 1 0 0 0 8 11h8a1 1 0 0 0 .832-1.555l-4-6Zm-1.664 17.11a1 1 0 0 0 1.664 0l4-6A1 1 0 0 0 16 13H8a1 1 0 0 0-.832 1.555l4 6Z" clip-rule="evenodd"/>
                    </svg>                      
                    <div class="card__content">
                        <p class="card__title">Sayı Tahmin Oyunu</p>
                        <p class="card__description">Bilgisayarın tuttuğu sayıyı tahmin edebilir misin? Her doğru cevap +10 puan kazandırır! Katılmak için tıkla!</p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card">
                    <svg class="w-[48px] h-[48px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="m8 9 3 3-3 3m5 0h3M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
                    </svg>                                           
                    <div class="card__content">
                        <p class="card__title">Kod Doktoru</p>
                        <p class="card__description">Bu eksik kod parçalarını tamamlayabilir misin? Her doğru cevap +10 puan kazandırır! Katılmak için tıkla!</p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card">
                    <svg class="w-[48px] h-[48px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="1.8" d="M8.737 8.737a21.49 21.49 0 0 1 3.308-2.724m0 0c3.063-2.026 5.99-2.641 7.331-1.3 1.827 1.828.026 6.591-4.023 10.64-4.049 4.049-8.812 5.85-10.64 4.023-1.33-1.33-.736-4.218 1.249-7.253m6.083-6.11c-3.063-2.026-5.99-2.641-7.331-1.3-1.827 1.828-.026 6.591 4.023 10.64m3.308-9.34a21.497 21.497 0 0 1 3.308 2.724m2.775 3.386c1.985 3.035 2.579 5.923 1.248 7.253-1.336 1.337-4.245.732-7.295-1.275M14 12a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                    </svg>                                            
                    <div class="card__content">
                        <p class="card__title">Molekül Kaşifi</p>
                        <p class="card__description">Molekülleri oluşturmak için doğru molekülleri kullan! Her doğru cevap +5 puan kazandırır! Katılmak için tıkla!</p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card">
                    <svg class="w-[48px] h-[48px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M21 12a28.076 28.076 0 0 1-1.091 9M7.231 4.37a8.994 8.994 0 0 1 12.88 3.73M2.958 15S3 14.577 3 12a8.949 8.949 0 0 1 1.735-5.307m12.84 3.088A5.98 5.98 0 0 1 18 12a30 30 0 0 1-.464 6.232M6 12a6 6 0 0 1 9.352-4.974M4 21a5.964 5.964 0 0 1 1.01-3.328 5.15 5.15 0 0 0 .786-1.926m8.66 2.486a13.96 13.96 0 0 1-.962 2.683M7.5 19.336C9 17.092 9 14.845 9 12a3 3 0 1 1 6 0c0 .749 0 1.521-.031 2.311M12 12c0 3 0 6-2 9"/>
                    </svg>                                            
                    <div class="card__content">
                        <p class="card__title">Katili Bul</p>
                        <p class="card__description">Cinayeti çöz, katili bul! Her doğru cevap +20 puan kazandırır! Katılmak için tıkla!</p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div id="userinfo">
                    <div class="card">
                    <svg class="w-[48px] h-[48px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                    </svg>                  
                        <div class="card__content">
                            <p class="card__title" style="font-size: 18px">Kullanıcı Bilgileri</p>
                            <?php
                                if (isset($_SESSION['user_id'])) {
                                    $user_id = $_SESSION['user_id'];
                                    $user_points = $_SESSION['user_points'];
                                    echo "<p class='card__description' style='font-size: 15px'>Kullanıcı ID: $user_id <br> Puan: $user_points</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
        <button id="loginButton" class="button">
            <a href="Giris/loading.html" style="text-decoration: none;">Giriş Yap | Kayıt Ol</a>
             <div class="arrow-wrapper"><!--Ok düzeltilecek -->
                <div class="arrow"></div>
            </div>
        </button>
<script src="script.js"></script>
<!-----------------------------------------------------------------------------JAVASCRİPT KODLARI ----------------------------------------------------------------------------------------------------------->
        <script>
            //ilk satır araştır
        document.addEventListener('DOMContentLoaded', function () {
        var loginButton = document.getElementById('loginButton');
        //isset true or false döndürecek : bağlaç
        var isLoggedIn = <?php echo isset($_SESSION['user_id']) ? 'true' : 'false'; ?>;

        // Kullanıcı giriş yapmışsa buton ve kart metinlerini güncellemek için islogged değerinin true veya false old. kontorl et
        if (isLoggedIn) {
            loginButton.innerHTML = '<a href="#" onclick="confirmLogout()" style="text-decoration: none;">Çıkış Yap</a>';
        } else {
            loginButton.innerHTML = '<a href="Giris/giris.html" style="text-decoration: none;">Giriş Yap | Kayıt Ol</a>';
        }
    });
    //soru sormak için
    function confirmLogout() {
        var confirmLogout = confirm("Çıkış yapmak istediğinize emin misiniz?");
        if (confirmLogout) {
            window.location.href = "cikis.php";
        }
    }
        </script>
        <p style="text-align: center; margin-top: 615px; font-size: 14px; color: white;">COPYRİGHT © 2024 DESIGNED BY - BEKER GROUP</p>
</body>
</html>