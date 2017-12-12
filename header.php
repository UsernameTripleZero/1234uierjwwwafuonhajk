<?php
$menu_items = ['film-overzicht.php#science-fiction'=>'Science fiction' ,
'film-overzicht.php#Action' =>'Action' ,
'film-overzicht.php#Comedy' => 'Comedy','film-overzicht.php#Animation' =>'Animation'];
function MaakMenu_Items () {
global $menu_items;
foreach ($menu_items as $key =>$value){
    echo $teksten = "<li> <a href='$key'>".$value."</a> </li>" ;

}
}

?>

<!-- Boven balk met netflix logo , menu inklap checkbox en hover over de Gebruikersnaam om naar inlogpagina en ProfielPagina te gaan -->
    <header>
      <div class="header-container">
        <!-- checkbox die de menu-balk moet laten zien wanneer gechecked/niet gechecked -->
        <input type="checkbox" class="menu-toggle" id = 'thing' >
        <!-- Menu-balk in de nav-->
        <nav>
          <div class="menu-items">
            <!-- De dropdown van filmoverzicht met hover-->
            <ul class="dropdown">
              <!-- altijd zichtbaar in menu-bar -->
              <li><a href="film-overzicht.php">FilmOverzicht</a></li>
              <li>
                <!-- dropdown content , dit is alleen zichtbaar als er over de class dropdown, oftwel filmoverzicht wordt gehoverd-->
                <ul class="dropdown-content">
                  <!-- Verwijst met een href naar de verschilllende id's in filmoverzicht -->
                  <?php echo MaakMenu_Items(); ?>
                </ul>
              </li>
            </ul>
            <ul>
              <!-- altijd zichtbaar in menu-bar -->
              <li><a href="index.php">Home</a></li>
              <li><a href="abonnementen.php">Abonnement</a></li>
              <li><a href="over-ons.php">Over ons</a></li>
            </ul>
          </div>
        </nav>
          <!-- fletnix logo -->
        <div class="logo">
          <i class="fa fa-film fa-2x" aria-hidden="true"></i>
          <h1>FletNix</h1>
        </div>

        <div class="login">
          <div class="dropdown">
            <a href="#">Naam</a>
            <div class="dropdown-content">
              <a href="login.php">Login</a>
              <a href="profiel-pagina.php">ProfielPagina</a>
            </div>
          </div>
          <i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>
        </div>
      </div>
    </header>
