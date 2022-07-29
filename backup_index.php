<?php
    $title ='4:3 Gaming Blog';
    $active ='home';
    require ('header.php');
    require (__DIR__ . '/includes/functions.php');

    /* pdo - componente */
    $servername = "127.0.0.1";
    $username = "root";
    $password = "root";
    $port = "8889";
    $database = "gamingblog";
    $connection = connection($servername, $port, $username, $password, $database);

    $sql = "SELECT * FROM articles WHERE article_id=:id";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $article = $stmt->fetch(2);
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

        <div class="singolo-articolo col-6 fadeU">
            <img src="img/<?= $article['article_id'] ?>/<?= $article['image'] ?>" alt="<?= $article['title'] ?>">
            <div class="divider"></div>
            <div class="nes-container is-rounded center">
                <a href="page.php"><h3>Crisi del 1983</h3></a>
                <p>L’evento causò la fine di quella che è considerata la seconda generazione dei videogiochi. Questo fenomeno colpì gli Stati Uniti d’America e il Canada, i due mercati più sviluppati.</p>
                <a href="page.php"><button type="button" class="nes-btn is-success">Continua</button></a>
            </div>
        </div>

        <div class="singolo-articolo col-6 fadeU">
            <img src="img/30annisonic.png" alt="30anni di Sonic">
            <div class="divider"></div>
            <div class="nes-container is-rounded center">
                <a href="page.php"><h3>I 30 anni di Sonic</h3></a>
                <p>Il tempo passa in fretta, certo: ma Sonic è più veloce. In anticipo sui 30 anni del porcospino blu, SEGA ha lanciato sul sito ufficiale un progetto intitolato "SONIC2020".</p>
                <a href="page.php"><button type="button" class="nes-btn is-success">Continua</button></a>
            </div>
        </div>

        <div class="singolo-articolo col-6 fadeU">
            <img src="img/gameboy-pinkbg.jpg" alt="gameboy famoso portatile della nintendo">
            <div class="divider"></div>
            <div class="nes-container is-rounded center">
                <a href="page.php"><h3>Il famoso GameBoy</h3></a>
                <p>Commercializzata in Giappone il 21 aprile 1989, la console venne distribuita sul mercato statunitense il 31 luglio dello stesso anno insieme al videogioco Tetris.</p>
                <a href="page.php"><button type="button" class="nes-btn is-success">Continua</button></a>
            </div>
        </div>

        <div class="singolo-articolo col-6 fadeU">
            <img src="img/arcade-joystick.jpg" alt="joystick arcade">
            <div class="divider"></div>
            <div class="nes-container is-rounded center">
                <a href="page.php"><h3>La nascita degli Arcade</h3></a>
                <p>Le prime realizzazioni nella storia dei videogiochi, tra gli anni ’50 e ’60, furono giochi non commerciali, spesso limitati agli ambienti universitari. Tra questi, Spacewar!</p>
                <a href="page.php"><button type="button" class="nes-btn is-success">Continua</button></a>
            </div>
        </div>

    </section>

    <!-- Footer -->

<?php require ('footer.php'); ?>