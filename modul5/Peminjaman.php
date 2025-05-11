<?php
require "Koneksi.php";
require "Model.php";

if (!empty($_GET['id_peminjaman'])) {
    $id_peminjaman = $_GET['id_peminjaman'];
    deletedata("peminjaman", $id_peminjaman, "id_peminjaman");
    header('location:Peminjaman.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Peminjaman</title>
    <style>
        body { background-color: #f9d0d8; font-family: Arial, sans-serif; }
        h1 { text-align: center; color: #d49db1; margin-top: 50px; }
        table { margin-top: 30px; width: 80%; margin-left: auto; margin-right: auto; border: 1px solid #d49db1; background-color: #f5c6d5; }
        th, td { padding: 10px; text-align: center; border: 1px solid #d49db1; }
        .btn-primary { background-color: #d49db1; border-color: #d49db1; }
        .btn-primary:hover { background-color: #e5a6b6; border-color: #e5a6b6; }
    </style>
</head>
<body>
    <h1>Daftar Peminjaman</h1>
    <div class="table-responsive mx-4">
        <table>
            <tr>
                <td><a href="index.php"><button type="button" class="btn btn-primary">Kembali</button></a></td>
                <td colspan=6><a href="FormPeminjaman.php"><button type="button" class="btn btn-primary float-end btn-sm">Tambah Data Baru</button></a></td>
            </tr>
            <tr>
                <th>ID Peminjaman</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>ID Member</th>
                <th>ID Buku</th>
                <th colspan="2">Opsi</th>
            </tr>
            <?php
            $result = selectalldata("peminjaman");
            while ($data = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $data['id_peminjaman'] ?></td>
                    <td><?php echo $data['tgl_pinjam'] ?></td>
                    <td><?php echo $data['tgl_kembali'] ?></td>
                    <td><?php echo $data['id_member'] ?></td>
                    <td><?php echo $data['id_buku'] ?></td>
                    <td style="text-align: center;">
                        <a href="FormPeminjaman.php?id_peminjaman=<?php echo $data['id_peminjaman']; ?>">
                            <button class="btn btn-success btn-sm">Edit</button>
                        </a>
                    </td>
                    <td style="text-align: center;">
                        <a href="Peminjaman.php?id_peminjaman=<?php echo $data['id_peminjaman']; ?>" onclick="return confirm('Hapus data?')">
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
