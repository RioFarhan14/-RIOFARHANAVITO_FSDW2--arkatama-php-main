<?php
$Nama = "Rio Farhan Avito";
$TglLahir = 'O4-04-2002';
$jkel = 'Laki - Laki';
$Alamat = 'KOMP. PONDOK PUCUNG INDAH 2 Jalan Merak Blok C2 No.14';
$SD = "SD NEGERI PONDOK PUCUNG 04";
$SMP = "SMP NEGERI 14 KOTA TANGERANG SELATAN";
$SMA = "SMA NEGERI 11 KOTA TANGERANG SELATAN";
$univ = "UNIVERSITAS GUNADARMA";
$hobi = "SEPAK BOLA,FUTSAL,MAIN GAME"
?>
<!DOCTYPE html>
<html>

<head>
    <title>Biodata Diri</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="container">
        <div class="photo">
            <img src="assets/11120013.png" alt="Foto"><br>
        </div>
        <div class="info">
            <ul>
                <li><span>Nama: <?php echo $Nama; ?></span></li>
                <li><span>Tanggal Lahir: <?php echo $TglLahir; ?></span></li>
                <li><span>Jenis Kelamin: <?php echo $jkel; ?></span></li>
                <li><span>Alamat: <?php echo $Alamat; ?></span></li>
                <li><span>Riwayat Pendidikan:</span>
                    <ol>
                        <li> <?php echo $SD; ?></li>
                        <li> <?php echo $SMP; ?></li>
                        <li> <?php echo $SMA; ?></li>
                        <li> <?php echo $univ; ?></li>
                    </ol>
                </li>
                <li><span>Hobi: <?php echo $hobi; ?></span></li>
            </ul>
        </div>
    </div>
</body>

</html>