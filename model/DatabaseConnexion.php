<?php
	class DatabaseConnexion {
		public static function getLocalConnexion() {
			$database = new PDO('mysql:host=localhost;dbname=yvanlalternant;charset=utf8', 'root', '');
			$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			return $database;
		}
	}