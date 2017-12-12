<!--Gemaakt door Roy & Michael , I1B -->
<!-- Beroepsproduct 1 statische website FletNix -->
<!-- Alles behalve article hebben wij in dit bestand eenmalig gecomment, omdat derest hetzelfde is op elke html pagina (menu-bal,header,footer) -->

<?php
function groeten() {
  $uur = date('H');
  if ($uur < 12) {
    return 'Goede morgen!';
  }
  elseif ($uur < 18) {
    return 'Goede middag!';
  }
    else {
      return 'Goede avond';
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/basis-stylen.css">
  <link rel="stylesheet" href="/css/indexx.css">
  <link rel="icon" type="image/ico" href="afbeeldingen/logo.jpg" />
  <!-- Font awesome-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <title>FletNix</title>
</head>

<body>
  <?php
  include "header.php";
  ?>
  <!--De content van de pagina varieert in elke html-bestand in article -->
    <article>
      <div class="article-container">
        <div class="Introductie">
          <h2>home pagina <?php  echo groeten()?></h2>
          <!-- crawlende text op de hoofdpagina in start-wars style  -->
          <section class="star-wars">
            <div class="crawl">
              <h2>Long time ago in a galaxy far far away...</h2>
              <h3>FLETNIX The New Hope</h3>
              <p>It is a period of movie nights. Netflix movies, striking from a hidden base, have won their first victory against the evil Netflix coöperation.</p>
              <p>During the battle, Rebel spies managed to steal secret plans to the Empire’s ultimate weapon, the DANK MEMES, an armored film station with enough power to destroy an entire internet.</p>
              <p>Pursued by the Empire’s sinister agents, Princess Peach races home aboard her starship, custodian of the stolen plans that can save her people and restore freedom to the galaxy…</p>
            </div>
          </section>
        </div>

        <!-- drie vierkanten met redenen waarom je fletnix zou moeten gebruiken in index.html-->
        <div class="Redenen">
          <div>
            <h4>Join the dark side we have cookies 🍪.</h4></div>
          <div>
            <h4>Join the dark side we have dank memes.</h4></div>
          <div>
            <h4>It's NOT a trap.</h4></div>
        </div>
      </div>
    </article>
<?php
include "footer.html"; ?>
</body>
</html>
