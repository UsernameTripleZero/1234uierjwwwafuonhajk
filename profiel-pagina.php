<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/basis-stylen.css">
    <link rel="stylesheet" href="css/profiel-pagina.css">
    <link rel="icon" type="image/ico" href="afbeeldingen/logo.jpg"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <title>FletNix</title>
</head>

<body>
<div class="root-container">
  <?php
  include "header.php"; ?>

        <main>
            <h1>Welkom Gebruiker</h1>
            <div class="persoonlijke-gegevens">
                <img src="afbeeldingen/profiel-foto.jpg" alt="profiel foto"/>
                <h2>Persoonlijke Gegevens:</h2>
                <!-- tabel met persoonlijke gegevens -->
                <table>
                    <tr>
                      <!-- th = table heading td= table data tr = table row-->
                        <th>Voornaam</th>
                        <td>Jan</td>
                    </tr>
                    <tr>
                        <th>Achternaam</th>
                        <td>Jansen</td>
                    </tr>
                    <tr>
                        <th>Gebruikersnaam</th>
                        <td>Deurmatje002</td>
                    </tr>
                    <tr>
                        <th>Geboortedatum</th>
                        <td>1998-01-23</td>
                    </tr>
                    <tr>
                        <th>Land</th>
                        <td>Nederland</td>
                    </tr>
                </table>
            </div>

            <!-- tabel met de gekeken films van de gebruiker-->
            <div class="kijk-geschiedenis">
                <h2>Kijkgeschiedenis:</h2>

                <table>
                    <tr>
                        <th>Film naam:</th>
                        <th>Gekeken op:</th>
                    </tr>
                    <tr>
                        <td>Star Wars: Episode VII - The Force Awakens</td>
                        <td>2017-11-30 06:30</td>
                    </tr>
                    <tr>
                        <td>The Lego Movie</td>
                        <td>2017-11-12 15:00</td>
                    </tr>
                    <tr>
                        <td>Deadpool</td>
                        <td>2017-10-20 10:30</td>
                    </tr>
                    <tr>
                        <td>Back to the Future</td>
                        <td>2016-09-26 20:30</td>
                    </tr>
                    <tr>
                        <td>Toy story 3</td>
                        <td>2016-01-21 16:05</td>
                    </tr>
                    <tr>
                        <td>Toy story 2</td>
                        <td>2016-01-20 08:30</td>
                    </tr>
                    <tr>
                        <td>Toy story</td>
                        <td>2016-01-19 23:45</td>
                    </tr>
                </table>
            </div>
        </main>
        <?php
        include "footer.html"; ?>
</div>
</body>
</html>
