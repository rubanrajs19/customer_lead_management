
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customers</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h2>Customers</h2>
    <!-- <form method="get" action="customers">
    <input type="text" name="search" placeholder="Search customers" value="">
    <button type="submit">Search</button>
    </form> -->
    <a href="<?= base_url('customers/create') ?>">Add Customer</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= esc($customer['name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                    <td><?= esc($customer['address']) ?></td>
                    <td>
                        <a href="<?= base_url('customers/edit/' . $customer['id']) ?>">Edit</a>
                        <a href="<?= base_url('customers/delete/' . $customer['id']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
     <a href="dashboard">dashboard</a>
     <a href="logout">Logout</a>
</body>
</html>
