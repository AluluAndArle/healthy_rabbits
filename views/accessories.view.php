<div class="container spaceee">
  
        <div class="row justify-content-center">
            <?php
            $productNames = [
                
                " MEILLEURS VENTE",
                "Tour de jeu pour petit rongeur Zolia",
                "Chips de carotte",
                "Sachet de menthe lapin",
                "Banane séchée pour lapin",
                "Versele-Laga Adult Complete"
            ];
            $productDesc = [
                "Comment ne pas craquer pour ces glaces pour lapin, elles sont belles et bonnes Été comme hiver, ton lapin va adorer déguster cette friandise. Évidemment, c'est 100% validée par Yuzu et Chouquette évidemment.",
                "Friandises pour lapin nain et rongeur
                mélange varié : à base de légumes et de céréales de qualité, dont du maïs, des pommes de terre et des carottes
                riche en vitamines et facile à digérer",
               
                "Découvre les chips de carottes séchées pour lapin, la friandise que tous les petits lapinous adorent.  Ces chips de carotte sont 100 % gourmandes et 100 % naturelles, de la carotte et rien d'autre. 
                Elles sont délicatement séchées. ",
                "imentation de tranches de banane séchées. Elles ne laissent. En commandant chez Zoomalia, vous participez à une action solidaire pour nourrir les chiens et les chats des refuges et associations. ",
               
                "Rien de mieux pour faire plaisir à ton lapin que des petites tranches de banane séchées. Elles ne laissent personne indifférent, la banane séchée est la friandise dont les lapins raffolent.
                🍌",
                "Tout spécialement adaptés aux besoins de votre lapin, ces extrudés offrent à votre animal une alimentation saine et équilibrée qu'il ne peut pas trier. Répondant en cela aux exigences nutritionnelles des lapins.
                "
            ];
            for ($i = 0; $i < count($productNames); $i++)
            ?>
            <?php for ($i = 0; $i < count($productDesc); $i++) {
            ?>
                <div class="col-md-4 mb-4 hvr-grow">
                    <div class="card">
                        <img src="/img/item<?php echo $i + 1; ?>.webp" class="card-img-top" alt="Product <?php echo $i + 1; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $productNames[$i]; ?></h5>
                            <p class="card-text"><?php echo $productDesc[$i]; ?></p>
                            <a href="#" class="btn btn-success">Buy Now</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>