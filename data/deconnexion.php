<?php include('./templates/header.html'); 

setcookie('firstname', $firstname, time() - 3600);
setcookie('address', $address, time() - 3600);

?>

<div class="container">
    <div class="form-container">
        <h2>Déconnexion</h2>
        <p>Vous vous êtes bien déconnecté, à très vite !</p>
    </div>
    <div class="back-home">
        <a href="index.php">Retour à l'accueil</a>
    </div>
</div>

<?php 


include('./templates/footer.html'); ?>