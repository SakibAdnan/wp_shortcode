<?php 
//Stock theme Service box shortcode
function stock_service_cta_shrtcode($atts, $content = null){
	extract(shortcode_atts( array(
		'title'       => '',
		'desc'        => '',
		'link_type'   => '',
		'theme'   => 1,
		'link_topage' => '',
		'extr_link'   => '',
		'link_text'   => 'Start a project',
	), $atts)
);
	if($link_type == 1){
		$link_source = get_page_link($link_topage);
	}else{
		$link_source = $extr_link;
	}

	$service_markup ='
		<div class="service-cta-box  service-cta-box'.$theme.'">
			<h2>'.$title.'</h2>
			'.wpautop($desc).'
			<a href="'.$link_source.'" class="bordert-btn">'.$link_text.'</a>
		</div>
	';

	wp_reset_query();
	return $service_markup  ;

}
add_shortcode( 'stock_service_cta', 'stock_service_cta_shrtcode' );