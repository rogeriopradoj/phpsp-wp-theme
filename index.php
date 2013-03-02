<?php
/** index.php
 *
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 05.02.2012
 */

get_header(); ?>

<section id="primary" class="span12">
	<?php tha_content_before(); ?>
	<div id="content" role="main">
            <div class="row">
                <h3 class="span12 home-image"></h3>
            </div>
             <div class="row">
                <div class="span4">
                    <h3 class="black-block">Próximos Eventos</h3>
                    <?php $args = array( 'category_name' => 'eventos', 'posts_per_page' => 5 );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ): $loop->the_post();?>
                    <div class="row-fluid article-phpsp-home">
                        <div class="span12">
                            <div><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></div>
                            <small>por <?php the_excerpt()?></small>
                        </div>
                    </div>
                        <?php endwhile; ?>
                </div>
                <div class="span4">
                    <h3 class="blue-block">Artigos da comunidade</h3>
                    <?php $args = array( 'category_name' => 'artigos', 'posts_per_page' => 5 );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ): $loop->the_post();?>
                    <div class="row-fluid article-phpsp-home">
                        <div class="span3">
                            <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'the-bootstrap_author_bio_avatar_size', 70 ) ); ?>
                            
                        </div>
                        <div class="span9">
                            <div><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></div>
                            <small>por <?php the_author()?></small>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <div class="span4">
                    <h3 class="grey-block">Avisos</h2>
                    <?php $loop = new WP_Query( array( 'category_name' => 'avisos', 'posts_per_page' => 1 ) );
                          $loop->the_post(); ?>
                    <div class="row-fluid article-phpsp-home">
                        <div class="span12">
                            <div><?php echo get_post(); ?></div>
                            <small>por <?php the_author()?></small>
                        </div>
                    </div>
                </div>
            </div>
		<?/*php tha_content_top();
		
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( '/partials/content', get_post_format() );
			}
			the_bootstrap_content_nav( 'nav-below' );
		}
		else {
			get_template_part( '/partials/content', 'not-found' );
		}
	
		tha_content_bottom(); */?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
//get_sidebar();
get_footer();


/* End of file index.php */
/* Location: ./wp-content/themes/the-bootstrap/index.php */