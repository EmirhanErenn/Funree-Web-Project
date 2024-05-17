<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <table class="table table-success table-striped">
        <tr>
            <th>id</th>
            <th>isim</th>
            <th>fiyat</th>
            <th>acıklama</th>
            <th>resim</th>
        </tr>

        <?php 
        include("baglanti.php");

        $sec = "select * from deneme";
        $sonuc = $baglan->query($sec);

        if ($sonuc->num_rows > 0) {
            while ($cek = $sonuc->fetch_assoc()) {
                echo "
                <tr>
                    <td>" . $cek['id'] . "</td>
                    <td>" . $cek['isim'] . "</td>
                    <td>" . $cek['fiyat'] . "</td>
                    <td>" . $cek['acıklama'] . "</td>
                    <td> <img src=" .$cek['resim']. " width='75' height='75'></td>
                </tr>
                ";
            }
        } else {
            echo "<tr><td colspan='5'>Veri yok dayı</td></tr>";
        }
        ?>

    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
