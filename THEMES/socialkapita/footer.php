<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>


<footer class="padding-top padding-bottom bg-black">
        <div class="container-xxl d-flex flex-column align-items-center justify-content-center text-center gap-3">
            <h5 class="h1 text-gradient">Get in Touch</h5>
            <P class="h5 text-white fs-6">I'm happy to connect, listen and help. Let's work together and build something
                awesome. Let's<br> turn your idea to an even greater product. Email Me.</P>
            <a href="#" class="text-gradient fs-5">timelino@gmail.com</a>
            <div>
                <p class="h5 text-white opacity-50">Call Me</p>
                <a href="#" class="text-white fs-5">+971 55 377 6176</a>
            </div>
            <div class="d-flex justify-content-center gap-3 social">
                <a href="https://www.instagram.com/creotopi_vlog/" target="_blank">
                    <i class="ri-instagram-line"></i>
                </a>
                <a href="https://www.linkedin.com/in/sajeerali-arakka-kuningarath-77594053/" target="_blank">
                    <i class="ri-linkedin-fill"></i>
                </a>
                <a href="https://in.pinterest.com/creotopi/" target="_blank">
                    <i class="ri-pinterest-line"></i>
                </a>
                <a href="https://dribbble.com/Creotopi" target="_blank">
                    <i class="ri-dribbble-line"></i>
                </a>
                <a href="https://www.behance.net/creotopi" target="_blank">
                    <i class="ri-behance-line"></i>
                </a>
            </div>
            <p class="h5 text-white fs-6 mt-4 opacity-50">© Copyright Timelino 2023 Design by Sajeerali</p>

        </div>
    </footer>

    <?php wp_footer(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 350) {
                $(".header").addClass("top-fixed");
            } else {
                $(".header").removeClass("top-fixed");
            }
        });
        $(document).ready(function () {
            (function () {
                var showChar = 400;
                var ellipsestext = "...";

                $(".truncate").each(function () {
                    var content = $(this).html();
                    if (content.length > showChar) {
                        var c = content.substr(0, showChar);
                        var h = content;
                        var html =
                            '<div class="truncate-text" style="display:block">' +
                            c +
                            '<span class="moreellipses">' +
                            ellipsestext +
                            '&nbsp;&nbsp;<a href="" class="moreless more">more</a></span></span></div><div class="truncate-text" style="display:none">' +
                            h +
                            '<a href="" class="moreless less">Less</a></span></div>';

                        $(this).html(html);
                    }
                });

                $(".moreless").click(function () {
                    var thisEl = $(this);
                    var cT = thisEl.closest(".truncate-text");
                    var tX = ".truncate-text";

                    if (thisEl.hasClass("less")) {
                        cT.prev(tX).toggle();
                        cT.slideToggle();
                    } else {
                        cT.toggle();
                        cT.next(tX).fadeToggle();
                    }
                    return false;
                });
                /* end iffe */
            })();

            /* end ready */
        });
    </script>

</body>

</html>