<?php include('./templates/header.html'); ?>

<div class="form-container">
    <h2>Inscription</h2>
    <form action="validation.php" method="post">
        <div class="champ">
            <label for="lastname">Nom:</label>
            <input class="input" type="text" name="lastname" required>
        </div>
        <div class="champ">
            <label for="firstname">Prénom:</label>
            <input class="input" type="text" name="firstname" required>
        </div>
        <div class="champ">
            <label for="email">Email:</label>
            <input class="input" type="email" name="email" required>
        </div>
        <div class="champ">
            <label for="address">Adresse:</label>
            <input class="input" type="text" name="address" required>
        </div>
        <div class="submit">
            <input class="btnSubmit" type="submit" value="Envoyer">
        </div>
    </form>
    <a href="index.php">Retour à l'accueil</a>
</div>

<?php include('./templates/footer.html'); ?>