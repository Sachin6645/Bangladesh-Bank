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
    <!-- header part start -->
    <div class="cont">
        <div class="row header mt-2">
            <div class="col-lg-6">
                <input type="text"Placeholder="Search"><button>Button</button>
            </div>
            <div class="col-lg-6 text-end">
                <p>বাংলা</p>
            </div>
        </div>
    </div>
    <!-- header part start -->
    <!-- logo part start -->
    <div class="cont">
        <div class="row logo">
            <?php the_custom_logo();?>
        </div>
    </div>
    <!-- logo part end -->
    <!-- menu part start -->
    <div class="cont">
        <div class="row navbar-expand menu mt-2">
            <?php
            wp_nav_menu([
                'theme_location'=>'TM',
                'menu_class'=>'navbar-nav'
            ]);
            ?>
        </div>
    </div>
    <!-- menu part end -->
    <!-- slider part start -->
    <div class="cont">
        <div class="row slider">
            <div class="col-lg-9 mt-2">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <?php
                    $cat = new WP_Query([
                        'post_type'=>'post',
                        'category_name'=>'slider'
                    ]);
                    ?>
                    <div class="carousel-inner">
                        <?php 
                        $x = 0;
                        while($cat->have_posts()){$cat->the_post();
                            $x++;
                        ?>
                      <div class="carousel-item <?=($x==1)?'active':''?>">
                        <?php the_post_thumbnail();?>
                      </div>
                      
                      <?php }?>
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
            <div class="col-lg-3 mt-2">
                <div class="row">
                <?php dynamic_sidebar('sllefth');?>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="<?php echo get_template_directory_uri()?>./assets/images/abdurrouftalukder.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="col-lg-6">
                       <?php dynamic_sidebar('slleftt');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider part end -->
    <!-- slider2 part start -->
    <div class="cont">
        <div class="row">
            <div class="col-lg-2 sl">
                <h5>RECENT NEWS</h5>
            </div>
            <div class="col-lg-10">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <?php
                    $cat = new WP_Query([
                        'post_type'=>'post',
                        'category_name'=>'slider'
                    ]);
                    ?>
                    <div class="carousel-inner">
                        <?php 
                        $x = 0;
                        while($cat->have_posts()){$cat->the_post();
                            $x++;
                        ?>
                      <div class="carousel-item <?=($x==1)?'active':''?>">
                        <?php the_title();?>
                      </div>
                      
                      <?php }?>
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
            </div>
        </div>
    </div>
    <!-- slider2 part end -->
    <!-- card part start -->
    <div class="cont">
        <div class="row main_card mt-2">
            <div class="col-lg-9 card_left">
                <div class="row">
                    <div class="col-lg-6 green_card">
                        <div class="row">
                            <h5>MONETARY POLICY</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="<?php echo get_template_directory_uri()?>./assets/images/Screenshot_1.png" alt="">
                            </div>
                            <div class="col-lg-8">
                                <ul>
                                    <li>MPS (January-June 2023)</li>
                                       <li>Monetary Policy</li>
                                       <li>Banknotes & Coins</li>
                                       <li> Repo Reverse Repo Auction</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 red_card">
                        <div class="row">
                            <h5>MEDIA & PRESS RELEASE</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="<?php echo get_template_directory_uri()?>./assets/images/Screenshot_2.png" alt="">
                            </div>
                            <div class="col-lg-8">
                                <ul>
                                    <li>Circulars/Circular Letter</li>
                                        <li>Press Release</li>
                                        <li>Regulations And Guidelines</li>
                                        <li>Procurements Underway</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 green_card">
                        <div class="row">
                            <h5>INVESTMENT FACILITY</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="<?php echo get_template_directory_uri()?>./assets/images/Screenshot_3.png" alt="">
                            </div>
                            <div class="col-lg-8">
                                <ul>
                                       <li>Facilities/Incentives</li>
                                       <li>Inward Remmittance Facilities</li>
                                       <li>NRB Bond</li>
                                       <li>Prizebond & Sanchayapatra</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 red_card">
                        <div class="row">
                            <h5>GOVERNMENT SECURITIES</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                
                            </div>
                            <div class="col-lg-8">
                                <ul>
                                        <li>G-Sec OMS</li>
                                        <li>YTM Curve</li>
                                        <li>Treasury Bill & Bond Auction</li>
                                        <li>Treasury Bill & Bond Data</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 green_card">
                        <div class="row">
                            <h5>SERVICES</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="<?php echo get_template_directory_uri()?>./assets/images/Screenshot_4.png" alt="">
                            </div>
                            <div class="col-lg-8">
                                <ul>
                                       <li>E-Services</li>
                                       <li>Customer Complain</li>
                                       <li>BB Forms</li>
                                       <li>Claim Your Money</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 red_card">
                        <div class="row">
                            <h5>ECONOMIC DATA</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="<?php echo get_template_directory_uri()?>./assets/images/Screenshot_5.png" alt="">
                            </div>
                            <div class="col-lg-8">
                                <ul>
                                        <li> BOP, Export & Import</li>
                                        <li>NSDP</li>
                                        <li>Recent Upload</li>
                                        
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 green_card">
                        <div class="row">
                            <h5>INNOVATION CORNER</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="<?php echo get_template_directory_uri()?>./assets/images/Screenshot_6.png" alt="">
                            </div>
                            <div class="col-lg-8">
                                <ul>
                                       <li> Innovation Guidelines</li>
                                       <li>Innovation Team</li>
                                       <li>Working Plan</li>     
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 red_card">
                        <div class="row">
                            <h5>NATIONAL INTEGRITY STRATEGY</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                
                            </div>
                            <div class="col-lg-8">
                                <ul>
                                        <li> Ethics Committee</li>
                                        <li>Implementation Plan</li>
                                        <li>Integrity Award (FY 2020-21) Winner</li>
                                        <li>Others</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 green_card">
                        <div class="row">
                            <h5>CITIZEN CHARTER</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                
                            </div>
                            <div class="col-lg-8">
                                <ul>
                                       <li> Citizen Charter Of Bangladesh Bank </li>
                                       <li>Focal Point Of Citizen Charter</li>
                                       <li>Annual Workplan (2022-2023)</li>
                                       <li>Recent Information</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 red_card">
                        <div class="row">
                            <h5>NATIONAL ICT POLICY 2018</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                
                            </div>
                            <div class="col-lg-8">
                                <ul>
                                        <li>National ICT Policy 2018</li>
                                        <li>ICT Focal Point</li>
                                        <li>Implementation Committee</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 green_card">
                        <div class="row">
                            <h5>LINKS</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="<?php echo get_template_directory_uri()?>./assets/images/Screenshot_7.png" alt="">
                            </div>
                            <div class="col-lg-8">
                                <ul>
                                       <li>BFIU Website</li>
                                       <li>SME Portal</li>
                                       <li>E-Tender</li>
                                       <li>E-Recruitment</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 red_card">
                        <div class="row">
                            <h5>RECENT UPLOAD</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="<?php echo get_template_directory_uri()?>./assets/images/Screenshot_8.png" alt="">
                            </div>
                            <div class="col-lg-8">
                                <ul>
                                        <li>Citizen Charter</li>
                                        <li>Foreign Visit/Passport/NOC</li>
                                        <li>Notice Board</li>
                                        <li>Sustainability Rating Of Bank & FI</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row c1">
                    <div class="col-lg-4">
                        <?php dynamic_sidebar('card1');?>
                    </div> 
                    <div class="col-lg-4">
                        <?php dynamic_sidebar('card2');?>
                    </div> 
                    <div class="col-lg-4">
                        <?php dynamic_sidebar('card3');?>
                    </div> 
                </div>
            </div>
            <div class="col-lg-3 card_right">
                <div class="row">
                <div class="card" style="width: 18rem;">
                   <?php dynamic_sidebar('cardright1');?>
                </div>
            </div>
                <div class="row">
                <div class="card" style="width: 18rem;">
                <?php dynamic_sidebar('cardright2');?>
                </div>
            </div>
                <div class="row">
                <div class="card" style="width: 18rem;">
                <?php dynamic_sidebar('cardright3');?>
                </div>
            </div>
                <div class="row">
                <div class="card" style="width: 18rem;">
                <?php dynamic_sidebar('cardright4');?>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- card part end -->
    <!-- footer part start -->
    <div class="cont foot mt-2">
        <div class="row">
            <div class="col-lg-4">
                <?php dynamic_sidebar('ftleft');?>
            </div>
            <div class="col-lg-4">
                <?php dynamic_sidebar('ftcenter');?>
            </div>
            <div class="col-lg-4">
                <?php dynamic_sidebar('ftright');?>
            </div>
        </div>
        <div class="row text-center">
            <h6>Home       Sitemap       Feedback</h6>
        </div>
        <div class="row">
            <?php dynamic_sidebar('fb');?>
        </div>
    </div>
    <!-- footer part end -->
    <?php wp_footer();?>
</body>
</html>