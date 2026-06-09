<?php
$pageTitle = "Menus - Vite & Gourmand";
require_once __DIR__ . "/../includes/header.php";
?>

<main class="container">
    <h1>Nos menus</h1>
    <p>Découvrez les menus proposés par Vite & Gourmand pour vos événements.</p>

    <section class="filters">
        <h2>Filtrer les menus</h2>

        <form>
            <label for="theme">Thème</label>
            <select id="theme" name="theme">
                <option value="">Tous les thèmes</option>
                <option value="classique">Classique</option>
                <option value="noel">Noël</option>
                <option value="paques">Pâques</option>
                <option value="evenement">Événement</option>
            </select>

            <label for="regime">Régime</label>
            <select id="regime" name="regime">
                <option value="">Tous les régimes</option>
                <option value="classique">Classique</option>
                <option value="vegetarien">Végétarien</option>
                <option value="vegan">Vegan</option>
            </select>

            <label for="prix">Prix maximum</label>
            <input type="number" id="prix" name="prix" placeholder="Ex : 150">
        </form>
    </section>

    <section class="menus-grid">
        <article class="menu-card">
            <h2>Menu Classique</h2>
            <p>Un menu complet adapté aux repas familiaux et professionnels.</p>
            <p><strong>À partir de :</strong> 120 € pour 4 personnes</p>
            <a href="menu-detail.php" class="btn">Voir le détail</a>
        </article>

        <article class="menu-card">
            <h2>Menu Végétarien</h2>
            <p>Une sélection équilibrée de plats végétariens.</p>
            <p><strong>À partir de :</strong> 100 € pour 4 personnes</p>
            <a href="menu-detail.php" class="btn">Voir le détail</a>
        </article>
    </section>
</main>

<?php
require_once __DIR__ . "/../includes/footer.php";
?>