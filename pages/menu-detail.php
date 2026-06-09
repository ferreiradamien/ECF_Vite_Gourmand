<?php
$pageTitle = "Détail du menu - Vite & Gourmand";
require_once __DIR__ . "/../includes/header.php";
?>

<main class="container">
    <h1>Menu Classique</h1>

    <section class="menu-detail">
        <p>
            Ce menu est conçu pour les événements familiaux ou professionnels.
            Il comprend une entrée, un plat et un dessert.
        </p>

        <h2>Composition du menu</h2>
        <ul>
            <li>Entrée : salade gourmande</li>
            <li>Plat : volaille rôtie et accompagnement</li>
            <li>Dessert : tarte maison</li>
        </ul>

        <h2>Conditions</h2>
        <p class="warning">
            Ce menu doit être commandé au minimum 72 heures avant la prestation.
        </p>

        <p><strong>Nombre minimum :</strong> 4 personnes</p>
        <p><strong>Prix minimum :</strong> 120 €</p>

        <a href="../user/commande.php" class="btn">Commander ce menu</a>
    </section>
</main>

<?php
require_once __DIR__ . "/../includes/footer.php";
?>