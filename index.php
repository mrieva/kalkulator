<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <style>
        body{
            background: #f2f2f2;
            font-family: sans-serif;
        }
        .kalkulator{
            width: 335px;
            background: #2f495a;
            margin: 100px auto;
            padding: 10px 20px 50px 20px;
            border-radius: 5px;
            box-shadow: 0px 10px 20px 0px #d1d1d1;
        }
        .bil{
            width: 300px;
            margin: 5px;
            border: none;
            font-size: 16px;
            border-radius: 5px;
            padding: 10px;
        }
        .opt{
            fonts-size: 16px;
            border: none;
            width: 215px;
            margin: 5px;
            border-radius: 5px;
            padding: 10px;
        }
        .tombol{
            background: #ec5159;
            border-top: none;
            border-right: none;
            border-left: none;
            border-radius: 5px;
            padding: 10px 20px;
            color: rgb(29, 27, 27);
            font-size: 15px;
            border-bottom: 4px solid #bf3d3d;
        }
        .judul{
            text-align: center;
            color: #eee;
            font-weight: normal;
        }
    </style>
</head>
<body>
    <!--23-->
    <?php
    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1+$bil2;
            break;
            case 'kurang':
                $hasil = $bil1-$bil2;
            break;
            case 'kali':
                $hasil = $bil1*$bil2;
            break;
            case 'bagi':
                $hasil = $bil1/$bil2;
            break;
        }
    }
    ?>
    <div class="kalkulator">
        <h2 class="judul">KALKULATOR</h2>
        <form method="post" action="index.php">
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukan Bilangan Pertama">
            <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukan Bilangan Kedua">
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol">
        </form>
        <?php if(isset($_POST['hitung'])){?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil">
            <?php }else{ ?>
                <input type="text" value="0" class="bil">
                <?php } ?>
    </div>
</body>
</html>