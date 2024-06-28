<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Admin Panel</h1>

    <?php if (empty($data)): ?>
        <div class="alert alert-warning" role="alert">
            No data available.
        </div>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                <tr>
                    <?php foreach ($data[0] as $header): ?>
                        <th><?php echo ($header); ?></th>
                    <?php endforeach; ?>
                </tr>
                </thead>
                <tbody>
                <?php for ($i = 1; $i < count($data); $i++): ?>
                    <tr>
                        <?php foreach ($data[$i] as $cell): ?>
                            <td><?php echo ($cell); ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
