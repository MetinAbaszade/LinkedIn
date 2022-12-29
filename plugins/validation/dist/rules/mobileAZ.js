$.validator.addMethod("mobileAZ", function (phone_number, element) { 
	return /^[A-Z;a-z]{3,}$/.test(phone_number);
}, "Please specify a valid mobile number");
