function validate(e) {
	const email = document.getElementById('contact-email').value;
	const rating = document.querySelector('input[name="rate"]:checked').value
	const feedback = document.getElementById('feedback-message').value

	var alertMessage = "";
	const validEmail = testValidEmail(email);
	if (!(validEmail)) {
		alertMessage += "Please enter a valid email address...\n"
	}

	if (feedback !== "" && validEmail) {
		alertMessage += "Thanks for the feedback!\n";
	}

	if (rating && validEmail) {
		alertMessage += "Thanks for rating the website " + rating + " stars!";
	}

	if (alertMessage !== "") {
		alert(alertMessage);
	}

}

function testValidEmail(email) {
	var p = email.search(/.+@.+/);
	if (p == 0)
		return true;
	else {
		return false;
	}
}
