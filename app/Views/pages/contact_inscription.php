<?php
  $Session = session();
?>
<body class = "fond_1">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="container">
    <form id="contact" class="form" method="post" action="<?= base_url('contact_ajouter'); ?>">
        <h3>Inscription</h3>
        <h4>Veuillez créer un compte pour pouvoir nous contacter</h4>
      
      <fieldset>
      <label for="prenom"></label>
        <input type="text" name="prenom" placeholder="Prénom" tabindex="5" required/>
      </fieldset>

      <fieldset>
      <label for="nom"></label>
        <input type="text" name="nom" placeholder="Nom" tabindex="5" required/>
      </fieldset>

      <fieldset>
      <label for="mail"></label>
        <input type="email" name="email"  placeholder="Mail" tabindex="5" required/>
      </fieldset>

      <fieldset>
      <label for="password"></label>
        <input type="password" name="password" placeholder="Mot De Passe" tabindex="5" required/>
      </fieldset>
      
      <fieldset >
      <label for="cpassword"></label>
        <input type="password" name="cpassword" placeholder="Confirmez Mot De Passe" tabindex="5" required pattern="(?=^.{8,}$)(?=.*[A-Z])(?=.*[a-z]).*" />
      </fieldset>

      <fieldset>
      <label for="typeClient" name="radio_inscription">
      <p>Vous êtes :</p>
      <p>Un particulier<input type="radio" name="radio_inscription" id="radio_inscription_particulier" value="particulier" tabindex="5" required></p>
      <p>Un proffestionnel<input type="radio" name="radio_inscription" id="radio_inscription_proffestionnel" value="proffestionnel" tabindex="5" required></p>
      <p>Une entreprise<input type="radio" name="radio_inscription" id="radio_inscription_entreprise" value="entreprise" tabindex="5" required></p>
      </label>
      </fieldset>

      <fieldset>
      <button name="submit" type="submit" value="envoyer" id="contact-submit" data-submit="...Sending">S'inscrire</button>
      </fieldset>
      <a href="<?= base_url('contact'); ?>">J'ai un compte.</a>
    </form>
</div>

  <Center class="map">
      <p>Nous Contacter Sur Place</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.7465370295126!2d2.2927652516306805!3d48.863043479186196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fe6a147aaad%3A0x9c87dea00bfe8a17!2sF%C3%A9d%C3%A9ration%20Fran%C3%A7aise%20du%20Sport%20Automobile!5e0!3m2!1sfr!2sfr!4v1669540669625!5m2!1sfr!2sfr"width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </Center>
  <br>
  <br>
  <br>

</body>

<script src="js/scripts.js"></script>

</html>