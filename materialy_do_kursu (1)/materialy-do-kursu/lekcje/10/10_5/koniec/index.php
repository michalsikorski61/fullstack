<?php
$code = 500;

// if ($code == 200)
// {
// 	echo 'OK';
// }
// elseif ($code == 404)
// {
// 	echo 'Błąd 404';
// }
// else
// {
// 	echo 'Nieznana odpowiedź serwera';
// }

switch ($code) {
	case 200:
		echo 'OK';
		break;
	case 404:
		echo 'Błąd 404';
		break;
	default:
		echo 'Nieznana odpowiedź serwera';
		break;
}

?>