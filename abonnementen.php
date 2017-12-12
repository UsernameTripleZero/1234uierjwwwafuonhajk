<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/basis-stylen.css">
    <link rel="stylesheet" href="css/abonnementen.css">
    <link rel="icon" type="image/ico" href="afbeeldingen/logo.jpg"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <title>FletNix</title>
</head>

<body>
<div class="root-container">
  <?php
  include "header.php";
  ?>

        <article>
            <h2>Abonnomenten</h2>
            <div class="article-container">

                <!-- 3 rechthoeken met de specificaties van elk abbonement -->
                <div class="Accounts"><span>Free</span>
                    <ul>
                        <li>480P<i class="fa fa-check-square-o" aria-hidden="true"></i></li>
                        <li>maximaal 1 scherm<i class="fa fa-check-square-o" aria-hidden="true"></i></li>
                        <li>Spam-mail<i class="fa fa-check-square-o" aria-hidden="true"></i></li>
                    </ul>

                    <h4>Gratis film abbonement voor films tot 480p.</h4>
                    <h3>Prijs 0€</h3>
                </div>

                <div class="Accounts"><span>Basic</span>
                    <ul>
                        <li>720<i class="fa fa-check-square-o" aria-hidden="true"></i></li>
                        <li>Maximaal 3 schermen<i class="fa fa-check-square-o" aria-hidden="true"></i></li>
                        <li>NO Spam-mail<i class="fa fa-check-square-o" aria-hidden="true"></i></li>
                    </ul>
                    <h4>Basic film abbonement voor alle science fiction fans.</h4>
                    <h3>Prijs 6.99€</h3>
                </div>

                <div class="Accounts">
                    <span>Premium</span>
                    <ul>
                        <li>1080P<i class="fa fa-check-square-o" aria-hidden="true"></i></li>
                        <li>Unlimited POWAH<i class="fa fa-check-square-o" aria-hidden="true"></i></li>
                        <li>Lightsaber<i class="fa fa-check-square-o" aria-hidden="true"></i></li>
                    </ul>
                    <h4>Het premium pakket inclusief een ECHTE lightsaber!</h4>
                    <h3>Prijs 9.99€</h3>
                </div>
            </div>
            <!-- Geeft aan hoe de gegevens verzonden moet worden -->
            <form action="URL" method="get">
                <div class="typen">
                  <!-- Radio buttons zodat er maar een button geselecteerd kan worden voor een type abbonoment weergegeven met value-->
                    <input type="radio" name="typen" value="free">
                    <input type="radio" name="typen" value="basic">
                    <!-- Standaard premium gechecked want we willen geld maken 💰-->
                    <input type="radio" name="typen" value="premium" checked>
                </div>
                <!-- Formulieren voor de regristratie -->
                <label for='Voornaam'>Voornaam</label>
                <input id='Voornaam' name='Voornaam' type='text'/>
                <label for='Achternaam'>Achternaam</label>
                <input id='Achternaam' name='Achternaam' type='text'/>
                <label for='Land'>Land</label>
                <input id='Land' name='Land' type='text'/>
                <label for='Geboorte-datum'>Geboorte-datum</label>
                <input id='Geboorte-datum' name='Geboorte-datum' type='date' min="1800-01-01"/>
                <label for='Rekeningnummer'>Rekeningnummer</label>
                <input id='Rekeningnummer' name='Rekeningnummer' type='number'/>
                <label for='Gebruikersnaam'>Gebruikersnaam</label>
                <input id='Gebruikersnaam' name='Gebruikersnaam' type='text'/>
                <label for='Wachtwoord'>Wachtwoord</label>
                <input id='Wachtwoord' name='Wachtwoord' type='password'/>
                <label for='WachtwoordBevesteging'>Bevestig uw wachtwoord</label>
                <input id='WachtwoordBevesteging' name='Wachtwoord' type='password'/>
                <!-- Verzend de ingevulde waardes -->
                <button type="submit" name="submit">Verzend</button>
            </form>
        </article>
        <?php
        include "footer.html"; ?>
</div>
</body>
</html>
