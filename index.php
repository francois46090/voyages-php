<?php include('includes/header.php'); ?>

    <section id="caroussel">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slider-banner-1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="display-1 text-white">First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slider-banner-2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="display-1 text-white">Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </section>
    <section id="populaires"> 
        <div class="container">        
            <form action="" method="GET" class="mb-5">
                <div class="row">
                    <div class="col-sm-12 col-md-2 offset-md-1">
                        <label for="destination" class="form-label">Rechercher Destination*</label>
                        <input type="text" class="form-control" id="destination" placeholder="Mots clés" required>
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <label for="nombre-personnes" class="form-label">Nombre de personnes*</label>
                        <input type="number" class="form-control" id="nombre-personnes" placeholder="Nombre de personnes" required>
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <label for="date-arrivee" class="form-label">Date d'arrivée*</label>
                        <input type="date" class="form-control" id="date-arrivee" placeholder="JJ / MM / AA" required>
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <label for="date-depart" class="form-label">Date de départ*</label>
                        <input type="date" class="form-control" id="date-depart" placeholder="JJ / MM / AA" required>
                    </div>
                    <div class="col-sm-12 col-md-2 ">  
                        
                        <input type="submit" class="form-control btn btn-danger mt-4" value="Valider">
                    </div>
                </div>

            </form>
            <div class="row">
                <div class="col offset-md-1">
                  <h4>Destinations populaires</h4>  
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-5 offset-md-1">
                    <h3>Top 10 Destinations</h3>
                </div>
                <div class="col-md-5 text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti illum aspernatur odit. Asperiores explicabo, magnam laboriosam sit debitis commodi.</p>
                </div>

            </div>
            <div class="row gy-md-5">
                <div class="col-md-3 offset-md-1 destinations">
                    <figure>
                        <img src="images/img1.jpg" alt="">
                    </figure>
                    <div class="cat">
                        <a href="details-voyage.php" class="btn btn-primary">THAILANDE</a>
                    </div>
                    <div class="city">
                        <h5>Disney Land</h5>
                         icones
                    </div>
                </div>
                <div class="col-md-3 destinations">
                    <figure>
                        <img src="images/img2.jpg" alt="">
                    </figure>
                    <div class="cat">
                        <a href="details-voyage.php" class="btn btn-primary">norvège</a>
                    </div>
                    <div class="city">
                        <h5>Lorem ipsum</h5>
                        icones
                    </div>                    
                </div>
                <div class="col-md-4 img-lg">
                    <div class="destinations">
                        <figure>
                            <img src="images/img3.jpg" alt="">
                        </figure>
                        <div class="cat2">
                            <a href="details-voyage.php" class="btn btn-primary">nouvelle zélande</a>
                        </div>
                        <div class="city2">
                            <h5>lorem imsum</h5>
                            icones
                        </div>
                    </div>
                    <div class="destinations">
                    <figure>
                        <img src="images/img4.jpg" alt="">
                    </figure>
                    <div class="cat2">
                        <a href="details-voyage.php" class="btn btn-primary">singapour</a>
                    </div>
                    <div class="city2">
                        <h5>Lorem ipsum</h5>
                        icones
                    </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>            
            <div class="text-center mt-5 mb-5">
                <a href="#" class="btn btn-danger btn-lg">PLUS DE DESTINATIONS</a>
            </div>

            <div class="text-center presentation">
                <h4>Explorez des lieux inoubliables</h4>
                <h3>Lieux les plus visités</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo amet eum nihil delectus nesciunt laborum
                    necessitatibus dolore non esse, quasi corrupti quaerat commodi cumque sapiente. Reiciendis dignissimos facere
                    pariatur impedit?</p>
            </div>
            <div class="row mx-5">
                <?php 
                $bdd = mysqli_connect('localhost','root','','voyages');
                $sql = 'SELECT * FROM sejours ORDER BY id DESC LIMIT 6';
                $resultat = $bdd -> query($sql);
                while($data= mysqli_fetch_array($resultat)){
                   
                    echo '<div class="col-md-4 col-sm-12 gy-3">
                    <div class="card">
                    <div class="img_sejours">
                        <img src="'.$data['image_voyages'].'" class="card-img-top" alt="...">
                    </div>
                        <div class="prix">
                            <button class="btn btn-danger"><strong>'.$data['tarif'].' €</strong> / personne</button>
                        </div>
                        <div class="details">
                            <ul>
                                <li><i class="bi bi-clock"></i>'.$data['n_jours'].'J/'.$data['n_nuits'].'N |</li>
                                <li><i class="bi bi-people-fill"></i> Nombre de personnes : '.$data['n_personnes'].' |</li>
                                <li><i class="bi bi-geo-alt-fill"></i>'.$data['lieu'].'</li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">'.substr($data['titre'],0,20).'</h5>                            
                            <div class="note">
                                <span>(25 notes)</span>
                                <div class="stars">
                                    <i class="bi bi-star-fill orange"></i>
                                    <i class="bi bi-star-fill orange"></i>
                                    <i class="bi bi-star-fill orange"></i>
                                    <i class="bi bi-star-fill gris"></i>
                                    <i class="bi bi-star-fill gris"></i>
                                </div>
                            </div>

                            <p class="card-text">'.substr($data['description_voyages'],0,20).'...</p>
                        </div>
                        <div class="card-body  d-flex justify-content-around links">
                            <a href="#" class="card-link">Réservation <i class="bi bi-arrow-right-short"></i></a>
                            <a href="#" class="card-link">Whish list <i class="bi bi-heart"></i></a>
                        </div>
                    </div>
                </div>';



                }

                mysqli_close($bdd);
                ?>
                
                
            </div>
            <div class="text-center mt-5 mb-5">
                <a href="#" class="btn btn-danger btn-lg">PLUS DE VOYAGES</a>
            </div>


        </div>
    </section>
    
    <section id="chiffres" class="hidden">
        <div class="container-fluid">

            <div class="row">

                <div class="col-4"></div>
                <div class="col-8 bleu">                    

                    <div class="text-center presentation">
                        <h4>Lorem ipsum dolor</h4>
                        <h3>Lorem.Ipsum.dolor</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo amet eum nihil delectus nesciunt laborum
                            necessitatibus dolore non esse.</p>
                    

                        <table>
                            <tr class="first">
                                <td class="icones"><i class="bi bi-people"></i></td>
                                <td class="nombres"><span>500K+</span><br>Clients satisfaits</td>
                                <td><i class="bi bi-diamond"></i></td>
                                <td><span>250K+</span><br>Clients satisfaits</td>
                            </tr>
                            <tr>
                                <td><i class="bi bi-person-plus"></i></td>
                                <td><span>500K+</span><br>Clients satisfaits</td>
                                <td><i class="bi bi-map"></i></td>
                                <td><span>10K+</span><br>Clients satisfaits</td>
                            </tr>

                        </table>
                    </div>

                    <img src="images/img8.jpg" alt="">

                    <div class="phone">
                        <div class="icon"><i class="bi bi-telephone"></i></div>
                        <div>
                            <p>Lorem impsum dolor</p>
                            <h6>Tel : 123 456 789</h6>
                        </div>
                    </div>


                </div>





            </div>
        </div>







    </section>
    <section id="activites">
        <div class="container">
            <div class="text-center presentation">
                <h4>Voyage par activité</h4>
                <h3>Aventure & activité</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo amet eum nihil delectus nesciunt laborum
                    necessitatibus dolore non esse, quasi corrupti quaerat commodi cumque sapiente. Reiciendis dignissimos facere
                    pariatur impedit?</p>
            </div>
            <div class="row gy-3">
                <div class="col offset-md-1">
                    <a href="#">
                        <img src="images/icon6.png" alt="Categorie Aventure">
                    </a>
                    <h5>Aventures</h5>
                    <span>15 Destinations</span>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="images/icon7.png" alt="Categorie Trekking">
                    </a>
                    <h5>Trekking</h5>
                    <span>12 Destinations</span>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="images/icon8.png" alt="Categorie Feu de camp">
                    </a>
                    <h5>Feu de camp</h5>
                    <span>7 Destinations</span>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="images/icon9.png" alt="Categorie Sur les routes">
                    </a>
                    <h5>Sur les routes</h5>
                    <span>15 Destinations</span>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="images/icon10.png" alt="Categorie Camping">
                    </a>
                    <h5>Camping</h5>
                    <span>13 Destinations</span>
                </div>
                <div class="col pe-md-5">
                    <a href="#">
                        <img src="images/icon11.png" alt="Categorie Explorer">
                    </a>
                    <h5>Explorer</h5>
                    <span>25 Destinations</span>
                </div>
                
            </div>

        </div>
    </section>
    <section id="galerie">

        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-1 presentation d-flex flex-column justify-content-around">                    
                        <h4>Galerie de voyages</h4>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo amet eum nihil delectus nesciunt laborum
                            necessitatibus dolore non esse.</p>
                        <img src="images/gallery-4.jpg" alt="Randonnée en forêt"  class="img-fluid">                    
                </div>
                <div class="col-md-6 ">
                    <div class="row">
                        <figure class="col-6">
                            <img src="images/img13.jpg" alt="" class="img-fluid">
                        </figure>
                        <figure class="col-6">
                            <img src="images/img14.jpg" alt=""  class="img-fluid">
                        </figure>
                        <figure class="col-12">
                            <img src="images/img15.jpg" alt=""  class="img-fluid">
                        </figure>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="action">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-10 offset-md-1 d-flex justify-content-around marques py-5 hidden">
                    <img src="images/logo1.png" alt="">
                    <img src="images/logo2.png" alt="">
                    <img src="images/logo3.png" alt="">
                    <img src="images/logo4.png" alt="">
                    <img src="images/logo5.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12  offset-md-1 presentation">
                    <h4>Galerie de voyages</h4>
                    <h3>Lorem ipsum dolor</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo amet eum nihil delectus nesciunt laborum
                        necessitatibus dolore non esse.</p>

                    <form action="" method="POST" class="d-flex justify-content-between my-3">
                        
                            <input type="email" placeholder="Entrez votre email" class="form-control">
                        
                            <input type="submit" class="btn btn-danger" value="Je m'abonne !">                       

                    </form>

                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus deleniti voluptate dignissimos, rem error enim nemo consequuntur excepturi ut, nisi distinctio, magnam quia optio labore laborum suscipit! Odit, minus dolor.</p>
                </div>
            </div>

            </div>

        </div>

    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-md-1 hidden">
                    <img src="images/img24.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-7 col-sm-12 contact-infos">
                    <div class="row contact-row">

                        <div class="col">
                            <img src="images/icon12.png" alt="" class="icon-contact">
                            <ul>
                                <li>lorem</li>
                                <li>lorem</li>
                                <li>lorem</li>
                            </ul>
                        </div>
                        <div class="col">
                            <img src="images/icon13.png" alt="" class="icon-contact">
                            <ul>
                                <li>lorem</li>
                                <li>lorem</li>
                                <li>lorem</li>
                            </ul>
                        </div>
                        <div class="col">
                            <img src="images/icon14.png" alt="" class="icon-contact">
                            <ul>
                                <li>lorem</li>
                                <li>lorem</li>
                                <li>lorem</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between my-3 contact-action">
                        <h4> Rejoignez nous pour rester informé !!</h4>
                        <a class="btn btn-danger" href="#">Valider</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>