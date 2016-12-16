<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ideataru
 */

?>

<footer id="" class="footer-section">



  <div class="container">
        	<div class="row">
<!--  <div class="back-home">
    <a href="/">Go Back Home</a>
  </div>-->
<div class="col-md-4 col-sm-4">
  <hr>


  </div>
  <div class="col-md-4 col-sm-4">

<hr>


    <h4 class="widgettitle">Tags::</h4>
    <div id="Tcomments" class="tab-pane">
   								<div class="tag-cloud">
   									<?php
   									$tags = get_tags();
   									$html = '';
   									foreach ( $tags as $tag ) {
   										$tag_link = get_tag_link( $tag->term_id );

   										$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";

   										$html .= "{$tag->name}</a>";


   									}


                    echo $html;
   									?>
   								</div>
   						</div>

  </div>



    <div class="col-md-4 col-sm-4">
      <hr>



<div class="widget footer_widget widget_links">
    <?php
    if (! function_exists('catList')) {
	function catList() {
		$args = array(
		'orderby'            => 'name',
		'order'              => 'ASC',
		'show_last_update'   => 0,
		'style'              => 'none',
		'show_count'         => 1,
		'hide_empty'         => 1,
		'use_desc_for_title' => 1,
		'child_of'           => 0,
		'current_category'   => 0,
		'hierarchical'       => true,
		'number'             => NULL,
		'echo'               => 1,
		'depth'              => 1
		);
		wp_list_categories( $args );
	}
}
?>
<h4 class="widgettitle">Categories</h4>


 <?php catList(); ;?>


   								</div>

</div>




</footer>


<!-- jQuery Include -->
<script src="<?php bloginfo('template_directory'); ?>/libraries/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/libraries/jquery.easing.min.js"></script><!-- Easing Animation Effect -->

<script src="<?php bloginfo('template_directory'); ?>/libraries/bootstrap/bootstrap.min.js"></script> <!-- Core Bootstrap v3.2.0 -->
<script src="<?php bloginfo('template_directory'); ?>/libraries/bootstrap/ie-emulation-modes-warning.js"></script> <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<script src="<?php bloginfo('template_directory'); ?>/libraries/bootstrap/ie10-viewport-bug-workaround.js"></script> <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- Font Elegant -->
  <!--[if lte IE 7]><script src="libraries/fonts/elegant/lte-ie7.js"></script><![endif]-->

<script src="<?php bloginfo('template_directory'); ?>/libraries/portfolio-filter/jquery.quicksand.js"></script> <!-- Quicksand v1.4 -->
<script src="<?php bloginfo('template_directory'); ?>/libraries/jquery.superslides.min.js"></script> <!-- Superslides - v0.6.3-wip -->

<script src="<?php bloginfo('template_directory'); ?>/libraries/roundabout.js"></script> <!-- service Rounded slider -->
<script src="<?php bloginfo('template_directory'); ?>/libraries/roundabout_shapes.js"></script> <!-- service Rounded slider -->

<script src="<?php bloginfo('template_directory'); ?>/libraries/jquery.animateNumber.min.js"></script> <!-- Used for Animated Numbers -->
<script src="<?php bloginfo('template_directory'); ?>/libraries/jquery.appear.js"></script> <!-- It Loads jQuery when element is appears -->
<script src="<?php bloginfo('template_directory'); ?>/libraries/jquery.knob.js"></script> <!-- Used for Loading Circle -->

<script src="<?php bloginfo('template_directory'); ?>/libraries/wow.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/libraries/owl-carousel/owl.carousel.min.js"></script> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
<script src="<?php bloginfo('template_directory'); ?>/libraries/video/jquery.mb.YTPlayer.js"></script>

<!-- Customized Scripts -->
<script src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>

</body>
</html>

</div>

</div>

<div class="site-footer-bottom">
<hr>
</div>
