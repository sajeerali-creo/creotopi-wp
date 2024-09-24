<?php
/* Template Name: testimonilas */
?>
<?php get_header(); ?>

 <!-- Banner -->
    <section class="css-selector inner-banner">
        <div class="container-xxl text-center">
            <h1 class="text-white">Timelino's Testimonials</h1>
            <h4 class="h5 text-white opacity-50" data-aos="fade-up">checkout what my blissful clients need to say</h4>
        </div>
    </section>

  <!-- projects -->
  <section class="padding-top padding-bottom">
        <div class="container-xxl">
        <div class="row">
                <?php 
                     $args = array( 'post_type' => 'testimonials', 'posts_per_page' => 9);
                    $the_query = new WP_Query( $args ); 
                ?>
                <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-lg-4 col-md-6">

                        <div class="testimonial-box p-4 d-flex flex-column mb-4" data-aos="fade-up">
                            <quote>&rdquo;</quote>
                            <div class="d-flex gap-3 align-items-center mb-2">
                                <div class="client-image">
                                    <img src="img/testimonials/maximillian.jpeg">
                                </div>
                                <div class="client-details">
                                    <h3 class="fs-6 font-weight-600 m-0"><?php echo get_the_title(); ?></h3>
                                    <span class="fs-6 opacity-75"><?php echo get_post_meta($post->ID,'designation',true);?></span>
                                    <div class="d-flex gap-2 mt-2">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.53841 0.609982C8.70921 0.199342 9.29097 0.199342 9.46177 0.609982L11.5279 5.57746C11.5999 5.75058 11.7627 5.86887 11.9496 5.88385L17.3124 6.31378C17.7557 6.34932 17.9355 6.90258 17.5977 7.19191L13.5118 10.6919C13.3694 10.8139 13.3072 11.0053 13.3507 11.1876L14.599 16.4208C14.7022 16.8534 14.2316 17.1954 13.852 16.9635L9.26067 14.1592C9.10067 14.0615 8.89945 14.0615 8.73944 14.1592L4.14813 16.9635C3.76858 17.1954 3.29795 16.8534 3.40115 16.4208L4.64946 11.1876C4.69296 11.0053 4.63077 10.8139 4.48838 10.6919L0.40248 7.19191C0.0647096 6.90258 0.24448 6.34932 0.6878 6.31378L6.05061 5.88385C6.23751 5.86887 6.40031 5.75058 6.47232 5.57746L8.53841 0.609982Z"
                                                fill="#FBBF24" />
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.53841 0.609982C8.70921 0.199342 9.29097 0.199342 9.46177 0.609982L11.5279 5.57746C11.5999 5.75058 11.7627 5.86887 11.9496 5.88385L17.3124 6.31378C17.7557 6.34932 17.9355 6.90258 17.5977 7.19191L13.5118 10.6919C13.3694 10.8139 13.3072 11.0053 13.3507 11.1876L14.599 16.4208C14.7022 16.8534 14.2316 17.1954 13.852 16.9635L9.26067 14.1592C9.10067 14.0615 8.89945 14.0615 8.73944 14.1592L4.14813 16.9635C3.76858 17.1954 3.29795 16.8534 3.40115 16.4208L4.64946 11.1876C4.69296 11.0053 4.63077 10.8139 4.48838 10.6919L0.40248 7.19191C0.0647096 6.90258 0.24448 6.34932 0.6878 6.31378L6.05061 5.88385C6.23751 5.86887 6.40031 5.75058 6.47232 5.57746L8.53841 0.609982Z"
                                                fill="#FBBF24" />
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.53841 0.609982C8.70921 0.199342 9.29097 0.199342 9.46177 0.609982L11.5279 5.57746C11.5999 5.75058 11.7627 5.86887 11.9496 5.88385L17.3124 6.31378C17.7557 6.34932 17.9355 6.90258 17.5977 7.19191L13.5118 10.6919C13.3694 10.8139 13.3072 11.0053 13.3507 11.1876L14.599 16.4208C14.7022 16.8534 14.2316 17.1954 13.852 16.9635L9.26067 14.1592C9.10067 14.0615 8.89945 14.0615 8.73944 14.1592L4.14813 16.9635C3.76858 17.1954 3.29795 16.8534 3.40115 16.4208L4.64946 11.1876C4.69296 11.0053 4.63077 10.8139 4.48838 10.6919L0.40248 7.19191C0.0647096 6.90258 0.24448 6.34932 0.6878 6.31378L6.05061 5.88385C6.23751 5.86887 6.40031 5.75058 6.47232 5.57746L8.53841 0.609982Z"
                                                fill="#FBBF24" />
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.53841 0.609982C8.70921 0.199342 9.29097 0.199342 9.46177 0.609982L11.5279 5.57746C11.5999 5.75058 11.7627 5.86887 11.9496 5.88385L17.3124 6.31378C17.7557 6.34932 17.9355 6.90258 17.5977 7.19191L13.5118 10.6919C13.3694 10.8139 13.3072 11.0053 13.3507 11.1876L14.599 16.4208C14.7022 16.8534 14.2316 17.1954 13.852 16.9635L9.26067 14.1592C9.10067 14.0615 8.89945 14.0615 8.73944 14.1592L4.14813 16.9635C3.76858 17.1954 3.29795 16.8534 3.40115 16.4208L4.64946 11.1876C4.69296 11.0053 4.63077 10.8139 4.48838 10.6919L0.40248 7.19191C0.0647096 6.90258 0.24448 6.34932 0.6878 6.31378L6.05061 5.88385C6.23751 5.86887 6.40031 5.75058 6.47232 5.57746L8.53841 0.609982Z"
                                                fill="#FBBF24" />
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.53841 0.609982C8.70921 0.199342 9.29097 0.199342 9.46177 0.609982L11.5279 5.57746C11.5999 5.75058 11.7627 5.86887 11.9496 5.88385L17.3124 6.31378C17.7557 6.34932 17.9355 6.90258 17.5977 7.19191L13.5118 10.6919C13.3694 10.8139 13.3072 11.0053 13.3507 11.1876L14.599 16.4208C14.7022 16.8534 14.2316 17.1954 13.852 16.9635L9.26067 14.1592C9.10067 14.0615 8.89945 14.0615 8.73944 14.1592L4.14813 16.9635C3.76858 17.1954 3.29795 16.8534 3.40115 16.4208L4.64946 11.1876C4.69296 11.0053 4.63077 10.8139 4.48838 10.6919L0.40248 7.19191C0.0647096 6.90258 0.24448 6.34932 0.6878 6.31378L6.05061 5.88385C6.23751 5.86887 6.40031 5.75058 6.47232 5.57746L8.53841 0.609982Z"
                                                fill="#FBBF24" />
                                        </svg>

                                    </div>
                                </div>
                            </div>
                            <div class="truncate">
                            <p class="mt-4">
                            <?php echo get_post_meta($post->ID,'message',true);?>
                            </p>
                            </div>

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