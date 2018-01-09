$(document).ready(function() {

		var formvalidator  = new Validator("login-form");
		
		formvalidator.EnableOnPageErrorDisplay();
		formvalidator.EnableMsgsTogether();

		formvalidator.addValidation("username","required","Nama harus diisi");

		formvalidator.addValidation("password","required","Password harus diisi"); 
		formvalidator.addValidation("password","minlen=5","Minimal 5 Karakter"); 		
		
		formvalidator.addValidation("email","email","Email tidak valid"); 

		formvalidator.setCallbackFunction('submitForm()');


});


function submitForm(){
		$('#login-form').submit();
	}
