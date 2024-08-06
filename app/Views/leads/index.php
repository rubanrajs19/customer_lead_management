<!-- app/Views/leads/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leads</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h2>Leads</h2>
    <a href="<?= base_url('leads/create') ?>">Add Lead</a>
    <table>
        <thead>
            <tr>
                <th>Customer</th>
                <th>Status</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($leads as $lead): ?>
                <tr>
                    <td><?= esc($lead['customer_id']) ?></td>
                    <td><?= esc($lead['status']) ?></td>
                    <td><?= esc($lead['description']) ?></td>
                    <td>
                        <a href="<?= base_url('leads/edit/' . $lead['id']) ?>">Edit</a>
                        <a href="<?= base_url('leads/delete/' . $lead['id']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
     <a href="logout">Logout</a>
</body>
</html>
