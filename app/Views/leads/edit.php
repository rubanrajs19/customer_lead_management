<!-- app/Views/leads/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Lead</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h2>Edit Lead</h2>
    <form action="<?= base_url('leads/update/' . $lead['id']) ?>" method="post">
        <?= csrf_field() ?>
        <div>
            <label for="customer_id">Customer:</label>
            <select id="customer_id" name="customer_id" required>
                <?php foreach ($customers as $customer): ?>
                    <option value="<?= esc($customer['id']) ?>" <?= $lead['customer_id'] == $customer['id'] ? 'selected' : '' ?>><?= esc($customer['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option value="New" <?= $lead['status'] == 'New' ? 'selected' : '' ?>>New</option>
                <option value="Contacted" <?= $lead['status'] == 'Contacted' ? 'selected' : '' ?>>Contacted</option>
                <option value="Qualified" <?= $lead['status'] == 'Qualified' ? 'selected' : '' ?>>Qualified</option>
                <option value="Lost" <?= $lead['status'] == 'Lost' ? 'selected' : '' ?>>Lost</option>
            </select>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required><?= esc($lead['description']) ?></textarea>
        </div>
        <div>
            <button type="submit">Update Lead</button>
        </div>
    </form>
     <a href="logout">Logout</a>
</body>
</html>
