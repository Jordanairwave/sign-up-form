var site = {
	signUpForm: $('#sign-up-form'),
	signUpFormMessages: $('#form-messages'),
	formData: null,
	init: function() {
	
		//Contact Form Validation and submit via Ajax
		$('#sign-up-form').validate({
			errorContainer: '#error-messages',
			errorLabelContainer: '#error-messages .container',
			rules: {
				forename: {
					required: true
				},
				surname: {
					required: true
				},
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				forename: {
					required: 'Please enter your first name'
				},
				surname: {
					required: 'Please enter your second name'
				},
				email: {
					required: 'Please enter your email address',
					email: 'Please enter your email in the correct format (you@yourdomain.com)'
				}
			},
			submitHandler: function(form) {
				//Serialize the data from the form to allow it to be sent
				site.formData = $('#contact-form').serialize();
				
				//Submit the form using Ajax
				$.ajax({
					type: 'POST',
					url: $('#sign-up-form').attr('action'),
					data: site.formData
				}).done(function(response){
					//Add correct class to messages div
					$(site.signUpFormMessages).removeClass('error').addClass('success');
					
					//Set the message text
					$(site.signUpFormMessages).text(response);
					
					//Clear the form
					$('#forename').val('');
					$('#surname').val('');
					$('#email').val('');
					
				}).fail(function(data){
					//Add correct class to messages div
					$(site.signUpFormMessages).removeClass('success').addClass('error');
					
				    // Set the message text.
				    if (data.responseText !== '') {
				        $(site.signUpFormMessages).text(data.responseText);
				    } else {
				        $(site.signUpFormMessages).text('Oops! An error occured and your message could not be sent.');
				    }
				});
			}
		});

    }
};

$(document).ready(function(){ site.init(); });