<?php
/**
 * Template Name: home Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ideataru
 */

?>

<?php
get_header();
 ?>

 <!-- Services Section -->
 <div id="service-section" class="service-section">
   <div class="container">
     <div class="service-bg">
       <img src="<?php bloginfo('template_directory'); ?>/images/services-bg.png" alt="service-bg"/>
       <h3>Services</h3>
     </div>
     <div class="col-md-6">
       <div class="service-box-inner">
         <div class="col-md-4 pull-right col-sm-5">
           <i class="icon-srv icon_heart"></i>
         </div>
         <div class="col-md-8 content-box col-sm-7">
           <h3 class="block-title">Clients love us</h3>
           <p>Vestialum ac diam sit amet quamveh icula elementum.</p>
         </div>
       </div>
     </div>
     <div class="col-md-6">
       <div class="service-box-inner">
         <div class="col-md-4 col-sm-5">
           <i class="icon-srv icon_lifesaver"></i>
         </div>
         <div class="col-md-8 content-box col-sm-7">
           <h3 class="block-title">premium support</h3>
           <p>Vestialum ac diam sit amet quamveh icula elementum.</p>
         </div>
       </div>
     </div>
     <div class="col-md-6">
       <div class="service-box-inner">
         <div class="col-md-4 pull-right col-sm-5">
           <i class="icon-srv icon_tablet"></i>
         </div>
         <div class="col-md-8 content-box col-sm-7">
           <h3 class="block-title">Flexible & multiporpuse</h3>
           <p>Vestialum ac diam sit amet quamveh icula elementum.</p>
         </div>
       </div>
     </div>
     <div class="col-md-6">
       <div class="service-box-inner">
         <div class="col-md-4 col-sm-5">
           <i class="icon-srv icon_lock"></i>
         </div>
         <div class="col-md-8 content-box col-sm-7">
           <h3 class="block-title">Safe information</h3>
           <p>Vestialum ac diam sit amet quamveh icula elementum.</p>
         </div>
       </div>
     </div>
     <div class="col-md-6">
       <div class="service-box-inner">
         <div class="col-md-4 pull-right col-sm-5">
           <i class="icon-srv icon_lightbulb"></i>
         </div>
         <div class="col-md-8 content-box col-sm-7">
           <h3 class="block-title">unique ideas</h3>
           <p>Vestialum ac diam sit amet quamveh icula elementum.</p>
         </div>
       </div>
     </div>
     <div class="col-md-6">
       <div class="service-box-inner">
         <div class="col-md-4 col-sm-5">
           <i class="icon-srv icon_cog"></i>
         </div>
         <div class="col-md-8 content-box col-sm-7">
           <h3 class="block-title">Working perfectly</h3>
           <p>Vestialum ac diam sit amet quamveh icula elementum.</p>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- Services Section Over -->

 <!-- Features Section -->
 <section id="features-section" class="features-section ow-background-no-size">
   <div class="container">
     <div class="col-md-7">
       <h2>features</h2>
       <div class="feature-box">
         <div class="feature-box-inner">
           <div class="col-md-4 col-sm-4 pull-right">
             <i class="icon-feature icon_lightbulb"></i>
           </div>
           <div class="col-md-8 col-sm-8">
             <h3 class="block-title">Multi-porpuse</h3>
             <p>Curabitur arcu erat, accusaimp eret et porttitor at sesdabx auisque velit nisi pret</p>
           </div>
           <div class="lightbulb line">
             <hr>
             <i></i>
           </div>
         </div>
         <div class="feature-box-inner">
           <div class="col-md-4 col-sm-4 pull-right">
             <i class="icon-feature icon_house"></i>
           </div>
           <div class="col-md-8 col-sm-8">
             <h3 class="block-title">Ultra responsive</h3>
             <p>Curabitur arcu erat, accusaimp eret et porttitor at sesdabx auisque velit nisi pret</p>
           </div>
           <div class="house line">
             <hr>
             <i></i>
           </div>
         </div>
         <div class="feature-box-inner">
           <div class="col-md-4 col-sm-4 pull-right">
             <i class="icon-feature icon_gift"></i>
           </div>
           <div class="col-md-8 col-sm-8">
             <h3 class="block-title">Free updates</h3>
             <p>Curabitur arcu erat, accusaimp eret et porttitor at sesdabx auisque velit nisi pret</p>
           </div>
           <div class="gift line">
             <hr>
             <i></i>
           </div>
         </div>
         <div class="feature-box-inner">
           <div class="col-md-4 col-sm-4 pull-right">
             <i class="icon-feature icon_camera"></i>
           </div>
           <div class="col-md-8 col-sm-8">
             <h3 class="block-title">photobomb</h3>
             <p>Curabitur arcu erat, accusaimp eret et porttitor at sesdabx auisque velit nisi pret</p>
           </div>
           <div class="camera line">
             <hr>
             <i></i>
           </div>
         </div>
       </div>
     </div>
     <div class="col-md-5">
       <div class="mobile-iphone">
         <img src="<?php bloginfo('template_directory'); ?>/images/features/mobile.png" alt="mobile"/>
       </div>
     </div>
   </div>
 </section>
 <!-- Features Section Over -->

 <!-- Our Work -->
 <section id="our-work" class="our-work">
   <!-- Section Header -->
   <div class="section-header">
     <h2>OUR Work</h2>
   </div>
   <!-- Section Header Over -->

   <!-- Portfolio Gallery -->
   <div id="portfolio-gallery-no-space" class="portfolio-gallery">
     <ul class="portfolio-categories sorting-menu">
       <li data-value="all"><a class="active" href="#">Show ALL</a></li>
       <li data-value="design"><a href="#">DESIGN</a></li>
       <li data-value="branding"><a href="#">Branding</a></li>
       <li data-value="creative"><a href="#">Creative</a></li>
     </ul><!--/.container -->
     <ul class="portfolio-list no-space">
       <li class="col-md-3 col-sm-6" data-type="design" data-id="design-1">
         <div class="portfolio-image-block">
           <a href=".#"><img src="<?php bloginfo('template_directory'); ?>/images/our-work/portfolio-1-480x400.png" alt="portfolio image 1"></a>
           <div class="portfolio-block-hover">
             <a href="<?php bloginfo('template_directory'); ?>/images/our-work/portfolio-1-480x400.png" class="portfolio-title" data-lightbox="portfolio" data-title="Image Title 1">cool chairs 1</a>
             <h4>design</h4>
           </div>
         </div>
       </li>
       <li class="col-md-3 col-sm-6" data-type="branding" data-id="branding-1">
         <div class="portfolio-image-block">
           <a href=".#"><img src="<?php bloginfo('template_directory'); ?>/images/our-work/portfolio-2-480x400.png" alt="portfolio image 2"></a>
           <div class="portfolio-block-hover">
             <a href="<?php bloginfo('template_directory'); ?>/images/our-work/portfolio-2-480x400.png" class="portfolio-title" data-lightbox="portfolio" data-title="Image Title 2">cool chairs 2</a>
             <h4>design</h4>
           </div>
         </div>
       </li>
       <li class="col-md-3 col-sm-6" data-type="creative" data-id="creative-1">
         <div class="portfolio-image-block">
           <a href=".#"><img src="<?php bloginfo('template_directory'); ?>/images/our-work/portfolio-3-480x400.png" alt="portfolio image 3"></a>
           <div class="portfolio-block-hover">
             <a href="<?php bloginfo('template_directory'); ?>/images/our-work/portfolio-3-480x400.png" class="portfolio-title" data-lightbox="portfolio" data-title="Image Title 3">cool chairs</a>
             <h4>design</h4>
           </div>
         </div>
       </li>
       <li class="col-md-3 col-sm-6" data-type="web" data-id="web-1">
         <div class="portfolio-image-block">
           <a href=".#"><img src="<?php bloginfo('template_directory'); ?>/images/our-work/portfolio-4-480x400.png" alt="portfolio image 4"></a>
           <div class="portfolio-block-hover">
             <a href="<?php bloginfo('template_directory'); ?>/images/our-work/portfolio-4-480x400.png" class="portfolio-title" data-lightbox="portfolio" data-title="Image Title 4">cool chairs</a>
             <h4>design</h4>
           </div>
         </div>
       </li>
       <li class="col-md-3 col-sm-6" data-type="design" data-id="design-2">
         <div class="portfolio-image-block">
           <a href=".#"><img src="<?php bloginfo('template_directory'); ?>/images/our-work/portfolio-5-480x400.png" alt="portfolio image 5"></a>
           <div class="portfolio-block-hover">
             <a href="<?php bloginfo('template_directory'); ?>/images/our-work/portfolio-5-480x400.png" class="portfolio-title" data-lightbox="portfolio" data-title="Image Title 5">cool chairs</a>
             <h4>design</h4>
           </div>
         </div>
       </li>
       <li class="col-md-3 col-sm-6" data-type="print" data-id="print-2">
         <div class="portfolio-image-block">
           <a href=".#"><img src="<?php bloginfo('template_directory'); ?>/images/our-work/portfolio-6-480x400.png" alt="portfolio image 6"></a>
           <div class="portfolio-block-hover">
             <a href="<?php bloginfo('template_directory'); ?>/images/our-work/portfolio-6-480x400.png" class="portfolio-title" data-lightbox="portfolio" data-title="Image Title 6">cool chairs</a>
             <h4>design</h4>
           </div>
         </div>
       </li>
       <li class="col-md-3 col-sm-6" data-type="fashion" data-id="fashion-2">
         <div class="portfolio-image-block">
           <a href=".#"><img src="<?php bloginfo('template_directory'); ?>/images/our-work/portfolio-7-480x400.png" alt="portfolio image 7"></a>
           <div class="portfolio-block-hover">
             <a href="<?php bloginfo('template_directory'); ?>/images/our-work/portfolio-7-480x400.png" class="portfolio-title" data-lightbox="portfolio" data-title="Image Title 7">cool chairs</a>
             <h4>design</h4>
           </div>
         </div>
       </li>
       <li class="col-md-3 col-sm-6" data-type="web" data-id="web-2">
         <div class="portfolio-image-block">
           <a href=".#"><img src="<?php bloginfo('template_directory'); ?>/images/our-work/portfolio-8-480x400.png" alt="portfolio image 8"></a>
           <div class="portfolio-block-hover">
             <a href="<?php bloginfo('template_directory'); ?>/images/our-work/portfolio-8-480x400.png" class="portfolio-title" data-lightbox="portfolio" data-title="Image Title 8">cool chairs</a>
             <h4>design</h4>
           </div>
         </div>
       </li>
     </ul>
   </div>
 </section>
 <!-- Our Work Section Over -->

 <!-- Why Choose Section -->
 <section id="why-choose" class="why-choose">
   <div class="container">
     <div class="col-md-6 pull-right">
       <div class="why-choose-inner">
         <h2>WHy Choose US</h2>
         <div class="why-choose-box col-md-10 col-sm-8">
           <a href="#" class="block-title"><i class="icon-why icon_desktop"></i><span>design to brag about</span></a>
           <p>Vestialum ac diam sit amet quamveh icula ele mentum raesent</p>
         </div>
         <div class="why-choose-box col-md-10 col-sm-8">
           <a href="#" class="block-title"><i class="icon-why icon_lightbulb"></i><span>Stunning ideas</span></a>
           <p>Vestialum ac diam sit amet quamveh icula ele mentum raesent</p>
         </div>
         <div class="why-choose-box col-md-10 col-sm-8">
           <a href="#" class="block-title"><i class="icon-why icon_house"></i><span>premium support</span></a>
           <p>Vestialum ac diam sit amet quamveh icula ele mentum raesent</p>
         </div>
         <div class="why-choose-box col-md-10 col-sm-8">
           <a href="#" class="block-title"><i class="icon-why icon_archive"></i><span>design to brag about</span></a>
           <p>Vestialum ac diam sit amet quamveh icula ele mentum raesent</p>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- Why Choose Section Over -->

 <!-- How We Work -->
 <section id="how-we-work" class="how-we-work">
   <!-- Section Header -->
   <div class="section-header">
     <h2>How WE Work</h2>
   </div>
   <!-- Section Header Over-->
   <div class="container">
     <ul class="how-we-work-categories">
       <li>
         <a href="#">
           <i class="icon_archive"></i>
           <span>research</span>
         </a>
       </li>
       <li>
         <a href="#">
           <i class="icon_book"></i>
           <span>DESIGN</span>
         </a>
       </li>
       <li>
         <a href="#">
           <i class="icon_drive"></i>
           <span>develop</span>
         </a>
       </li>
       <li>
         <a href="#">
           <i class="icon_globe-2"></i>
           <span>launch</span>
         </a>
       </li>
     </ul>
   </div>
   <div class="how-we-work-container">
     <div class="research-slope">
       <div class="research shape-content">
         <h3>We do our research</h3>
         <p>Morbi in velit ligula, eget vulputate ligula viverra, mi ae sollicitudin rhon usante roin gravida nibh vel velit auctor aliquet. Aeneanollic itudin lorem bibendum.Morbi in velit ligula, eget vulputate ligula viverra, mi ae solliciti rhoncusante roin gravida nibh vel velit auctor aliquetcv<p>
       </div>
     </div>
     <div class="we-perfection-slope">
       <div class="we-perfection shape-content">
         <h3>We design perfection</h3>
         <p>Morbi in velit ligula, eget vulputate ligula viverra, mi ae sollicitudin rhon usante roin gravida nibh vel velit auctor aliquet. Aeneanollic itudin lorem bibendum.Morbi in velit ligula, eget vulputate ligula viverra, mi ae solliciti rhoncusante roin gravida nibh vel velit auctor aliquetcv<p>
       </div>
     </div>
     <div class="car"></div>
     <div class="clean-code">
       <div class="clean-code-box shape-content">
         <h3>Clean code</h3>
         <p>Morbi in velit ligula, eget vulputate ligula viverra, mi ae sollicitudin rhon usante roin gravida nibh vel velit auctor aliquet. Aeneanollic itudin lorem bibendum.Morbi in velit ligula, eget vulputate ligula viverra, mi ae solliciti rhoncusante roin gravida nibh vel velit auctor aliquetcv<p>
       </div>
     </div>
     <div class="we-launch-slope">
       <div class="we-launch shape-content">
         <h3>We launch the project</h3>
         <p>Morbi in velit ligula, eget vulputate ligula viverra, mi ae sollicitudin rhon usante roin gravida nibh vel velit auctor aliquet. Aeneanollic itudin lorem bibendum.Morbi in velit ligula, eget vulputate ligula viverra, mi ae solliciti rhoncusante roin gravida nibh vel velit auctor aliquetcv<p>
       </div>
     </div>
   </div>
 </section>
 <!-- How We Work Over -->

 <!-- Apllication Section -->
 <section id="application-section" class="application-section">
   <div class="container">
     <div class="col-md-6">
       <div class="application-iphone">
         <img src="<?php bloginfo('template_directory'); ?>/images/application/iphone.png" alt="application iphone"/>
       </div>
     </div>
     <div class="col-md-6 app-content-box">
       <h2>try our high-tech aplication</h2>
       <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibend um auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum veli.</p>
       <div class="col-md-9 app-updates">
         <h4><i class="icon_lightbulb"></i> Free Updates</h4>
         <p>Curabitur arcu erat, accusaimp eret et porttitor at sesdabx auisque velit nisi pret</p>
       </div>
       <div class="col-md-9 app-updates">
         <h4><i class="icon_lightbulb"></i> Free Updates</h4>
         <p>Curabitur arcu erat, accusaimp eret et porttitor at sesdabx auisque velit nisi pret</p>
       </div>
       <div class="col-md-9 app-updates">
         <h4><i class="icon_lightbulb"></i> Free Updates</h4>
         <p>Curabitur arcu erat, accusaimp eret et porttitor at sesdabx auisque velit nisi pret</p>
       </div>
       <div class="col-md-9 app-updates">
         <h4><i class="icon_lightbulb"></i> Free Updates</h4>
         <p>Curabitur arcu erat, accusaimp eret et porttitor at sesdabx auisque velit nisi pret</p>
       </div>
     </div>
   </div>
 </section>
 <!-- Apllication Section Over -->

 <!-- Our Genius -->
 <section id="our-genius" class="our-genius">
   <!-- Section Header -->
   <div class="section-header">
     <h2>our genius</h2>
   </div>
   <!-- Section Header Over-->
   <div class="genius-gallery">
     <div id="style1" class="style1 style-active">
       <svg width="100%" height="100%">
         <clipPath id="clipPolygon1">
           <polygon points="0 424,491 500,415 0,0 0">
           </polygon>
         </clipPath>
       </svg>
       <img src="<?php bloginfo('template_directory'); ?>/images/genius/genius-1.jpg" alt="genius"/>
       <div class="hover">andrew doe</div>
     </div>
     <div id="style2" class="style2">
       <svg width="100%" height="100%">
         <clipPath id="clipPolygon2">
           <polygon points="80 532,1005 417,1061 -3,0 0">
           </polygon>
         </clipPath>
       </svg>
       <img src="<?php bloginfo('template_directory'); ?>/images/genius/genius-info.jpg" alt="genius"/>
     </div>
     <div id="style3" class="style3">
       <svg width="100%" height="100%">
         <clipPath id="clipPolygon3">
           <polygon points="0 400,480 400,480 0,53 0">
           </polygon>
         </clipPath>
       </svg>
       <img src="<?php bloginfo('template_directory'); ?>/images/genius/genius-3.jpg" alt="genius"/>
       <div class="hover">andrew doe</div>
     </div>
     <div id="style4" class="style4">
       <svg width="100%" height="100%">
         <clipPath id="clipPolygon4">
           <polygon points="0 405,526 400,476 0,0 0">
           </polygon>
         </clipPath>
       </svg>
       <img src="<?php bloginfo('template_directory'); ?>/images/genius/genius-4.jpg" alt="genius"/>
       <div class="hover">andrew doe</div>
     </div>
     <div id="style5" class="style5">
       <svg width="100%" height="100%">
         <clipPath id="clipPolygon5">
           <polygon points="50 402,480 400,480 0,5 0">
           </polygon>
         </clipPath>
       </svg>
       <img src="<?php bloginfo('template_directory'); ?>/images/genius/genius-5.jpg" alt="genius"/>
       <div class="hover">andrew doe</div>
     </div>
     <div id="style6" class="style6">
       <svg width="100%" height="100%">
         <clipPath id="clipPolygon6">
           <polygon points="0 400,430 400,473 0,0 0">
           </polygon>
         </clipPath>
       </svg>
       <img src="<?php bloginfo('template_directory'); ?>/images/genius/genius-6.jpg" alt="genius"/>
       <div class="hover">andrew doe</div>
     </div>
     <div id="style7" class="style7">
       <svg width="100%" height="100%">
         <clipPath id="clipPolygon7">
           <polygon points="0 400,530 404,530 0,50 0">
           </polygon>
         </clipPath>
       </svg>
       <img src="<?php bloginfo('template_directory'); ?>/images/genius/genius-7.jpg" alt="genius"/>
       <div class="hover">andrew doe</div>
     </div>

     <div id="style1-hover" class="style2 member-info">
       <svg width="100%" height="100%">
         <clipPath id="clipPolygon13">
           <polygon points="80 532,1005 417,1061 -3,0 0">
           </polygon>
         </clipPath>
       </svg>
       <div class="col-md-6 social-info">
         <div class="inner-social-info">
           <h3>andrew doe</h3>
           <h6>Designer</h6>
           <div class="social-info-content1">
             <p>Vestibulum ac diam sit amet quam ve hicula elementum sed sit amet duirae sent sapienmassa, convallis.</p>
           </div>
           <ul>
             <li><a href="#"><i class="social_facebook_circle"></i></a></li>
             <li><a href="#"><i class="social_dribbble_circle"></i></a></li>
             <li><a href="#"><i class="social_twitter_circle"></i></a></li>
           </ul>
         </div>
       </div>
       <div class="col-md-6 skills-info">
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_bar_count-1" class="progress-bar progress-bar-danger html" role="progressbar">
             </div>
             <h6>Html <Span id="skill_count-1" data-skills_percent="45"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_bar_count-2" class="progress-bar progress-bar-danger design" role="progressbar">
             </div>
             <h6>Design <Span id="skill_count-2" data-skills_percent="80"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_bar_count-3" class="progress-bar progress-bar-danger photoshop" role="progressbar"></div>
             <h6>Photoshop <Span id="skill_count-3" data-skills_percent="60"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_bar_count-4" class="progress-bar progress-bar-danger css" role="progressbar"></div>
             <h6>Css <Span id="skill_count-4" data-skills_percent="40"></span></h6>
           </div>
         </div>
       </div>
     </div>

     <div id="style3-hover" class="style2 member-info">
       <svg width="100%" height="100%">
         <clipPath id="clipPolygon8">
           <polygon points="80 532,1005 417,1061 -3,0 0">
           </polygon>
         </clipPath>
       </svg>
       <div class="col-md-6 social-info">
         <div class="inner-social-info">
           <h3>andrew doe</h3>
           <h6>Designer</h6>
           <div class="social-info-content1">
             <p>Vestibulum ac diam sit amet quam ve hicula elementum sed sit amet duirae sent sapienmassa, convallis.</p>
           </div>
           <ul>
             <li><a href="#"><i class="social_facebook_circle"></i></a></li>
             <li><a href="#"><i class="social_dribbble_circle"></i></a></li>
             <li><a href="#"><i class="social_twitter_circle"></i></a></li>
           </ul>
         </div>
       </div>
       <div class="col-md-6 skills-info">
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_3_bar_count-1" class="progress-bar progress-bar-danger html" role="progressbar"></div>
             <h6>Html <Span id="skill_3_count-1" data-skills_percent="80"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_3_bar_count-2" class="progress-bar progress-bar-danger design" role="progressbar">		</div>
             <h6>Design <Span id="skill_3_count-2" data-skills_percent="40"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_3_bar_count-3" class="progress-bar progress-bar-danger photoshop" role="progressbar">
             </div>
             <h6>Photoshop <Span id="skill_3_count-3" data-skills_percent="60"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_3_bar_count-4" class="progress-bar progress-bar-danger css" role="progressbar"></div>
             <h6>Css <Span id="skill_3_count-4" data-skills_percent="40"></span></h6>
           </div>
         </div>
       </div>
     </div>

     <div id="style4-hover" class="style2 member-info">
       <svg width="100%" height="100%">
         <clipPath id="clipPolygon9">
           <polygon points="80 532,1005 417,1061 -3,0 0">
           </polygon>
         </clipPath>
       </svg>
       <div class="col-md-6 social-info">
         <div class="inner-social-info">
           <h3>andrew doe</h3>
           <h6>Designer</h6>
           <div class="social-info-content1">
             <p>Vestibulum ac diam sit amet quam ve hicula elementum sed sit amet duirae sent sapienmassa, convallis.</p>
           </div>
           <ul>
             <li><a href="#"><i class="social_facebook_circle"></i></a></li>
             <li><a href="#"><i class="social_dribbble_circle"></i></a></li>
             <li><a href="#"><i class="social_twitter_circle"></i></a></li>
           </ul>
         </div>
       </div>
       <div class="col-md-6 skills-info">
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_4_bar_count-1" class="progress-bar progress-bar-danger html" role="progressbar"></div>
             <h6>Html <Span id="skill_4_count-1" data-skills_percent="60"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_4_bar_count-2" class="progress-bar progress-bar-danger design" role="progressbar"></div>
             <h6>Design <Span id="skill_4_count-2" data-skills_percent="80"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_4_bar_count-3" class="progress-bar progress-bar-danger photoshop" role="progressbar">
             </div>
             <h6>Photoshop <Span id="skill_4_count-3" data-skills_percent="50"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_4_bar_count-4" class="progress-bar progress-bar-danger css" role="progressbar">
             </div>
             <h6>Css <Span id="skill_4_count-4" data-skills_percent="40"></span></h6>
           </div>
         </div>
       </div>
     </div>

     <div id="style5-hover" class="style2 member-info">
       <svg width="100%" height="100%">
         <clipPath id="clipPolygon10">
           <polygon points="80 532,1005 417,1061 -3,0 0">
           </polygon>
         </clipPath>
       </svg>
       <div class="col-md-6 social-info">
         <div class="inner-social-info">
           <h3>andrew doe</h3>
           <h6>Designer</h6>
           <div class="social-info-content1">
             <p>Vestibulum ac diam sit amet quam ve hicula elementum sed sit amet duirae sent sapienmassa, convallis.</p>
           </div>
           <ul>
             <li><a href="#"><i class="social_facebook_circle"></i></a></li>
             <li><a href="#"><i class="social_dribbble_circle"></i></a></li>
             <li><a href="#"><i class="social_twitter_circle"></i></a></li>
           </ul>
         </div>
       </div>
       <div class="col-md-6 skills-info">
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_5_bar_count-1" class="progress-bar progress-bar-danger html" role="progressbar">
             </div>
             <h6>Html <Span id="skill_5_count-1" data-skills_percent="20"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_5_bar_count-2" class="progress-bar progress-bar-danger design" role="progressbar">
             </div>
             <h6>Design <Span id="skill_5_count-2" data-skills_percent="90"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_5_bar_count-3" class="progress-bar progress-bar-danger photoshop" role="progressbar">
             </div>
             <h6>Photoshop <Span id="skill_5_count-3" data-skills_percent="60"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_5_bar_count-4" class="progress-bar progress-bar-danger css" role="progressbar">
             </div>
             <h6>Css <Span id="skill_5_count-4" data-skills_percent="40"></span></h6>
           </div>
         </div>
       </div>
     </div>

     <div id="style6-hover" class="style2 member-info">
       <svg width="100%" height="100%">
         <clipPath id="clipPolygon11">
           <polygon points="80 532,1005 417,1061 -3,0 0">
           </polygon>
         </clipPath>
       </svg>
       <div class="col-md-6 social-info">
         <div class="inner-social-info">
           <h3>andrew doe</h3>
           <h6>Designer</h6>
           <div class="social-info-content1">
             <p>Vestibulum ac diam sit amet quam ve hicula elementum sed sit amet duirae sent sapienmassa, convallis.</p>
           </div>
           <ul>
             <li><a href="#"><i class="social_facebook_circle"></i></a></li>
             <li><a href="#"><i class="social_dribbble_circle"></i></a></li>
             <li><a href="#"><i class="social_twitter_circle"></i></a></li>
           </ul>
         </div>
       </div>
       <div class="col-md-6 skills-info">
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_6_bar_count-1" class="progress-bar progress-bar-danger html" role="progressbar">
             </div>
             <h6>Html <Span id="skill_6_count-1" data-skills_percent="35"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_6_bar_count-2" class="progress-bar progress-bar-danger design">
             </div>
             <h6>Design <Span id="skill_6_count-2" data-skills_percent="25"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_6_bar_count-3" class="progress-bar progress-bar-danger photoshop" role="progressbar">
             </div>
             <h6>Photoshop <Span id="skill_6_count-3" data-skills_percent="82"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_6_bar_count-4" class="progress-bar progress-bar-danger css" role="progressbar">
             </div>
             <h6>Css <Span id="skill_6_count-4" data-skills_percent="57"></span></h6>
           </div>
         </div>
       </div>
     </div>

     <div id="style7-hover" class="style2 member-info">
       <svg width="100%" height="100%">
         <clipPath id="clipPolygon12">
           <polygon points="80 532,1005 417,1061 -3,0 0">
           </polygon>
         </clipPath>
       </svg>
       <div class="col-md-6 social-info">
         <div class="inner-social-info">
           <h3>andrew doe</h3>
           <h6>post</h6>
           <div class="social-info-content1">
             <p>Vestibulum ac diam sit amet quam ve hicula elementum sed sit amet duirae sent sapienmassa, convallis.</p>
           </div>
           <ul>
             <li><a href="#"><i class="social_facebook_circle"></i></a></li>
             <li><a href="#"><i class="social_dribbble_circle"></i></a></li>
             <li><a href="#"><i class="social_twitter_circle"></i></a></li>
           </ul>
         </div>
       </div>
       <div class="col-md-6 skills-info">
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_7_bar_count-1" class="progress-bar progress-bar-danger html" role="progressbar">
             </div>
             <h6>Html <Span id="skill_7_count-1" data-skills_percent="60"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_7_bar_count-2" class="progress-bar progress-bar-danger design"	>
             </div>
             <h6>Design <Span id="skill_7_count-2" data-skills_percent="80"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_7_bar_count-3" class="progress-bar progress-bar-danger photoshop" role="progressbar">
             </div>
             <h6>Photoshop <Span id="skill_7_count-3" data-skills_percent="60"></span></h6>
           </div>
         </div>
         <div class="skill-progress-box">
           <div class="progress">
             <div id="skill_7_bar_count-4" class="progress-bar progress-bar-danger css" role="progressbar">
             </div>
             <h6>Css <Span id="skill_7_count-4" data-skills_percent="40"></span></h6>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- Our Genius Over -->

 <!-- Video Section -->
 <div id="video-section" class="video-section">
   <a id="bgndVideo" class="player" data-property="{videoURL:'7SnmCUwOsts',containment:'.video-section', showControls:true, autoPlay:true, loop:true, vol:50, mute:true, startAt:10, opacity:1, addRaster:true, quality:'default', optimizeDisplay:true}">My video</a> <!--BsekcY04xvQ-->
 </div>
 <!-- Video Section Over -->

 <!-- Statistics Section -->
 <div id="statistics-section" class="statistics-section">
   <div class="container">
     <div class="col-md-3 col-sm-12">
       <h1><i class="icon_compass"></i> <span id="project"></span>K</h1>
       <p>PROJECT COMPLETE</p>
     </div>
     <div class="col-md-3 col-sm-12">
       <h1><i class="icon_toolbox "></i> <span id="work"></span> &nbsp; </h1>
       <p>CLIENT WORKED WITH</p>
     </div>
     <div class="col-md-3 col-sm-12">
       <h1><i class="icon_mug_alt"></i> <span id="consumed"></span> &nbsp; </h1>
       <p>CUPS OF COFFEE CONSUMED</p>
     </div>
     <div class="col-md-3 col-sm-12">
       <h1><i class="icon_shield_alt"></i> <span id="videos"></span> &nbsp; </h1>
       <p>ANSWERED QUESTIONS</p>
     </div>
   </div>
 </div>
 <!-- Statistics Section Over -->

 <!-- Blog Post -->
 <section id="blog-section" class="blog-section">
   <!-- Section Header -->
   <div class="section-header">
     <h2>latest posts</h2>
   </div>
   <!-- Section Header Over-->
   <div class="container no-padding">
     <div class="blog-inner">
       <div class="col-md-4 col-sm-6 post">
         <div class="entry-date">
           <div class="date">
             <h2>07</h2>
             <h4>MAY</h4>
           </div>
           <div class="icon">
             <i class="fa fa-heart"></i>
             <i class="fa fa-comments"></i>
           </div>
         </div>
         <div class="entry-cover">
           <img src="<?php bloginfo('template_directory'); ?>/images/blog/section/image1.jpg" alt="cover image"/>
           <div class="entry-header">
             <a href="<?php bloginfo('template_directory'); ?>/blog-post.html" class="entry-title">A BEAUTIFUL VIEW</a>
           </div>
           <div class="post-date">
             <span class="entry-date">November 21, 2013</span>
             <span class="comments-link"><a href="#">5 COMMENTS</a></span>
             <span class="post-views"><i class="fa fa-heart"></i> 23</span>
           </div>
           <p class="post-item">Vestibulum ac diam sit amet quam vehicu la elementum sed sit amet dui. Praesent sap ien massa, convallis a pellentesque nec, egestas non nisvamus.</p>
           <a href="<?php bloginfo('template_directory'); ?>/blog-post.html" class="read-more">read more</a>
         </div>
       </div>

       <div class="col-md-4 col-sm-6 post">
         <div class="entry-date">
           <div class="date">
             <h2>07</h2>
             <h4>MAY</h4>
           </div>
           <div class="icon">
             <i class="fa fa-heart"></i>
             <i class="fa fa-comments"></i>
           </div>
         </div>
         <div class="entry-cover">
           <img src="<?php bloginfo('template_directory'); ?>/images/blog/section/image2.jpg" alt="cover image"/>
           <div class="entry-header">
             <a href="<?php bloginfo('template_directory'); ?>/blog-post.html" class="entry-title">A BEAUTIFUL VIEW</a>
           </div>
           <div class="post-date">
             <span class="entry-date">November 21, 2013</span>
             <span class="comments-link"><a href="#">5 COMMENTS</a></span>
             <span class="post-views"><i class="fa fa-heart"></i> 23</span>
           </div>
           <p class="post-item">Vestibulum ac diam sit amet quam vehicu la elementum sed sit amet dui. Praesent sap ien massa, convallis a pellentesque nec, egestas non nisvamus.</p>
           <a href="<?php bloginfo('template_directory'); ?>/blog-post.html" class="read-more">read more</a>
         </div>
       </div>

       <div class="col-md-4 col-sm-6 post">
         <div class="entry-date">
           <div class="date">
             <h2>07</h2>
             <h4>MAY</h4>
           </div>
           <div class="icon">
             <i class="fa fa-heart"></i>
             <i class="fa fa-comments"></i>
           </div>
         </div>
         <div class="entry-cover">
           <img src="<?php bloginfo('template_directory'); ?>/images/blog/section/image3.jpg" alt="cover image"/>
           <div class="entry-header">
             <a href="<?php bloginfo('template_directory'); ?>/blog-post.html" class="entry-title">A BEAUTIFUL VIEW</a>
           </div>
           <div class="post-date">
             <span class="entry-date">November 21, 2013</span>
             <span class="comments-link"><a href="#">5 COMMENTS</a></span>
             <span class="post-views"><i class="fa fa-heart"></i> 23</span>
           </div>
           <p class="post-item">Vestibulum ac diam sit amet quam vehicu la elementum sed sit amet dui. Praesent sap ien massa, convallis a pellentesque nec, egestas non nisvamus.</p>
           <a href="<?php bloginfo('template_directory'); ?>/blog-post.html" class="read-more">read more</a>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- Blog Post Over -->

 <!-- What Clients Section -->
 <section id="client-section" class="client-section">
   <!-- Section Header -->
   <div class="section-header">
     <h2>WHAT CLIENTS SAY</h2>
   </div>
   <!-- Section Header Over-->
   <div class="client-style1">
     <svg width="0" height="0">
       <clipPath id="client-1">
         <polygon points="0 152,1920 310,1920 0,0 0">
         </polygon>
       </clipPath>
       <clipPath id="client-11">
         <polygon points="0 752,1920 752,1920 0,0 0">
         </polygon>
       </clipPath>
     </svg>
     <div class="client-hover">
       <h2>"Werbi in velit ligula eget vulputate ligulaviv sollicitudin rcusante orbi in velit"</h2>
       <p>by Ane Doe</p>
     </div>
   </div>
   <div class="client-style2 client-active">
     <svg width="0" height="0">
       <clipPath id="client-2">
         <polygon points="-1 450,1920 289,1920 158,0 0">
         </polygon>
       </clipPath>
       <clipPath id="client-21">
         <polygon points="-1 752,1920 666,1920 97,0 0">
         </polygon>
       </clipPath>
     </svg>
     <div class="client-hover">
       <h2>"Werbi in velit ligula eget vulputate ligulaviv sollicitudin rcusante orbi in velit"</h2>
       <p>by Ane Doe</p>
     </div>
   </div>
   <div class="client-style3">
     <svg width="0" height="0">
       <clipPath id="client-3">
         <polygon points="-1 326,1920 316,1920 0,0 155">
         </polygon>
       </clipPath>
       <clipPath id="client-31">
         <polygon points="-1 752,1920 756,1920 0,0 155">
         </polygon>
       </clipPath>
     </svg>
     <div class="client-hover">
       <h2>"Werbi in velit ligula eget vulputate ligulaviv sollicitudin rcusante orbi in velit"</h2>
       <p>by Ane Doe</p>
     </div>
   </div>
 </section>
 <!-- What Clients Section Over -->

 <!-- Brag About Section -->
 <div id="brag-about-section" class="brag-about-section">
   <div class="col-md-6 brag-about-img pull-right">
     <img src="<?php bloginfo('template_directory'); ?>/images/about/about-imac.png" alt="iMac">
   </div>
   <div class="col-md-6 no-padding">
     <div class="col-md-7 pull-right brag-content">
       <h1>design to brag about</h1>
       <p>Morbi in velit, eget vulputate ligula viverra, mi ae sollicitudin rhon roin gravida nibh vel velit auctor aliquet. Aeneanollic itudin lorem dumorbi in velit ligula, eget vulputate ligula viverra, mi ae sollicit rhoncusante roin gravida nibh vel velit auctor aliquetc</p>
     </div>
   </div>
 </div>
 <!-- Brag About Section Over -->

 <!-- Social Section -->
 <div id="social-section" class="social-main">
   <div class=" icon-social-google no-padding">
     <a href="#"><i class="social_googleplus "></i></a>
   </div>
   <div class="icon-social-tumblr no-padding">
     <a href="#"><i class="social_tumblr"></i></a>
   </div>
   <div class="icon-social-facebook no-padding">
     <a href="#"><i class=" social_facebook"></i></a>
   </div>
   <div class="icon-social-vimoe no-padding">
     <a href="#"><i class="social_vimeo "></i></a>
   </div>
   <div class="icon-social-twitter no-padding">
     <a href="#"><i class="social_twitter "></i></a>
   </div>
   <div class="icon-social-rss no-padding">
     <a href="#"><i class="social_rss "></i></a>
   </div>
   <div class="icon-social-dribble no-padding">
     <a href="#"><i class="social_dribbble "></i></a>
   </div>
   <div class="icon-social-pinterest no-padding">
     <a href="#"><i class="social_pinterest "></i></a>
   </div>
 </div>
 <!-- Social Section Over -->

 <!-- Map Section -->
 <div id="map-section" class="map-section">
   <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
 </div>
 <!-- Map Section Over -->

 <!-- Project Section -->
 <div id="project-section" class="project-section">
   <div class="container">
     <div class="col-md-6 col-sm-6 col-xs-6 start-project">
       <p>have you fallen in love yet?</p>
       <h2>start a project</h2>
       <a href="#"><span>LEt's Go</span></a>
     </div>
     <div class="col-md-6 col-sm-6 col-xs-6 send-msg">
       <p>Want to tell us something?</p>
       <h2>Send a message</h2>
       <a href="#" data-toggle="modal" data-target="#myModal"><span>Tell Us</span></a>
     </div>
   </div>
 </div>
 <!-- Project Section Over -->
<?php
get_footer(); ?>
