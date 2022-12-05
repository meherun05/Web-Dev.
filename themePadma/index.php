<!DOCTYPE html>
<html <?php language_attributes( );?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PADMA</title>
    <?php wp_head();?>
</head>
<body>
    <!-- header part start -->
    <header class="container-fluid slider">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <?php 
    $p=0;
    while(have_posts()){the_post();
        $p++;
        ?>
    <div class="carousel-item <?=($p==1) ? 'active':''?> ">
        <?php the_post_thumbnail();?>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
    <?php } ?>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
    
  <!-- </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> -->
</div>
    </header>
    <!-- header part end -->
    <!-- logo part start -->
    <section class="container-fluid logo">
        <div class="row">
            <div class="col-sm-6 left-logo">
                <?php the_custom_logo();?>
            </div>
            <div class="col-sm-6 right-logo">
                <?php dynamic_sidebar('Itr');?>
            </div>
        </div>
    </section>
    <!-- logo part end -->
    <!-- menu part start -->
    <section class="container-fluid menu-1">
        <div class="row">
        <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php 
        wp_nav_menu(array(
            'theme_location'=>'TM',
            'menu_class'=>'navbar-nav menu_item'
        ));?>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
    </ul>
    </div>
  </div>
</nav>
        </div>
    </section>
    <!-- menu part end -->
    <?php wp_footer();?>
</body>
</html>
