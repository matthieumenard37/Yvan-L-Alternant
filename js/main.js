/*** Display dropdown menu ***/
	$('.menu').click(function() {
		$('#dropdown_menu').slideToggle("slow");
		});

/*** Validation forms ***/
	
	// Validation connexion form 
	function connexionErrorInput() {
		var mail = $('#mail_address').val();
		var pass = $('#password').val();
		
		if ((mail == "") || (pass == ""))
		{
			$('#mail_address').css("border", "2px solid red");
			$('#password').css("border", "2px solid red");
			$('#connexionErrorMsg').css("display", "block");
			
			return false;
		}
	}
	
	// Validation studient form
	function studientErrorInput() {
		var fname = $('#fname').val();
		var lname = $('#lname').val();
		var mail = $('#register_mail').val();
		var pass = $('#register_password').val();
		
		if ((fname == "") || (lname == "") || (mail == "") || (pass == ""))
		{
			$('#fname').css("border", "2px solid red");
			$('#lname').css("border", "2px solid red");
			$('#register_mail').css("border", "2px solid red");
			$('#register_password').css("border", "2px solid red");
			$('#registerErrorMsg').css("display", "block");
			
			return false;
		} else {
			if ((/^[\w.-]+@[\w.-]+\.[a-z]{2,6}$/.test(mail)) && (/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)/.test(pass)))
			{ 
				if (pass.length >= 6)
				{
					$('#fname').css("border", "2px solid green");
					$('#lname').css("border", "2px solid green");
					$('#register_mail').css("border", "2px solid green");
					$('#register_password').css("border", "2px solid green");
					$('#validMsg').css("display", "block");
				} else {
					$('#fname').css("border", "2px solid red");
					$('#lname').css("border", "2px solid red");
					$('#register_mail').css("border", "2px solid red");
					$('#register_password').css("border", "2px solid red");
					$('#passError').css("display", "block");
					
					return false;
				}
			} else {
				$('#fname').css("border", "2px solid red");
				$('#lname').css("border", "2px solid red");
				$('#register_mail').css("border", "2px solid red");
				$('#register_password').css("border", "2px solid red");
				$('#passError').css("display", "block");
				
				return false;
			}
		}
	}
	
	// Validation enterprise form
	function enterpriseErrorInput() {
		var siret = $('#siret').val();
		var enterprisename = $('#enterprisename').val();
		var enterprisemail = $('#enterprisemail').val();
		var enterprisepass = $('#enterprisepass').val();
		
		if ((siret == "") || (enterprisename == "") || (enterprisemail == "") || (enterprisepass == ""))
		{
			$('#siret').css("border", "2px solid red");
			$('#enterprisename').css("border", "2px solid red");
			$('#enterprisemail').css("border", "2px solid red");
			$('#enterprisepass').css("border", "2px solid red");
			$('#registerErrorMsg').css("display", "block");
			
			return false;
		} else {
			if ((/^[\w.-]+@[\w.-]+\.[a-z]{2,6}$/.test(mail)) && (/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)/.test(pass)))
			{ 
				if (pass.length >= 6)
				{
					$('#siret').css("border", "2px solid green");
					$('#enterprisename').css("border", "2px solid green");
					$('#enterprisemail').css("border", "2px solid green");
					$('#enterprisepass').css("border", "2px solid green");
					$('#validMsg').css("display", "block");
				} else {
					$('#siret').css("border", "2px solid red");
					$('#enterprisename').css("border", "2px solid red");
					$('#enterprisemail').css("border", "2px solid red");
					$('#enterprisepass').css("border", "2px solid red");
					$('#registerErrorMsg').css("display", "block");
					$('#passError').css("display", "block");
					
					return false;
				}
			} else {
				$('#siret').css("border", "2px solid red");
				$('#enterprisename').css("border", "2px solid red");
				$('#enterprisemail').css("border", "2px solid red");
				$('#enterprisepass').css("border", "2px solid red");
				$('#registerErrorMsg').css("display", "block");
				$('#passError').css("display", "block");
				
				return false;
			}
		}
	}
	
/*** Hidden connexion section ***/
	function connexionSection() {
		document.getElementById('connexion').style.display = 'flex';
	}
		
	function registerSection() {
		document.getElementById('connexion').style.display = 'none';
	}