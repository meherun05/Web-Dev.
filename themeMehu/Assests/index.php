<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bangladesh</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <?php wp_head(); ?>
    
</head>
<body>
    <!--Header Part Start-->
    <header class="cont">
        <div class="row">
            <div class="col-lg-6 header_left">
                <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
            </div>
            <div class="col-lg-6 header_right text-end">
                <p>১৮ কার্তিক, ১৪২৯</p> 
                <a href="#">English</a>
            </div>
        </div>
    </header>
    <!--Header Part End-->
    <!-- Logo Part Start-->
    <section class="logo cont">
        <div class="row">
            <div class="col-lg-5 logo_left">
                <a href="#">
                <?php the_custom_logo();?>
                  <img src="./images/Header/logo_bn.png" alt="">
                </a>
            </div>
            <div class="col-lg-5 logo_search">
                <input type="text" placeholder="খুঁজুন ">
                <button>অনুসন্ধান</button>
            </div>
            <div class="col-lg-2 logo_right d-flex justify-content end">
                <div class="logo1"><a href="#"><img src="./images/Header/a2i-logo-footer.png" alt=""></a></div>
                <div class="logo2">
                    <p>সাথে থাকুন:</p>
                    <a href="#"><img src="./images/Header/facebook-icon.png" alt=""></a>
                    <a href="#"><img src="./images/Header/twitter-blue-icon.png" alt=""></a>
                    <a href="#"><img src="./images/Header/youtube-icon.png" alt=""></a>
                    <a href="#"><img src="./images/Header/gplus-icon.png" alt=""></a>
                </div>
            </div>
    </section>
    <!-- Logo Part End-->
    <!--menu part start-->
    <section class="cont">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php 
                    wp_nav_menu([
                      'menu_location'=> 'TM',
                      'menu_class'=> 'navbar-nav'
                    ]);
                    ?>
                    <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">হোম</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">ই-সেবাসমূহ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">সেবাখাত</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">ব্যবসা-বাণিজ্য</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> বৈদেশিক বিনিয়োগ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> আইন-বিধি</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> তথ্য বাতায়ন</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> সেবাকুঞ্জ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> ফরমস</a>
                      </li>
                    </ul> -->
                  </div>
                </div>
              </nav>
        </div>
    </section>
    <!--menu part end-->
    <!--hero part start-->
   <section class="cont">
    <div class="row hero">
      <div class="hero_main col-lg-8">
        <div class="banner">
          <a href="#"><img src="./images/padmabanner.jpg" class="d-block w-100" alt=""></a>
        </div>
        <div class="slider">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/Slider/4-02.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./images/Slider/Banner-1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./images/Slider/Banner-2.jpg" class="d-block w-100" alt="...">
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
        <div class="tab">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>দপ্তর ভিত্তিক সেবা</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
              <div class="row">
                <div class="col-lg-2 text-center">
                  <a href="#"><img src="./images/Tab/agriculture.png" alt=""></a>
                  <p>কৃষি</p>
                </div>
                <div class="col-lg-2 text-center">
                  <a href="#"><img src="./images/Tab/call_center.png" alt=""></a>
                  <p>
                    কল সেন্টার                                </p>
                </div>
                <div class="col-lg-2 text-center">
                  <a href="#"><img src="./images/Tab/agriculture.png" alt=""></a>
                  <p>মৎস্য ও প্রাণী</p>
                </div>
                <div class="col-lg-2 text-center">
                  <a href="#"><img src="./images/Tab/mobile_service.png" alt=""></a>
                  <p>মোবাইল সেবা</p>
                </div>
                <div class="col-lg-2 text-center">
                  <a href="#"><img src="./images/Tab/helpdesk.png" alt=""></a>
                  <p>হেল্পডেস্ক</p>
                </div>
                
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0"> <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
              <div class="row">
                <div class="col-lg-2 text-center">
                  <a href="#"><img src="./images/Tab/agriculture.png" alt=""></a>
                  <p>কৃষি</p>
                </div>
                <div class="col-lg-2 text-center">
                  <a href="#"><img src="./images/Tab/call_center.png" alt=""></a>
                  <p>
                    কল সেন্টার                                </p>
                </div>
                <div class="col-lg-2 text-center">
                  <a href="#"><img src="./images/Tab/agriculture.png" alt=""></a>
                  <p>মৎস্য ও প্রাণী</p>
                </div>
                <div class="col-lg-2 text-center">
                  <a href="#"><img src="./images/Tab/mobile_service.png" alt=""></a>
                  <p>মোবাইল সেবা</p>
                </div>
                <div class="col-lg-2 text-center">
                  <a href="#"><img src="./images/Tab/helpdesk.png" alt=""></a>
                  <p>হেল্পডেস্ক</p>
                </div>
                
              </div>
            </div>
          </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="row">
                  <div class="col-lg-2 text-center">
                    <a href="#"><img src="./images/Tab/agriculture.png" alt=""></a>
                    <p>কৃষি</p>
                  </div>
                  <div class="col-lg-2 text-center">
                    <a href="#"><img src="./images/Tab/call_center.png" alt=""></a>
                    <p>
                      কল সেন্টার                                </p>
                  </div>
                  <div class="col-lg-2 text-center">
                    <a href="#"><img src="./images/Tab/agriculture.png" alt=""></a>
                    <p>মৎস্য ও প্রাণী</p>
                  </div>
                  <div class="col-lg-2 text-center">
                    <a href="#"><img src="./images/Tab/mobile_service.png" alt=""></a>
                    <p>মোবাইল সেবা</p>
                  </div>
                  <div class="col-lg-2 text-center">
                    <a href="#"><img src="./images/Tab/helpdesk.png" alt=""></a>
                    <p>হেল্পডেস্ক</p>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
          </div>
        </div>
        <div class="notice">
          <h4>উদ্যোগ</h4>
          <ul>
            <li><a href=""> বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a></li>
            <li><a href=""> বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা।</a></li>
            <li><a href="">বাংলাদেশ সরকারের ষষ্ঠ পঞ্চবার্ষিক পরিকল্পনা।</a></li>
            <li><a href=""> বাংলাদেশ সরকারের প্রেক্ষিত পরিকল্পনা (২০১০-২০২১)।</a></li>
            <li><a href=""> দূর্যোগ ব্যবস্থাপনা জন্য জাতীয় পরিকল্পনা ২০১০-২০১৫।</a></li>
          </ul>
        </div>
        <div class="others">
          <div class="btn">
            <a href="#">সকল</a>
          </div>
        </div>
      </div>
      <div class="hero_side col-lg-4">
        <div class="side_img">
          <a href="#"><img src="./images/Sidebar/Bangladesh-Directory.jpg" class="d-block w-100 mb-2" alt=""></a>
          <a href="#"><img src="./images/Sidebar/Bangladesh-Directory.jpg" class="d-block w-100 mb-2" alt=""></a>
          <a href="#"><img src="./images/Sidebar/Bangladesh-Directory.jpg" class="d-block w-100 mb-2" alt=""></a>
          <a href="#"><img src="./images/Sidebar/Bangladesh-Directory.jpg" class="d-block w-100 mb-2" alt=""></a>
          <a href="#"><img src="./images/Sidebar/Bangladesh-Directory.jpg" class="d-block w-100 mb-2" alt=""></a>
        </div>
        <h4>সকল বাতায়ন</h4>
        <div class="side_video">
          <h5>মুজিব১০০ আ্যাপ</h5>
          <iframe width="315" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
   </section>
   <!-- Hero part end -->
   <!-- footer part start -->
   <footer class="cont">
    <div class="row footer_main">
      <img src="./images/Footer/download.png" alt="">
    </div>
    <div class="row footer_bottom">
      <div class="col-lg-8 fb_left">
        <nav class="navbar navbar-expand-lg bg-light">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">হোম</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ই-সেবাসমূহ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">সেবাখাত</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ব্যবসা-বাণিজ্য</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> বৈদেশিক বিনিয়োগ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> আইন-বিধি</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> তথ্য বাতায়ন</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> সেবাকুঞ্জ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> ফরমস</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
      </div>
      <div class="col-lg-4 fb_right text-end">
        <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>
        <img src="./images/Footer/np-logo-set.png" alt="">
      </div>
    </div>
   </footer>
<!-- Footer part end -->

   
   
  
    <script src="./JS/bootstrap.bundle.min.js"></script>
</body>
</html>