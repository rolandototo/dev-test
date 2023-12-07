<?php

get_header();
?>

<body id="primary" class="content-area">
    <main id="main" class="site-main">

        <section class="hero-baner">


            <div class="swiper">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="slide-text">
                            <p>We don't only sell homes</p>
                            <p class="bold-text-slide">We sell a new way of live</p>
                        </div>
                        <div class="slide-btn">
                            <a class="btn btn-blank" href="#form-home">get in touch</a>
                            <a class="btn red-btn" href="">avalible homes</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-text">
                            <p>Lorem ipsum dolor  Consequatur.</p>
                            <p class="bold-text-slide">sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="slide-btn">
                            <a class="btn btn-blank" href="#form-home">get in touch</a>
                            <a class="btn red-btn" href="">avalible homes</a>
                        </div>
                    </div>

                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>

        </section>
        <section class="welcome-section">
            <h2>WELCOME TO PILLAR HOMES</h2>
                <div>
                    <h3>Building your dreams</h3>
                    <p>The family at Pillar Homes will be sure to make your home building experience simple and enjoyable by helping guide you through each step of the building process. Our knowledgeable and experienced staff will help you select the right floor plan, or customize one that suits your family, lifestyle, and budget.</p>
                </div>
                <a href="" class="btn btn-blank font-color-r">
                    learn More
                </a>
        </section>
        <section class="our-communities-section section-inner-main">
            <img src="http://dev-test-backup.local/wp-content/uploads/2023/12/Our-Communities.png" alt="">
            <div class="inner-section-text">
                <div>
                <h4>OUR COMMUNITIES</h4>
                <p>Another one of the many factors that sets Pillar Homes apart from all other Central Florida builders is the effort we put forth in creating real communities.  Unlike most of Central Florida’s mass market production communities, our neighborhoods are built with character and security in mind.  This offers a stronger sense of privacy and safety as well as the benefits of little road traffic and the sense of a quaint, neighborhood living.</p>
                <a class="btn btn-blank red-btn" href="">learn More</a>
                </div>

            </div>
        </section>
        <section class="build-on-your-lot-section section-inner-main">
        <img src="http://dev-test-backup.local/wp-content/uploads/2023/12/Homes-On-Your-Lot.png" alt="">
            <div class="inner-section-text">
            <div>
                <h4>BUILD ON YOUR LOT</h4>
                <p>If you have ever thought about building a new custom home on your lot, Pillar Homes is ready to assist you through each step of the building process, from financing to designing your custom home.</p>
                <a class="btn btn-blank font-color-r">learn More</a>
            </div>
            </div>

        </section>
        <section class="blog-section section-inner-main">
            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'ignore_sticky_posts' => 1,
            );

            $latest_post_query = new WP_Query($args);


            if ($latest_post_query->have_posts()) :
                while ($latest_post_query->have_posts()) : $latest_post_query->the_post();

                    ?>
                    <?php
                        if (has_post_thumbnail()) {

                            the_post_thumbnail('large');
                        }
                        ?>
                    <div class="inner-section-text last-post">

                    <div>
                        <h4><?php the_title(); ?></h4>
                        <div class="post-meta">
                            <p><?php echo get_the_date(); ?></p>
                        </div>
                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>
                        <div class="inner-btn-post">
                            <a class="btn btn-blank font-color-r inner-w-post">learn More</a>
                            <a class="r">Read more articles</a>
                        </div></div>

                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :

                echo 'No hay entradas disponibles.';
            endif;
            ?>
        </section>
        <section class="testimonials-section">

            <p>The whole Pillar team was a pleasure to work with and we would highly recommend them to anyone looking to build a new home.</p>
            <div class="inner-testimonial">
                <div></div>
                <div class="testimonial-name"><p>Russ and Cheryl Orwing</p></div>
            </div>

        </section>
        <section  id="form-home" class="form-section">
            <div class="overlay"></div>
            <div class="innner-section-form">
            <h4>READY TO GET STARTED?</h1>
            <p>Send us a quick message and we will get in touch shortly!</p>
            <form>
                <div>
                    <input type="text" placeholder="First Name*" required>
                    <input type="text" placeholder="Last Name*" required></div>
                <div>
                <input type="text" placeholder="Phone Number*" required>
                <input type="email" placeholder="Email Address*" required>
                </div>

                <textarea placeholder="Message*" required></textarea>
                <button type="submit">SUBMIT</button>
            </form>
            </div>
        </section>

    </main>
</body>

<?php
// Agregar el pie de página de WordPress
get_footer();
?>