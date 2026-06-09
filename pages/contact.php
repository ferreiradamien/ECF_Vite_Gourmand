<?php
$pageTitle = "Contact - Vite & Gourmand";
require_once __DIR__ . "/../includes/header.php";
?>

<main class="container">
    <h1>Contact</h1>
    <p>Vous souhaitez obtenir des informations ? Contactez Vite & Gourmand.</p>

    <form class="form">
        <label for="titre">Titre</label>
        <input type="text" id="titre" name="titre" required>

        <label for="email">Adresse mail</label>
        <input type="email" id="email" name="email" required>

        <label for="description">Message</label>
        <textarea id="description" name="description" rows="6" required></textarea>

        <button type="submit" class="btn">Envoyer</button>
    </form>
</main>

<?php
require_once __DIR__ . "/../includes/footer.php";
?>