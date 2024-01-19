<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Data Mata Kuliah Mahasiswa</title>
</head>
<body>
    <h2>Daftar Data Mata Kuliah Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Mata Kuliah</th>
            <th>Jumlah SKS</th>
        </tr>
        <?php
        include 'koneksi.php';

        $result = $koneksi->query("SELECT mahasiswa.nama AS nama_mhs, matkul.nama AS nama_matkul, mhs_mtkl.id_sks 
                                    FROM mhs_mtkl 
                                    JOIN mahasiswa ON mhs_mtkl.nama = mahasiswa.id
                                    JOIN matkul ON mhs_mtkl.id_mtkul = matkul.id");

        $nomor = 1;

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $nomor . "</td>";
            echo "<td>{$row['nama_mhs']}</td>";
            echo "<td>{$row['nama_matkul']}</td>";
            echo "<td>{$row['id_sks']}</td>";
            echo "</tr>";

            $nomor++;
        }


        $koneksi->close();
        ?>
    </table>
</body>
</html>
