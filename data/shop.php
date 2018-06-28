<?php include('./templates/header.html'); 


?>

<div class="container">
    <h2>Boutique</h2>
    <div class="products-container">
        <div class="product">
            <h4 class="item-name">Chaussons licorne</h4>
            <img class="item-img" src="https://cute.land/686-big_default/chaussons-licorne-lumineux.jpg" alt="item" />
            <span class="item-price">Prix: 35€</span>

            <form class="hidden-form" action="basket.php" method="post">
                <input type="hidden" name="item" value="shoes">
                <div class="submit">
                    <input class="btnSubmit" name="add" type="submit" value="Ajouter au panier">
                </div>
            </form>
        </div>

        <div class="product">
            <h4 class="item-name">Veilleuse licorne</h4>
            <img class="item-img" src="https://www.cadeauxfolies.fr/pub/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/u/n/unicorn_diffuser_1.jpg" alt="item" />
            <span class="item-price">Prix: 49€</span>

            <form class="hidden-form" action="basket.php" method="post">
                <input type="hidden" name="item" value="light">
                <div class="submit">
                    <input class="btnSubmit" name="add" type="submit" value="Ajouter au panier">
                </div>
            </form>
        </div>

        <div class="product">
            <h4 class="item-name">Bouée gonflable licorne</h4>
            <img class="item-img" src="https://images-na.ssl-images-amazon.com/images/I/716qcOdvJiL._SY355_.jpg" alt="item" />
            <span class="item-price">Prix: 150€</span>

            <form class="hidden-form" action="basket.php" method="post">
                <input type="hidden" name="item" value="floater">
                <div class="submit">
                    <input class="btnSubmit" name="add" type="submit" value="Ajouter au panier">
                </div>
            </form>
        </div>

        <div class="product">
            <h4 class="item-name">Mug licorne</h4>
            <img class="item-img" src="https://lemondedebibou.com/wp-content/uploads/2016/08/preview-1-7-600x581.jpg" alt="item" />
            <span class="item-price">Prix: 19€</span>

            <form class="hidden-form" action="basket.php" method="post">
                <input type="hidden" name="item" value="mug">
                <div class="submit">
                    <input class="btnSubmit" name="add" type="submit" value="Ajouter au panier">
                </div>
            </form>
        </div>

        <div class="product">
            <h4 class="item-name">T-shirt licorne</h4>
            <img class="item-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGkSdwiUH-Cw1Tvi8j-0t8PXEA9u3mAcYn1E4eR9KiJoksuxi5" alt="item" />
            <span class="item-price">Prix: 25€</span>

            <form class="hidden-form" action="basket.php" method="post">
                <input type="hidden" name="item" value="tshirt">
                <div class="submit">
                    <input class="btnSubmit" name="add" type="submit" value="Ajouter au panier">
                </div>
            </form>
        </div>
    </div>
    <div class="back-home">
        <a href="index.php">Retour à l'accueil</a>
    </div>
    <div class="basket">
        <a href="basket.php"><img src="http://www.icone-png.com/png/14/13596.png" alt="panier"/></a>
    </div>
</div>

<?php include('./templates/footer.html'); ?>