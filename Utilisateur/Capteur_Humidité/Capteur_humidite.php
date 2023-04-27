<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../Origine/CSS/1_Header.css">
    <link rel="stylesheet" type="text/css" href="../../Origine/CSS/2_Main.css">
    <link rel="stylesheet" type="text/css" href="../../Origine/CSS/3_Footer.css">
    <title>Metric Care</title>
    <link rel="icon" href="../../Origine/Images/Logo.png">
    <link rel="stylesheet" type="text/css" href="capteur_humidite.css">
  </head>
  <body>
    <header>
      <div id="Rectangle_Debut">
        <nav>
          <div>
            <img id="Logo" src="../../Origine/Images/Logo.png" alt="Logo Metric Metro", width="75", height="40">
            <img id="Logo_Texte" src="../../Origine/Images/Logo_texte.png" alt="Logo Metric Metro", width="200", height="50">
            <a href="https://infinitemeasures.fr/vues/fr/index.php" target="_blank">
            <img id="Logo_Infinite_Measures" src="../../Origine/Images/Infinite_logo.png" alt="Logo Infinite Measures", width="60", height="60"> </a>
          </div>      
          <div class="contenuNav">
            <a>🌐Français</a>
            <a>Tableau de bord</a>
            <a>FAQ</a>
            <a>Forum</a>
            <a>Ticket</a>
            <a>Profil</a>
          </div>
        </nav>
      </div>
    </header>
    <main>

    <title>Capteur d'humidité</title>
        <div class="text">
            <a class="act">Valeur actuelle</a>
            <a class="min">Valeur minimale</a>
            <a class="max">Valeur maximale</a>
            <a class="moy">Valeur moyenne</a>
            <a class="explication">Voici le capteur DHT11. C'est le capteur d'humidité. Il mesure l'humidité en %.</a>
          </div>

       <div class="graph">
        <iframe src="https://g28jpj-martin-joncourt.shinyapps.io/humid_capt_/" width="100%" height="100%" frameborder="0"></iframe>
      </div>
        <input class="rect0" type="button" value="ACT">
        <input class="rect1" type="button" value="MIN">
        <input class="rect2" type="button" value="MAX">
        <input class="rect3" type="button" value="MOY">
        
        <img id="image" src="dht11.png" alt="Capteur d'humidité">

    </main>
    <footer class = "Footer">
      <div class = "contenu_Footer">
        <div class="Footer_contenu_Logo">
          <img id="LogoFooter" src="../../Origine/Images/image.png" alt="Logo Metric Metro", width="80", height="80">
          <p>Metric Care © 2023 - Tous droits réservés</p>
          <a href="https://infinitemeasures.fr/vues/fr/index.php" target="_blank">
          <img id="Logo_Infinite_Measures_Footer" src="../../Origine/Images/Infinite_logo.png" alt="Logo Infinite Measures", width="60", height="60"> </a>
        </div>
        <div class="Footer_contenu_texte">
          <a>CGU</a> <a>|</a>
          <a>À propos</a> <a>|</a>
          <a>Préférences des cookies</a>
        </div>
      </div>
    </footer>
  </body>
</html>
