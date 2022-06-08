<?php

class Profile {

	private $language;

	public function setLanguage($language) {
		$this->language = $language;
	}
}

$lang = ['hindi', 'english', 'french'];

$p = new Profile();

$p->setLanguage($lang);

print_r($p);

