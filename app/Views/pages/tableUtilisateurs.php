<?php
  $Session = session();
?>

<body class="fond_2">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <?php if ($lesUtilisateurs): ?>
                <table border=7>
                    <tr>
                        <th>N° Utilisateur</th>
                        <th>E-mail</th>
                        <th>Nom</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($lesUtilisateurs as $utilisateur): ?>
                        <tr>
                            <form action="<?= base_url('table_utilisateurs') ?>" method="post">
                                <td><input type='text' name='idUtilisateur' size='20' value='<?= $utilisateur->idUtilisateur ?>' readonly></td>
                                <td><input type='text' name='email' size='20' value='<?= $utilisateur->email ?>'></td>
                                <td><input type='text' name='nom' size='20' value='<?= $utilisateur->nom ?>'></td>
                                <td><input type='text' name='typeClient' size='20' value='<?= $utilisateur->typeClient ?>'></td>
                                <td><input type='submit' name='update' value='Modifier'> <input type='submit' name='delete' value='Supprimer'></td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php else: ?>
                Aucun enregistrement trouvé.
            <?php endif; ?>
            <br>
        </div>
    </div>
</body>