<?php
session_start();
require('connexion/bdd-connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="css/bulmaswatch.min.css">
    <link rel="stylesheet" href="css/bulma-carousel.min.css">
    <title>M2L - À Propos</title>
</head>

<body>
    <?php
    require('elements/navbar1.php');
    ?>
    <!-- Debut de page -->
    <div class="container">
        <section class="hero is-white" id="locaux">
            <div class="hero-body">
                <p class="title">
                    Locaux
                </p>
            </div>
        </section>
        <div>
            <p>Le site se compose de quatre bâtiments, dont deux dotés de quatre étages et
                donc de 5 niveaux (les bâtiments A et C) et deux de plain-pied (les bâtiments B et D) dotés d’un seul
                rez-de-chaussée. Les bâtiments C et D sont neufs. Les bâtiments A et B datent d'une quinzaine d'années.
                Les étages des bâtiments A et C hébergent les bureaux des ligues locataires et le rez-de-chaussée des
                quatre bâtiments héberge des espaces mutualisés : un amphithéâtre de 200 places avec une régie, 8 salles
                de réunion de 12 à 50 places, un hall d'accueil, une salle de convivialité et son office traiteur, ainsi
                qu'une salle de formation multimédia dotée de 24 postes. On y trouve également la partie « accueil » des
                neuf bureaux de l'administration de la M2L. <br><br>
                L’autre partie se trouve au premier étage du bâtiment C. Différents locaux de service (archives,
                stockage local d'entretien ...) se trouvent en sous-sol.
                En fonction de leur taille, les 24 structures hébergées occupent un ou plusieurs bureaux. Au total, la
                M2L offre 80 bureaux. A chaque étage des bâtiments de bureaux se trouve une petite salle de réunion que
                les ligues utilisent sans réservation. L'ensemble des autres salles ressources sont accessibles sur
                réservation, en journée comme en soirée.</p>
            <div class="columns is-mobile m-6">
                <div class="column"><img class="image is16by9" src="medias/plan01.png" alt=""></div>
                <div class="column"><img class="image is16by9" src="medias/plan02.png" alt=""></div>
                <div class="column"><img class="image is16by9" src="medias/plan03.png" alt=""></div>
            </div>
        </div>
        <section class="hero is-white" id="personnel">
            <div class="hero-body">
                <p class="title">
                    Personnel
                </p>
            </div>
        </section>
        <div class="">
            <div class="columns is-mobile">
                <div class="column">
                    <h3 class="subtitle ml-5">Administration</h3>
                    <div class="box">
                        <h5 class="title is-6">DIRECTEUR : Lucien Sapin</h5>
                        <p>Tel : 06.83.18.87.02 | Fax : +333.83.18.87.03</p>
                        <a href="mailto:lucien.gastaldello@m2l.fr">lucien.gastaldello@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>CHARGEE IMPACT EMPLOI : Nathalie Genais</h3>
                        <p>Tel : 06.83.18.87.05</p>
                        <a href="mailto:martine.genoux@m2l.fr">martine.genoux@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>CHARGEE D'INFOGRAPHIE : Lorette Giroux</h3>
                        <p>Tel : 06.83.18.87.06</p>
                        <a href="mailto:lorette.bossart@m2l.fr">lorette.bossart@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>SECRETAIRE COMPTABLE : Martine Dupont</h3>
                        <p>Tel : 06.83.18.87.07 | Fax : 06.83.18.87.03</p>
                        <a href="mailto:Jeannine.vuillemard@m2l.fr">Jeannine.vuillemard@m2l.fr</a>
                    </div>

                </div>
                <div class="column">
                    <h3 class="subtitle ml-5">Sport</h3>
                    <div class="box">
                        <h5 class="title is-6">DIRECTEUR : Lucien Sapin</h5>
                        <p>Tel : 06.83.18.87.02 | Fax : +333.83.18.87.03</p>
                        <a href="mailto:lucien.gastaldello@m2l.fr">lucien.gastaldello@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>Judo : Nicholas Cloutier</h3>
                        <p>Tel : 06.65.32.34.54 </p>
                        <a href="mailto:Cloutier.Nicholas@m2l.fr">Cloutier.Nicholas@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>Tennis : Anaïs Pariseaur</h3>
                        <p>Tel : 06.32.67.34.04 </p>
                        <a href="mailto:Pariseaur.Anaïs@m2l.fr">Pariseaur.Anaïs@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>Natation : Émilie Davignon</h3>
                        <p>Tel : 06.04.06.38.75 </p>
                        <a href="mailto:Davignon.Émilie@m2l.fr">Davignon.Émilie@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>Cyclisme : Étienne Angélil</h3>
                        <p>Tel : 06.13.07.68.89 </p>
                        <a href="mailto:Angélil.Étienne@m2l.fr">Angélil.Étienne@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>Tir à l'Arc : Élise Chicoine</h3>
                        <p>Tel : 06.87.60.10.65 </p>
                        <a href="mailto:Chicoine.Élise@m2l.fr">Chicoine.Élise@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>Modélisme : Roland Paquet</h3>
                        <p>Tel : 06.52.77.63.73 </p>
                        <a href="mailto:Paquet.Roland@m2l.fr">Paquet.Roland@m2l.fr</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Fin de page -->
    <?php
    require('elements/footer.php');
    ?>
    <script src="js/bulma-burger.js"></script>
    <script src="js/bulma-modal.js"></script>
    <script src="js/bulma-tabs.js"></script>
    <script src="js/bulma-carousel.min.js"></script>
    <script src="js/carousel-custom.js"></script>
</body>

</html>