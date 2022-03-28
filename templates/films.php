<?php require 'header.php'; ?>

<!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
<?php foreach($res as $resultat) { 
    $id=$resultat['id']?>
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="/article?id=<?= $id; ?>">
                            <h2 class="post-title"><?php echo $resultat['titre']; ?></h2>
                            <p class="post-subtitle contenu"><?php echo $resultat['contenu']; ?></p>
                        </a>
                        <p class="post-meta">
                            Posté le
                            <a href="#"><?php 
                            // echo $resultat['utilisateurs_id'];
                             ?></a>
                            28 Mars 2022
                        </p>
                    </div>
                    <!-- Divider-->
<?php } ?>
                    <!-- Pager-->
                </div>
            </div>
        </div>
<?php require 'footer.php' ?>