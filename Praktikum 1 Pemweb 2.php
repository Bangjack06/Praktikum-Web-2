<?php
$nilai1 = ["id" => 1, "nama" => "Zaky Muhammad Hafizh", "rombel" => "TI02-2023", "uts" => 100, "uas" => 90, "tugas" => 95];
$nilai2 = ["id" => 2, "nama" => "Muhammad Fahmi Ramadhan", "rombel" => "TI01-2023", "uts" => 85, "uas" => 95, "tugas" => 75];
$nilai3 = ["id" => 3, "nama" => "Muhammad Fauzan Adhima", "rombel" => "TI04-2023", "uts" => 65, "uas" => 90, "tugas" => 85];
$nilai4 = ["id" => 4, "nama" => "Eko Muhammad Haryono", "rombel" => "TI02-2023", "uts" => 95, "uas" => 100, "tugas" => 100];

$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Nilai Siswa</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center">Daftar Nilai Siswa</h1>
        <table class="table">
            <thead class="thead-" style="background-color: blue; color: white;">
                <tr>
                    <th scope="col" style="color: yellow;">No</th>
                    <th scope="col" style="color: yellow;">Nama</th>
                    <th scope="col" style="color: yellow;">Rombel</th>
                    <th scope="col" style="color: yellow;">UTS</th>
                    <th scope="col" style="color: yellow;">UAS</th>
                    <th scope="col" style="color: yellow;">Tugas</th>
                    <th scope="col" style="color: yellow;">Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($kumpulan_nilai as $nilai): ?>

                    <tr>
                        <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                        <td><?= $nilai["id"]?></td>
                        <td><?= $nilai["nama"]?></td>
                        <td><?= $nilai["rombel"]?></td>
                        <td><?= $nilai["uts"]?></td>
                        <td><?= $nilai["uas"]?></td>
                        <td><?= $nilai["tugas"]?></td>
                        <td><?= number_format($nilai_akhir, 2, ",", ".")  ?></td>
                    </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>