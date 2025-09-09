<?php
require_once __DIR__ . "/repositories/UserRepository.php";
$repo = new UserRepository();

$user = null;
$edit = false;

if (isset($_GET['id'])) {
    $user = $repo->findById($_GET['id']);
    $edit = true;
}

// Handle form submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';

    if (!empty($_POST['id'])) {
        $repo->update($_POST['id'], $name, $email, $address);
    } else {
        $repo->create($name, $email, $address);
    }

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $edit ? 'Edit' : 'Create' ?> User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h1 class="mb-4"><?= $edit ? 'Edit' : 'Create' ?> User</h1>

        <form method="POST" class="bg-white p-4 rounded shadow-sm">
            <?php if ($edit): ?>
                <input type="hidden" name="id" value="<?= $user->id ?>">
            <?php endif; ?>

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($user->name ?? '') ?>"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control"
                    value="<?= htmlspecialchars($user->email ?? '') ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Address</label>
                <textarea name="address" class="form-control" rows="3"
                    required><?= htmlspecialchars($user->address ?? '') ?></textarea>
            </div>

            <button type="submit" class="btn btn-success"><?= $edit ? 'Update' : 'Create' ?></button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

</body>

</html>