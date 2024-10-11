<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Catatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="p-5" style="background-image: url('../img/bg.jpg');">
    <h2>Tambah Catatan Baru</h2>
    <form action="../actions/store.php" method="POST">
        <label for="judul">Judul:</label>
        <input class="form-control" type="text" id="judul" name="judul" required><br><br>
        <label for="isi">Isi Catatan:</label><br>
        <textarea class="form-control" id="isi" name="isi" rows="5" required></textarea><br><br>
        <a href="../index.php" class="btn btn-secondary">Kembali</a>
        <button class="btn btn-primary" type="submit">Simpan</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>