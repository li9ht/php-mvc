<?php

class index_Controller extends Controller {

public function index() {
	/*** set a template variable ***/
        $this->registry->template->welcome = 'Welcome to PHPRO MVC';
	/*** load the index template ***/
        $this->registry->template->show('index');
}

}

?>
