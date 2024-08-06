<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <h2>Leads Per Status</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($leads_per_status as $row): ?>
                            <tr>
                                <td><?= $row['status']; ?></td>
                                <td><?= $row['count']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- Add other statistics as needed -->
        </div>
        <a href="logout">Logout</a>
    </div>
</body>
</html>