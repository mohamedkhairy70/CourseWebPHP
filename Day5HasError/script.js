$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
});

function EditToggle()
{
	var cont = document.getElementById("addEmployeeModal");
	if (cont.style.display == 'block') {
		cont.style.display = 'none';
	}else{
		cont.style.display == 'block'
	}
}
