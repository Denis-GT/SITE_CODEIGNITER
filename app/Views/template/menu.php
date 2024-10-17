<?php
  $Session = session();
?>
<header id="topnav">
  
  <div class="inner">
    <div class="logo">Maison De La Culture</div>
    <nav role='navigation'>
      <ul>
        <li><a href="">Accueil</a></li>
        <li><a href="organisateurs">Organisateurs</a></li>
        <li><a href="evenements">Événements</a></li>
        <li><a href="tarifs">Tarifs</a></li>
        <li><a href="contact">Nous contacter</a></li>
        <?php
        if (isset($_SESSION['email'])) {
          $email = $_SESSION['email'];
          if ($email == 'admin@mail.com') {
            echo '<li><a href="' . base_url('table_utilisateurs') . '">tableUtilisateurs</a></li>';
          }
        }
        ?>
      </ul>
    </nav>
  </div>
</header>