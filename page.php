<?php
/**
 * The template for displaying all single posts.
 *
 * @package InDreams
 */

get_header(); ?>

    <div id="primary" class="content-area">
             <div class="container">
                <div class="content-bar" id="content">
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="page-heading">
                                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                            
                            <div class="page-content clear">
                                <?php the_content(); ?>
                                
                                 <?php wp_link_pages( );
                                ?>
                        
                            </div>
                        </div>
                        <?php
                    endwhile;
                else:
                    ?>
                    <div>
                        <p>
                            <?php echo esc_html__( 'Sorry, no post matched your criteria.', 'indreams' ); ?>
                        </p>
                    </div>
                <?php endif; ?>
                      
                        <?php comments_template(); ?>
                </div></div><?php get_footer(); ?>