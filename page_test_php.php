<?php
    $title='Il Famoso GameBoy - 4:3 Gaming Blog';
    $active='blog';
    require ('header.php');
    require (__DIR__ . '/includes/functions.php'); 
?>

    <div class="titolo-pagina">
        <div class="content center">
            <h1 class="animated fadeInUp"> Il Famoso GameBoy</h1>
        </div>
    </div>

    <img src="img/brickground.png" class="separatore-main" alt="">

    <div class="spacer"></div>

    <!-- Articolo -->

    <div class="content clearfix">

        <div class="articolo col-8">

            <div class="articolo-img">
                <img src="img/gameboy-pinkbg.jpg" alt="Gameboy">

                <div class="divider"></div>

                <div class="articolo-img-info">
                    <p><i class="far fa-clock"></i> <a href="404page.php">27 febbraio 2020</a>
                     <i class="fas fa-user"></i> <a href="404page.php">Lucas</a></p>
                </div>
            </div> <!-- articolo-img -->

            <!-- Connessione al database -->
            <?php 
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);
                /* pdo - componente */
                $servername = "127.0.0.1";
                $username = "root";
                $password = "root";
                
                try {
                    $conn = new PDO("mysql:host=$servername;port=8889;dbname=gamingblog", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo "Connected successfully";
                } catch(PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }

                $sql = 'SELECT title, intro_text FROM articles';
                //echo $sql;
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                //  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                //      echo '
                // ' . $row['title'] . ' ' . $row['intro_text'] . '
                // ';

                // $query = mysql_query("SELECT * FROM articles");
                // while($cicle=mysql_fetch_array($query)){
                // echo "<p>".$cicle['title']."</p>";
                // }

                // var_dump($rows);

            ?> <!-- connessione database -->

            <?php 
                $articles = $stmt->fetchAll(2);
    
                foreach ($articles as $article) {
                    // echo 'Titolo' . $article['title'];
            ?>
                <div class="center divider"><?= 'Titolo ' . $article['title']; ?></div>
            <?php
                }
            ?>

            <?php 
            
            $a = 10;
            $b = 20;

            if ($a == $b) {
                echo $a;
            }else {
                echo $b;
            }

            ?>


            <div class="divider"></div>

            <!-- Testo dell'articolo -->

            <div class="articolo-testo">

                <p>Commercializzata in Giappone il 21 aprile 1989, la console venne distribuita sul mercato statunitense il 31 luglio dello stesso anno insieme al videogioco Tetris. In Europa il Game Boy arrivò nel settembre del 1990 con quattro titoli di lancio tra cui Super Mario Land, Alleyway e Baseball. Il Game Boy segna l'inizio della seconda serie di console portatile da parte della Nintendo, preceduta dalla Game & Watch presentata nel 1980. I suoi concorrenti principali furono il Game Gear, l'Atari Lynx e la TurboExpress. Nonostante queste console fossero tecnologicamente superiori, il Game Boy ebbe un enorme successo.</p>

                <div class="divider"></div>

                <p>Ogni gioco è scritto su ROM contenute in piccole cartucce di plastica grigia chiamate Game Pak, aventi su una fessura una porta hardware per la connessione con la console. Le cartucce del Game Boy misurano 5,8×6,5 cm. Alcuni giochi permettono anche di salvare le partite e riprenderle in un secondo momento dopo lo spegnimento, grazie all'utilizzo di una batteria tampone integrata nella cartuccia.</p>

                <div class="divider"></div>

                <!-- Specifiche Tecniche-->

                <h2>Specifiche tecniche</h2>

                <div class="divider"></div>

                <ul>
                    <li>CPU: Sharp LR35902 a 8 bit modificato (derivato dallo Zilog Z80), impostato a 4,19 MHz. Implementa anche un generatore di suoni.</li>
                    <li>RAM: 8 kB S-RAM interna</li>
                    <li>ROM: cartucce da 256 kB, 512 kB, 1 MB, 2 MB, 4 MB e 8 MB</li>
                    <li>Video RAM: 8 kB interna</li>
                    <li>Suono: 4 canali stereo. L'unità ha un solo speaker, ma l'uscita audio per le cuffie è stereo</li>
                    <li>Display: LCD da 160×144 pixel</li>
                    <li>Schermo: 66 mm diagonale</li>
                    <li>Colore: 4 gradi di grigio (verde-nero)</li>
                    <li>Comunicazione: fino a 4 Game Boy collegabili tramite cavo</li>
                    <li>Batterie: 4 batterie tipo AA per circa 36 ore di gioco</li>
                </ul>

                <div class="spacer"></div>

            </div> <!-- Articolo testo -->
        </div> <!-- Articolo col-8 -->

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
