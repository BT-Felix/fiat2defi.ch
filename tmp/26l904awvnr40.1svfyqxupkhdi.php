<!DOCTYPE html>
<html lang="en">

  <head>
	  <title>DEFICHANGE</title>  
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicons -->
    <link href="/assets/img/defipromo_logos/favicon-96x96.ico" rel="icon">
    <link href="/assets/img/defipromo_logos/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">

  </head>

  <body>
    <main>
      <?php echo $this->render('header.htm',NULL,get_defined_vars(),0); ?>
      <?php echo $this->render('home/index.htm',NULL,get_defined_vars(),0); ?>
    </main>

    <footer id="footer">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6 text-lg-left text-center">
            <div class="col-lg-6">
              &copy; Creative Commons CC BY-SA 4.0 </a>
				<a href="https://google.com" 
            
            <div>
               <a href="https://explorer.defichain.io/#/DFI/mainnet/address/<?= ($wallet['challenge']) ?>" target="_blank"><?= ($wallet['challenge']) ?></a> <br/>  <a href="https://explorer.defichain.io/#/DFI/mainnet/address/<?= ($wallet['incentive']) ?>" target="_blank"><?= ($wallet['incentive']) ?></a>
            </div>
          </div>
          <div class="col-lg-6">
            <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
              <a href="/">Home</a>
              <a href="http://api.fiat2defi.ch/" target="_blank">API</a>
              <a href="/roadmap">Roadmap</a>
              <a href="/legal">Legal Notice</a>
            </nav>
          </div>
        </div>
      </div>
    </footer>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/assets/js/submitform.js"></script>
    <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="/assets/vendor/counterup/counterup.min.js"></script>
    <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/venobox/venobox.min.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/twitter/widgets.js"></script>

    <script src="/assets/js/main.js"></script>

  </body>
</html>