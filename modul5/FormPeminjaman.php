<?php
require "Koneksi.php";
require "Model.php";

if (isset($_POST['submit'])) {
    $data = array(
        "id_member" => "'" . $_POST['id_member'] . "'",
        "id_buku" => "'" . $_POST['id_buku'] . "'",
        "tgl_pinjam" => "'" . $_POST['tgl_pinjam'] . "'",
        "tgl_kembali" => "'" . $_POST['tgl_kembali'] . "'"
    );
    insert($data, 'peminjaman');
    header('location:Peminjaman.php');
}

$id = isset($_GET['id_peminjaman']) ? $_GET['id_peminjaman'] : '';
$data = selectdatabyid("peminjaman", $id, "id_peminjaman");

if (isset($_POST['edit'])) {
    $data = array(
        "id_member" => "'" . $_POST['id_member'] . "'",
        "id_buku" => "'" . $_POST['id_buku'] . "'",
        "tgl_pinjam" => "'" . $_POST['tgl_pinjam'] . "'",
        "tgl_kembali" => "'" . $_POST['tgl_kembali'] . "'"
    );
    update($data, 'peminjaman', $id, "id_peminjaman");
    header("location:Peminjaman.php");
}

if (isset($_POST['kembali'])) {
    header("location:Peminjaman.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Form Peminjaman</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="background-color: #f9d0d8;">
    <h1 style="text-align: center; color: #d49db1;" class="mt-2">Tambah Peminjaman</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 mx-auto">
                <form method="POST">
                    <div class="mb-3 mt-3">
                        <label class="form-label">ID Member</label>
                        <input type="text" name="id_member" placeholder="Masukkan ID Member" required class="form-control col-form-label-sm">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ID Buku</label>
                        <input type="text" name="id_buku" placeholder="Masukkan ID Buku" required class="form-control col-form-label-sm">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Peminjaman</label>
                        <input type="datetime-local" name="tgl_pinjam" placeholder="Masukkan tanggal peminjaman" required class="form-control col-form-label-sm">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Pengembalian</label>
                        <input type="date" name="tgl_kembali" placeholder="Masukkan tanggal pengembalian" required class="form-control col-form-label-sm">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" onclick="return confirm('Tambah data?')">Submit</button>
                    <button type="submit" value="ignore" formnovalidate class="btn btn-primary" name="kembali">Kembali</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
