<!-- app/Views/customers/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Customer</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h2>Edit Customer</h2>
    <form action="<?= base_url('customers/update/' . $customer['id']) ?>" method="post">
        <?= csrf_field() ?>
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?= esc($customer['name']) ?>" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= esc($customer['email']) ?>" required>
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="<?= esc($customer['phone']) ?>" required>
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?= esc($customer['address']) ?>" required>
        </div>
        <div>
            <button type="submit">Update Customer</button>
        </div>
    </form>
</body>
</html>
