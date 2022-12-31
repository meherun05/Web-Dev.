<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    <header class="slider container-fluid">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <?php
        $cat =new WP_Query([
            'post_type'=>'post',
            'category'=>'slider'
        ]);
        ?>
  <div class="carousel-inner">
    <?php
    $x=0;
    while($cat->have_posts()){$cat->the_post();
    $x++;
    ?>
    <div class="carousel-item <?=($x==1)? 'active' : ''?>">
    <?php the_post_thumbnail();?>
    </div>
    <?php }?>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </header>
    <!-- logo part -->
    <section class="container-fluid logo">
        <div class="row">
            <div class="col-lg-6">
                <?php the_custom_logo();?>
            </div>
            <div class="col-lg-6">
                <?php dynamic_sidebar('ltr');?>
            </div>
        </div>
        <!-- menu part  -->
    </section>
    <section class="container navbar-expand lg-light menu">
        <?php wp_nav_menu([
            'theme_location'=>'PM',
            'menu_class'=>'navbar-nav'

        ]);?>
    </section>
<!-- hero part start -->
<section class="container hero text-center mt-3">
    <div class="row">
        <?php dynamic_sidebar('herotitle');?>
    </div>
    <div class="row mt-5">
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
  <?php dynamic_sidebar('card1');?>
</div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
  <?php dynamic_sidebar('card1');?>
</div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
  <?php dynamic_sidebar('card1');?>
</div>
        </div>
    </div>
</section>
<!-- hero part end -->
<!-- photo part start -->
<secrion class="container photo">
    <div class="container">
    <div class="row">
        <div class="col-sm-5">
            <?php dynamic_sidebar('lineleft');?>
        </div>
        <div class="col-sm-2 tt">
        <?php dynamic_sidebar('phototitle');?>
        </div>
        <div class="col-sm-5">
        <?php dynamic_sidebar('lineright');?>
        </div>
    </div>
    </div>
    <div class="container mm">
    <div class="row">
        <div class="col-sm-3">
        <div class="card" style="width: 14rem;">
  <?php dynamic_sidebar('photocard1');?>
</div>
        </div>
        <div class="col-sm-3">
        <div class="card" style="width: 14rem;">
  <?php dynamic_sidebar('photocard1');?>
</div>
        </div>
        <div class="col-sm-3">
        <div class="card" style="width: 14rem;">
  <?php dynamic_sidebar('photocard1');?>
</div>
        </div>
        <div class="col-sm-3">
        <div class="card" style="width: 14rem;">
  <?php dynamic_sidebar('photocard1');?>
</div>
        </div>
    </div>
    </div>
</secrion>
<!-- photo part end -->
<!-- footer -->
<section class="container">
    <div class="container">
    <div class="row">
    <div class="col-sm-5">
            <?php dynamic_sidebar('lineleft');?>
        </div>
        <div class="col-sm-2 tt">
        <?php dynamic_sidebar('newstitle');?>
        </div>
        <div class="col-sm-5">
        <?php dynamic_sidebar('lineright');?>
        </div>
    </div>
    </div>
    <div class="row">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <?php
        $cat =new WP_Query([
            'post_type'=>'post',
            'category'=>'slider'
        ]);
        ?>
  <div class="carousel-inner">
    <?php
    $x=0;
    while($cat->have_posts()){$cat->the_post();
    $x++;
    ?>
    <div class="carousel-item <?=($x==1)? 'active' : ''?>">
    <?php the_title();?>
    </div>
    <?php }?>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
</section>
<footer class="container-fluid foot">
    <div class="container">
    <div class="row ft">
        <div class="col-sm-8 ft_left">
            <?php dynamic_sidebar('ftleft');?>
        </div>
        <div class="col-sm-4 ft_right">
        <?php dynamic_sidebar('ftright');?>
        </div>
    </div>
    </div>
   <div class="container">
   <div class="row fb ">
        <div class="col-sm-6 fb_left">
        <?php dynamic_sidebar('fblrft');?>
        </div>
        <div class="col-sm-6 fb_right">
        <?php dynamic_sidebar('fbright');?>
        </div>
    </div>
   </div>
</footer>

<?php wp_footer();?>
</body>
</html>