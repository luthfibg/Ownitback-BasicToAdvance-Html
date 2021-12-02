function change() {
	var x = document.getElementById('passid').type;

	if(x == 'password') {
		document.getElementById('passid').type = 'text';
		document.getElementById('show-hide').innerHTML = '<i class="bi bi-eye-slash-fill" style="font-size: 1rem;"></i>';
	}
	else {
		document.getElementById('passid').type = password;
		document.getElementById('show-hide').innerHTML = '<i class="bi bi-eye-fill" style="font-size: 1rem;"></i>';
	}

}