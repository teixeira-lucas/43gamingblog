<?php
    //$title='Il Famoso GameBoy - 4:3 Gaming Blog';
    $active='blog';
    require ('header.php');
    require (__DIR__ . '/includes/init.php');


    /* pdo - componente */
    $id= $_GET['id']; // associo l'id dell'articolo che l'utente ha selezionato alla variabile $id

    if(empty($_GET['id'])) {
        header("Location: http://localhost:8888/partita_tripla/43gamingblog/blog.php");
        exit();
    }

    $sql = "SELECT a.*, au.author_name, au.author_surname FROM articles a INNER JOIN authors au ON a.author_id = au.author_id WHERE article_id=:id"; // carico tutti i dati della tabella articles del database

    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':id', $id); // associo il valore di $id a ':id'
    $stmt->execute();
    $article = $stmt->fetch(2);

    // Se l'id dell'articolo non esiste, riportami al blog
    if (!$article) {
        header("Location: http://localhost:8888/partita_tripla/43gamingblog/blog.php");
        exit();
    }
?> 

    <div class="titolo-pagina">
        <div class="content center">
            <h1 class="animated fadeInUp"> <?= $article['title'] ?></h1>
        </div>
    </div>

    <img src="img/brickground.png" class="separatore-main" alt="">

    <div class="spacer"></div>

    <!-- Articolo -->

    <div class="content clearfix">

        <div class="articolo col-8">

            <div class="articolo-img">
                <img src="img/<?= $article['article_id'] ?>/<?= $article['image_name'] ?>" alt="<?= $article['title'] ?>">
                <div class="divider"></div>

                <div class="articolo-img-info">
                    <p><i class="far fa-clock"></i> <a href="404page.php"><?php $data = date_create($article['data']); echo date_format($data, "d/m/Y"); ?></a>
                     <i class="fas fa-user"></i> <a href="404page.php"><?= $article['author_name']. $article['author_surname'] ?></a></p>
                </div>
            </div> <!-- articolo-img -->

            <?= $article['text'] ?>

         <!-- Aside -->

        <?php require ('aside.php'); ?>

    </div> <!-- content clearfix -->

    <div class="content clearfix">
        <!-- Separatore coins -->

        <div class="center">
            <i class="nes-icon coin is-large"></i> <i class="nes-icon coin is-large"></i> <i class="nes-icon coin is-large"></i> <i class="nes-icon coin is-large hidden-coin-4inch"></i> <i class="nes-icon coin is-large hidden-coin"></i>
        </div>

        <div class="spacer"></div>

        <!-- Lista Giochi Piu Venduti -->

       <div class="giochi-piu-venduti">

           <h1 class="center">Giochi più venduti</h1>

           <div class="divider"></div>

           <div class="col-4">
               <a href="pokemon-red.php">
                    <div class="colonna-gioco nes-container with-title is-centered">
                        <h3 class="title">Tetris</h3>
                        <img src="img/tetris.jpg" alt="tetris">
                    </div>
                </a>
           </div>

           <div class="col-4">
               <a href="pokemon-red.php">
                   <div class="colonna-gioco nes-container with-title is-centered">
                       <h3 class="title">Pokémon Red</h3>
                       <img src="img/pokemon-red.jpg" alt="pokémon red">
                   </div>
               </a>
           </div>

           <div class="col-4">
               <a href="pokemon-red.php">
                    <div class="colonna-gioco nes-container with-title is-centered">
                        <h3 class="title">Pokémon Gold</h3>
                        <img src="img/pokemon-gold.png" alt="pokémon gold">
                    </div>
                </a>
           </div>

       </div>  <!-- giochi piu venduti -->
    </div> <!-- Content clearfix -->

    <!-- Footer -->

    <?php require ('footer.php'); ?>
