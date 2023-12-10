<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="../assets/css/styles.css">

      <title>product</title>
   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
         <?php include_once '../template/nav.php'; ?>
      </header>

      <!--==================== MAIN ====================-->
      <main class="main">
         <!--==================== HOME ====================-->
         <section class="product container">
            <div class="product__card">
                <div class="product__img">
                    <img src="../assets/img/product-example.png" alt="product image">
                </div>

                <div class="product__texte">
                    <h3 class="product__name">Sweat brodé</h3>
                    <p class="product__price">42€</p>
                </div>
            </div>
         </section>

        
      </main>   
      
      <!--==================== FOOTER ====================-->
      <footer class="footer" id="footer">
         <?php include_once '../template/footer.php'; ?>
      </footer>

      <!--=============== MAIN JS ===============-->
      <script src="../assets/js/main.js"></script>
   </body>
</html>