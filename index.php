<?php
require_once "repositories/UserRepository.php";

$userRepo = new UserRepository();
$users = $userRepo->getAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App with Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="vh-100 bg-secondary bg-opacity-10 container-fluid d-flex align-items-center justify-content-center">
        <div class="card" style="width: 800px;">
            <div class="card-body table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= htmlspecialchars($user->id); ?></td>
                                <td><?= htmlspecialchars($user->name); ?></td>
                                <td><?= htmlspecialchars($user->email); ?></td>
                                <td><?= htmlspecialchars($user->address); ?></td>
                                <td>
                                    <button type="button" class="btn btn-info">
                                        <i class="bi bi-eye"></i> View</button>
                                    <button type="button" class="btn btn-primary">
                                        <i class="bi bi-pen"></i> Update</button>
                                    <button type="button" class="btn btn-danger">
                                        <i class="bi bi-trash"></i> Delete</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>