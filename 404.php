<?php
/**
 *
 *
 * The template for displaying 404 pages (Not Found)
 *
 *
 *
 */
get_header();
?>
<div id="primary" class="content-area">
             <div class="container">
            <div class="col-md-8">
                <div class="content-bar">
                    <div class="post-content clear">
                        <h1 class="embarassing"><?php echo "Yee be lost!" ?></h1>
                        <p>
                            <?php echo "Best be getting back home."; ?>
                        </p>
                        <?php the_widget('WP_Widget_Recent_Posts', array('number' => 10), array('widget_id' => '404')); ?>

                        <div class="widget">
                            <h3 class="widgettitle">
                                <?php echo esc_html__( 'Most Used Categories', 'indreams' ); ?>
                            </h3>
                            <ul>
                                <?php wp_list_categories(array('orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10)); ?>
                            </ul>
                        </div>
                        <?php
                        /* translators: %1$s: smilie */
                        $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %s', 'indreams' ), convert_smilies(':)')) . '</p>';
                        the_widget('WP_Widget_Archives', array('count' => 0, 'dropdown' => 1), array('after_title' => '</h2>' . $archive_content));
                        ?>
                        <?php the_widget('WP_Widget_Tag_Cloud'); ?>

                    </div>
                            
                          
                           
                    </div>
                 </div>
                 <div class="col-md-4">
                    
                     <?php get_sidebar(); ?>
                         
                 </div>
                 
                 </div></div><?php get_footer(); ?>