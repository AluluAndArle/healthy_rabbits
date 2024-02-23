<?php

require_once(__DIR__ . "/views/partials/head.php");
?>

<style>
            .row{
                min-height: 5rem;
                background-color: RGBa(60,120,240,0.7); /*Bleu*/
            }
            .col{
                background-color: RGBa(60,240,160,0.7); /*Vert*/
                background-clip: content-box;
            }
        </style>

<!-- //1ercard** -->
<section class="d-flex justify-content-start">
<div class="col-md-3 mb-5">
    <div class="card">
        <div class="container-fliud">
            <div>
                <div class="preview col-md-6">

                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="/img/lapin/Friandisesfoincraulapin.jpg" /></div>

                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                        <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="img/lapin/Palets_foin_de_crau_lapin.jpg" /></a></li>

                    </ul>

                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">Palets de foin de Crau lapin</h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="review-no">74 personnes passer sur l'annonce</span>
                    </div>
                    <p class="product-description">Les petits palets de foin de Crau sont idéaux pour varier l'alimentation de ton lapin. Ils ont une double utilisation : enrichissement et gourmandise. Ils permettent à ton lapin de grignoter et ronger avec plaisir, tout en profitant des vitamines et minéraux du foin de Crau. 😋</p>
                    <h4 class="price">prix: <span>5,90€</span></h4>
                    <div class="action">
                        <button class="add-to-cart btn btn-default" type="button">Ajouter Au Panier</button>
                        <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- **2nd card -->
<section class="d-flex justify-content-center">
<div class="col-md-3 mb-5">
    <div class="card">
        <div class="container-fliud">
            <div>
                <div class="preview col-md-6">

                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="img/lapin/Friandisebananelapinnain.jpg" /></div>

                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                        <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="img/lapin/Chipsdebananelapin.jpg" /></a></li>

                    </ul>

                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">Banane séchée pour lapin</h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <span class="review-no">41 personnes passer sur l'annonce</span>
                    </div>
                    <p class="product-description">Rien de mieux pour faire plaisir à ton lapin que des petites tranches de banane séchées. Elles ne laissent personne indifférent, la banane séchée est la friandise dont les lapins raffolent.
                        🍌 Une friandise 100% naturelle, sans sucre ajouté ou autres additifs.</p>
                    <h4 class="price">prix: <span>4,90€</span></h4>
                    <div class="action">
                        <button class="add-to-cart btn btn-default" type="button">Ajouter Au Panier</button>
                        <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- ***3nd card -->
<section class="d-flex justify-content-end">
<div class="col-md-3 mb-5">
    <div class="card">
        <div class="container-fliud">
            <div class="">
                <div class="preview col-md-6">

                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="img/lapin/Friandisebananelapinnain.jpg" /></div>

                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                        <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="img/lapin/Chipsdebananelapin.jpg" /></a></li>

                    </ul>

                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">Banane séchée pour lapin</h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <span class="review-no">41 personnes passer sur l'annonce</span>
                    </div>
                    <p class="product-description">Rien de mieux pour faire plaisir à ton lapin que des petites tranches de banane séchées. Elles ne laissent personne indifférent, la banane séchée est la friandise dont les lapins raffolent.
                        🍌 Une friandise 100% naturelle, sans sucre ajouté ou autres additifs.</p>
                    <h4 class="price">prix: <span>4,90€</span></h4>
                    <div class="action">
                        <button class="add-to-cart btn btn-default" type="button">Ajouter Au Panier</button>
                        <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>













<?php
require_once(__DIR__ . "/views/partials/footer.php");  ?>