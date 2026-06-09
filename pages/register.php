<?php
$pageTitle = "Inscription - Vite & Gourmand";
require_once __DIR__ . "/../includes/header.php";
?>

<main class="container">
    <h1>Créer un compte</h1>

    <form class="form">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="telephone">Téléphone</label>
        <input type="tel" id="telephone" name="telephone" required>

        <label for="adresse">Adresse postale</label>
        <input type="text" id="adresse" name="adresse" required>

        <label for="email">Adresse mail</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>
        <small>Minimum 10 caractères avec majuscule, minuscule, chiffre et caractère spécial.</small>

        <button type="submit" class="btn">Créer mon compte</button>
    </form>
</main>

<?php
require_once __DIR__ . "/../includes/footer.php";
?>