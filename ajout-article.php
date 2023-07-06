<?php include('includes/header.php'); ?>

<section class="container">
    <div class="row">
        <h1>Ajouter un article</h1>

        <form action="validation-article.php" method="POST" class="col offset-md-2">

            <input type="text" name="titre" placeholder="Titre de l'article" class="form-control my-3" required>
            <textarea name="description" placeholder="description" class="form-control my-3" required></textarea>
            <input type="int" name="tarif" placeholder="Tarif du séjour" class="form-control my-3" required>
            <input type="int" name="jour" placeholder="Nombre de jours" class="form-control my-3" required>
            <input type="int" name="nuit" placeholder="Nombre de nuits" class="form-control my-3" required>
            <input type="int" name="personne" placeholder="Nombre de personnes" class="form-control my-3" required>
            <input type="text" name="lieu" placeholder="Lieu" class="form-control my-3" required>
            <textarea name="programme" placeholder="Programme" class="form-control my-3"required></textarea>
            <textarea name="commentaire" placeholder="Commentaire" class="form-control my-3"></textarea>
            <input type="text" name="image"  class="form-control" required>
            <input type="submit" value="Ajouter" class="btn btn-success my-3">
            <a href="index.php" class="btn btn-secondary">Retour</a>
        </form>
    </div>
        
</section>

<?php include('includes/footer.php'); ?>