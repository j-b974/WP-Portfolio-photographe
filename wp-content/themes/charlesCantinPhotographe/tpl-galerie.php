<?php /* Template Name: Galerie */ ?>


<?php get_header() ?>

<h1 id="titreTheme" class="titreCategorie">Catégorie : <span>Tous les thémes</span></h1>
    <main class="mainContainer">

        <section class="mainCategorie">
            <nav>
                <ul class="lstTheme">
                    <li><a href="#" themeId ="1">Mariage</a></li>
                    <li><a href="#" themeId ="2">Grossesse</a></li>
                    <li><a href="#" themeId ="3">BéBé</a></li>
                    <li><a href="#" themeId ="4">Famille</a></li>
                    <li><a href="#" themeId ="5">Bapteme</a></li>
                    <li><a href="#" themeId ="6">Couple</a></li>
                    <li><a href="#" themeId ="7">Portrait</a></li>
                    <li><a href="#" themeId ="8">Tous les thémes</a></li>
                </ul>
            </nav>
            <div class="container">
                  <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper" id="swiperLoader">
                        <!-- <div class="swiper-slide">
                            <img src="./img/1.webp" />
                        </div> -->
                    </div>
                    <!-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> -->
                </div>
            </div>	
        </section>
    </main>
    <ul class="lstLinkSocial">
        <li class="facebook"><a href="#"><span><i class="fa-brands fa-facebook"></i></span></a></li>
        <li class="twitter"><a href="#"><span><i class="fa-brands fa-twitter"></i></span></a></li>
        <li class="tiktok"><a href="#"><span><i class="fa-brands fa-tiktok"></i></span></a></li>
        <li class="linkedin"><a href="#"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
    </ul>


<?php get_footer() ?>