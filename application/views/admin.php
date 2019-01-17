<?php if($this->session->userdata('status') !== 'login'): redirect(base_url()); endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    <nav>
        <a href="<?= base_url('admin') ?>">Dashboard</a>
        <a href="<?= base_url('input_data') ?>">Input Data Diri</a>
        <a href="<?= base_url('logout') ?>">Logout</a>
    </nav>
    <h1 class='text-center'>Selamat Datang Calon Siswa Baru</h1>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>