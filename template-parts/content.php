<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ideataru
 */
?>

	<!-- <div class="container"> -->

				  <div class="col-md-4 col-sm-6 post">
						<div class="entry-date">
		          <div class="date">
								<?php $post_date = get_the_date( 'j' ); echo  '<h2>'.$post_date.'</h2>';
								$post_date = get_the_date( 'M' ); echo '<strong><h3>'.$post_date.'</h3></strong>';


								?>
		          <!--  <?php ideataru_post_on()?>-->


		          </div>
		          <div class="icon">


		            <i class="fa fa-heart"></i>


		            <i class="fa fa-comments"></i>
		          </div>
		        </div>
						    <div class="entry-cover">
										<div class="entry-header">
						<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="media-box grid-featured-img">
									<?php the_post_thumbnail(); ?>
								</a>
							<?php endif; ?>
						<!-- <a href="<?php esc_url( get_permalink() ); ?>" class="media-box grid-featured-img">
									<img src="<?php bloginfo('template_directory'); ?>/images/post1.jpg" alt="">
							</a>-->



							<?php
							if ( is_single() ) :
								the_title( '<h2 class="entry-title">', '</h1>' );
							else :
								the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
							endif;?>
						</div>
							</div>
							<div class="post-date">

								<span class="comments-link"><a href="<?php the_permalink(); ?>"><?php comments_number();?> </a></span>
								
								<span class="post-views"><i class="fa fa-heart"></i> 60</span>
							</div>


							<?php

							if ( 'post' === get_post_type() ) : ?>
							<div class="entry-meta">
								<?php ideataru_posted_on(); ?>
							</div><!-- .entry-meta -->
							<?php
							endif; ?>

							<!-- <div class="grid-item-excerpt">
									<p>A blog post sample excerpt text which can be edited by editing the blog post page. Excerpt length can be changed from the default blog settings...</p>
							</div> -->
							<div class="grid-item-excerpt">
								<?php
								  the_excerpt();
									/* translators: %s: Name of current post. */
									/*
									the_content( sprintf(

										wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'ideataru' ), array( 'span' => array( 'class' => array() ) ) ),
										the_title( '<span class="screen-reader-text">"', '"</span>', false )
									) );*/

									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ideataru' ),
										'after'  => '</div>',
									) );
								?>

							</div><!-- .entry-content -->
							<?php ideataru_entry_footer(); ?>


							<!--
							<footer class="entry-footer">
								<?php ideataru_entry_footer(); ?>
							</footer> --> <!-- .entry-footer -->
							<a href="<?php esc_url( get_permalink()); ?>" class="read-more">Read more</a>
					</div>

		<!--</div>-->
