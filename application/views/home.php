<!doctype html>
<html lang="en">
  <head>
    <title>DAZELPRO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/animate.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/owl.carousel.min.css'?>">

    <link rel="stylesheet" href="<?php echo base_url().'assets/fonts/ionicons/css/ionicons.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/fonts/fontawesome/css/font-awesome.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/fonts/flaticon/font/flaticon.css'?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
  </head>
  <body>
    

    <div class="wrap">

      <header role="banner" style="margin-top: -40px;">
        <div class="container logo-wrap">
          <div class="row pt-5">
            <div class="col-12 text-center">
              <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
              <h1 class="site-logo">
              	<img class="logo1" href="" src="<?php echo base_url().'assets/images/tes.png'?>">
              </h1>
            </div>
          </div>
        </div>
        
        <nav class="navbar navbar-expand-md  navbar-light bg-light">
          <div class="container">
            
           
            <div class="collapse navbar-collapse" id="navbarMenu">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">SourceCode</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Article</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown05">
                    <?php foreach ($category_menu->result_array() as $d) { ?>
                    <a class="dropdown-item" href="category.html"><?php echo $d['category_name'] ?></a>
                    <?php } ?>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
      </header>
      <!-- END header -->

      <section class="site-section pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <!-- Slider -->
              <div class="owl-carousel owl-theme home-slider">
                <div>
                  <a href="#" class="a-block d-flex align-items-center" style="background-image: url('<?php echo base_url().'assets/images/img_1.jpg'?>'); ">
                    <div class="text half-to-full">
                        <!-- Fill Slider -->
                    </div>
                  </a>
                </div>
                <div>
                  <a href="#" class="a-block d-flex align-items-center" style="background-image: url('images/img_2.jpg'); ">
                    <div class="text half-to-full">
                      
                    </div>
                  </a>
                </div>
                <div>
                  <a href="#" class="a-block d-flex align-items-center" style="background-image: url('images/img_3.jpg'); ">
                    <div class="text half-to-full">
                      
                    </div>
                  </a>
                </div>
              </div>
              <!-- End Slider -->
            </div>
          </div>
          
        </div>


      </section>
      <!-- END section -->
      
      <section class="site-section py-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb-4">Article</h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">
                <?php foreach ($article->result_array() as $d) { ?>
                <div class="col-md-6">
                  <a title="<?php echo $d['article_title'] ?>" href="<?php echo site_url('article/'.$d['article_slug']);?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="<?php echo base_url().'assets/backend/upload/'.$d['article_image']?>" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="<?php echo base_url().'assets/images/person_1.jpg'?>" alt="Colorlib"> Zeldianto</span>&bullet;
                        <span class="mr-2">
                          <?php echo date('d M Y',strtotime($d['article_date']));?>
                        </span> &bullet;
                        <span class="ml-2"><span class="fa fa-eye"></span> <?php echo $d['article_views'] ?></span>
                      </div>
                      <h2>
                        <?php 
                          $dt = $d['article_title'];
                          $dts = substr($dt,0,60);
                          echo $dts;
                        ?>
                      </h2>
                    </div>
                  </a>
                </div>
                <?php } ?>
              </div>

              <div class="row mt-5">
                <div class="col-md-12 text-center">
                  <nav aria-label="Page navigation" class="text-center">
                    <p><a href="#" style="width: 100%; margin-top: -70px;" class="btn btn-primary btn-xl rounded">View More</a></p>
                  </nav>
                </div>
              </div>


              

              

            </div>

            <!-- END main-content -->

            <div class="col-md-12 col-lg-4 sidebar">
              <div class="sidebar-box search-form-wrap">
                <form action="#" class="search-form">
                  <div class="form-group">
                    <span class="icon fa fa-search"></span>
                    <input type="text" class="form-control" id="s" autocomplete="off" placeholder="Search...">
                  </div>
                </form>
              </div>
              <!-- END sidebar-box -->
              <div class="sidebar-box">
                <div class="bio text-center">
                  <img src="<?php echo base_url().'assets/images/person_1.jpg'?>" alt="Image Placeholder" class="img-fluid">
                  <div class="bio-body">
                    <h2>Zeldianto Eka Putra</h2>
                    <p>About of me</p>
                    <p><a href="#" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
                    <p class="social">
                      <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                      <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                      <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                      <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                    </p>
                  </div>
                </div>
              </div>
              <!-- END sidebar-box -->  
              <div class="sidebar-box">
                <h3 class="heading">Popular</h3>
                <div class="post-entry-sidebar">
                  <ul>
                    <?php foreach ($article->result_array() as $d) { ?>
                    <li>
                      <a href="">
                        <img src="<?php echo base_url().'assets/backend/upload/'.$d['article_image']?>" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4 style="font-size: 16px;"><?php echo $d['article_title'] ?></h4>
                          <div class="post-meta">
                            <span class="mr-2"><?php echo date('d M Y',strtotime($d['article_date']));?> </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
              <!-- END sidebar-box -->

              <div class="sidebar-box">
                <h3 class="heading">Categories</h3>
                <ul class="categories">
                  <?php foreach ($category_menu->result_array() as $d) { ?>
                  <li><a href="#"><?php echo $d['category_name'] ?> <span>(12)</span></a></li>
                  <?php } ?>
                </ul>
              </div>
              <!-- END sidebar-box -->

              <div class="sidebar-box">
                <h3 class="heading">Tags</h3>
                <ul class="tags">
                  <?php foreach ($tags->result_array() as $d) { ?>
                  <li><a href="#"><?php echo $d['tag_name'] ?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
            <!-- END sidebar -->

          </div>
        </div>
      </section>
    
      <footer class="site-footer">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-4">
              <h3>About</h3>
              <p class="mb-4">
                <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid">
              </p>

              <p>Lorem ipsum dolor sit amet sa ksal sk sa, consectetur adipisicing elit. Ipsa harum inventore reiciendis. <a href="#">Read More</a></p>
            </div>
            <div class="col-md-6 ml-auto">
              <div class="row">
                <div class="col-md-7">
                  <h3>Article</h3>
                  <div class="post-entry-sidebar">
                    <ul>
                      <li>
                        <a href="">
                          <img src="images/img_6.jpg" alt="Image placeholder" class="mr-4">
                          <div class="text">
                            <h4>How to Find the Video Games of Your Youth</h4>
                            <div class="post-meta">
                              <span class="mr-2">March 15, 2018 </span> &bullet;
                              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="">
                          <img src="images/img_3.jpg" alt="Image placeholder" class="mr-4">
                          <div class="text">
                            <h4>How to Find the Video Games of Your Youth</h4>
                            <div class="post-meta">
                              <span class="mr-2">March 15, 2018 </span> &bullet;
                              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="">
                          <img src="images/img_4.jpg" alt="Image placeholder" class="mr-4">
                          <div class="text">
                            <h4>How to Find the Video Games of Your Youth</h4>
                            <div class="post-meta">
                              <span class="mr-2">March 15, 2018 </span> &bullet;
                              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-1"></div>
                
                <div class="col-md-4">

                  <div class="mb-5">
                    <h3>Quick Link</h3>
                    <ul class="list-unstyled">
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Travel</a></li>
                      <li><a href="#">Adventure</a></li>
                      <li><a href="#">Courses</a></li>
                      <li><a href="#">Categories</a></li>
                    </ul>
                  </div>
                  
                  <div class="mb-5">
                    <h3>Social</h3>
                    <ul class="list-unstyled footer-social">
                      <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                      <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                      <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                      <li><a href="#"><span class="fa fa-vimeo"></span> Vimeo</a></li>
                      <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                      <li><a href="#"><span class="fa fa-snapchat"></span> Snapshot</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <p class="small">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; 2019 All Rights Reserved by <a href="https://colorlib.com" target="_blank" >DAZELPRO</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
        </div>
      </footer>
      <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#00aaff"/></svg></div>

    <script src="<?php echo base_url().'assets/js/jquery-3.2.1.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery-migrate-3.0.0.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/popper.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/owl.carousel.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.waypoints.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.stellar.min.js'?>"></script>

    
    <script src="<?php echo base_url().'assets/js/main.js'?>"></script>
  </body>
</html>
<style>
  ::-webkit-scrollbar {
    width: 3px;
  } 
  ::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);     
    background: white;
  } 
  ::-webkit-scrollbar-thumb {
    background: #35A9DB;
  }
</style>
<style type="text/css">
.logo1 {
  /*background-color: yellow;*/
  /*width: 80%;*/
}

@media only screen and (max-width: 767px) {
  .logo1 {
    /*background-color: lightblue;*/
     width: 60%;
     margin-top: -10px;
  }
}
</style>