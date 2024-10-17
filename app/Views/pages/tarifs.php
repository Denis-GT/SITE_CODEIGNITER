<?php
  $Session = session();
?>
<body class="fond_1">
  <br><br><br><br><br><br><br><br>
  <center>
    <div class="louer_kart">
      <section id="Calculator" style="margin-top: 5%; margin-bottom: 5%;">
        <form class="align-form-louer">
          <label for="distance">Nombre de kartings</label><br>
          <br>
          <input type="number" id="nombre_de_karts" name="nombre_de_karts"><br>
          <br>
          <br>
          <br>
          <label for="nbpeople">Nombre de jours</label><br>
          <br>
          <input type="number" id="nombre_de_jours" name="nombre_de_jours"><br>
          <br>
          <br>
          <br>
          <label for="tarif">Tarif total</label><br>
          <br>
          <input type="number" id="tarif" name="tarif">€<br>
          <br>
          <br>
          <br>
          <a type="calcul-submit" value="Calculer" onclick="calculer();">Calculer</a>
        </form>
      </section>
    </div>
  </center>


  <script>
    function calculer() {
      var NB_Karts = document.getElementById("nombre_de_karts").value;
      var NB_Jours = document.getElementById("nombre_de_jours").value;

      tarif.value = (NB_Karts * 137 * NB_Jours)
    }
  </script>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


  </center>
  </div>

  <script src="../js/script.js"></script>
</body>

</html>