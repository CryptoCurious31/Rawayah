<!-- ====== Footer Page ====== -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="footer-content">
					<h3>Rawayah</h3>
					<p>Rawayah is Premimum Footwear brand offering high quality
						and stylish shoes for women and empowering
						the confidence.
					</p>
					<ul class="social-icons">
						<li><i class="fa-regular fa-envelope"></i> <span>support.info@rawayah.com</span></li>
						<li><i class="fa-solid fa-phone"></i> <span>+92-03147654321</span></li>
						<li><i class="fa-regular fa-clock"></i> <span>8:00 AM - 12:00 PM</span></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="footer-content">
					<h3>Customer Service</h3>
					<?php
					// Place this code where you want to display the menu, typically in header.php or any other template file
					$menu_args = array(
						'theme_location' => 'footer_menu', // This should match the registered menu location
						'container' => 'nav', // Container element for the menu
					);

					wp_nav_menu($menu_args);
					?>
				</div>

			</div>
			<div class="col-lg-4">
				<div class="footer-content">
					<h3>Newsletter</h3>
					<p>Subscribe to receive Exclusive deals, and more</p>
					<form action="">
						<input type="email" placeholder="Your email address" required>
						<button type="submit">Subscribe</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</footer>
<!-- =============== Icons Script ============== -->
<script src="https://cdn.lordicon.com/lordicon.js"></script>
<!-- ============= Card Slider JS Script ================ -->
<script src="./js/Card-slider.js"></script>
<?php wp_footer(); ?>
</body>

</html>