<?php
    $title ='4:3 Gaming Blog';
    $active ='home';
    require ('header.php');
    require (__DIR__ . '/includes/init.php');

    $sql ="SELECT
                image_name,
                title,
                intro_text,
                article_id
            FROM 
                articles
            ORDER BY data DESC
            LIMIT 2";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $articles = $stmt->fetchAll(2); // perché 2?
?>

    <!-- Homepage Main -->

    <div class="homepage-main">
        <div class="homepage-main-cta content clearfix">
            <h3>Blog #1 di</h3>
            <h1>retro <br> gaming</h1>
            <div class="divider"></div>
            <a href="blog.php"><button type="button" class="nes-btn is-success">Blog</button></a>
            <a href="giochi.php"><button type="button" class="nes-btn is-primary">Giochi</button></a>
        </div>
    </div>

    <img src="img/brickground.png" class="separatore-main" alt="">

    <!-- Categorie -->

    <div class="spacer"></div>
    <section class="content clearfix">
        <div class="col-6">
            <div class="categorie cat-console fadeL">
                <div class="nes-container with-title is-centered">
                    <h3 class="title">Consoles</h3>
                    <a href="consoles.php"><img src="img/atari-joystick-bg.png" alt="Atari Joystick">
                    <p>Le console più classiche della storia.</p></a>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="categorie cat-game-designer fadeR">
                <div class="nes-container with-title is-centered">
                    <h3 class="title">Game Designers</h3>
                    <a href="consoles.php"><img src="img/shigeru-miyamoto.jpg" alt="Shigeru Miyamoto">
                    <p>I game designers più importanti della storia.</p></a>
                </div>
            </div>
        </div>
    </section>
    <div class="spacer"></div>

    <!-- Snes Controller -->

    <div class="snes-controller-section">
        <div class="controler">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
            <div class="left2">
                <div class="circle">
                    <div class="horizontal"></div>
                    <div class="vertical"></div>
                </div>
            </div>
            <div class="middle2">
                <div class="select"></div>
                <div class="start"></div>
            </div>
            <div class="right2">
                <div class="circle">
                    <div class="top">
                        <button class="green"></button>
                        <button class="blue"></button>
                    </div>
                    <div class="bottom">
                        <button class="orange"></button>
                        <button class="red"></button>
                    </div>
                </div>
            </div>
        </div> <!-- controller -->
        <div class="snes-controller-responsive">
            <img src="img/snes-controller-responsive.png" alt="Snes Controller">
        </div>
        <div class="divider"></div>
        <div class="center">
            <a href="giochi.php"><button type="button" class="nes-btn is-primary">Giochi</button></a>
        </div>
        <div class="divider"></div>
    </div> <!-- SNES Controller Section -->

    <!-- Articoli -->

    <section class="articoli content clearfix">

        <div class="ultimi-articoli center">
            <h1>Ultimi Articoli</h1>
        </div>

        <?php
            foreach ($articles as $article) { // prendo dati database per creare indice blog
            
        ?>

        <div class="singolo-articolo col-6 fadeU">
            <img src="img/<?= $article['article_id'] ?>/<?= $article['image_name'] ?>" alt="<?= $article['title'] ?>" >
            <div class="divider"></div>
            <div class="nes-container is-rounded center">
                <a href="page.php"><h3><?= $article['title'] ?></h3></a>
                <p><?= $article['intro_text'] ?></p>
                <a href="page.php?id=<?= $article['article_id'] ?>"><button type="button" class="nes-btn is-success">Continua</button></a>
            </div>
        </div>

        <?php
            }
        ?>

    </section>

    <!-- Footer -->

<?php require ('footer.php'); ?>