<?php

	# echo "AJAX poziv prosao!";
	$imena = ["Toma", "Aleksandar", "Jova", "Mladen", "Desanka"];
	$ucenici = ["Toma" => [5,2,4,1,5], "Mladen" => [5,5,5,4,5], "Jova" => ["Musko", "15 godina", "duga kosa"]];

	// Primer u parvom zivotu
	$automobili  = [
		"BMW" => ["Serija 3", "Serija 5", "Serija 7"],
		"Serija 3" => ["E46", "E42", "E40"],
		"Serija 5" => ["520D", "525", "530"]
	];

echo json_encode($automobili);

?>