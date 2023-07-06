    <section id="bottom">

        <div class="container">
            <div class="row">
                <div class="col-md-3  col-sm-12 offset-md-1">
                    <h4>A propos de voyages</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid numquam natus optio obcaecati dolorem fugiat velit accusantium, placeat nostrum hic officia!</p>                                     
                    <img src="images/logo6.png" alt="">
                    <img src="images/logo2.png" alt="">
                    
                </div>
                <div class="col-md-3  col-sm-12 ">
                    <h4>INFORMATION DE CONTACT</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, nostrum in vel animi.</p>
                    <ul>
                        <li><i class="bi bi-telephone-fill"></i> 01 23 45 67 89</li>
                        <li><i class="bi bi-envelope-fill"></i> test@test.com</li>
                        <li><i class="bi bi-geo-alt-fill"></i> 13 chemin du paradis Paris</li>
                    </ul>
                </div>
                <div class="col-md-3  col-sm-12 ">                    
                    <h4>DERNIERS ARTICLES</h4>
                    <div class="article">
                        <a href="#">
                            <h6>Titre de l'article</h6>
                        </a>
                        <a href="#"><span>Date | aucun commentaire</span></a>
                    </div>
                    <hr>
                    <div class="article">
                        <a href="#">
                            <h6>Titre de l'article</h6>
                        </a>
                        <a href="#"><span>Date | aucun commentaire</span></a>
                    </div>
                </div>
                <div class="col-md-2  col-sm-12 ">
                    <h4>Abonnez vous</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut dolorum velit recusandae similique.</p>

                    <form action="" method="POST">
                        <input type="email" placeholder="Votre email" class="form-control mb-3">
                        <input type="submit" value="Rejoignez nous !" class="btn btn-danger form-control">
                    </form>
                </div>
            </div>
        </div>

    </section>
    <div class="up">
        <a href="#topbar"><i class="bi bi-arrow-up-circle-fill"></i></a>
    </div>
    <footer>    
        <div class="container">
            <div class="row align-items-center">
                <div class="col offset-md-1">
                    <ul class="d-flex">
                        <li><a href="#">Mentions légales</a> |</li>
                        <li><a href="#">Termes & conditions</a> |</li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col text-center">
                    <img src="images/favicon.png" alt="" width="60">
                </div>
                <div class="col">Copyright Voyage 2023. Tous droits réservés</div>
            </div>

            
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>

    <script src="owl-carousel/owl.carousel.js"></script>
    <script src="js/script.js"></script>

    <script>
        $(document).ready(function() {
 
        $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
            
            });
            
            });

    </script>
</body>
</html>
