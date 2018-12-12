<?php
function stock_button_shoetcode($atts, $content = null){
	extract(shortcode_atts( array(
			'button_text' => 'Read more about us',
			'link_type' => '',
			'link_topage' => '',
			'extra_link' => '',
	), $atts )
);
	if($link_type == 1){
		$link_surche = get_page_link($link_topage);
	} else {
		$link_surche = $extra_link ;
	}

	$button_markup = '
		<a href="'.$link_surche.'" class="bordert-btn">'.$button_text.'</a>
	';
	wp_reset_query();
	return $button_markup;
}
add_shortcode('stock_button', 'stock_button_shoetcode');