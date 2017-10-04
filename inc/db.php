<?php

error_reporting(E_ALL);
//error_reporting(0);

$db = new mysqli('localhost', 'root', 'me!Lam0psme', 'pageMPriess01');

$db->set_charset('utf8');

if ($db->connect_errno != 0) {
    die('Sorry - gerade gibt es ein Problem: ' . $db->connect_error);
}
if ($db) {
	echo date("H:i:s") . ' -- Verbindung zur Datenbank "pageMPriess01" on localhost erfolgreich';
	echo "<br>";
	//print_r( $db );
}

?>