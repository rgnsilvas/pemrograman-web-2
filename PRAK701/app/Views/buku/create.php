<?= view('templates/header') ?>

<h2 class="mb-4">➕ Tambah Buku Baru</h2>

<?php if (session()->getFlashdata('errors')): ?>
    <div class="alert alert-warning border-start border-5 border-pink shadow-sm p-3 mb-4" style="background-color: #fff0f5;">
        <strong style="color:#d74f79;">Ups! Ada yang perlu kamu perbaiki:</strong>
        <ul class="mb-0 mt-2">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li style="color: #6c2b3b;"><?= esc($error) ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<form method="post" action="/buku/store">
    <?= csrf_field() ?>
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" value="<?= old('judul') ?>" required>
    </div>
    <div class="mb-3">
        <label>Penulis</label>
        <input type="text" name="penulis" class="form-control" value="<?= old('penulis') ?>" required>
    </div>
    <div class="mb-3">
        <label>Penerbit</label>
        <input type="text" name="penerbit" class="form-control" value="<?= old('penerbit') ?>" required>
    </div>
    <div class="mb-3">
        <label>Tahun Terbit</label>
        <input type="number" name="tahun_terbit" class="form-control" value="<?= old('tahun_terbit') ?>" required>
    </div>
    <button type="submit" class="btn" style="background-color: #f78e9e; color: white;">✨ Simpan Buku ✨</button>
</form>

<?= view('templates/footer') ?>
