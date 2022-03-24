
<div class="container mt-5">

    <div class="row d-flex" style="min-height:80vh; justify-content:space-between">

    <!-- les bouton -->
        <div id="bouton" class="col-1 d-none d-md-block d-lg-block" style="margin-top:70px;">
            <div class="btn_photo">
                <img src="https://picsum.photos/600/800?r=0" alt="">
            </div>

            <div class="btn_photo">
                <img src="https://picsum.photos/600/800?r=1" alt="">
            </div>

            <div class="btn_photo">
                <img src="https://picsum.photos/600/800?r=2" alt="">
            </div>
        </div>

    <!-- l'image en grand -->

        <div class="col-md-5 col-lg-5 col-12 mt-4">
            <div class="image_grande">
                <img src="https://picsum.photos/600/800?r=0" alt="">
            </div>
        </div>

    <!-- la description -->

        <div class="col-md-5 col-lg-5 col-12">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id dui vel lacus aliquet sagittis ut ac ex. Vivamus vitae pulvinar nunc. </br></br>Sed ut ex augue. Aenean vitae eleifend metus. Vivamus non mollis quam, a euismod mauris. </br></br>Integer at diam nec nisi pulvinar dapibus vel sit amet velit. Etiam id arcu vitae est fermentum gravida. Cras elit nunc, suscipit vitae porttitor in, scelerisque a mauris. </br></br>Suspendisse non ex ut nisl lobortis ornare sit amet sed velit. Praesent ut sem eget turpis scelerisque iaculis. </br>Curabitur facilisis magna ac lorem aliquam, ac lobortis lorem convallis. Donec euismod laoreet venenatis.
                </br></br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id dui vel lacus aliquet sagittis ut ac ex. Vivamus vitae pulvinar nunc. Sed ut ex augue. Aenean vitae eleifend metus.</br></br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id dui vel lacus aliquet sagittis ut ac ex. Vivamus vitae pulvinar nunc. Sed ut ex augue. Aenean vitae eleifend metus.  
            </p>
            <br><br>
            <?php if($connexion == false){ echo "<h3> Prix de l'article: 50€ </h3>" ;} ?>
            <?php if($connexion == true){ echo "<h3> Prix de pour les abonné.es: 30€ </h3>" ;} ?>
            <?php if($connexion == true){ echo "<a href='TC_PRJ_ENTREPRISE_01.pdf' target='_blank'> Fiche technique du produit </a>" ;} ?>
        </div>

        
    </div>

</div>