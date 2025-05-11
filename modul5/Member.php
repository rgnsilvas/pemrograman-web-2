<?php
require "Koneksi.php";
require "Model.php";

if (!empty($_GET['id_member'])) {
    $id_member = $_GET['id_member'];
    deletedata("member", $id_member, "id_member");
    header('location:Member.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Member</title>
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
    <h1>Daftar Member</h1>
    <div class="table-responsive mx-4">
        <table>
            <tr>
                <td><a href="index.php"><button type="button" class="btn btn-primary">Kembali</button></a></td>
                <td colspan=6><a href="FormMember.php"><button type="button" class="btn btn-primary float-end btn-sm">Tambah Data Baru</button></a></td>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Alamat</th>
                <th>Tanggal Mendaftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th colspan="2">Opsi</th>
            </tr>
            <?php
            $result = selectalldata("member");
            while ($data = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $data['id_member'] ?></td>
                    <td><?php echo $data['nama_member'] ?></td>
                    <td><?php echo $data['nomor_member'] ?></td>
                    <td><?php echo $data['alamat'] ?></td>
                    <td><?php echo $data['tgl_mendaftar'] ?></td>
                    <td><?php echo $data['tgl_terakhir_bayar'] ?></td>
                    <td style="text-align: center;">
                        <a href="FormMember.php?id_member=<?php echo $data['id_member']; ?>">
                            <button class="btn btn-success btn-sm">Edit</button>
                        </a>
                    </td>
                    <td style="text-align: center;">
                        <a href="Member.php?id_member=<?php echo $data['id_member']; ?>" onclick="return confirm('Hapus data?')">
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
