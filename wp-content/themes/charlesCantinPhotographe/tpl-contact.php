<?php /*Template Name: Contact */?>
<?php get_header() ?>

<main>
        <section class="containerContact">
            <div>
                <form action="#" method="post" class="formulair">
                    <h2>Pour me contacter </h2>
                    <div class="formBox">
                        <i class="fa-regular fa-user"></i>
                        <input type="text" name="username" id="" required>
                        <label for="">Nom</label>
                    </div>
                    <div class="formBox">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="text" name="mail" id="" required>
                        <label for="">Adress email</label>
                    </div>
                    <div class="formBox2">
                       <textarea name="message" id="message" cols="45" rows="20" placeholder="Votre message...."></textarea>
                    </div>
                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </section>
    </main>
    <ul class="lstLinkSocial">
        <li class="facebook"><a href="#"><span><i class="fa-brands fa-facebook"></i></span></a></li>
        <li class="twitter"><a href="#"><span><i class="fa-brands fa-twitter"></i></span></a></li>
        <li class="tiktok" ><a href="#"><span><i class="fa-brands fa-tiktok"></i></span></a></li>
        <li class="linkedin"><a href="#"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
    </ul>

<?php get_footer(); ?>