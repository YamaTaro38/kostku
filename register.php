<?php 

    require_once 'core/init.php';
    require_once 'views/templates/header.php';
?>

<form action="" method="post">
    <div class="form-title">
        <h3>Login</h3>
    </div>
    <div class="form-control">
        <label for="nama">nama lengkap</label>
        <input type="text" name="nama" placeholder="Nama Lengkap" autocomplete="off">
    </div>
    <div class="form-control">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Alamat Email" autocomplete="off">
    </div>
    <div class="form-control">
        <label for="password">Kata Sandi</label>
        <input type="password" name="password" placeholder="Masukkan Kata Sandi" autocomplete="off">
    </div>

    <div class="form-control">
        <span class="tag-info">Belum punya akun? <a href="login.php">login</a></p>
    </div>

    <div class="form-control">
        <button type="submit" class="btn-primary" name="submit">register</button>
    </div>
</form>