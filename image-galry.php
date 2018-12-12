<?php 
function stock_image_galry($atts, $content = null){
	extract(shortcode_atts( array(
		'images' => '',
		'height' => '310'
	), $atts)
);
	$image_id = explode(',', $images);
	$image_count = count($image_id);
	$image_no = 0;
	if (!empty($images)){
	$galry_markul ='
		<div class="stock-tail-galry tile-galry-image-'.$image_count.'">';

			foreach ($image_id as $image ) {
				$image_array = wp_get_attachment_image_src( $image , 'large' );
				$image_no ++ ;
				$galry_markul .='<div style="background-image: url('.$image_array[0].'); height:'.$height.'px" class="tile-galry-image tile-galry-block-'.$image_no.'"></div>';
			}

	
			
		$galry_markul .='	</div>';
	}else{
		$galry_markul = '';
	}
	wp_reset_query();
	return $galry_markul;
}
add_shortcode( 'image_galry', 'stock_image_galry' );