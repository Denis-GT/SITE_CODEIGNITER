<body class = "fond_1">
  <map name="kart-map">
    <area shape="poly" target="_self" alt="Moteur" title="Moteur" href="pages/moteur.php" coords="230,231,231,219,231,208,219,199,212,201,203,202,192,203,192,211,195,216,188,220,193,225,199,227,206,230,214,232,221,233" onMouseOver="infoKart('Le moteur permet de faire avancer le karting.')">
    <area target="_self" alt="Roue" title="Roue" href="pages/roue.php" coords="406,261,28" shape="circle" onMouseOver="infoKart('Les roues fournissent l adérence du karting.');">
    <area target="_self" alt="Roue" title="Roue" href="pages/roue.php" coords="163,260,32" shape="circle" onMouseOver="infoKart('Les roues fournissent l adérence du karting.');">
    <area target="_self" alt="Carroserie" title="Carroserie" href="pages/carrosserie.php" coords="197,234,327,238,340,244,344,255,343,265,341,272,333,276,322,278,308,280,196,277,199,264,201,252,197,241" shape="poly" onMouseOver="infoKart('La carrosserie amorti le choc en cas d accident.');">
    <area target="_self" alt="Carroserie" title="Carroserie" href="pages/carrosserie.php" coords="90,242,103,230,110,231,112,242,119,247,117,275,104,276,96,271,89,268" shape="poly" onMouseOver="infoKart('La carrosserie amorti le choc en cas d accident.');">
    <area target="_self" alt="Carroserie" title="Carroserie" href="pages/carrosserie.php" coords="454,278,462,281,472,280,480,282,489,281,498,280,509,279,519,275,521,265,521,254,514,246,506,237,503,225,496,214,485,204,471,192,447,174,425,163,403,155,390,153,371,151,371,159,375,170,385,180,400,186,416,192,427,199,447,204,467,210,481,218,489,230,483,240,476,250,465,244,455,244,455,255,455,265,454,269" shape="poly" onMouseOver="infoKart('La carrosserie amorti le choc en cas d accident.');">
    <area target="_self" alt="Equipement" title="Equipement" href="pages/equipement.php" coords="371,254,379,240,384,234,396,229,375,223,359,218,346,203,329,201,291,212,310,224,311,233,329,235,352,250" shape="poly" onMouseOver="infoKart('L équipement protége le pilote des débris, des frottements et du feu.');">
    <area target="_self" alt="Equipement" title="Equipement" href="pages/equipement.php" coords="334,169,333,179,327,186,316,187,304,188,295,195,288,200,279,206,265,216,263,223,261,229,253,230,243,229,237,221,233,211,228,202,215,194,200,194,187,198,188,205,186,211,177,200,174,189,171,178,170,164,170,151,165,132,159,113,161,99,170,89,184,84,202,83,216,89,225,97,231,111,237,129,229,153,221,161,230,168,240,175,248,180,256,188,265,189,275,187,286,177,296,173,309,166,319,164,327,164" shape="poly" onMouseOver="infoKart('L équipement protége le pilote des débris, des frottements et du feu.');">
    <area target="_self" alt="Equipement" title="Equipement" href="pages/equipement.php" coords="431,237,434,244,436,255,438,265,445,257,450,248,456,238,463,233,464,221,456,216,446,221,438,231" shape="poly" onMouseOver="infoKart('L équipement protége le pilote des débris, des frottements et du feu.');">
  </map>
  <section>
    <div class="inner">
      <center class="txt_centr_noir">
        <h1>KartingPro</h1>
      </center>
    </div>
  </section>
  <section class="alternate" id="demosection2">
    <div class="inner">
      <center class="txt_centr_banc">
        <p>Le karting est la base du pilotage et de la mécanique, c'est la première étape du sport automobile et chaque grand pilote est passe par là. C'est le sport automobile le plus accessible mais aussi le plus pratiqué. Il existe plusieurs courses et tournois à différents niveaux. Pour pouvoir pratiquer le karting de compétition il faut avoir une licence que l'on peut obtenir en s'inscrivant sur le site de la FFSA</p>
        <p></p>
        <br><br>
        <img src="js/images/photo10.jpg" usemap="#kart-map">
        <h3>Infos : </h3>
        <h5><div id="description"></div></h5>
      </center>
      <br>
      <br>
      <br>
      <script type="text/javascript">
        function infoKart(txtInfo) {
          window.document.getElementById('description').innerHTML = txtInfo
        } 
      </script>
    </div>
  </section>
  <form method="post"></form>
</body>

  
</html>