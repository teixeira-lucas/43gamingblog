<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?= $article['description'] ?>">
    <title><?= $article['page_title']; ?></title>
    <link href="https://unpkg.com/nes.css@latest/css/nes.min.css" rel="stylesheet" />
    <link href="cursor.scss">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/snes-controller.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
<!-- jQuery 1.8 or later, 33 KB -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Fotorama from CDNJS, 19 KB -->
<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <link rel="icon" href="img/43gamerlogofavicon.ico">
</head>
<body>

<!-- Header -->

<header id="header">
    <div class="content clearfix">
        <a href="index.php" class="logo"><img src="img/logo43gamingblog.png" alt="logo"></a>

        <!-- nav -->

        <nav>
            <ul class="burger-button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </ul>

            <ul class="nav">
                <li><a href="index.php" <?php if ($active == 'home') {echo "class=\"current-menu-item\""; } ?>>Home</a></li>
                <li><a href="blog.php" <?php if ($active == 'blog') {echo "class=\"current-menu-item\""; } ?> >Blog</a></li>
                <li><a href="giochi.php" <?php if ($active == 'giochi') {echo "class=\"current-menu-item\""; } ?>>Giochi</a></li>
                <li><a href="contatti.php" <?php if ($active == 'contatti') {echo "class=\"current-menu-item\""; } ?>>Contatti</a></li>
            </ul>
        </nav>

    </div>
</header>