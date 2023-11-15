<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Stockage d'Images</title>
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
    <?php
      include ("nav.php"); 
      ?>
 
        <div class="content">
            <h1>FASO-IMAGES</h1>
            <p>Trouvez ici des images de bonnes qualités représentants le Burkina à travers FASO-IMAGES  </p>
            <!-- <div class="recherche">   -->
                <!-- <button type="button"><span></span>VOIR PLUS</button> -->
                <!-- <button type="button"><span></span>SOUSCRIRE</button> -->
                <!-- </div>        -->
       <div class="boxe">
      <form>
      <input type="text" name="" placeholder="type">
      <input type="submit" name="" value="Search">
      </form>
    </div>             
   </div>
  
    </header>
    <!-- Le contenu principal de la page irait ici -->
</body>


<section class="sommaire">
    <h1>Ma Galerie</h1>



    <!-- Gallery -->
<div class="row">
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <img
        src="snc1.webp"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Boat on Calm Water"
      />
  
      <img
        src="culturelle1.jpeg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Wintry Mountain Landscape"
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="paysage1.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Mountains in the Clouds"
      />
  
      <img
        src="culturelle3.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Boat on Calm Water"
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="tradition5.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Waves at Sea"
      />
  
      <img
        src="tradition6.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Yosemite National Park"
      />
    </div>
  </div>
  <!-- Gallery -->

  <!-- Gallery -->
<!-- <div class="row">
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Boat on Calm Water"
      />
  
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Wintry Mountain Landscape"
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Mountains in the Clouds"
      />
  
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Boat on Calm Water"
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Waves at Sea"
      />
  
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Yosemite National Park"
      />
    </div>
  </div> -->



   
    <section>
      <ul class="gallery">
        <li><img src="07-773.jpg" alt=""></li>
        <li><img src="children.jpg" alt=""></li>
        <li><img src="CULTURELA.jpg" alt=""></li>
        <li><img src="culturelle2.jpg" alt=""></li>
        <li><img src="culturelle3.jpg" alt=""></li>
        <li><img src="Fespaco.jpeg" alt=""></li>
        <li><img src="paysage1.jpg" alt=""></li>
        <li><img src="Paysage2.jpg" alt=""></li>
        <li><img src="sahel1.jpg" alt=""></li>
        <li><img src="SNC2.jpg" alt=""></li>
        <li><img src="tree.jpg" alt=""></li>
        <li><img src="snc1.webp" alt=""></li>
        <li><img src="culturelle2.jpg" alt=""></li>
        <!-- <li><img src="paysage1.jpg" alt=""></li> -->
        <li><img src="sahel1.jpg" alt=""></li>
        </ul>
        
    </section>
    </section>

<!-- <div class="b-example-divider"></div> -->


<section><?php
      include ("footer.php"); 
      ?></section>



<script src="bootstrap.bundle.min.js"></script>

</html>
