<?php
/* Template Name: service */
?>
<?php get_header(); ?>

 <!-- Banner -->
 <section class="css-selector inner-banner">
        <div class="container-xxl text-center">
            <h1 class="text-white">Timelino Services</h1>
            <h4 class="h5 text-white opacity-50" data-aos="fade-up">Shift off the website development and Creative Design</h4>
        </div>
    </section>


    <!-- projects -->
    <section class="padding-top padding-bottom">
        <div class="container-xxl">

            <div class="row justify-content-center">
                <?php 
                    $args = array( 'post_type' => 'services');
                    $the_query = new WP_Query( $args ); 
                ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-lg-4 col-xl-3 col-md-6 mb-4" data-aos="fade-up">
                        <div
                            class="service-box p-4 d-flex justify-content-center text-center gap-3 flex-column align-items-center">
                            <a href="<?php echo get_post_meta($post->ID,'page_url',true);?>">
                                <?php $image = get_field('service_image');?>
                                <img src="<?php echo $image;?>">
                                <h3 class="h5 text-dark" data-aos="fade-in"><?php echo get_the_title(); ?></h3>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else:  ?>
                    <p>
                        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                    </p>
                <?php endif; ?>
            </div>
           
        </div>
    </section>


<?php get_footer(); ?>