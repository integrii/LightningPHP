<?php if(!defined('INDEX')){exit;}

class exampleModel extends LightningPHP {

	function __construct(){
	}

	function defaultContent() {

		$text = 'Welcome to LightningPHP.  To get started, check the README.md file.';
		return $text;
	}

}
