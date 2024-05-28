<?php
get_header();
/* Template Name: All Product Template */
?>
<section class="all-products">
    <div class="container-fluid allproduct-page">
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1, // -1 to retrieve all posts, you can adjust this number
            );

            $products_query = new WP_Query($args);

            if ($products_query->have_posts()):
                while ($products_query->have_posts()):
                    $products_query->the_post();
                    global $product;
                    ?>
                    <div class="col-lg-3 product-container">
                        <div class="Product-items">
                            <div class="image-container" style="position: relative;">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    // Display the product thumbnail
                                    echo woocommerce_get_product_thumbnail();

                                    // Get the first image in the product gallery for the hover image
                                    $attachment_ids = $product->get_gallery_image_ids();
                                    if (!empty($attachment_ids)) {
                                        $hover_image_id = $attachment_ids[0];
                                        echo wp_get_attachment_image($hover_image_id, 'woocommerce_thumbnail', '', array('class' => 'hover-image'));
                                    }
                                    ?>
                                </a>
                                <div class="overlay">
                                    <a href="#"><button class="button left-button">Quick look</button></a>
                                    <a href="#"><button class="button right-button">Quick shop</button></a>
                                </div>
                                <div class="wishlist-icon" style="position: absolute; top: 10px; right: 10px;">
                                    <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
                                </div>
                            </div>
                            <div class="product-title">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo $product->get_price_html(); ?></p>
                                <div class="rating">
                                    <?php echo wc_get_rating_html($product->get_average_rating()); ?>
                                </div>
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
</section>
<?php
get_footer();
?>
