<?php
/**
 * The template for displaying archive pages
 *
 * @package Gamers Hub
 * @subpackage gamers_hub
 */

get_header(); ?>

<div class="container">
	<main id="tp_content" role="main">
		<div id="primary" class="content-area">
		<?php if ( have_posts() ) : ?>
			<div class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</div>
		<?php endif; ?>

		<?php
	        $gamers_hub_sidebar_layout = get_theme_mod( 'gamers_hub_sidebar_post_layout','right');
	        if($gamers_hub_sidebar_layout == 'left'){ ?>
	        <div class="row m-0">
	          	<div class="col-lg-4 col-md-4" id="theme-sidebar"><?php get_sidebar(); ?></div>
	          	<div class="col-lg-8 col-md-8">
	           
		            <?php if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/post/content', get_post_format() );

					endwhile;

					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif; ?>

		            <div class="navigation">
		              <?php
		                  // Previous/next page navigation.
		                  the_posts_pagination( array(
		                      'prev_text'          => __( 'Previous page', 'gamers-hub' ),
		                      'next_text'          => __( 'Next page', 'gamers-hub' ),
		                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'gamers-hub' ) . ' </span>',
		                  ) );
		              ?>
		                <div class="clearfix"></div>
		            </div>
	          	</div>
	        </div>
	        <div class="clearfix"></div>
	    <?php }else if($gamers_hub_sidebar_layout == 'right'){ ?>
	        <div class="row m-0">
	          	<div class="col-lg-8 col-md-8">
	           
		            <?php if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/post/content', get_post_format() );

					endwhile;

					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif; ?>

		            <div class="navigation">
		              <?php
		                  // Previous/next page navigation.
		                  the_posts_pagination( array(
		                      'prev_text'          => __( 'Previous page', 'gamers-hub' ),
		                      'next_text'          => __( 'Next page', 'gamers-hub' ),
		                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'gamers-hub' ) . ' </span>',
		                  ) );
		              ?>
		                <div class="clearfix"></div>
		            </div>
	          	</div>
	          	<div class="col-lg-4 col-md-4" id="theme-sidebar"><?php get_sidebar(); ?></div>
	        </div>
	    <?php }else if($gamers_hub_sidebar_layout == 'full'){ ?>
	        <div class="full">
	           
		            <?php if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/post/content', get_post_format() );

					endwhile;

					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif; ?>

		            <div class="navigation">
		              <?php
		                  // Previous/next page navigation.
		                  the_posts_pagination( array(
		                      'prev_text'          => __( 'Previous page', 'gamers-hub' ),
		                      'next_text'          => __( 'Next page', 'gamers-hub' ),
		                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'gamers-hub' ) . ' </span>',
		                  ) );
		              ?>
		                <div class="clearfix"></div>
		            </div>
          	</div>
	    <?php }else if($gamers_hub_sidebar_layout == 'three-column'){ ?>
	        <div class="row m-0">
	          	<div class="col-lg-3 col-md-3" id="theme-sidebar"><?php get_sidebar(); ?></div>
	          	<div class="col-lg-6 col-md-6">
	           
		            <?php if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/post/content', get_post_format() );

					endwhile;

					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif; ?>

		            <div class="navigation">
		              	<?php
		                  	// Previous/next page navigation.
		                  	the_posts_pagination( array(
		                      'prev_text'          => __( 'Previous page', 'gamers-hub' ),
		                      'next_text'          => __( 'Next page', 'gamers-hub' ),
		                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'gamers-hub' ) . ' </span>',
		                  	) );
		              	?>
		                <div class="clearfix"></div>
		            </div>
	          	</div>
	          	<div class="col-lg-3 col-md-3" id="theme-sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
	        </div>
	    <?php }else if($gamers_hub_sidebar_layout == 'four-column'){ ?>
	        <div class="row m-0">
	          	<div class="col-lg-3 col-md-3" id="theme-sidebar"><?php get_sidebar(); ?></div>
	          	<div class="col-lg-3 col-md-3">
	           
		            <?php if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/post/content', get_post_format() );

					endwhile;

					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif; ?>

		            <div class="navigation">
		              <?php
		                  // Previous/next page navigation.
		                  the_posts_pagination( array(
		                      'prev_text'          => __( 'Previous page', 'gamers-hub' ),
		                      'next_text'          => __( 'Next page', 'gamers-hub' ),
		                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'gamers-hub' ) . ' </span>',
		                  ) );
		              ?>
		                <div class="clearfix"></div>
		            </div>
	          	</div>
	          	<div class="col-lg-3 col-md-3" id="theme-sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
	          	<div class="col-lg-3 col-md-3" id="theme-sidebar"><?php dynamic_sidebar('sidebar-3');?></div>
	        </div>
	    <?php }else if($gamers_hub_sidebar_layout == 'grid'){ ?>
	        <div class="row m-0">
	          	<div class="col-lg-9 col-md-9">
	           		<div class="row mb-4">
			            <?php if ( have_posts() ) : ?>
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/post/content-grid');

						endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif; ?>
					</div>
		            <div class="navigation">
		              <?php
		                  // Previous/next page navigation.
		                  the_posts_pagination( array(
		                      'prev_text'          => __( 'Previous page', 'gamers-hub' ),
		                      'next_text'          => __( 'Next page', 'gamers-hub' ),
		                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'gamers-hub' ) . ' </span>',
		                  ) );
		              ?>
		                <div class="clearfix"></div>
		            </div>
	          	</div>
	          	<div class="col-lg-3 col-md-3" id="theme-sidebar"><?php get_sidebar(); ?></div>
	        </div>
	    <?php }else {?>
	    	<div class="row m-0">
	          	<div class="col-lg-8 col-md-8">
	           
		            <?php if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/post/content', get_post_format() );

					endwhile;

					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif; ?>

		            <div class="navigation">
		              <?php
		                  // Previous/next page navigation.
		                  the_posts_pagination( array(
		                      'prev_text'          => __( 'Previous page', 'gamers-hub' ),
		                      'next_text'          => __( 'Next page', 'gamers-hub' ),
		                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'gamers-hub' ) . ' </span>',
		                  ) );
		              ?>
		                <div class="clearfix"></div>
		            </div>
	          	</div>
	          	<div class="col-lg-4 col-md-4" id="theme-sidebar"><?php get_sidebar(); ?></div>
	        </div>
	    <?php } ?>
		</div>
	</main>
</div>

<?php get_footer();
