<?php

namespace App\Traits;

trait Image
{
	protected function getImage($id, $size='medium')
	{
		$image = get_field('image_preview', $realisation);
		$big_image = get_field('big_image', $realisation);
		// variables
		$url = $image['url'];
		$alt = $image['alt'];

		$thumb = $image['sizes'][$size];

		$bigUrl = $big_image['bigUrl'];
		$alt = $big_image['bigAlt'];
		/*
		$width = $image['sizes'][$size . '-width'];
		$height = $image['sizes'][$size . '-height'];
		*/

		return (object) [
			'url' => $url,
		    'thumb' => $thumb,
		    'alt' => $alt
		];

	}
}
?>