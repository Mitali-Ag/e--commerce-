<?php include_once('./includes/headerNav.php'); ?>



<div class="overlay" data-overlay></div>
<!--
    - HEADER
  -->

<!-- get tables data from db -->

<header>
  <!-- top head action, search etc in php -->
  <!-- inc/topheadactions.php -->
  <?php require_once './includes/topheadactions.php'; ?>
  <!-- desktop navigation -->
  <!-- inc/desktopnav.php -->
  <?php require_once './includes/desktopnav.php' ?>
  <!-- mobile nav in php -->
  <!-- inc/mobilenav.php -->
  <?php require_once './includes/mobilenav.php'; ?>

</header>

<!--
    - MAIN
  -->

<main>

  <div class="product-container">
    <div class="container">
      <!--
          - SIDEBAR
        -->
      <!-- CATEGORY SIDE BAR MOBILE MENU -->
      <?php require_once './includes/categorysidebar.php' ?>
      <!-- ############################# -->

      <div class="product-box">
        <!-- get id and url for each category and display its dat from table her in this secton -->
        <div class="product-main">

          <!-- contact cards -->
          <!-- MAIL -->
          <div class="contact-card-container mail">
            <div class="contact-icon">
              <a href="#">
                <ion-icon class="contact-icons mail-icon" name="mail-outline"></ion-icon>
              </a>
            </div>
            <div class="contact-details">
              <contact-title>
                <h2>Mail</h2>
              </contact-title>
              <p>
                <a href="mailto:">sagar.chaudhary25008@gmail.com</a>
              </p>
            </div>
          </div>
          <!--  -->

          <!-- Whatsapp -->
          <div class="contact-card-container whatsapp">
            <div class="contact-icon">
              <a href="#">
                <ion-icon class="contact-icons whatsapp-icon" name="logo-whatsapp"></ion-icon>
              </a>
            </div>
            <div class="contact-details">
              <contact-title>
                <h2>Whatsapp</h2>
              </contact-title>
              <p>
                <a href="#">8171004874</a>
              </p>
            </div>
          </div>
          <!--  -->

          <!-- Location -->
          <div class="contact-card-container location">
            <div class="contact-icon">
              <a href="#">
                <ion-icon class="contact-icons location-icon" name="location-outline"></ion-icon>
              </a>
            </div>
            <div class="contact-details">
              <contact-title>
                <h2>Location</h2>
              </contact-title>
              <p>
             Sukhdev Nagar Mathura
              </p>
            </div>
          </div>
          <!--  -->


        </div>

            <!-- Map -->
    	<div class="row">
	<div class="span12">
  <iframe
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Mathurfa"
                    width="600" height="300" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
    <br />
	<small>
    <a href="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Mathurfa" style="color:#0000FF;text-align:left">
    View Larger Map
    </a>
  </small>
	</div>
	</div>


      </div>
    </div>





  </div>

  <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

  <!--
      - BLOG
    -->

<script src="./js/jquery.js" type="text/javascript"></script>
<script src="./js/bootstrap.min.js" type="text/javascript"></script>

</main>

<?php require_once './includes/footer.php'; ?>