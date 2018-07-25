$(document).ready(function(){

	$.ajax({
		url:"korisnik.php",
		method: "GET",
		dataType: "JSON",
		success: function(response)
		{
			// $("body").append(response);
			console.log(response);
		},
		error: function(problem)
		{

		}
	});

});