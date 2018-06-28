<?php include('./templates/header.html'); 

//Récupération des données
$item = $_POST['item'];

//Création des fiches produits
if(isset($_POST['add'])){
    $createFile = './products/'. $item . '.html';
    $newFile = fopen($createFile, 'w'); 
    $content = $item;
    $newContent = fputs($newFile, $item);
    fclose($newFile);
}
?>

<div class="basket-container">
    <h2>Votre panier</h2>
    <center>
    <table>
        <thead>
            <tr>
                <th><h3>Retirer un article</h3></th>
                <th><h3>Produits</h3></th>
                <th><h3>Prix</h3></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $products = './products';
                $prices = array();

                foreach (scandir($products) as $product)
                {
                    if ($product != '.' && $product != '..')
                    {
                        $productName = file_get_contents('./products/'. $product);

                        echo '<tr>';
                        echo '<th>
                                <form class="hidden-form" action="" method="post">
                                    <input name="remove" type="submit" value="Retirer">
                                </form>    
                            </th>';
                            
                        echo '<th>' . $productName . '</th>';

                        switch($productName) {
                            case 'shoes':
                                $price = 35;
                                break;
                            case 'light':
                                $price = 49;
                                break;
                            case 'floater':
                                $price = 150;
                                break;
                            case 'mug':
                                $price = 19;
                                break;
                            case 'tshirt':
                                $price = 25;
                                break;
                        }
                        array_push($prices, $price);
                        echo '<th>' . $price . '€</th>';
                        echo '</tr>';
                    }
                }
                $removeItem = opendir($products);
                if(isset($_POST['remove']))
                {
                    unlink($products . '/' .$product);
                }
                closedir($removeItem);
            ?>
            <tr>
                <th><h3>Total</h3></th>
                <th colspan=2 class="total">
                    <?php
                        echo array_sum($prices) .'€';
                    ?>
                </th>
            </tr>
        </tbody>
    </table>
    </center>
</div>
<center>
<div class="btn-container">
    <span class="btn"><a href="shop.php">Continuer shopping</a></span>
    <span class="btn"><a href="purchase.php">Valider le panier</a></span>
</div>
<div class="back-home">
    <a href="index.php">Retour à l'accueil</a>
</div>
</center>


<?php include('./templates/footer.html'); ?>