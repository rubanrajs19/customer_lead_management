<!-- app/Views/customers/create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Customer</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h2>Add Customer</h2>
    <form action="<?= base_url('customers') ?>" method="post">
        <?= csrf_field() ?>
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div>
            <button type="submit">Add Customer</button>
        </div>
    </form>
    <a href="dashboard">dashboard</a>
     <a href="logout">Logout</a>
</body>
</html>
