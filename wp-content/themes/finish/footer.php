<footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <div class="footerTop">
		<div class="width1170">
			<ul class="bottomMenu clearfix">
				<li><a href="tel:<?php echo get_theme_mod('true_footer_copyright_tel'); ?>"><?php echo get_theme_mod( 'true_footer_copyright_tel' );?></a></li>
				<li><a href="tel:<?php echo get_theme_mod('true_footer_copyright_tel_mob'); ?>"><?php echo get_theme_mod('true_footer_copyright_tel_mob'); ?></a></li>
				<li><a href="email:<?php echo get_theme_mod('true_footer_copyright_email'); ?> "><?php echo get_theme_mod('true_footer_copyright_email'); ?></a></li>
				<li><?php echo get_theme_mod('true_footer_copyright_address'); ?></li>
			</ul>
			<div><a href="<?php echo get_theme_mod('true_footer_copyright_fb'); ?>" class="facebookBottom facebook"><i aria-hidden="true" class="fa fa-facebook"></i></a>
			</div>
		</div>
	</div>
	<div class="footerBottome"><a href="#">Разработка сайта &copy<span>Upskxkit.github.io</span></a>
	</div>
	<?php wp_footer(); ?>
</footer>
</div>
</body>
</html>
