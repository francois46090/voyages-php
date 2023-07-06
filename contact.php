<?php include('includes/header.php'); ?>
    <!-- Contenu de la page contact-->

    <section id="page-titre" class="overlay">

        <h1>Contactez nous </h1>
        <div class="vague"></div>
    </section>
    

    <section id="page-contact">
        <div class="container">
            <div class="row">
                <!-- 2 blocs : 2 colonnes -->

                <div class="col offset-md-1">
                    <div class="presentation">
                        <h4>Restons en contact</h4>
                        <h3>Obtenez plus d'informations</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo amet eum nihil delectus nesciunt laborum
                            necessitatibus dolore non esse, quasi corrupti quaerat commodi cumque sapiente. Reiciendis dignissimos facere
                            pariatur impedit?</p>
                    </div>

                    <form action="validation-contact.php" method="POST" class="my-5">
                        <input type="text" name="nom" placeholder="Votre nom" class="form-control mb-3" required>
                        <input type="email" name="email" placeholder="Votre email" class="form-control mb-3" required>
                        <textarea name="message" rows="7" placeholder="Votre message" class="form-control mb-3" required></textarea>
                        <input type="submit" class="btn btn-danger btn-lg">
                    </form>
                </div>
                <div class="col"> 

                    <h5 class="mb-3">Une question ?? N'hésitez pas à nous contacter !</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae aspernatur officiis at eius commodi. Vitae ex repellendus explicabo dolor quidem consectetur architecto vel at, fuga ad. Alias eum accusantium exercitationem.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, expedita, accusantium corrupti facilis dicta nesciunt.</p>

                    <table class="table mt-5">
                        <tr>
                            <td><i class="bi bi-signpost-2-fill"></i></td>
                            <td><b>Coordonnées</b> <br> 31 rue de la république 75000 Paris</td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-envelope-paper-fill"></td>
                            <td><b>Adresse Email</b> <br> contact@test.fr</td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-telephone-outbound-fill"></td>
                            <td><b>Téléphone</b> <br> Fixe :01 23 45 67 89 / Mobile : 06 01 02 03 04</td>
                        </tr>
                    </table>
                    
                   <div class="social">
                    <h5 class="mb-3">Suivez  nous sur les réseaux sociaux</h5>
                    <ul class="d-flex">
                        <li><i class="bi bi-facebook"></i></li>
                        <li><i class="bi bi-twitter"></i></li>
                        <li><i class="bi bi-instagram"></i></li>
                        <li><i class="bi bi-linkedin"></i></li>
                    
                    </ul>
                   </div>
                </div>
            </div>
        </div>

    </section>
    <section id="map">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10495.731173663424!2d2.3553605461676166!3d48.878557718630304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e74623cb693%3A0x10389ef77ae91296!2s75000%20Paris!5e0!3m2!1sfr!2sfr!4v1681204031830!5m2!1sfr!2sfr"
             height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>

<?php include('includes/footer.php');?>