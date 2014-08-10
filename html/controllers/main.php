<?php if(!defined('INDEX')){exit;}


// LightningPHP Controller Class

class main extends LightningPHP {

	function __construct(){
	}

	function main() {


		// Load an example model
		$this->loadModel('exampleModel');

		// Fetch test content from our example model
		$content['text'] = $this->exampleModel->defaultContent();

		// Load an example view
		$this->loadView('main',$content);
	}

}
