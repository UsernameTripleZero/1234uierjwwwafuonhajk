<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/basis-stylen.css">
    <link rel="stylesheet" href="css/film-overzicht.css">
    <link rel="icon" type="image/ico" href="afbeeldingen/logo.jpg"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <title>FletNix</title>
</head>

<body>
<div class="root-container">
  <?php
  include "header.php"; ?>

        <main>
            <div class="movie-container">
              <!-- Films gesorteerd op genre -->
              <!-- elk verschillend genre een id gegeven zodat we bij het dropdown menu er naar kunnen linken -->
                <div class="genre" id="science-fiction">
                    <p>Science fiction</p>
                    <div><a href="afspelen.php"><img src="banners/The-Force-Awakens.jpg" alt="The Force Awakens"/> </a>
                        <p><a href="detail-pagina.php">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/Back-To-The-Future.jpg" alt="Back to the future"/>
                    </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/The-Terminator.jpg" alt="Terminator"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/Iron-Man.jpg" alt="Iron Man"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/Aliens.jpg" alt="Aliens"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/Jurassic-Park.jpg" alt="Jurassic Park"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                </div>

                <div class="genre" id="Action">
                    <p>Action</p>
                    <div><a href="afspelen.html"><img src="banners/Deadpool.jpg" alt="Deadpool"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/The-Avengers.jpg" alt="The avengers"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/Dark-Knight.jpg" alt="The Dark Knight"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/The-Matrix.jpg" alt="The Matrix"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/Dunkirk.jpg" alt="Dunkirk"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/Die-hard.jpg" alt="Die Hard"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>

                </div>

                <div class="genre" id="Comedy">
                    <p>Comedy</p>
                    <div><a href="afspelen.html"><img src="banners/Airplane.jpg" alt="Airplane"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/MrBeans-Holiday.jpg" alt="Mr.Bean's Holiday"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/The-Hangover.jpg" alt="The Hangover"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/Due-Date.jpg" alt="Due Date"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/Lets-Be-Cops.jpg" alt="Let's Be Cops"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/The-Interview.jpg" alt="The Interview"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                </div>

                <div class="genre" id="Animation">
                    <p>Animation</p>
                    <div><a href="afspelen.html"><img src="banners/Toy-Story.jpg" alt="Toy Story"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/Toy-Story-2.jpg" alt="Toy Story 2"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/Toy-Story-3.jpg" alt="Toy Story 3"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/Train-Your-Dragon.jpg"
                                                      alt="How to train you Dragon"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/Train-Your-Dragon-2.jpg"
                                                      alt="How to train you Dragon 2"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                    <div><a href="afspelen.html"><img src="banners/Wall-E.jpg" alt="WALL-E"/> </a>
                        <p><a href="detail-pagina.html">Ga naar detail-pagina</a></p>
                    </div>
                </div>
            </div>

        </main>
        <?php
        include "footer.html"; ?>
</div>
</body>

</html>
