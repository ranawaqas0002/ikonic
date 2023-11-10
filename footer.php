<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ikonic
 */

?>
<style>
	.desc-col{
		padding-right: 90px;
	}
	.desc-col img {
    max-width: 240px;
    width: 100%;
}
.desc-col p {
    font-size: 12px;
    line-height: 15px;
    font-weight: 300;
}
.menu-col-1 a {
    text-decoration: none;
    font-size: 12px;
    line-height: 19px;
    font-weight: 600;
	color: #54585A;
}
.menu-col-1 li {
    list-style: none;
    margin-bottom: 5px;
}
footer#colophon{
	background-color: #EDEDED;
	overflow: hidden;
}
ul.footer-icon {
    list-style: none;
    display: flex;
	padding-left: 0px;
}
.single-icon{
	margin-right: 20px;
}
.fa-twitter:before {
    content: "\f099";
    background-color: #326295;
    color: white;
    padding: 6px;
    border-radius: 50%;
}
.fa-facebook-f:before {
    content: "\f39e";
    background-color: #326295;
    color: white;
    padding: 6px 10px;
    border-radius: 50%;
}
.fa-linkedin-in:before {
    content: "\f0e1";
    background-color: #326295;
    color: white;
    padding: 6px 8px;
    border-radius: 50%;
}
.footer-col-4 p {
    font-size: 12px;
    line-height: 19px;
}
.footer-col-4 a {
    color: #545454;
    text-decoration: none;
}
.footer-col-4 {
    padding-left: 30px;
    padding-right: 30px;
}
.below-footer{
	background-color: #54585A;
	padding: 20px 0px;
}
.below-footer p{
	margin-bottom: 0px;
	font-size: 12px;
	line-height: 19px;
}
ul.terms {
    margin-bottom: 0px;
}
.terms li {
    list-style: none;
    text-align: center;
}
.terms li a{
	text-decoration: none;
	color: #ffffff;
	font-size: 12px;
	line-height: 19px;
}
.menu-col-1 a:hover {
    color: #326295;
}
@media (min-width:768px) and (max-width: 1024px){
	.desc-col {
    margin-bottom: 40px;
}
}
@media screen and (max-width: 767px){
	.desc-col {
    margin-bottom: 20px;
	padding-left: 0px;
}
.footer-col-4{
	margin-top: 20px;
}
.copyright p{
	text-align: center;
}
}
</style>
	<footer id="colophon" class="site-footer">
		<div class="container pt-90 pb-90 footer-col-1">
			<div class="row">
			<div class="col-lg-4 offset-lg-1 offset-1 desc-col ">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-ikonic2.png" alt="" class="pb-30">
				<p>Our mission is to make a difference by providing exceptional care and delivering the best experience. We pride ourselves on our quality of care, responsive service, and commitment to excellence.</p>
				</div>
				<div class="col-lg-2 col-md-4 col-6 menu-col-1">
				<?php
              // Loading WordPress Custom Menu (theme_location).
              wp_nav_menu(
                array(
                  'container'      => '',
                  // 'menu_id' => 'header-menu',
                  // 'menu_class'     => 'navbar-nav'
                )
              );
            ?>
				</div>
				<div class="col-lg-2 col-md-4 col-6 menu-col-2 menu-col-1">
					<ul>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Specialty Hospitals</a></li>
						<li><a href="#">Senior Living</a></li>
						<li><a href="#">Behavioral Health</a></li>
					</ul>
				</div>

				<div class="col-lg-2 col-md-4 col-12 footer-col-4 pb-30">
					<ul class="footer-icon">
						<li class="single-icon"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
						<li class="single-icon"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
						<li class="single-icon"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
					</ul>
					<p>2200 Ross Avenue, Suite 5400 Dallas, TX 75201</p>
					<p><a href="tel:4696216700">(469) 621-6700</a></p>
				</div>

			</div>
		</div>
		<section class="below-footer">
			<div class="container">
				<div class="row">
					
						<div class="col-lg-5 col-md-6 offset-lg-1 copyright">
							<p class="white-text">© 2022 Cornerstone Healthcare Group. All rights reserved.</p>
						</div>
						<div class="col-lg-6 col-md-5 quick-links">
			  				<ul class="terms">
								<li><a href="#">Terms of Use &emsp;|&emsp; Notice of Privacy Practices</a></li>
							</ul>
						</div>

					
				</div>
			</div>

		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.com_jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/slick.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
