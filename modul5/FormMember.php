<?php
require "Koneksi.php";
require "Model.php";

// Menambahkan data member
if (isset($_POST['submit'])) {
    $data = array(
        "id_member" => "'" . $_POST['id_member'] . "'",
        "nama_member" => "'" . $_POST['nama_member'] . "'",
        "nomor_member" => "'" . $_POST['nomor_member'] . "'",
        "alamat" => "'" . $_POST['alamat'] . "'",
        "tgl_mendaftar" => "CURRENT_TIMESTAMP",  // Menggunakan CURRENT_TIMESTAMP untuk tanggal saat ini
        "tgl_terakhir_bayar" => "'" . $_POST['tgl_terakhir_bayar'] . "'"
    );
    insert($data, 'member');
    header('location:Member.php');
}

// Mengambil data member berdasarkan id
$id = isset($_GET['id_member']) ? $_GET['id_member'] : '';
$data = selectdatabyid("member", $id, "id_member");

if (isset($_POST['edit'])) {
    $data = array(
        "id_member" => "'" . $_POST['id_member'] . "'",
        "nama_member" => "'" . $_POST['nama_member'] . "'",
        "nomor_member" => "'" . $_POST['nomor_member'] . "'",
        "alamat" => "'" . $_POST['alamat'] . "'",
        "tgl_terakhir_bayar" => "'" . $_POST['tgl_terakhir_bayar'] . "'"
    );
    update($data, 'member', $id, "id_member");
    header("location:Member.php");
}

if (isset($_POST['kembali'])) {
    header("location:Member.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Form Member</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="background-color: #f9d0d8;">
    <h1 style="text-align: center; color: #d49db1;" class="mt-2">Tambah Member</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 mx-auto">
                <form method="POST">
                    <div class="mb-3 mt-3">
                        <label class="form-label">ID</label>
                        <input type="text" name="id_member" value="<?php echo isset($data['id_member']) ? $data['id_member'] : ''; ?>" readonly class="form-control col-form-label-sm" placeholder="ID otomatis">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama_member" value="<?php echo isset($data['nama_member']) ? $data['nama_member'] : ''; ?>" required class="form-control col-form-label-sm" placeholder="Masukkan nama member">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nomor</label>
                        <input type="text" name="nomor_member" value="<?php echo isset($data['nomor_member']) ? $data['nomor_member'] : ''; ?>" required class="form-control col-form-label-sm" placeholder="Masukkan nomor member">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" value="<?php echo isset($data['alamat']) ? $data['alamat'] : ''; ?>" required class="form-control col-form-label-sm" placeholder="Masukkan alamat">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Mendaftar</label>
                        <input type="datetime-local" name="tgl_mendaftar" value="<?php echo isset($data['tgl_mendaftar']) ? $data['tgl_mendaftar'] : ''; ?>" required class="form-control col-form-label-sm" placeholder="Masukkan tanggal daftar">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Terakhir Bayar</label>
                        <input type="date" name="tgl_terakhir_bayar" value="<?php echo isset($data['tgl_terakhir_bayar']) ? $data['tgl_terakhir_bayar'] : ''; ?>" required class="form-control col-form-label-sm" placeholder="Masukkan tanggal terakhir bayar">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" onclick="return confirm('Tambah data?')">Submit</button>
                    <button type="submit" value="ignore" formnovalidate class="btn btn-primary" name="kembali">Kembali</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
