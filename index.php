<?php include __DIR__ . "/phpModules/calculs.php" ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site web de ANTHONUS.">
    <meta name="keywords" content="présentation, vitrine, anthonus">
    <meta name="author" content="ANTHONUS">
    <link rel="canonical" href="https://anthonus.fr/">
    <link rel="apple-touch-icon" href="https://avatar-cyan.vercel.app/api/pfp/722086214949404682/superbigimage">
    <meta property="og:title" content="anthonus.fr">
    <meta property="og:description" content="Site web de ANTHONUS.">
    <meta property="og:image" content="https://avatar-cyan.vercel.app/api/pfp/722086214949404682/superbigimage">
    <meta property="og:url" content="https://anthonus.fr/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="anthonus.fr">
    <meta name="twitter:description" content="Site web de ANTHONUS.">
    <meta name="twitter:image" content="https://avatar-cyan.vercel.app/api/pfp/722086214949404682/superbigimage">


    <title>ANTHONUS</title>
    <link rel="icon" href="https://avatar-cyan.vercel.app/api/pfp/722086214949404682/superbigimage">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header id="header" class="acrylic-background">
    <img src="https://avatar-cyan.vercel.app/api/pfp/722086214949404682/smallimage" alt="Avatar Discord">
    <h1>ANTHONUS</h1>
</header>

<main>
    <div class="video-container">
        <video autoplay muted loop playsinline disablepictureinpicture>
            <source src="/assets/videos/background.mp4" type="video/mp4">
            Votre navigateur ne supporte pas les vidéos HTML5.
        </video>
        <div class="video-overlay"></div>
    </div>

    <section id="accueil">
        <img src="https://avatar-cyan.vercel.app/api/pfp/722086214949404682/superbigimage" alt="Avatar Discord"
             id="accueil-img">
        <h1>ANTHONUS</h1>
    </section>

    <section id="about">
        <h2>À propos de moi</h2>
        <div class="acrylic-background">
            <p>Je m'appelle Anthony, j'ai <?= calcAge() ?> ans.<br>
                Je suis étudiant en informatique de deuxième année à Lyon1 et je suis un passionné d'informatique.<br>
                J'aime tout dans l'informatique, Commençant par le développement web / applications, aux petits
                programmes
                marrants, passant par des bots Discord, des petits jeux vidéos ou même de l'IA, jusqu'aux configurations
                et
                installations de posts informatique, autant Windows que Linux. Sans oublier la réparation d'ordinateurs
                !<br>
                J'adore apprendre toujours plus en informatique, également expérimenter de nouvelles choses en
                programmant
                et essayant toujours tout par moi-même.
                Mon temps libre est rempli par tous ces aspects de l'informatique, les jeux vidéos, animés...
            </p>
        </div>
    </section>

    <?php include __DIR__ . '/phpModules/loadProjects.php'; ?>

    <section id="textWorld">
        <h2>TextWorld</h2>
        <div class="acrylic-background">
            <p>
                Textworld est une page interactive qui permet d'écrire en temps réel avec d'autres personnes sur une
                grande toile de texte.<br>
                N'hésitez pas à aller écrire quelque chose !
            </p>
            <a id="textWorld-button" class="button" href="https://textworld.anthonus.fr">Je veux participer !</a>
        </div>

    </section>

    <section id="CV">
        <h2>Mon CV</h2>
        <div class="acrylic-background">
            <p>
                Accédez à mon CV en ligne pour en savoir plus sur mon parcours, mes compétences et mes expériences.
            </p>
            <a id="CV-button" class="button" href="/cv.html">Voir le CV</a>
        </div>

    </section>

</main>

<footer id="footer" class="acrylic-background">
    <p>© <?= getCurrentYear() ?> ANTHONUS - Made with <a href="/mogus.html">ඞ</a></p>
    <div>
        <h4>Contacts :</h4>
        <ul>
            <li><strong>E-mail : </strong><a href="mailto:contact@anthonus.fr">contact@anthonus.fr</a></li>
            <li><strong>Discord : </strong>anthonus</li>
        </ul>
    </div>
    <div>
        <h4>Support :</h4>
        <div>
            <script type='text/javascript' src='https://storage.ko-fi.com/cdn/widget/Widget_2.js'></script>
            <script type='text/javascript'>
                kofiwidget2.init('Supportez moi sur Ko-fi !', '#72a4f2', 'U6U81KH349');
                kofiwidget2.draw();
            </script>
        </div>
    </div>
</footer>

<script src="js/peak.js" defer></script>
</body>
</html>