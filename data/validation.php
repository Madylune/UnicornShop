<?php include('./templates/header.html'); 

//Récupération des données
$firstname = $_POST['firstname'];
$address = $_POST['address'];
setcookie('firstname', $firstname, time() + 3600);
setcookie('address', $address, time() + 3600);

?>

<div class="container">
    <div class="form-container">
        <?php
            $email = $_POST['email'];
            $typeEmail = $email;
            if ( preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $typeEmail ) )
            {
                echo '<p style="color: green">L\'adresse email est valide</p>';
            }
        ?>
        <h2>Inscription validée !</h2>
        <h3>Bienvenue, <?php echo $firstname ?> !</h3>
    </div>
    <div class="btn-container">
        <span class="btn"><a href="shop.php">Accès boutique</a></span>
    </div>
    <div class="back-home">
        <a href="index.php">Retour à l'accueil</a>
    </div>
</div>

<?php include('./templates/footer.html'); ?>