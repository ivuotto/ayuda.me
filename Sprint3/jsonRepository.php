<?php

require_once("repository.php");
require_once("UserJsonRepository.php");
//extiende repository definiendo que efectivamente estaremos usando un
//repositorio TIPO JSON
class JSONRepository extends Repository {
	private $userRepository;

	public function getUserRepository()
	{
		if ($this->userRepository == null)
		{
			$this->userRepository = new UserJSONRepository();
		}

		return $this->userRepository;
	}
}
