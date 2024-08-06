
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h2>Login</h2>
    <?php if (session()->get('error')): ?>
        <div class="alert alert-danger"><?= session()->get('error') ?></div>
    <?php endif; ?>
    <form action="<?= base_url('login') ?>" method="post">
        <?= csrf_field() ?>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
    <a href="register">Register Here</a>
</body>
</html>
