<?php
if (isset($_POST['btnlogin'])) {
    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);

    if ($nama === "" || $email === "") {
        header("Location: error.php");
        exit;
    }

    date_default_timezone_set("Asia/Jakarta");
    $jam = date("H:i:s");
    $hari = date("l");
    $tanggal = date("d-m-Y");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Informasi Login</h4>
        </div>
        <div class="card-body">
            <p><strong>Nama:</strong> <?= htmlspecialchars($nama) ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
            <p><strong>Hari Login:</strong> <?= $hari ?></p>
            <p><strong>Tanggal Login:</strong> <?= $tanggal ?></p>
            <p><strong>Jam Login:</strong> <?= $jam ?></p>
        </div>
        <div class="card-footer text-end">
            <a href="index.php" class="btn btn-secondary">Logout</a>
        </div>
    </div>
</div>

</body>
</html>