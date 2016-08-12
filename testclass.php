<?php


class Simply_class {

	public $text = 'some text';

	public function get_text() {

		print $this->text;
	
	}

}

$obj = new Simply_class();
$obj->get_text();
