<?php

class Controller {

	protected $db;
	public function __construct() {

		try{

			$this->db = new PDO ("mysql:host=localhost;dbname=apniweb", "root", "");
		} catch (Exception $e) {
			die ("error!" . $e->getMessage());
		}
		}
	}

	