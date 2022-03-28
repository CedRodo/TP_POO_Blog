<?php include_once "header.php"; ?>

<h1>Poster un article</h1>
<div class="container">

<form class="well form-horizontal" enctype="multipart/form-data" action="ajout" method="POST"  id="contact_form">
<fieldset>

<!-- Pseudo -->

<div class="center">
<div class="form-group">
    <label for="pseudo" class="col-md-4 control-label"> <span>Pseudo Utilisateur</span> </label>  
    <div class="col-md-5 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <select name="pseudo" class="form-control selectpicker" required>
                <option value="">-- Pseudo de l'utilisateur --</option>
            <?php foreach($uti as $utilisateur) { ?>
                <option value="<?= $utilisateur['id']; ?>"><?= $utilisateur['pseudo']; ?></option>                
            <?php } ?>
            </select>
            <!-- <input type="text" name="pseudo" placeholder="Pseudo" id="pseudo" max="50" value="" required="required" class="form-control"> -->
        </div>
    </div>
</div>

<!-- Titre de l'article -->

<div class="form-group">
    <label for="nom" class="col-md-4 control-label" > <span>Titre de l'article</span> </label> 
    <div class="col-md-5 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  type="text" placeholder="Titre" name="titre" id="titre" max="50" value="" required="required" class="form-control">
        </div>
    </div>
</div>

<!-- Contenu -->

<div class="form-group">
    <label for="contenu" class="col-md-4 control-label" ><span>Contenu</span></label> 
    <div class="col-md-5 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <textarea placeholder="Contenu" id="contenu" name="contenu" rows="15" cols="40" required="required" class="form-control"></textarea>
        </div>
    </div>
</div>

<!-- Catégorie -->

<div class="form-group"> 
    <label class="col-md-4 control-label"> <span>Catégorie</span> </label>
    <div class="col-md-5 selectContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="categorie" class="form-control selectpicker" required>
                <option value="">-- Nom de la catégorie --</option>
            <?php foreach($cat as $categorie) { ?>
                <option value="<?= $categorie['id']; ?>"><?= $categorie['nom']; ?></option>                
            <?php } ?>
            </select>
        </div>
    </div>
</div>
<!-- Séléction de la photo à ajouter et Bouton "Envoi" -->

<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-5"><br>
<input type="file" name="photo" id="photo" style="color: orange"><input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<br/>
<br/>
<button style="margin-left: 125px;" type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspENVOYER <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
</div>
</div>
</div>
</fieldset>
</form>
</div>
</div><!-- /.container -->


<?php include_once "footer.php"; ?>