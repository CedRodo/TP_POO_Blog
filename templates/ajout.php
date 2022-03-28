<?php require 'header.php'; 

if (isset($erreur)) { ?>
<p><?= $erreur; ?></p>

<?php } else { ?>
<p>L'article a bien été ajouté</p>

<?php } require 'footer.php'; ?>