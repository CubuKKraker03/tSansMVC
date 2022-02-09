<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Ticketing</title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="titreBlog">TICKETING</h1></a>
                <h1 class="randomtest">Je vous souhaite la bienvenue sur ce site de ticketing.</h1>
            </header>
            <div id="contenu">
                <?php
                $bdd = new PDO('mysql:host=localhost;dbname=monTicketing;charset=utf8',
                        'admin', 'password');
                $tickets = $bdd->query('select * from T_TICKET inner join T_ETAT
                ON T_ETAT.ET_ID = T_TICKET.ET_ID;');
                foreach ($tickets as $ticket):
                    ?>
                    <article>
                        <header>
                            <h1 class="titreBillet"><?= $ticket['TIC_TITRE'] ?></h1>
                            <time><?= $ticket['TIC_DATE'] ?></time>
                        </header>
                        <p><?= $ticket['TIC_CONTENU'] ?></p>
                        <p>Etat du ticket<?= $ticket['ET_LIB'] ?></p>
                    </article>

                    <hr/>

                <?php endforeach; ?>


            </div> <!-- #contenu -->
            <footer id="piedBlog">
                Blog réalisé avec PHP, HTML5 et CSS.
            </footer>
        </div> <!-- #global -->
    </body>
</html>
