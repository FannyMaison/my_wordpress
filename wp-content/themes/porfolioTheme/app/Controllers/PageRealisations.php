<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageRealisations extends Controller
{
	public function realisations()
	{
		$args = [
	      'posts_per_page' => -1,
	      'offset' => 0,
	      'orderby' => 'date',
	      'order' => 'DESC',
	      'post_type' => 'realisations',
	     ];

	     $the_query = new \WP_Query($args);
	     $realisations = [];

	     if ($the_query->post_count > 0) {
	     	$realisations = array_map(function($realisation){
	     	  $image = get_field('image_preview', $realisation);
		      // variables
		      $url = $image['url'];
		      $alt = $image['alt'];

		      $size = 'medium';
		      $thumb = $image['sizes'][$size];

		      $subtitle = get_field('subtitle', $realisation);
		      return (object) [
		      	'url' => $url,
		      	'thumb' => $thumb,
		      	'alt' => $alt,
		      	'subtitle' => $subtitle,
		      	'permalink' => get_post_permalink($realisation)
		      ];
	     	}, $the_query->posts);

	     	wp_reset_postdata();
	     }
	     return $realisations;
	}
}

?>
