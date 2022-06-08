<?php

class Programmer {

	private $skills;

	public function __construct($skills) {
		$this->skills = $skills;
	}

	public function totalSkills() {
		return count($this->skills);
	}

}

$arr = ['php', 'c', 'c++'];

$p = new Programmer($arr);

echo $p->totalSkills();




