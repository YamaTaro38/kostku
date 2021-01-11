<?php 

    require_once 'core/init.php';
    require_once 'views/templates/header.php';
?>

<form action="" method="post">
    <div class="form-title">
        <h3>Login</h3>
    </div>
    <div class="form-control">
        <label for="email">email</label>
        <input type="email" name="email" placeholder="Masukkan Email">
    </div>
    <div class="form-control">
        <label for="password">kata sandi</label>
        <input type="password" name="password" placeholder="Masukkan Kata Sandi">
    </div>

    <div class="form-control">
        <span class="tag-info">Sudah punya akun? <a href="register.php">register</a></p>
    </div>

    <div class="form-control">
        <button type="submit" class="btn-primary" name="submit">login</button>
    </div>
</form>