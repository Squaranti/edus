$(document).ready(function() {
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
	document.getElementById("login-submit").onclick = function () {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if ( username == "16996" && password == "programma"){
			window.location = "edus.php"; // Redirecting to other page.
			return false;
		}
		};
});

		 	/**document.getElementById("login_stud").onclick = function () {

			//code

		};*/
