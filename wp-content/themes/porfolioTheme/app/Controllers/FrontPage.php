<?php

namespace App\Controllers;

use App\Traits\Image;
use Sober\Controller\Controller;

class FrontPage extends Controller
{
	use Image;
	public function realisations()
	{
		$args = array(
	      'posts_per_page' => '1000',
	      'offset' => 0,
	      'orderby' => 'rand',
	      'order' => 'DESC',
	      'post_type' => 'realisations'
	     );

	     $the_query = new \WP_Query($args);
	     $realisations = [];

	     if ($the_query->post_count > 0) {
	     	  $realisations = array_map(function($realisation){
	     	  $image = get_field('image_preview', $realisation);
	     	  $name = get_field('realisation_name', $realisation);
		      // variables
		      $url = $image['url'];
		      $alt = $image['alt'];

		      $size = 'medium';
		      $thumb = $image['sizes'][$size];

		      return (object) [
		      	//'img' => $this->getImage($realisation),
		      	'url' => $url,
		      	'thumb' => $thumb,
		      	'alt' => $alt,
		      	'name' => $name,
		      	'permalink' => get_post_permalink($realisation)
		      ];
	     	}, $the_query->posts);

	     	wp_reset_postdata();
	     }
	     return $realisations;
	}
}
