<?php
include_once "header.php";

?>

  <main class="main">

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
     <div class="container section-title" data-aos="fade-up">
    <h2>Portfolio</h2>
    <p>Here are some of the projects I have worked on to showcase my skills in web development.<br> Some are personal projects and some are practice-based learning projects.</p>
</div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <!-- <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Card</li>
            <li data-filter=".filter-branding">Web</li>
          </ul> -->
          <!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/Capture3.PNG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>online shopping cart</h4>
                <p>complete responsive with backend functionality</p>
                <a href="assets/img/Capture3.PNG" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://github.com/kainatzahra12/my_portfolio_projects/tree/master" target="_blank" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/admin5.PNG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Admin panel</h4>
                <p>complete responsive and functional</p>
                <a href="assets/img/admin5.PNG" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://github.com/kainatzahra12/my_portfolio_projects/tree/master" target="_blank" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/admin1.PNG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>login form </h4>
                <p>user register,login and logout</p>
                <a href="assets/img/admin1.PNG" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="https://github.com/kainatzahra12/my_portfolio_projects/tree/master"target="_blank" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

           
           
          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

  </main>

 <?php
 
 include_once "footer.php";
 ?>