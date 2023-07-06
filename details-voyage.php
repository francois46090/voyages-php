<?php include('includes/header.php'); ?>
    <section id="page-titre" class="overlay">
    
        <h1>Norvège </h1>
        <div class="vague"></div>
    </section>
    <!-- Contenu de la page details des voyages-->

    <main class="container">
        <div class="row">
            <section class="col-7 offset-md-1" id="details-sejour">
                <h2>Lorem ipsum dolor </h2>
                <img src="images/img27.jpg" alt="" class="img-fluid">
                <div class="details">
                    <ul class="d-flex justify-content-center">
                        <li><i class="bi bi-clock"></i> 5J/4N |</li>
                        <li><i class="bi bi-people-fill"></i> Nombre de personnes : 4 |</li>
                        <li><i class="bi bi-geo-alt-fill"></i> Portugal</li>
                    </ul>
                </div>
                
                <div id="tabs" class="my-5">
                    <ul>
                        <li> <a href="#tab1">Description</a></li>
                        <li><a href="#tab2">Programme</a></li>
                        <li><a href="#tab3">Commentaire</a></li>
                        <li><a href="#tab4">Carte</a></li>
                    </ul>
                    <div id="tab1">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, nam blanditiis, quos ut quo, facilis
                            consequatur perferendis officiis temporibus dolores a nisi nemo in tempora. Enim quam quibusdam hic facilis?
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, nam blanditiis, quos ut quo, facilis
                            consequatur perferendis officiis temporibus dolores a nisi nemo in tempora. Enim quam quibusdam hic facilis?
                        </p>
                        
                        <ul>
                            <li class="text-dark"><i class="bi bi-check"></i> lorem ipsum olor</li>
                            <li class="text-dark"><i class="bi bi-check"></i> lorem ipsum olor</li>
                            <li class="text-dark"><i class="bi bi-check"></i> lorem ipsum olor</li>
                            <li class="text-dark"><i class="bi bi-check"></i> lorem ipsum olor</li>
                            <li class="text-dark"><i class="bi bi-check"></i> lorem ipsum olor</li>
                        </ul>
                    </div>
                    <div id="tab2">
                        2
                    </div>
                    <div id="tab3">

                        <div>
                            <!-- Affichage des commentaires-->
                        <?php 

                        $bdd = mysqli_connect('localhost','root','','voyages');

                        $sql = 'SELECT *  FROM commentaires ORDER BY date_commentaire DESC LIMIT 3';

                        $resultat = $bdd -> query($sql);

                        while($data = mysqli_fetch_array($resultat)){

                            echo '
                                <article class="commentaires">
                                    <span>'
                                    .$data['nom']
                                    .' '
                                    .$data['prenom']
                                    .'</span>
                                    <span>'
                                    .$data['date_commentaire'] 
                                    .'</span>

                                    <h5 class="mt-3">'.$data['sujet'].'</h5>
                                    <p>'.$data['commentaire'].'</p>

                                    <a href="#" class="btn btn-danger text-white">Retour</a>
                                </article>
                            
                            ';





                        }
                        mysqli_close($bdd);

                        ?>

                        </div>

                        <div>
                            <!--Affichage du formulaire pour ajouter un commentaire -->
                            <h4 class="my-5">Laissez un commentaire</h4>

                            <form action="validation-commentaires.php" method="POST">
                                <input type="text" placeholder="Votre nom" name="nom" class="form-control my-3">
                                <input type="text" placeholder="Votre prénom" name="prenom" class="form-control my-3">
                                <input type="email" placeholder="Votre Email" name="email" class="form-control my-3">
                                <input type="text" placeholder="Sujet" name="sujet" class="form-control my-3">
                                <textarea placeholder="Votre commentaire" name="commentaire" class="form-control my-3" rows="8"></textarea>
                                <input type="submit" value="Je valide !" class="btn btn-success">
                            </form>

                        </div>

                    </div>
                    <div id="tab4">4</div>
                </div>

                <h3>Galerie / Photos</h3>

                <!-- Plugin Jquery-->

                <div id="owl-demo" class="owl-carousel owl-theme">
          
                    <div class="item"><img src="images/product1.jpg" alt="Owl Image"></div>
                    <div class="item"><img src="images/product2.jpg" alt="Owl Image"></div>
                    <div class="item"><img src="images/product3.jpg" alt="Owl Image"></div>
                    <div class="item"><img src="images/product4.jpg" alt="Owl Image"></div>
                    <div class="item"><img src="images/product5.jpg" alt="Owl Image"></div>
                    <div class="item"><img src="images/product6.jpg" alt="Owl Image"></div>
                    <div class="item"><img src="images/product7.jpg" alt="Owl Image"></div>
                    <div class="item"><img src="images/product8.jpg" alt="Owl Image"></div>
 
                </div>
 
            </section>
            <aside class="col-3">
                barre laterale droite
            </aside>
        </div>
    </main>

        
            
       
<?php include('includes/footer.php');?>