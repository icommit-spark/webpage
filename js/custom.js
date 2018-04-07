jQuery(document).ready(function() {

	"use strict";
	// Your custom js code goes here.
    // After clicking on the login button (the id is login), open a modal for registration/signin
    $("#login").leanModal({
		top: 100,
		overlay: 0.6,
		closeButton: ".modal_close"
    });
    // On the press of the closeModal button, hide the modal
    $("#closeModal").click(function(e) {
        $("#modal").hide();
    });
    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});