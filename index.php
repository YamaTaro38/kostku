<?php 

    require_once 'core/init.php';
    require_once 'views/templates/header.php';
?>

    <div id="banner" class="wrapper">
        <div class="flex-row align-center container">
            <div class="banner-desc">
                <h1>susah cari tempat kost?</h1>
                <p>dengan kostku anda akan dengan mudah mencari tempat kost di daerah kudus, sesuai dengan keinginan anda.</p>
            </div>
        </div>
    </div>

    <section class="wrapper">
        <div class="container flex-column">
            <div class="section-title">
                <h1>rekomendasi</h1>
                <!-- <p>beberapa tempat yang kami rekomendasikan</p> -->
            </div>
            <div class="section-content flex-row">
                <div class="card">
                    <div class="card-img">
                        <img src="./" alt="">
                    </div>
                    <ul class="card-desc">
                        <li class="card-title"><h4>Kost Rahma</h4></li>
                        <li class="card-detail">
                            <span>Kecamatan Jati</span><br>
                            <span>Rp. 250.000/bln</span>    
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php 
    require_once 'views/templates/footer.php';
?>