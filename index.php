<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon-32x32.png" type="image/x-icon" />

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <!-- Include Bootstrap MDB Swiper CSS -->
    <link rel="stylesheet" href="path/to/bootstrap-mdb-swiper.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <title>Queen Fruit Group</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="assets/img/android-chrome-512x512.png" alt="" class="nav__logo-img" />
                Queen Fruit Group
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link">Home</a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>

                    <li class="nav__item">
                        <a href="#trick" class="nav__link">Product</a>
                    </li>

                    <li class="nav__item">
                        <a href="#new" class="nav__link">New</a>
                    </li>

                    <a href="#" class="button button--ghost">Support</a>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="bx bx-x"></i>
                </div>

                <img src="assets/img/nav-img.png" alt="" class="nav__img" />
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="bx bx-grid-alt"></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home container" id="home">
            <div class="swiper home-swiper">
                <div class="swiper-wrapper">
                    <!-- HOME SLIDER 1 -->
                    <section>
                        <div class="home__content grid">
                            <div class="home__group">
                                <img src="assets/img/home.jpg" alt="" class="home__img" />
                            </div>

                            <div class="home__data">
                                <h3 class="home__subtitle"></h3>
                                <h1 class="home__title"></h1>
                                <p class="home__description text-light"></p>

                                <div class="home__buttons">
                                    <a href="https://wa.me/085642390822" class="button">Hubungi Sekarang</a>
                                </div>
                            </div>
                            <?php include "get_home.php"; ?>
                        </div>
                    </section>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!--==================== CATEGORY ====================-->
        <section class="section category">
            <h2 class="section__title">
                Best Seller
            </h2>

            <div class="category__container container grid">
                <?php include "get_bestseller.php"; ?>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="section about" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title about__title"></h2>
                    <p class="about__description text-light"></p>
                </div>
                <img src="assets/img/about.png" alt="" class="about__img" />
                <?php include "get_about.php"; ?>
            </div>
        </section>

        <!--==================== Produk ====================-->
        <section class="section trick" id="trick">
            <h2 class="section__title">Produk Buah Kami</h2>
            <div class="trick__container container grid">
                <?php include "get_produk.php"; ?>
            </div>
        </section>

        <!--==================== DISCOUNT ====================-->
        <section class="section discount">
            <div class="row text-center">
                <h2 class="section__title">Testimoni</h2>
                <div class="col-md-12">
                    <?php include "get_testimoni.php"; ?>
                    <!-- Carousel wrapper -->
                    <div id="carouselBasicExample" class="carousel slide carousel-dark" data-mdb-ride="carousel">
                        <!-- Inner -->
                        <div class="carousel-inner" id="carouselInner">
                            <!-- Testimoni akan ditambahkan oleh JavaScript -->
                        </div>
                        <!-- Inner -->

                        <!-- Controls -->
                        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
                            data-mdb-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
                            data-mdb-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- Carousel wrapper -->
                </div>
            </div>
        </section>


        <!--==================== NEW ARRIVALS ====================-->
        <section class="section new" id="new">
            <h2 class="section__title">New Arrivals</h2>
            <div class="new__container container">
                <div class="swiper new-swiper">
                    <div class="swiper-wrapper">
                        <?php include "get_newarrival.php"; ?>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== OUR NEWSLETTER ====================-->
        <section class="section newsletter">
            <div class="row">
                <h2 class=" section__title">Kontak Kami </h2>
                <div class="col-md-6 mx-auto">
                    <div class="card bg-gradient-dark text-white">
                        <div class="card-body">
                            <form name="contactFormEmail" method="post" action="send_email.php">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-outline">
                                            <label class="form-label" for="userName">Nama <em>*</em></label>
                                            <input type="text" id="userName" name="userName" class="form-control"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="form-outline">
                                            <label class="form-label" for="userEmail">Email <em>*</em></label>
                                            <input type="email" id="userEmail" name="userEmail" class="form-control"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="form-outline">
                                            <label class="form-label" for="userPhone">Np HP <em>*</em></label>
                                            <input type="text" id="userPhone" name="userPhone" class="form-control"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="form-outline">
                                            <label class="form-label" for="userMessage">Pesan <em>*</em></label>
                                            <textarea id="userMessage" name="userMessage" class="form-control"
                                                required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <input type="submit" name="send" value="Submit" class="btn btn-primary" />
                                        <?php if (!empty($message)) {?>
                                        <div class='success'>
                                            <strong><?php echo $message; ?> </strong>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- <section class="section newsletter">
            <div class="newsletter__container container">
                <h2 class="section__title">Hubungi Kami</h2>
                <p class="newsletter__description text-light">
                    Ingin bertanya lebih detail silahkan kirim ke email kami
                </p>

                <form action="" method="POST" class="newsletter__form">
                    <input type="email" name="email" placeholder="Enter your email" class="newsletter__input"
                        required />
                    <textarea name="message" placeholder="Enter your message" class="newsletter__input"
                        required></textarea>
                    <button type="submit" name="submit" class="button">Kirim</button>
                </form>
            </div>
        </section> -->
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <img src="assets/img/android-chrome-512x512.png" alt="" class="footer__logo-img" />
                    Toko Buah Boyolali
                </a>

                <p class="footer__description text-light">
                    Terimakasih Atas Kunjungannya.
                </p>

                <div class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class="bx bxl-instagram-alt"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class="bx bxl-twitter"></i>
                    </a>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">About</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">About Us</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Features</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">News</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Our Services</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Pricing</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Discounts</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Shipping mode</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Our Company</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Blog</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">About us</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Our mision</a>
                    </li>
                </ul>
            </div>
        </div>

        <span class="footer__copy text-light">&#169; Bedimcode. All rigths reserved</span>

        <!-- <img src="assets/img/footer3-img.png" alt="" class="footer__img-one" />
        <img src="assets/img/footer3-img.png" alt="" class="footer__img-two" /> -->
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="bx bx-up-arrow-alt scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!-- =============== SWIPER JS =============== -->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
</body>

</html>