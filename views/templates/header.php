<?php 

    $page_title = 'Home';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL ?>/views/assets/css/style.css">
    <title><?= $page_title ?></title>
</head>
<body>
    
    <section id="header" class="wrapper">
        <nav class="container flex-row justify-between align-center">
            <div id="title-web"><h3>kostku</h3></div>
            <form action="" method="get" id="search">
                <div class="form-control">
                    <input type="text" name="search" placeholder="Cari Kecamatan" autocomplete="off">
                </div>
            </form>
            <!-- <form action="" method="get">
                <div class="form-control">
                    <label for="email">email</label>
                    <input type="email" name="email" placeholder="Masukkan Email">
                </div>
                <div class="form-control">
                    <label for="password">password</label>
                    <input type="password" name="password" placeholder="Masukkan Password">
                </div>
                <div class="tag-info">belum punya akun? <a href="">daftar</a></div>
                <button type="submit" name="submit"></button>
            </form> -->
            <ul id="menu">
                <li><a href="index.php">beranda</a></li>
                <li><a href="register.php">register</a></li>
                <li><a href="login.php" class="btn-primary">login</a></li>
            </ul>           
        </nav>
    </section>