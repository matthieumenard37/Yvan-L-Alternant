<?php
	require('controller/MainController.php');
	$mainController = new MainController;
	
	try {
		if (isset($_GET['action']))
		{
			if ($_GET['action'] == 'studientRegister')
			{
				if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['mail_address']) && !empty($_POST['password']))
				{
					if ((preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $_POST['password'])) && (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $_POST['mail_address'])))
					{
						if (strlen($_POST['password']) >= 6)
							$mainController->newMember($_POST['fname'], $_POST['lname'], $_POST['mail_address'], $_POST['password']);
					}
				}
			} else if ($_GET['action'] == 'enterpriseRegister') {
				if (!empty($_POST['siretnumber']) && !empty($_POST['enterprisename']) && !empty($_POST['mail_address']) && !empty($_POST['password']))
				{
					if ((preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $_POST['password'])) && (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $_POST['mail_address'])))
					{
						if (strlen($_POST['password']) >= 6)							
							$mainController->newEnterprise($_POST['siretnumber'], $_POST['enterprisename'], $_POST['mail_address'], $_POST['password']);
					}
				}
			} else if ($_GET['action'] == 'login') {
				if (!empty($_POST['mail_address']) && !empty($_POST['password']))
					$mainController->login($_POST['mail_address'], $_POST['password']);
			} else if ($_GET['action'] == 'homepage') {
				require('view/homepage.php');
			} else if ($_GET['action'] == 'logout') {
				$mainController->logout();
			}
		} else {
			require('view/cover.php');
		}
	} catch (Exception $e) {
		$errorPage = $e->getMessage();
		require('view/errorPage.php');
	}