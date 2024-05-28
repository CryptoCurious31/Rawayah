<?php get_header();
/* Template Name: Home Template */
$hero_section_slides = get_field('hero_section_slides');
$testimonials = get_field('testimonials');
?>

<!-- ======== image carousel code start =========== -->
<section class="carousel">
    <div class="container-fluid px-0 ">
        <div class="hero-section-slider">
            <?php
            if ($hero_section_slides) {
                foreach ($hero_section_slides as $hero_section_slide) {
                    ?>
                    <div class="row align-items-center" style="display:flex">
                        <div class="col-lg-6">
                            <div class="text">
                                <div class="textAndHeadings">
                                    <p class="subtext2"><?php echo $hero_section_slide['sub_heading']; ?></p>
                                    <h3 class="mainHeading">
                                        <?php echo $hero_section_slide['heading']; ?>
                                    </h3>
                                    <p class="slogan"><?php echo $hero_section_slide['description']; ?></p>
                                    <div class="button">
                                        <a class="btn" href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image">
                                <img src=" <?php echo $hero_section_slide['image']['url']; ?> " alt="">
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>



    </div>
</section>

<!-- ======== All Product Section -->
<section class="allProduct">
    <div class="container">
        <h3 class="premium">All Products</h3>
        <div class="row categories">
            <?php
            // Get all product categories
            $args = array(
                'taxonomy' => 'product_cat',
                'hide_empty' => false, // Change to true to hide empty categories
                'exclude'    => array( get_option('default_product_cat') ), // Exclude "Uncategorized" category
            );

            $product_categories = get_terms($args);

            foreach ($product_categories as $category) {
                // Get the category thumbnail ID
                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                // Get the image URL for the thumbnail
                $image_url = wp_get_attachment_url($thumbnail_id);
                ?>
                <div class="col">
                    <div class="category">
                        <a class="imageTwo forDisplay" href="<?php echo get_term_link($category); ?>">
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($category->name); ?>">
                        </a>
                        <h3><a href="<?php echo get_term_link($category); ?>"><?php echo esc_html($category->name); ?></a>
                        </h3>
                    </div>
                </div>
            <?php }
            ?>

        </div>
    </div>
</section>

<!-- ================ Premium Designs Section ============== -->
<section class="staticPicture">
    <h3 class="premium">Premium Designs</h3>
    <img class="pic"
        src=" <?php echo get_template_directory_uri() . '/Props/Black Beiger/2_f34a9104-6a46-414c-a148-06bc7a21b0fd_1000x.jpg' ?> " />
</section>

<section class='product-slider '>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="premium">Featured Collection</h3>
            </div>
        </div>


        <div class="row product-slider1">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1, // Change this to limit the number of products if needed
            );

            $products_query = new WP_Query($args);

            if ($products_query->have_posts()):
                while ($products_query->have_posts()):
                    $products_query->the_post();
                    global $product;
                    ?>
                    <div class="product-slide">
                        <div class="product-item">
                            <div class="product-img">
                                <a href="<?php the_permalink(); ?>" class="product-link"> <!-- Add the permalink -->
                                    <?php
                                    // Display the product thumbnail
                                    echo woocommerce_get_product_thumbnail();

                                    // Get the hover image if it's set as a secondary image
                                    $attachment_ids = $product->get_gallery_image_ids();
                                    if (isset($attachment_ids[0])) {
                                        $hover_image_id = $attachment_ids[0];
                                        echo wp_get_attachment_image($hover_image_id, 'woocommerce_thumbnail');
                                    }
                                    if (isset($attachment_ids[1])) {
                                        $hover_image_id = $attachment_ids[1];
                                        echo wp_get_attachment_image($hover_image_id, 'woocommerce_thumbnail');
                                    }
                                    ?>
                                </a>
                            </div>
                            <div class="product-title">
                                <h4><?php the_title(); ?></h4>
                                <p>
                                    <?php echo $product->get_price_html(); ?>
                                </p>
                            </div>
                            <div class="rating">
                                <?php echo wc_get_rating_html($product->get_average_rating()); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata(); // Reset post data
            else:
                // If no products are found
                echo 'No products found.';
            endif;
            ?>
        </div>

    </div>
    </div>
</section>

<!-- ========= Testomonial Section ======== -->
<section class="testomonial">
    <div class="container">
        <div class="row testimonial-slider">
            <?php
            if ($testimonials) {
                foreach ($testimonials as $testimonial) {
                    ?>
                    <div class="col-lg-3">
                        <div class="testimonial">
                            <div class="body">“<?php echo $testimonial['testimonial']; ?>”</div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="author">
                                <span class="review-item__avatar-initial"><?php echo $testimonial['initial']; ?></span>
                                <p><?php echo $testimonial['author_name']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
    </div>
</section>

</main>

<?php get_footer(); ?>