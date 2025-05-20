<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh; background-color: #fff3f7;">
    <div class="card p-4 shadow" style="width: 400px; border-radius: 20px; background-color: #ffeef5;">
        <h3 class="text-center mb-4" style="color: #d74f79;">Login Admin 💻</h3>

        <?php if(session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form method="post" action="/login/process">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required />
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required />
            </div>
            <button type="submit" class="btn w-100" style="background-color: #f78e9e; color: white; border-radius: 15px;">
                ✨ LOGIN ✨
            </button>
        </form>
    </div>
</body>
</html>
