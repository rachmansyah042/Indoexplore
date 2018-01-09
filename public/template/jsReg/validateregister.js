$(document).ready(function() {

		var formvalidator  = new Validator("register-form");
		
		formvalidator.EnableOnPageErrorDisplay();
		formvalidator.EnableMsgsTogether();

		formvalidator.addValidation("username","required","Nama harus diisi");

		formvalidator.addValidation("email","required","Email harus diisi");
		formvalidator.addValidation("email","maxlen=30","Email Maksimal 30 Karakter");
		formvalidator.addValidation("email","email","Email tidak valid");

		formvalidator.addValidation("password","required","Password harus diisi"); 
		formvalidator.addValidation("password","minlen=5","Minimal 5 Karakter");

		formvalidator.addValidation("confirm-password","required","confirm-password harus diisi"); 
		formvalidator.addValidation("confirm-password","minlen=5","Minimal 5 Karakter"); 
		formvalidator.addValidation("confirm-password","eqelmnt=password","confirm-password tidak sama"); 

		

		formvalidator.setCallbackFunction('submitForm()');


});


function submitForm(){
		$('#register-form').submit();
	}
