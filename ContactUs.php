<?php get_header();
/* Template Name: ContactUS Template */

?>

<section>
    <div class="continer-fluid px-0" style="height: 150vh">
        <h1 class="contact-heading">Contact</h1>
        <div id="map">
            <div class="map"><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7233.834205403492!2d67.06179149999997!3d24.968934900000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb3415c9375c67f%3A0x57a8f5a12b47b302!2sPak%20survey%20services!5e0!3m2!1sen!2s!4v1715374904819!5m2!1sen!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <div class="contact-form">
                <div class="row p-5">
                    <div class="col-lg-6 contact my-1">
                        <h3>Contact</h3>
                        <p>
                            We love to hear from you on our customer service, merchandise, website or any topics you
                            want to share with us. Your comments and suggestions will be appreciated. Please complete
                            the form below.
                        </p>
                        <ul>
                            <li><i class="fa-solid fa-location-dot"></i> <span>Karachi,Pakistan</span></li>
                            <li><i class="fa-solid fa-phone"></i> <span>009293290498</span></li>
                            <li><i class="fa-solid fa-envelope"></i> <span>support@info@gmail.com</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="pb-3">Get in touch</h3>
                        <form action="">
                            <?php echo do_shortcode('[contact-form-7 id="56d4c6d" title="Contact form 1"]')?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<?php get_footer(); ?>