<?php
	require_once('model/DatabaseConnexion.php');
	
	class MembersManager extends DatabaseConnexion {
		public function studientRegister($fname, $lname, $mail_address, $password) {
			$database = DatabaseConnexion::getLocalConnexion();
			
			$password_hash = crypt($password);
			
			$addMember = $database->prepare('INSERT INTO register(fname, lname, mail_address, password, register_date) VALUES(:fname, :lname, :mail_address, :password, CURDATE())');
			$addMember->bindValue(':fname', htmlspecialchars($fname), PDO::PARAM_STR);
			$addMember->bindValue(':lname', htmlspecialchars($lname), PDO::PARAM_STR);
			$addMember->bindValue(':mail_address', htmlspecialchars($mail_address), PDO::PARAM_STR);
			$addMember->bindValue(':password', htmlspecialchars($password_hash), PDO::PARAM_STR);
			
			$newMember = $addMember->execute();
			
			return $newMember;
		}
		
		public function enterpriseRegister($siretnumber, $enterprisename, $mail_address, $password) {
			$database = DatabaseConnexion::getLocalConnexion();
			
			$password_hash = crypt($password);
			
			$enterprise = $database->prepare('INSERT INTO enterprise(siretnumber, enterprisename, mail_address, password, register_date) VALUES(:siretnumber, :enterprisename, :mail_address, :password, CURDATE())');
			$enterprise->bindValue(':siretnumber', htmlspecialchars($siretnumber));
			$enterprise->bindValue(':enterprisename', htmlspecialchars($enterprisename), PDO::PARAM_STR);
			$enterprise->bindValue(':mail_address', htmlspecialchars($mail_address), PDO::PARAM_STR);
			$enterprise->bindValue(':password', htmlspecialchars($password_hash), PDO::PARAM_STR);
			
			$newEnterprise = $enterprise->execute();
			
			return $newEnterprise;
		}
		
		public function isStudientAuthenticated($mail_address, $password) {
			$database = DatabaseConnexion::getLocalConnexion();
			
			$login = $database->prepare('SELECT member_id, fname, lname, mail_address, password FROM register WHERE mail_address = :mail_address');
			$login->bindValue(':mail_address', $mail_address);
			$login->execute();
			
			return $login;
		}
		
		public function isEnterpriseAuthenticated($mail_address, $password) {
			$database = DatabaseConnexion::getLocalConnexion();
			
			$enterpriseLogin = $database->prepare('SELECT siretnumber, enterprisename, mail_address, password FROM enterprise WHERE mail_address = :mail_address');
			$enterpriseLogin->bindValue(':mail_address', $mail_address);
			$enterpriseLogin->execute();
			
			return $enterpriseLogin;
		}
	}