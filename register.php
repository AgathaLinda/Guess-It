<?php
    require('koneksi.php');
    if (isset($_POST['nama']) && isset($_POST['nohp'])&& isset($_POST['alamat']))
    {
        $nama = ($_POST['nama']);
        $nohp = ($_POST['nohp']);
        $alamat = ($_POST['alamat']);

        $query = "INSERT INTO `minigame3` (nama,no_hp,alamat) VALUES ('$nama', '$nohp', '$alamat')";
        $result = mysql_query($query)or die ("Ini gagal query");
        if($result == 1){
            echo "Data diri kamu sudah kami simpan :D Semoga beruntung mendapatkan novel Bienvenue Amor";
        }
        else echo "Gagal";
    }
?>
