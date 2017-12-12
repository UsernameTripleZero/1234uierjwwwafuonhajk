<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/basis-stylen.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/ico" href="afbeeldingen/logo.jpg"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <title>FletNix</title>
</head>

<body>
<div class="root-container">
  <?php
  include "header.php"; ?>




        <main>
          <!--fromulieren -->
            <form class="login-form" action="URL" method="get">
                <label for="username">Gebruikersnaam</label>
                <input id="username" type="text" name="username" value="Gebruikersnaam">

                <label for="password">Wachtwoord</label>
                <input id="password" type="password" name="password" value="Wachtwoord">

                <input type="submit" name="login" value="login">
                <input type="submit" name="vergeten" value="Wachtwoord vergeten">
            </form>
        </main>
        <?php
        include "footer.html"; ?>
</div>
</body>

</html>
