<?php
$Session = session();
?>

<body class="fond_1">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php
  if (isset($_SESSION['email'])) {
    ?>
    <div class="container">
      <form id="contact" class="form" method="post">
        <h3>Vous êtes connecté(e)</h3>
        <h4>Bienvenu(e) !</h4>
        <a href="<?= base_url('contact_deconnexion'); ?>">Se déconnecter</a>
      </form>
    </div>
  <?php } else { ?>
    <div class="container">
      <form id="contact" class="form" method="post" action="<?= base_url('contact_connection'); ?>">
        <h3>Se connecter</h3>
        <h4>Veuillez vous connecter ou crée un compte pour nous contacter</h4>

        <fieldset>
          <label for="mail"></label>
          <input type="email" name="email" placeholder="Mail" tabindex="5" required />
        </fieldset>

        <fieldset>
          <label for="password"></label>
          <input type="password" name="password" placeholder="Mot De Passe" tabindex="5" required />
        </fieldset>
        <br>
        <fieldset>
          <button name="submit" type="submit" value="envoyer" id="contact-submit"
            data-submit="...Sending">Connection</button>
        </fieldset>
        <a href="<?= base_url('contact_inscription'); ?>">Créer un compte</a>
      </form>
    </div>
  <?php } ?>


  <Center class="map">
    <p>Nous Contacter Sur Place</p>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.7465370295126!2d2.2927652516306805!3d48.863043479186196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fe6a147aaad%3A0x9c87dea00bfe8a17!2sF%C3%A9d%C3%A9ration%20Fran%C3%A7aise%20du%20Sport%20Automobile!5e0!3m2!1sfr!2sfr!4v1669540669625!5m2!1sfr!2sfr"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </Center>
  <br>
  <br>
  <br>

</body>

<script herf="js/scripts.js"></script>

</html>