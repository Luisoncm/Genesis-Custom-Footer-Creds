<? php 
//* Do NOT include the opening php tag shown above. Copy the code shown below.



//* Remove the the creds from the footer
remove_action( 'genesis_footer', 'genesis_do_footer' );

//* Customize the entire footer 
function lc_custom_footer() {

	echo '<div class="creds"><p>';
	echo do_shortcode('[footer_copyright before="Copyright "]');
	echo ' · <a href="http://YOURSITE.com/">YOURSITE</a> · ';
	echo 'Handcrafted by <a href="http://SITENAME.com/">AUTHORNAME</a> · ';
	echo do_shortcode('[footer_loginout]');
	echo '</p></div>';

}
add_action( 'genesis_footer', 'lc_custom_footer' );
