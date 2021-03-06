$(document).ready(function(){
	
// Form Validation
	$("#login_validate").validate({
		rules:{
			required:{
				required:true
			},
			email:{
				required:true,
				email: true
			},
			password:{
				required: true,
				minlength:5
			},
		},
		errorClass: "help-inline text-danger",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.form-group').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.form-group').removeClass('has-error');
			$(element).parents('.form-group').addClass('has-success');
		}
	});
	
	
	// SignUp Form Validation
	$("#signup_form").validate({
		rules:{
			required:{
				required:true
			},
			email:{
				required:true,
				email: true
			},
			password:{
				required: true,
				minlength:6
			},
			confirmPassword:{
				required:true,
				minlength:6,
				equalTo:"#password"
			},
			url:{
				required:true,
				url: true
			},
			username: {
				required: true,
				minlength: 5,
				maxlength: 16
			}
		},
		errorClass: "help-inline text-danger",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.form-group').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.form-group').removeClass('has-error');
			$(element).parents('.form-group').addClass('has-success');
		}
	});
});