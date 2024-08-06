<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Lead</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h2>Add Lead</h2>
    <form action="<?= base_url('leads') ?>" method="post">
        <?= csrf_field() ?>
        <div>
            <label for="customer_id">Customer:</label>
            <select id="customer_id" name="customer_id" required>
                <?php foreach ($customers as $customer): ?>
                    <option value="<?= esc($customer['id']) ?>"><?= esc($customer['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option value="New">New</option>
                <option value="Contacted">Contacted</option>
                <option value="Qualified">Qualified</option>
                <option value="Lost">Lost</option>
            </select>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div>
            <button type="submit">Add Lead</button>
        </div>
    </form>
     <a href="logout">Logout</a>
</body>
</html>