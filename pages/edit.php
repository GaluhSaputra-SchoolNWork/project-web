<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pertemuan-3-master/koneksi.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM notes WHERE id = $id");
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Catatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="p-5" style="background-image: url('../img/bg.jpg');">
    <h2>Edit Catatan</h2>
    <form action="../actions/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="judul">Judul:</label>
        <input class="form-control" type="text" id="judul" name="judul" value="<?php echo
                                                            $row['judul']; ?>" required><br><br>
        <label for="isi">Isi Catatan:</label><br>
        <textarea class="form-control" id="isi" name="isi" rows="5" required><?php echo
                                                        $row['isi']; ?></textarea><br><br>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
</body>
</html>