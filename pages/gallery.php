<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="../assets/css/styles.css">
      <link rel="stylesheet" href="../assets/css/nav.css">

      <title>Gallery</title>
   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
          <?php include_once '../template/nav.php'; ?>
      </header>

      <!--==================== MAIN ====================-->
      <main class="main">
         <!--==================== HOME ====================-->
         <section class="gallery container">
            <div class="gallery__item"></div>
            <div class="gallery__item"></div>
            <div class="gallery__item"></div>
            <div class="gallery__item"></div>
            <div class="gallery__item"></div>
            <div class="gallery__item"></div>
            <div class="gallery__item"></div>
            <div class="gallery__item"></div>
            <div class="gallery__item"></div>
            <div class="gallery__item"></div>
            <div class="gallery__item"></div>
            <div class="gallery__item"></div>
            
         </section>

      </main>   
      
      <!--==================== FOOTER ====================-->
      <footer class="footer" id="footer">
        <?php include_once '../template/footer.php'; ?>
      </footer>

      <!--=============== MAIN JS ===============-->
      <script src="../assets/js/main.js"></script>

      <!--=============== GALLERY JS ===============-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>
      <script src="../assets/js/gallery.js"></script>
      
   </body>
</html>