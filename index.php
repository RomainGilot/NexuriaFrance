<?php

# Développé par Romain GILOT
# Auto-entreprise : Nexuria France

# Imporation des librairies de fonctions
require_once('./database/db-connect.php');
require('./database/db-function.php');

$title = "Nexuria France";

# Importation de <head> HTML.
require('./views/v_head.php');

# Imporation du menu de navigation.
require('./views/v_navbar.php');

?>

<!-- 
    ------------------- 
        HOME SCREEN
    ------------------- 
-->


<div class="home-screen" id="accueil">
    <h4 class="title">Envie d'un site web pour votre projet ?</h4>
    <p class="message">Découvrez Nexuria France, une auto-entreprise qui correspondra à vos attentes.</p>
    <div class="separateur">
        <div class="line blue"></div>
        <div class="line white"></div>
        <div class="line red"></div>
    </div>
    <button type="button" class="prestation-button">Nos Prestations en cliquant ici.</button>
</div>

<!-- 
    ------------------- 
        TARFICATIONS
    ------------------- 
-->

<div class="message-prestation-screen">
    <div class="left">
        <p class="message">Vous êtes intéressé par nos prestations ? Allez voir nos tarifs !</p>
    </div>
    <div class="right">
        <button class="tarifs-button">Nos tarifs</button>
    </div>
</div>

<!-- 
    ------------------- 
        PRESTATIONS
    ------------------- 
-->

<div class="prestation-screen" id="prestations">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512" xml:space="preserve" width="100px" height="100px" class="Closed">
        <style type="text/css">
            .st0 {
                fill: #e0b76e;
            }

            .st1 {
                fill: #f4ce8f;
            }

            .st2 {
                fill: #f2ca7f;
            }

            .st3 {
                fill: #79b1d6;
            }

            .st4 {
                fill: #898686;
            }
        </style>
        <polygon class="st0" points="483,128 483,384 256,512 135.2,187.9 " />
        <polygon class="st1" points="29,128 29,384 256,512 256,256 483,128 256,0 " />
        <polygon class="st2" points="29,128 29,384 256,512 256,256 " />
        <polyline class="st3" points="110.6,82 110.6,82 337.6,210 407.8,170.4 180.8,42.4 " />
        <polygon class="st4" points="414.2,262.8 380.2,239.2 345.2,301.6 371,287.1 371,392.8 388.9,382.6 388.9,277 " />
    </svg>
    <h4 class="title">NOS PRESTATIONS</h4>
    <div class="separateur">
        <div class="line pink"></div>
        <div class="line white"></div>
        <div class="line pink"></div>
    </div>
    <div class="container">
        <div class="box">
            <div class="icon">
                <img src="./web/img/computer.png" height="200px" alt="photo-pc-portable">
            </div>
            <h4 class="title">Site vitrine</h4>
        </div>
        <div class="box">
            <div class="icon">
                <img src="./web/img/dev.png" height="200px" alt="photo-ecran-pc">
            </div>
            <h4 class="title">Site dynamique</h4>
        </div>
        <div class="box">
            <div class="icon">
                <img src="./web/img/maintenance.png" height="200px" alt="photo-maintenance-pc">
            </div>
            <h4 class="title">Maintenance des services</h4>
        </div>
    </div>
    <a href="#" class="prestations-plus-infos">En savoir plus...</a>
</div>

<!-- 
    ---------------------------- 
      PRESENTATION DU CREATEUR
    ---------------------------- 
-->

<div class="presentation-createur">
    <div class="left">
        <img src="./web/img/man.png" height="200px" alt="ma-photo">
    </div>
    <div class="right">
        <h4 class="title">A propos du créateur.</h4>
        <p class="message">
            <iconify-icon icon="fa6-solid:quote-left"></iconify-icon>
            Je m'appelle <a href="https://romaingilot.fr/" style="color:#cd04d4;"><b>Romain</b></a>, j'ai 19ans et je suis fondateur de l'auto-entreprise <b>Nexuria France</b>
        </p>
        <p class="message">
            J'ai fondé Nexuria pour faire évoluer mes compétences et faire de ce que j'ai acquis une <br> opportunité pour vous.
            <iconify-icon icon="fa6-solid:quote-right"></iconify-icon>
        </p>
    </div>
</div>
<div class="contact">
    <h4 class="title">VOUS SOUHAITEZ ME CONTACTER ?</h4>
    <div class="separateur">
        <div class="line pink"></div>
        <div class="line white"></div>
        <div class="line pink"></div>
    </div>
    <div class="choix-formulaire">
        <div class="box">
            <button id="contact" class="forms-button">Contact</button>
        </div>
        <div class="box">
            <iconify-icon icon="fa:close" id="close" style="color:red; margin-top: 10px; cursor:pointer;"></iconify-icon>
        </div>
        <div class="box">
            <button id="devis" class="forms-button"> Devis </button>
        </div>
    </div>
    <div class="formulaire">
        <div class="contact" id="contactForm">
            <form method="POST">
                <div class="box">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" placeholder="Votre prenom" name="prenom">
                </div>
                <div class="box">
                    <label for="mail">Mail</label>
                    <input type="mail" id="mail" placeholder="Votre mail" name="prenom">
                </div>
                <div class="box">
                    <label for="objet">Objet</label>
                    <input type="text" id="objet" placeholder="Suhet de votre demande" name="prenom">
                </div>
                <div class="box">
                    <label for="prenom">Message</label>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                </div>
            </form>
        </div>
        <div class="devis" id="devisForm">
            <form method="POST">
                <div class="box">
                    <label for="prenom">Prénom </label>
                    <input type="text" id="prenom" placeholder="Votre prenom" name="prenom">
                </div>
                <div class="box">
                    <label for="mail">Mail</label>
                    <input type="mail" id="mail" placeholder="Votre mail" name="prenom">
                </div>
                <div class="box">
                    <label for="objet">Nom de votre société / projet</label>
                    <input type="text" id="objet" placeholder="Suhet de votre demande" name="prenom">
                </div>
                <div class="box">
                    <label for="prenom">Votre demande</label>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
# Imporation du menu de navigation.
require('./views/v_footer.php');
?>

<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
<script src="./web/js/menu-hamburger.js"></script>
<script src="./web/js/nav-scroll.js"></script>
<script src="./web/js/forms-contact.js"></script>