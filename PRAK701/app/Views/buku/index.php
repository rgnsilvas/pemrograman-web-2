<?= view('templates/header') ?>

<h2 class="mb-4">📚 Daftar Buku</h2>
<a href="/buku/create" class="btn btn-success mb-3">➕ Tambah Buku</a>

<table class="table table-bordered rounded shadow-sm">
    <thead class="table-light">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>OPSI 🌸</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($buku as $b): ?>
        <tr>
            <td><?= $b['judul'] ?></td>
            <td><?= $b['penulis'] ?></td>
            <td><?= $b['penerbit'] ?></td>
            <td><?= $b['tahun_terbit'] ?></td>
            <td>
                <a href="/buku/edit/<?= $b['id'] ?>" class="btn btn-warning btn-sm">Edit</a>

                <form method="post" action="/buku/delete/<?= $b['id'] ?>" style="display: inline-block;">
                    <?= csrf_field() ?>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= view('templates/footer') ?>
