<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rawayah - Best Shoe Saling Website All Across Pakistan</title>
	<?php echo wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<main>
		<!-- ======== Header Code Start =========== -->
		<header class="header">
			<div class="logoWithIcons">
				<div class="socialIcons">
					<a class="MenuItems" href="#"><i class="fa-brands fa-facebook-f"></i></a>
					<a class="MenuItems" href="#"><i class="fa-brands fa-instagram"></i></a>
					<a class="MenuItems" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
					<a class="MenuItems" href="#"><i class="fa-brands fa-tiktok"></i></a>
					<a class="MenuItems" href="#"><i class="fa-brands fa-youtube"></i></a>
				</div>
				<h1 class="logo">
					Rawayah
				</h1>
				<div class="icons">
					<a class="MenuItems" href="#"><i class="fa-solid fa-user"></i></a>
					<a class="MenuItems" href="#"><i class="fa-regular fa-heart"></i></a>
					<a class="MenuItems" href="#"><i class="fa-solid fa-cart-arrow-down"></i></a>
				</div>
			</div>
			<div class="main-menu">
				<?php
				// Place this code where you want to display the menu, typically in header.php or any other template file
				$menu_args = array(
					'theme_location' => 'header_menu', // This should match the registered menu location
					'container' => 'nav', // Container element for the menu
					'container_class' => 'header-menu', // Class for the container
				);

				wp_nav_menu($menu_args);
				?>

			</div>
			<div class="strip">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3">
							<div class="items">
								<div class="icon">
									<svg class="t4s-obj-eff t4s-icon-back" viewBox="0 0 32 32">
										<path
											d="M 14.389 7.956 v 4.374 l 1.056 0.01 c 7.335 0.071 11.466 3.333 12.543 9.944 c -4.029 -4.661 -8.675 -4.663 -12.532 -4.664 h -1.067 v 4.337 l -9.884 -7.001 l 9.884 -7 Z M 15.456 5.893 l -12.795 9.063 l 12.795 9.063 v -5.332 c 5.121 0.002 9.869 0.26 13.884 7.42 c 0 -4.547 -0.751 -14.706 -13.884 -14.833 v -5.381 Z">
										</path>
									</svg>
								</div>
								<div class="description">
									<h4>Free return </h4>
									<p>Our rider will come & receive the Shoes from you.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="items">
								<div class="icon">
									<svg class="t4s-obj-eff t4s-icon-shuffle" viewBox="0 0 32 32">
										<path
											d="M 23.812 18.906 l 3.494 3.496 h -6.296 l -13.012 -13.861 h -5.345 v 1.066 h 4.884 l 13.012 13.861 h 6.758 l -3.485 3.486 l 0.754 0.754 l 4.772 -4.774 l -4.781 -4.782 Z">
										</path>
										<path d="M 7.537 22.402 h -4.884 v 1.066 h 5.345 l 5.163 -5.5 l -0.778 -0.73 Z">
										</path>
										<path
											d="M 21.011 9.607 h 6.295 l -3.485 3.486 l 0.754 0.754 l 4.772 -4.774 l -4.781 -4.782 l -0.754 0.754 l 3.494 3.496 h -6.758 l -5.185 5.545 l 0.779 0.728 Z">
										</path>
									</svg>
								</div>
								<div class="description">
									<h4>Free Exchange</h4>
									<p>Our rider will come & receive the Shoes from you.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="items">
								<div class="icon">
									<svg class="t4s-obj-eff t4s-icon-box3" width="18" height="20" viewBox="0 0 18 20">
										<path
											d="M8.66023 0L17.3205 4.99997V15L8.66023 20L0 15V4.99997L8.66023 0ZM8.66023 1.35316L1.75781 5.33826L3.45123 6.31596L10.3537 2.33085L8.66023 1.35316ZM11.5255 3.00743L4.6231 6.99255L5.79498 7.66913L12.6974 3.68401L11.5255 3.00743ZM13.8693 4.36059L6.96685 8.34572L8.66023 9.3234L15.5627 5.33826L13.8693 4.36059ZM16.1486 6.35313L9.24617 10.3383V18.3085L16.1486 14.3234V6.35313ZM8.0743 18.3085V10.3383L6.3809 9.36058V14.0223L2.86527 11.9926V7.33083L1.17188 6.35314V14.3234L8.0743 18.3085ZM4.03715 8.00741V11.316L5.20902 11.9926V8.684L4.03715 8.00741Z">
										</path>
									</svg>
								</div>
								<div class="description">
									<h4>Free Delivery</h4>
									<p>Our rider will come & receive the Shoes from you.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="items">
								<div class="icon">
									<svg class="t4s-obj-eff" viewBox="0 0 508 508">
										<g>
											<g>
												<path
													d="M376.7,0H131.3c2,61.4-43.6,101.1-98.2,98.2v68.4C37.6,423,254,508,254,508s214.3-85,220.9-341.4V98.2	C407.9,103.9,371.7,41.3,376.7,0z M49.5,166.6v-52.4c52.1-4,93.9-45.7,97.9-97.9h98.5v106.8c-47.6,4-85.6,42-89.6,89.6H52.6		C50.6,197.5,49.5,182.1,49.5,166.6z M245.8,485.9C144.9,434.8,74.6,338.7,55,229h101.2c4,47.6,42,85.6,89.6,89.6V485.9z	 M172.2,220.9c0-45.1,36.7-81.8,81.8-81.8c45.1,0,81.8,36.7,81.8,81.8c0,45.1-36.7,81.8-81.8,81.8	C208.9,302.7,172.2,266,172.2,220.9z M262.2,485.9V318.6c47.6-4,85.6-42,89.6-89.6H453C433.4,338.7,363.1,434.8,262.2,485.9z M458.5,166.6c0,15.5-1.1,30.9-3.1,46.1H351.7c-4-47.6-42-85.6-89.6-89.6V16.4h98.5c4,52.1,45.8,93.8,97.9,97.8V166.6z">
												</path>
											</g>
										</g>
										<g>
											<g>
												<polygon
													points="295.8,182.4 236.2,242 212.2,218.1 200.6,229.6 236.2,265.2 307.4,193.9 		">
												</polygon>
											</g>
										</g>
									</svg>
								</div>
								<div class="description">
									<h4>6 Months Warranty</h4>
									<p>Our rider will come & receive the Shoes from you.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</header>
		<!-- ========= Header Code Ends =========== -->