
function validate_form() {
	form = document.forms["contact_form"];

	mail = form["mail"].value;
	re = /\S+@\S+\.\S+/;
	if (re.test(mail) == false) {
		return false;
	}

	date = form["date de naissance"].value.split("-");
	if (date[0].length > 4 || date[1].length > 2 || date[2].length > 2) {
		return false;
	}
	return true;
}