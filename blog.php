<?php
    $title ='4:3 Gaming Blog';
    $active ='blog';
    require ('header.php');
    require (__DIR__ . '/includes/init.php');
?>

    <div class="titolo-pagina">
        <div class="content center">
            <h1 class="animated fadeInUp"> Blog</h1>
        </div>
    </div>

    <img src="img/brickground.png" class="separatore-main" alt="">

    <!-- Connessione al database -->
    <?php 
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        /* pdo - componente */
        $servername = "127.0.0.1";
        $username = "root";
        $password = "root";
        $port = "8889";
        $database = "gamingblog";
        $connection = connection($servername, $port, $username, $password, $database);

        $sql = 'SELECT * FROM articles';
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        $articles = $stmt->fetchAll(2);
    ?> 

    <div class="spacer"></div>

        <section class="articoli content clearfix">

        <?php
        // prendo dati database per creare indice blog

            foreach ($articles as $article) {
            // echo 'Titolo' . $article['title'];
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

    <div class="spacer"></div>

    <div class="container center pagination">
        <a href="#" class="pagination-arrow"><</a>
        <a href="#">1</a>
        <a href="404.php">2</a>
        <a href="#" class="pagination-arrow">></a>    
    </div>

    <!-- Footer -->

<?php require ('footer.php'); ?>