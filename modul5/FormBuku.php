<?php
require "Koneksi.php";
require "Model.php";

if (isset($_POST['submit'])) {
    $data = array(
        "id_buku" => "NULL",
        "judul_buku" => "'" . $_POST['judul_buku'] . "'",
        "penulis" => "'" . $_POST['penulis'] . "'",
        "penerbit" => "'" . $_POST['penerbit'] . "'",
        "tahun_terbit" => "'" . $_POST['tahun_terbit'] . "'"
    );
    insert($data, 'buku');
    header('location:Buku.php');
}

$id = isset($_GET['id_buku']) ? $_GET['id_buku'] : '';
$data = selectdatabyid("buku", $id, "id_buku");

if (isset($_POST['edit'])) {
    $data = array(
        "id_buku" => "'" . $_POST['id_buku'] . "'",
        "judul_buku" => "'" . $_POST['judul_buku'] . "'",
        "penulis" => "'" . $_POST['penulis'] . "'",
        "penerbit" => "'" . $_POST['penerbit'] . "'",
        "tahun_terbit" => "'" . $_POST['tahun_terbit'] . "'"
    );
    update($data, 'buku', $id, "id_buku");
    header("location:Buku.php");
}

if (isset($_POST['kembali'])) {
    header("location:Buku.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Form Buku</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="background-color: #f9d0d8;">
    <h1 style="text-align: center; color: #d49db1;" class="mt-2">Tambah Buku</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 mx-auto">
                <form method="POST">
                    <div class="mb-3 mt-3">
                        <label class="form-label">ID</label>
                        <input type="text" name="id_buku" value="<?php echo isset($data['id_buku']) ? $data['id_buku'] : ''; ?>" readonly class="form-control col-form-label-sm" placeholder="ID otomatis">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul_buku" value="<?php echo isset($data['judul_buku']) ? $data['judul_buku'] : ''; ?>" required class="form-control col-form-label-sm" placeholder="Masukkan judul buku">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penulis</label>
                        <input type="text" name="penulis" value="<?php echo isset($data['penulis']) ? $data['penulis'] : ''; ?>" required class="form-control col-form-label-sm" placeholder="Masukkan penulis">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penerbit</label>
                        <input type="text" name="penerbit" value="<?php echo isset($data['penerbit']) ? $data['penerbit'] : ''; ?>" required class="form-control col-form-label-sm" placeholder="Masukkan penerbit">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun Terbit</label>
                        <input type="number" name="tahun_terbit" value="<?php echo isset($data['tahun_terbit']) ? $data['tahun_terbit'] : ''; ?>" required class="form-control col-form-label-sm" placeholder="Masukkan tahun terbit" min="1000" max="2026">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" onclick="return confirm('Tambah data?')">Submit</button>
                    <button type="submit" value="ignore" formnovalidate class="btn btn-primary" name="kembali">Kembali</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
