<div class="container p-4 bg-light rounded shadow-sm" style="background-color: #ffeef5;">
  <h2 class="text-center fw-bold mb-4" style="color: #d74f79;">꩜ my PROFILE ᯓ✦</h2>

  <div class="row align-items-center">
    <div class="col-md-7">
      <h3 class="mb-3">Halo, nama saya <strong style="color: #b44c6f;"><?= $user['nama'] ?></strong></h3>
      <p>you can call me <strong><?= $user['panggilan'] ?></strong> for short ^__^</p>
      <ul class="list-group">
        <li class="list-group-item">NIM: <?= $user['nim'] ?></li>
        <li class="list-group-item">Program Studi: <?= $user['prodi'] ?></li>
        <li class="list-group-item">Hobi: <?= $user['hobi'] ?></li>
        <li class="list-group-item">Skill: <?= $user['skill'] ?></li>
        <li class="list-group-item">
          My current fav songs:
          <ul class="mt-2">
            <?php foreach ($user['laguFavorit'] as $lagu): ?>
              <li><?= $lagu ?></li>
            <?php endforeach; ?>
          </ul>
        </li>
      </ul>
    </div>

    <div class="col-md-5 text-center">
      <img src="/<?= $user['foto'] ?>" class="img-fluid rounded shadow" style="max-width: 300px;" alt="Foto">
    </div>
  </div>
</div>
