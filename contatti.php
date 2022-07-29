<?php
    $title ='Contatti - 4:3 Gaming Blog';
    $active ='contatti';
    require ('header.php');
?>

    <div class="titolo-pagina">
        <div class="content center">
            <h1 class="animated fadeInUp"> Contatti</h1>
        </div>
    </div>

    <img src="img/brickground.png" class="separatore-main" alt="">

    <div class="spacer"></div>

    <div class="clearfix content">

        <!-- Form -->

        <div class="form">

            <h2 class="center">Scrivici per avere maggiori informazioni</h2>

            <div class="divider"></div>

            <form action="#" method="post" enctype="multipart/form-data">

                <div class="nes-field">
                    <label for="nome_field">Nome</label>
                <input type="text" id="nome_field" class="nes-input" name="nome" required placeholder="Nome e Cognome"><br>
                </div>

                <div class="nes-field">
                    <label for="mail_field">Email</label>
                <input type="email" id="mail_field" name="email" class="nes-input" required placeholder="Email"><br>
                </div>

                <div class="nes-field">
                    <label for="oggetto_field">Oggetto</label>
                <input type="text" id="oggetto_field" class="nes-input" name="oggetto" required placeholder="Oggetto"><br>
                </div>

                <div class="nes-field">
                    <label for="messaggio_field">Il tuo messaggio</label>
                <textarea name="messaggio" id="messaggio_field" class="nes-input" required placeholder="Messaggio"></textarea><br>
                </div>

                <label>
                    <input type="checkbox" class="nes-checkbox" name="privacy" value="letto_privacy" required />
                    <span class="checkbox-testo"> Dichiaro di aver letto la <a href="#">privacy policy</a> nonché di avere già compiuto quattordici anni e, se minore di quattordici, di essere stato autorizzato dal titolare della responsabilità genitoriale, pertanto presto il mio consenso per ricevere le informazioni.</span>
                </label>

                <div class="divider"></div>

                <div class="center">
                <input type="submit" class="nes-btn is-success" name="invia" value="Invia">
                </div>

            </form>

        </div> <!-- form -->
    </div> <!-- content -->

    <!-- Footer -->

<?php require ('footer.php'); ?>