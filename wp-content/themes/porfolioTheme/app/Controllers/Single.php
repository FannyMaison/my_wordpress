<?php

namespace App\Controllers;

use App\Traits\Image;
use Sober\Controller\Controller;

class Single extends Controller
{
	use Image; 

	public function realisation()
	{
		return (object) [
			  	'name' => get_field('realisation_name', get_the_ID()),
		      	//'image' => get_field('image_preview', get_the_ID()),
		      	'alt' => get_field('realisation_name', get_the_ID()),
		      	'subtitle' => get_field('subtitle', get_the_ID()),
		      	'description' => get_field('description', get_the_ID()),
		      	//'big_image' => get_field('big_image', get_the_ID()),
		      	'link' => get_field('link', get_the_ID()),
		      	'technologies' => get_field('technologies', get_the_ID()),
		      	'img' => $this->getImage(get_the_ID(), "large")
		      ];
	}

	
}