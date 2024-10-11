<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pertemuan-3-master/koneksi.php';
$sql = "SELECT * FROM notes ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Catatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="p-5" style="background-image: url('./img/bg.jpg');">
    <ul class="nav justify-content-end">
    <li class="nav-item">
        <a class="nav-link active" href="about.php">About Me</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" aria-disabled="true">Note</a>
    </li>
    </ul>
    <br><br>
    <h2 class="mb-5">Daftar Catatan</h2>
    <table class="table table-hover table-light border border-black">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi Catatan</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $no = 1;
                // Looping data dari database
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $row['judul'] . "</td>";
                    echo "<td>" . $row['isi'] . "</td>";
                    echo "<td>" . date('d-m-Y H:i', strtotime($row['created_at'])) . "</td>";
                    echo "<td>";
                    echo "<button type=\"button\" class=\"btn btn-light btn-sm\"><a href='./pages/edit.php?id=" . $row['id'] . "'>Edit</a></button> | ";
                    echo "<button type=\"button\" class=\"btn btn-light btn-sm\"><a href='./actions/delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Apakah anda yakin ingin menghapus catatan ini?\");'>Hapus</a></button>";
                    echo "</td>";
                    echo "</tr>";
               }
            } else {
                echo "<tr><td colspan='5'>Belum ada catatan.</td></tr>";
            }
            ?>
        </tbody>
    </table> <br>
    <a class= "btn btn-primary" href="pages/create.php">Tambah Catatan Baru</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<?php
$conn->close();
?>