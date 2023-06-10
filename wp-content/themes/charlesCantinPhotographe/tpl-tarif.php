<?php /*Template Name: tarif */ ?>


<?php get_header() ?>

<div class="contenair">

<main class="TarifContenaire">
    <input type="radio" name="slader" id="id1">
    <input type="radio" name="slader" id="id2">
    <input type="radio" name="slader" id="id3" checked>
    <input type="radio" name="slader" id="id4">
    <input type="radio" name="slader" id="id5">
    <input type="radio" name="slader" id="id6">
    <div class="cardBox">
        <label for="id1" id="slid1" title="Photo de Grossesse">
            <div class="card">
                <div class="logoCard">
                    <i class="fa-solid fa-person-pregnant"></i>
                </div>
                <div>
                    <h3>Il était une fois</h3>
                </div>
                
                <p class="nbPerson">1 personne</p>
                <p class="cardPrix">prix : <span>160€</span></p>
                <div class="cardDescrip">
                    <p>Photo de grossesse </p>
                    <p>À votre domicile, en extérieur ou en studio</p>
                </div>
                
            </div>
        </label>
        <label for="id2" id="slid2" title="Photo BéBé">
            <div class="card">
                <div class="logoCard">
                    <i class="fa-solid fa-baby-carriage"></i>
                </div>
                <div>
                    <h3>Mon bébé</h3>
                </div>
                <p class="nbPerson" >1 personne</p>
                <p class="cardPrix">prix : <span>100€</span></p>
                <div class="cardDescrip">
                    <p>Photo d'enfant jusqu'à 3 ans</p>
                    <p>photo à domicile</p>
                </div>
            </div>

        </label>
        <label for="id3" id="slid3" title="événement sur mesure">
            <div class="card">
                <div class="logoCard">
                    <i class="fa-solid fa-church"></i>
                </div>
                <div>
                    <h3>J'immortalise l'événement</h3>
                </div>
                    <p class="nbPerson">sur mesure</p>
                    <p class="cardPrix"><span>sur devis</span></p>
                <div class="cardDescrip">
                    <p>Prestation de mariage ou baptême sur devis</p>
                </div>
            </div>

        </label>
        <label for="id4" id="slid4" title="photo en famille">
            <div class="card">
                <div class="logoCard">
                    <i class="fa-solid fa-people-roof"></i>
                </div>
                <div>
                    <h3>Famille </h3>
                </div>               
                <p class="nbPerson">4 personnes</p>
                <p class="cardPrix">prix: <span>200€</span></p>
                <div class="cardDescrip">
                    <p>Pour la famille ou les amis jusqu'à 4 personnes</p>
                    <p>en extérieur ou en studio</p>
                    <span>* 30 euros en supplément par personne au-delà de 4 (hormis enfant jusqu'à 2 ans)</span>
                </div>
            </div>

        </label>
        <label for="id5" id="slid5" title="photo en couple">
            <div class="card">
                <div class="logoCard">
                    <i class="fa-solid fa-user-group"></i>
                </div>
                <div>
                    <h3>Pour deux</h3>
                </div>
                    <p class="nbPerson">2 personnes</p>
                    <p class="cardPrix">prix: <span>195€</span></p>
                <div class="cardDescrip">
                    <p>Pour deux personnes</p>
                    <P>en extérieur ou en studio</p>
                </div>
            </div>

        </label>
        <label for="id6" id="slid6" title="photo solo">
            <div class="card">
                <div class="logoCard">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div>
                    <h3>Juste moi</h3>
                </div>
                    <p class="nbPerson">1 personne</p>
                    <p  class="cardPrix">prix :<span>130€</span></p>
                <div class="cardDescrip">
                    <p>Séance pour une personne</p>
                    <p>en extérieur ou en studio</p>
                </div>
            </div>
        </label>
    </div>
</main>
<ul class="lstLinkSocial">
    <li class="facebook"><a href="#"><span><i class="fa-brands fa-facebook"></i></span></a></li>
    <li class="twitter"><a href="#"><span><i class="fa-brands fa-twitter"></i></span></a></li>
    <li class="tiktok"><a href="#"><span><i class="fa-brands fa-tiktok"></i></span></a></li>
    <li class="linkedin"><a href="#"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
</ul>
</div>


<?php get_footer() ?>