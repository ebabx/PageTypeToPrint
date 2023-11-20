
<div id="cover" >
    <img src=<?= $cover_img ?> alt="">
</div>

<header id="header">
        <div class="entete">
        <!-- Le titre du mémoire / doc écrit -->
        <h1><?= $title ?></h1>

        <!-- Le sous-titre éventuel (si pas de sous-titre, supprimer le h2) -->
        <h2><?= $subtitle ?></h2>
        
        <!-- Votre nom -->
        <div class="meta-name"><?= $name ?></div>
    </div>

    <!-- les méta-données -->
    <div class="meta">

            <p>
                <?= $mention  ?>
            </p>
            <p>
                <?= $direction ?> 
            </p>
            <p>
                <?= $diploma ?><br>
                <!-- l’année YYYY – YYYY  -->
                <?= $year ?>
            </p>
    </div>

    <!-- les liens rapides: lire, imprimmer, télécharger -->
    <nav id="quicklinks">
        <a href="#nav">Lire en ligne</a>
        <!-- supprimer ce lien une fois le PDF généré : -->
        <a href="?print" title="Web to print">Imprimer</a>
        <!-- Modifier l’URL dans config.php -->
        <a href="<?= $pdf ?>">Télécharger</a>
    </nav>
</header>

<!-- la navigation (= le sommaire) -->
<nav id="nav">
    <h2>Sommaire</h2>
    <ul class="nav-ul">
        <?= $nav() ?>
    </ul>
</nav>

<main id="main">
    <!-- le contenu -->      
    <?= $html() ?>
</main>
