<?php
/* Template Name: home */
?>
<?php get_header(); ?>

 <!-- Banner -->
 <section class="padding-top padding-bottom bg-banner">
        <div class="container-xxl d-flex flex-column justify-content-center text-center padding-top gap-3">
            <h2 class="h1 mt-5 mt-lg-0 padding-top pt-lg-0 pt-5" data-aos="fade-up">Find the perfect freelance services
                for&nbsp;<div class="text-gradient">
                    your business</div>
            </h2>
            <h4 class="h5" data-aos="fade-up">We Turn your ideas into online businesses Shift off the website<br>
                development and Creative Design</h4>
            <div class="d-md-flex justify-content-center gap-3 align-items-center mt-4">
                <a href="#" class="btn btn-primary px-5 mb-2 mb-md-0" data-aos="fade-up">Let’s Start </a>
                <a href="https://wa.me/+971553776176" class="btn btn-primary px-4 bg-black border-0"
                    data-aos="fade-up"><i class="ri-whatsapp-fill"></i>&nbsp;chat with me</a>
            </div>
        </div>
    </section>

    <!-- clients -->
    <section class="py-5">
        <div class="logo-slider">
            <div>
            <?php 
                $args = array( 'post_type' => 'clients');
                $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php $image = get_field('client_image');?>
                <img src="<?php echo $image;?>">
                <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else:  ?>
                <p>
                    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                </p>
            <?php endif; ?>
            </div>
            <div>
            <?php 
                $args = array( 'post_type' => 'clients');
                $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php $image = get_field('client_image');?>
                <img src="<?php echo $image;?>">
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

    <!-- services -->
    <section class="padding-top padding-bottom">
        <div class="container-xxl">
            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                <h2 class="h1 d-flex align-items-center" data-aos="fade-up">Timelino&nbsp;<div class="text-gradient">
                        Services</div>
                </h2>
                <h4 class="h5" data-aos="fade-up">Shift off the website development and Creative Design</h4>
            </div>
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

    <!-- good design -->
    <section class="padding-bottom">
        <div class="container-xxl">
            <div class="gd-design d-flex flex-column justify-content-center align-items-center text-center gap-3">
                <h3 class="h1 text-white" data-aos="fade-in">Good design helps create a positive user <br>experience in
                    your business</h3>
                <p class="h5 text-white" data-aos="fade-in">Good design can help businesses establish credibility and
                    build trust with their audience. </p>
                <a href="#" class="btn btn-primary px-5" data-aos="fade-up">Send your requirements</a>
            </div>
        </div>
    </section>

    <!-- projects -->
    <section class="padding-bottom">
        <div class="container-xxl">
            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                <h2 class="h1 d-flex align-items-center" data-aos="fade-up">Success&nbsp;<div class="text-gradient">
                        Projects</div>
                </h2>
                <h4 class="h5" data-aos="fade-up">Here are some of my selected works I have done lately. Feel free to
                    check them out.</h4>
            </div>
            <div class="row">

                <?php 
                     $args = array( 'post_type' => 'project', 'posts_per_page' => 9);
                    $the_query = new WP_Query( $args ); 
                ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up">
                        <?php echo get_post_meta($post->ID,'behance_iframe',true);?>
                        <h4 class="h5 font-weight-600 head" data-aos="fade-in"><?php echo get_the_title(); ?></h4>
                        <p class="h5 fs-6 text-black-50" data-aos="fade-in"><?php echo get_post_meta($post->ID,'location',true);?></p>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else:  ?>
                    <p>
                        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                    </p>
                <?php endif; ?>

            </div>
            <div class="d-flex flex-column align-items-center justify-content-center text-center mt-5">
                <a href="projects.html" class="btn btn-primary px-5" data-aos="fade-up">View all my projects</a>
            </div>
        </div>

    </section>

    <section>
        <div class="container-xxl">
            <script async
                src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4037727128421154"
                crossorigin="anonymous"></script>
            <!-- website -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4037727128421154"
                data-ad-slot="7368427930" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </section>

    <!-- testimonials -->
    <section class="padding-top padding-bottom">
        <div class="container-xxl">
            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                <h2 class="h1 d-flex align-items-center" data-aos="fade-up">Timelino’s&nbsp;<div class="text-gradient">
                        Testimonials</div>
                </h2>
                <h4 class="h5" data-aos="fade-up">checkout what my blissful clients need to say</h4>
            </div>
        </div>

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
            <div class="d-flex flex-column align-items-center justify-content-center text-center mt-5">
                <a href="/testimonial" class="btn btn-primary px-5" data-aos="fade-up">View all Testimonials</a>
            </div>
        </div>

    </section>

<?php get_footer(); ?>