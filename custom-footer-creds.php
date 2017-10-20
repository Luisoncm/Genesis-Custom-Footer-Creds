<? php 




//* Customize the entire footer
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'lc_custom_footer' );
function lc_custom_footer() {

	echo '<div class="creds"><p>';
	echo do_shortcode('[footer_copyright before="Copyright "]');
	echo ' · <a href="http://pacofdez.com/">pacofdez.com</a> · ';
	echo 'Handcrafted by <a href="http://luiscolome.com/">Luis Colomé</a> from Málaga · ';
	echo do_shortcode('[footer_loginout]');
	echo '</p></div>';

}
