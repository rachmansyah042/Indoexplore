$(document).ready(function() {

		var formvalidator  = new Validator("trip-form");
		
		formvalidator.EnableOnPageErrorDisplay();
		formvalidator.EnableMsgsTogether();

		formvalidator.addValidation("name","required","Nama harus diisi");
		formvalidator.addValidation("quota","required","kuota harus diisi");
		formvalidator.addValidation("quota","numeric","Masukan angka");
		formvalidator.addValidation("price","required","harga harus diisi");
		formvalidator.addValidation("price","numeric","Angka dalam rupiah");
		formvalidator.addValidation("days","required","hari harus diisi");
		formvalidator.addValidation("days","numeric","hari ditulis dalam angka");
		formvalidator.addValidation("nights","required","malam harus diisi");
		formvalidator.addValidation("nights","numeric","malam ditulis dalam angka");
		formvalidator.addValidation("photo","file_extn=jpg;gif;png;jpeg;","Extension file yang diizinkan hanya .jpg, .gif, .png, .jpeg");
		formvalidator.addValidation("photo","req_file","Harus upload Image");
		formvalidator.addValidation("description","required","deskripsi harus diisi");

		formvalidator.setCallbackFunction('submitForm()');

});


function submitForm(){
		$('#submit').submit();
	}
