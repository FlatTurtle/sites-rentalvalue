<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| FlatTurtle ID
	|--------------------------------------------------------------------------
	*/

	'id' => 'rentalvalue',


	/*
	|--------------------------------------------------------------------------
	| Template File
	|--------------------------------------------------------------------------
	|
	| The template file used to render the site. The default template is
	| sitecore::template. If you wish to use your own template file, override
	| this option with a valid template file, located in your app/views folder.
	|
	*/

	'template' => 'template',


	/*
	|--------------------------------------------------------------------------
	| Content Directory
	|--------------------------------------------------------------------------
	*/

	'directory' => 'content',


	/*
	|--------------------------------------------------------------------------
	| Logo
	|--------------------------------------------------------------------------
	*/

	'logo' => 'https://img.flatturtle.com/rentalvalue/logo/rentalvalue.png',


	/*
	|--------------------------------------------------------------------------
	| Carousel
	|--------------------------------------------------------------------------
	|
	| Top image slideshow configuration. Default carousel height is 600px.
	|
	*/

	'carousel_height' => '600px',


	/*
	|--------------------------------------------------------------------------
	| FlatTurtle map
	|--------------------------------------------------------------------------
	|
	| Enable or disable the FlatTurtle map at the bottom of the page. Default
	| map height is 450px.
	|
	*/

	'map' => false,
	'map_height' => '450px',


	/*
	|--------------------------------------------------------------------------
	| Mailchimp Form URL
	|--------------------------------------------------------------------------
	|
	| The Form URL can be found in the embedded form code generated by mailchimp.
	| Leave empty to disable mailchimp signup.
	|
	*/

	'mailchimp' => null,


	/*
	|--------------------------------------------------------------------------
	| Google Analytics Account Code
	|--------------------------------------------------------------------------
	|
	| Leave empty to disable google analytics.
	|
	*/

	'analytics' => 'UA-31282630-7',


	/*
	|--------------------------------------------------------------------------
	| Social Media
	|--------------------------------------------------------------------------
	|
	| The key defines the icon that is used and the value is the corresponding
	| url. You can check the available icons at:
	| 	http://fortawesome.github.io/Font-Awesome/icons/#brand
	|
	| Example:
	|	'facebook' => 'https://www.facebook.com/pages/FlatTurtle/451854318217554'
	|
	*/

	'social' => array(
		'twitter' 	=>	'https://twitter.com/rentalVALUE',
		'linkedin'	=>	'https://www.linkedin.com/company/rentalvalue',
		'pinterest' =>	'http://www.pinterest.com/rentalvalue',
	)

);
