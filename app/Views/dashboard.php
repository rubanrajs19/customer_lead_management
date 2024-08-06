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
                <div class="list-group">
            <a href="#customerSubMenu" class="list-group-item list-group-item-action" data-toggle="collapse">Customer Management</a>
            <div id="customerSubMenu" class="collapse">
                <a href="customers" class="list-group-item list-group-item-action ml-3">View Customers</a>
                <a href="customers/create" class="list-group-item list-group-item-action ml-3">Add Customer</a>
            </div>

            <a href="#leadSubMenu" class="list-group-item list-group-item-action" data-toggle="collapse">Lead Management</a>
            <div id="leadSubMenu" class="collapse">
                <a href="leads" class="list-group-item list-group-item-action ml-3">View Leads</a>
                <a href="leads/create" class="list-group-item list-group-item-action ml-3">Add Lead</a>
            </div>
                </div>
            </div>
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
     </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>