<?php require 'header.php'; ?>
<article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <img style="display: block;" height=400px src="http://localhost:8000/assets/img/<?= $res[0]['cover']; ?>">
                        <h2 class="section-heading"><?= $res[0]['titre']; ?></h2>
                        <p><?= $res[0]['contenu']; ?></p>
                        <div style="margin-top: 70px; text-align: end;"><a href="/supp_article?id=<?= $res[0]['id']; ?>"><img width=30px src="http://localhost:8000/assets/icons_logos/supprimer4.png"></a></div>
                    </div>
                </div>
            </div>
        </article>

<?php require 'footer.php'; ?>