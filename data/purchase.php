<?php include('./templates/header.html'); 

$firstname = $_COOKIE['firstname'];
$address = $_COOKIE['address'];

//On supprime tous les fichiers du répertoire products
$dir = './products';
$removeItems = opendir($dir);
 
while (false !== ($file = readdir($removeItems)))
{
    $path = $dir ."/". $file;
    if ($file != ".." AND $file != "." AND !is_dir($file))
        {
            unlink($path);
        }
}
closedir($removeItems);

?>

<div class="container">
    <div class="form-container">
        <h2>Commande validée !</h2>
        <p>Vos articles seront envoyé à l'adresse suivante: </p>
        <strong><?php echo $address ?></strong>
        <p>Merci <?php echo $firstname ?> pour votre visite, à bientôt !</p>
    </div>
    <div class="back-home">
        <a href="index.php">Retour à l'accueil</a>
    </div>
    <div class="deco">
        <a href="deconnexion.php">Déconnexion</a>
    </div>
</div>

<?php include('./templates/footer.html'); ?>