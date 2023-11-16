<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Stockage d'Images</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <?php
      include ("nav.php"); 
      ?>

    <div class="content">
      <div class="faso">
        <h1>FASO-IMAGES</h1>
        <p>Trouvez ici des images de bonnes qualités représentants le Burkina à travers FASO-IMAGES </p>

      </div>

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
  <div class="gallery">
    <div>
      <img src="artisanat9.jpg" alt="">
    </div>
    <div>
      <img src="camera-logo.avif" alt="">
    </div>
    <div class="h-stretch">
      <img src="artisana7.jpg" alt="">
    </div>
    <div class="h-stretch">
      <img src="07-773.jpg" alt="">
    </div>
    <div>
      <img src="camera-logo.avif" alt="">
    </div>
    <div class="v-stretch">
      <img src="artisana7.jpg" alt="">
    </div>
    <div class="h-stretch">
      <img src="artisanat9.jpg" alt="">
    </div>
    <div>
      <img src="artianat5.jpg" alt="">
    </div>
    <div class="v-stretch">
      <img src="artisana7.jpg" alt="">
    </div>
    <div class="big-stretch">
      <img src="07-773.jpg" alt="">
    </div>
    <div class="s-stretch">
      <img src="culturelle2.jpg" alt="">
    </div>
    <div class="s-stretch">
      <img src="nature4.jpg" alt="">
    </div>
    <div class="s-stretch">
      <img src="paysage1.jpg" alt="">
    </div>
    <div>
      <img src="paysage3.jpg" alt="">
    </div>
    <div>
      <img src="artisanat9.jpg" alt="">
    </div>
    <div class="v-stretch">
      <img src="artisant1.jpg" alt="">
    </div>
    <div>
      <img src="culturelle3.jpg" alt="">
    </div>
    <div>
      <img src="site1.jpg" alt="">
    </div> 

  </div>

</section>




<section>
  <?php
      include ("footer.php"); 
      ?>
</section>



<script src="bootstrap.bundle.min.js"></script>

</html>