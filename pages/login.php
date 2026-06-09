<?php
$pageTitle = "Connexion - Vite & Gourmand";
require_once __DIR__ . "/../includes/header.php";
?>

<main class="container">
    <h1>Connexion</h1>

    <form class="form">
        <label for="email">Adresse mail</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" class="btn">Se connecter</button>
    </form>

    <p>
        <a href="register.php">Créer un compte</a> |
        <a href="#">Mot de passe oublié ?</a>
    </p>
</main>

<?php
require_once __DIR__ . "/../includes/footer.php";
?>