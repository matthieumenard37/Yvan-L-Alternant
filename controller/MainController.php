<?php
	require_once('model/MembersManager.php');
	
	class MainController {
		public function newMember($fname, $lname, $mail_address, $password) {
			$membersManager = new MembersManager();
			
			$newMember = $membersManager->studientRegister($fname, $lname, $mail_address, $password);
			
			if ($newMember === false)
				throw new Exception('Action impossible');
			else 
				header('Location:index.php');
		}
		
		public function newEnterprise($siretnumber, $enterprisename, $mail_address, $password) {
			$membersManager = new MembersManager();
			
			$newEnterprise = $membersManager->enterpriseRegister($siretnumber, $enterprisename, $mail_address, $password);
			
			if ($newEnterprise === false)
				throw new Exception('Action impossible');
			else
				header('Location:index.php');
		}
		
		public function login($mail_address, $password) {
			$membersManager = new MembersManager();

			$login = $membersManager->isStudientAuthenticated($mail_address, $password);
			$enterpriseLogin = $membersManager->isEnterpriseAuthenticated($mail_address, $password);
			$psswdVerify = $login->fetch();
			$enterprisePassVerify = $enterpriseLogin->fetch();
			
			if (!$psswdVerify)
			{
				echo 'Adresse e-mail ou mot de passe incorrect';
			} else {
				if (password_verify($password, $psswdVerify['password']))
				{
					session_start();
					$_SESSION['member_id'] = $psswdVerify['member_id'];
					$_SESSION['fname'] = $psswdVerify['fname'];
					$_SESSION['lname'] = $psswdVerify['lname'];
					$_SESSION['mail_address'] = $psswdVerify['mail_address'];
					
					header('Location:index.php?action=homepage');
				} else {
					echo 'Adresse e-mail ou mot de passe incorrect';
				}
			}
			
			if (!$enterprisePassVerify)
			{
				echo 'Adresse e-mail ou mot de passe incorrect';
			} else {
				if (password_verify($password, $enterprisePassVerify['password']))
				{
					session_start();
					$_SESSION['siretnumber'] = $enterprisePassVerify['siretnumber'];
					$_SESSION['enterprisename'] = $enterprisePassVerify['enterprisename'];
					$_SESSION['mail_address'] = $enterprisePassVerify['mail_address'];
					
					header('Location:index.php?action=homepage');
				} else {
					echo 'Adresse e-mail ou mot de passe incorrect';
				}
			}
			
		}
		
		public function logout() {
			session_start();		
			$_SESSION = array();		
			session_destroy;
		
			header('Location:index.php');
		}
	}