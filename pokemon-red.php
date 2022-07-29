<?php
    $title ="Pokemon Red - 4:3 Gaming Blog";
    $active ="giochi";
    require('header.php');
?>

    <!-- Titolo Pagina -->

    <div class="titolo-pagina">
        <div class="content center">
            <h1 class="animated fadeInUp">Pokémon Red</h1>
        </div>
    </div>

    <img src="img/brickground.png" class="separatore-main" alt="super mario bricks">

    <div class="spacer"></div>

    <div class="content clearfix">

        <div class="articolo col-8">

            <div class="articolo-img">
                <img src="img/pokemon-red-startscreen.jpg" alt="pokemon red">

                <div class="divider"></div>

                <div class="articolo-info">
                    <p><i class="far fa-clock"></i> <a href="404page.php">27 febbraio 2020</a>
                        <i class="fas fa-user"></i> <a href="404page.php">Lucas</a></p>
                </div>
            </div> <!-- articolo-img -->

            <div class="divider"></div>

            <!-- Testo dell'articolo -->

            <div class="articolo-testo">

                <!-- Sezione testo del gioco -->

                <section class="descrizione-gioco">

                  <!--  <img class="img-p-border-left" src="img/Pokemon-Red-Version-cartridge.jpeg" alt="pokemon red cartridge"> -->

                    <p class="paragrafo-1">Pokémon Rosso e Pokémon Blu, sono i primi due videogiochi nella serie di giochi di ruolo giapponesi Pokémon, sviluppata da Game Freak sotto la direzione di Satoshi Tajiri. Pubblicati da Nintendo per la console portatile Game Boy, i due titoli sono apparsi originariamente il 27 febbraio 1996 in Giappone con il nome di Pocket Monsters Rosso e Pocket Monsters Verde, mentre Pocket Monsters Blu è stato pubblicato il 15 ottobre seguente come edizione speciale. I due videogiochi sono stati esportati con il titolo di Pokémon Rosso e Blu in Nord America e Australia nel 1998 e in Europa nel 1999.</p>

                    <div class="divider"></div>

                  <!-- <img class="img-p-border-right" src="img/pokemon-red-mew.jpg" alt="pokemon red mew"> -->

                    <p>Nei videogiochi il giocatore controlla gli spostamenti del personaggio principale attraverso la regione fittizia di Kanto, alla cattura di creature chiamate Pokémon da allenare e utilizzare nelle sfide contro altri allenatori. Lo scopo del gioco è diventare il campione della Lega Pokémon, sconfiggendo gli otto capipalestra e i quattro allenatori più forti della regione: i Superquattro. Un altro obiettivo è quello di completare il Pokédex, l'enciclopedia fittizia presente all'interno dei giochi, catturando tutte le 150 specie di Pokémon disponibili. I due titoli sono indipendenti l'uno dall'altro, ma condividono la stessa storia. Sebbene possano essere giocate separatamente, è necessario scambiare Pokémon tra le due versioni per completare il Pokédex, poiché ognuna delle due presenta dei Pokémon assenti nell'altra e viceversa. Il 151º Pokémon, Mew, è disponibile soltanto tramite un glitch del gioco o una distribuzione ufficiale di Nintendo.</p>

                    <div class="divider"></div>

                    <div class="center">
                        <img class="img-pokemon-choice" src="img/pokemon-red-choice.jpg" alt="Pokemon first choice">
                    </div>

                    <div class="divider"></div>

                    <p>Pokémon Rosso e Blu hanno goduto di una grande popolarità in Giappone e nei paesi occidentali e hanno dato il via a un media franchise multimilionario secondo solo alla serie di Mario. IGN li ha definiti i giochi di ruolo (GDR) per Game Boy più venduti di sempre e i GDR più venduti in assoluto. I videogiochi originali sono stati rieditati nel 1998 in Pokémon Giallo, un'edizione speciale che riprende elementi della serie televisiva, e nel 2004 in Pokémon Rosso Fuoco e Verde Foglia, remake a colori per Game Boy Advance dei due titoli con numerosi aggiornamenti.</p>

                </section>

            </div> <!-- Articolo testo -->
            <div class="spacer"></div>
            <div class="articolo-info articolo-info-bottom">
                <p class="tags-categoria"><i class="fa fa-folder"></i><a href="categoria.giochi.php"> Giochi</a></p>
                <p class="tags-tag"><i class="fa fa-tag"></i><a href="#"> Pokemon, Gameboy, Giochi, Pokemon Red</a></p>
            </div>

            <!-- Separatore coins -->

            <div class="spacer"></div>

            <div class="center">
                <i class="nes-icon coin is-large"></i> <i class="nes-icon coin is-large"></i> <i class="nes-icon coin is-large"></i> <i class="nes-icon coin is-large hidden-coin-4inch"></i> <i class="nes-icon coin is-large hidden-coin"></i>
            </div>

            <div class="spacer"></div>

            <!-- Presentazione Gioco -->
        <!--
            <div class="presentazione-gioco animated fadeInUp center">
                <img src="img/pokemon-red.jpg" alt="pokemon red">
            </div>
        -->
            <div class="fotorama">
                <img src="img/pokemon-red.jpg" alt="pokemon red">
                <img src="img/Pokemon-Red-Version-cartridge.jpeg" alt="pokemon red cartridge">
                <img src="img/pokemon-red-mew.jpg" alt="pokemon red mew">
            </div>

            <div class="spacer"></div>

        </div> <!-- Articolo col-8 -->

        <!-- Aside -->

        <?php require ('aside.php'); ?>

    </div> <!-- content clearfix -->

    <div class="content clearfix">

        <!-- Emulatore SNES-->
        <div class="nes-emulatore">
            <div class="nes-container with-title is-dark">

                <h1 class="title">Giocalo subito</h1>

                <div id="emu"></div>

            </div> <!-- nes-container -->
        </div> <!-- emulatore snes-->

        <!-- Emulatore non disponibile -->
        <div class="emulatore-non-disponibile">
            <div class="nes-container with-title is-dark">

                <div class="title">Attenzione</div>

                <p>
                    Gioco non disponibile per il mobile.
                    <br /><br />
                    Accedi dal desktop per poter giocarlo.
                </p>

            </div><!-- nes-container -->
        </div> <!-- Emulatore non disponibile-->

    </div><!-- content clearfix -->

    <!-- Footer -->

    <?php
        $gioco = 'pokemon-red';
        require('footer.php');
    ?>