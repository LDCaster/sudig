<?= $this->extend('layout/template1'); ?>

<?= $this->section('content1'); ?>
<!-- isi content -->

<!-- home section -->
<section class="home" id="home">
    <div class="content fadeinLeft">
        <h3>Membuat Surat Lebih Cepat Dengan <span>Sudig</span></h3>
        <p>Buat surat sekali klik langsung jadi.
            Ada banyak jenis surat yang bisa kamu pakai secara gratis!

        </p>
        <a href="<?= base_url('login'); ?>" class="btn">Buat Sekarang</a>
    </div>
    <div class="image">
        <img src="<?= base_url(); ?>/assets/img/illustration/main.png" width="650" height="500" alt="">
    </div>
</section>
<!-- end home section -->

<!-- feature section -->

<section class="features fadeinRight" id="features">
    <h1 class="heading mb-3">FITUR TERBAIK</h1>
    <div class="box-container">
        <div class="box">
            <img src="<?= base_url(); ?>/assets/img/vektor/astronaut-1.jpg" width="250" height="200" alt="" class="mb-5">
            <h3>Desain UI yang Sederhana</h3>
            <p>Dengan desain yang sederhana dapat mempermudah dalam pembuatan surat.</p>
            <!-- <a href="#" class="btn">Read more</a> -->
        </div>
        <div class="box">
            <img src="<?= base_url(); ?>/assets/img/vektor/astronaut-2.jpg" width="250" height="200" alt="" class="mb-5">
            <h3>Animasi Lembut dan Halus</h3>
            <p>Untuk memberikan rasa yang nyaman kepada pengguna SUDIG.</p>
            <!-- <a href="#" class="btn">Read more</a> -->
        </div>
        <div class="box">
            <img src="<?= base_url(); ?>/assets/img/vektor/astronaut-3.jpg" width="250" height="200" alt="" class="mb-5">
            <h3>Ramah Interaksi</h3>
            <p>Mempunyai interaksi yang mudah digunakan bagi pengguna.</p>
            <!-- <a href="#" class="btn">Read more</a> -->
        </div>
    </div>
</section>

<!-- end feature section -->

<!-- faq section starts  -->
<section class="faq-section fadeinLeft" id="faq-section">
    <!-- <div class="container"> -->
    <!-- <div class="row justify-content-center"> -->
    <h1 class="heading"> F.A.Q </h1>
    <!-- </div> -->
    <div class="row mt-3">
        <div class="col-lg-6">
            <div class="faq-image">
                <img src="<?= base_url(); ?>/assets/img/illustration/faq.png" alt="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="accordion" id="accordionExample">
                <div class="card border-0">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Apa sih Sudig itu?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body" style="font-size: 13px;">
                            Sudig adalah situs generator surat digital yang bisa dipakai.
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Apakah data saya aman?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body" style="font-size: 13px;">
                            Kemanan data telah dan akan selalu menjadi prioritas kami.
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Apakah Sudig gratis?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body" style="font-size: 13px;">
                            Ya! SuratPlus 100% gratis!
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Apakah boleh request template surat?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body" style="font-size: 13px;">
                            Jika template surat yang kamu butuhkan belum tersedia di SuratPlus, kamu bisa request template baru kepada kami
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- faq section ends -->

<!-- newsletter  -->

<!-- <div class="newsletter fadeinRight">
    <h3>Subscribe For New Features</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus sed aliquam quibusdam neque magni magnam est laborum doloribus, facere dolores.</p>
    <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="Subscribe">
    </form>

</div> -->

<!-- review section starts  -->

<!-- <section class="review fadeinLeft" id="review">
    <h1 class="heading"> people's review </h1>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="images/pic1.png" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="comment">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus et, perspiciatis nisi tempore aspernatur accusantium sed distinctio facilis aperiam laborum autem earum repellat, commodi eum. Ullam cupiditate expedita officiis obcaecati?
                </div>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="images/pic2.png" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="comment">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus et, perspiciatis nisi tempore aspernatur accusantium sed distinctio facilis aperiam laborum autem earum repellat, commodi eum. Ullam cupiditate expedita officiis obcaecati?
                </div>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="images/pic3.png" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="comment">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus et, perspiciatis nisi tempore aspernatur accusantium sed distinctio facilis aperiam laborum autem earum repellat, commodi eum. Ullam cupiditate expedita officiis obcaecati?
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- review section ends -->


<!-- contact section starts  -->

<section class="contact" id="contact">
    <!-- <div class="container"> -->
    <h1 class="heading">Kontak</h1>
    <div class="row">
        <div class="col-lg-6">
            <div class="image">
                <img src="<?= base_url(); ?>/assets/img/illustration/contact.png" alt="">
            </div>
        </div>
        <div class="col-lg-6">
            <form action="" class="contact-form">
                <div class="inputBox">
                    <input type="text" required>
                    <label>name</label>
                </div>
                <div class="inputBox">
                    <input type="email" required>
                    <label>email</label>
                </div>
                <div class="inputBox">
                    <input type="number" required>
                    <label>phone</label>
                </div>
                <div class="inputBox">
                    <textarea required name="" id="" cols="30" rows="10"></textarea>
                    <label>message</label>
                </div>
                <input type="submit" class="btn" value="kirim pesan">
            </form>
        </div>
    </div>
    <!-- </div> -->
</section>

<!-- contact section edns -->

<!-- footer section starts  -->

<div class="footer">
    <div class="box-container">
        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet pariatur rerum consectetur architecto ad tempora blanditiis quo aliquid inventore a.</p>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#features">features</a>
            <a href="#faq-section">FAQ</a>
            <a href="#review">review</a>
            <a href="#">pricing</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">pinterest</a>
            <a href="#">twitter</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <div class="info">
                <i class="fas fa-phone"></i>
                <p> +62 853 8728 1078</p>
            </div>
            <div class="info">
                <i class="fas fa-envelope"></i>
                <p> abdulzaen13@gmail.com </p>
            </div>
            <div class="info">
                <i class="fas fa-map-marker-alt"></i>
                <p> Pelaihari, Kalimantan Selatan. 7014 </p>
            </div>
        </div>

    </div>

    <h1 class="credit" style="margin-bottom: -30px;"> Copyright &copy; SUDIG <a href=""><?= date('Y'); ?></a> </h1>

</div>

<!-- footer section ends -->




<?= $this->endsection(); ?>