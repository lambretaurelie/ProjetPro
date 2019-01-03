<!DOCTYPE html>
<html lang="fr">
    <?php
    require 'template/header.php';
    ?>
    <div class="container-fluid" id="reserveFrance">
        <div class="backgroundFrance">
            <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-sm-4 col-lg-4 col-xl-4">
                        <div class="titleFrance">
                            <p>Selectionnez la région de votre choix</p>
                            <script src="assets/js/France-map.js"></script>
                            <script>francefree();</script> 
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-sm-8 col-lg-8 col-xl-8">
                        <div class="france">
                            <h4 class="sTitleFrance">Localisation</h4>
                            <p>La plupart des Français vivent proche d’une réserve naturelle, sans même le savoir, même lorsqu’ils habitent au cœur d’une grande ville.</p>
                            <p>La nature est à notre porte, parmi tous les milieux protégés par les réserves naturelles, on retrouve:
                            <p> -> les forêts,</p>
                            <p> -> les lacs,</p>
                            <p> -> les étangs,</p>
                            <p> -> les mares d'eau douce,</p>
                            <p> -> les landes,</p>
                            <p> -> les fourrés, ...</p>
                            <p>Battues par les flots, accrochées aux falaises, nichées au cœur des zones humides, enfouies sous la mer ou dans des grottes, tapies dans les forêts, grimpant à l’assaut des montagnes ou plantées à la périphérie des villes, les réserves naturelles témoignent de l’incroyable variété de la nature en France.</p> 
                            <p>Un pissenlit, un moineau, un simple caillou sont déjà des petits bouts de nature ;ils vivent dans beaucoup de réserves naturelles, bien que celles-ci comportent beaucoup d’autres joyaux !</p>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-sm-4 col-lg-4 col-xl-4">
                        <div class="imageRegion">
                            <img class="imageAcc" src="assets/images/image8.jpg" alt="papillons">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-sm-4 col-lg-4 col-xl-4">
                        <div class="imageRegion">
                            <img class="imageAcc" src="assets/images/image27.jpg" alt="papillons">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-sm-4 col-lg-4 col-xl-4">
                        <div class="imageRegion">
                            <img class="imageAcc" src="assets/images/image28.jpg" alt="papillons">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require 'template/footer.php';
    ?>
</body>
</html>