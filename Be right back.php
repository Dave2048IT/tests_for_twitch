<?php
$minutesToAdd = $_GET['time1'] ?? 5;
if ($minutesToAdd == 0)
	$minutesToAdd =  5;
// new DateTime() erzeugt ein neues Datums-Objekt. Es wird direkt mit einer Zeitverschiebung modifiziert.
$dateTime = (new DateTime())->modify("+2 hours {$minutesToAdd} minutes");
echo "David macht eine $minutesToAdd-minütige Pause und ist ab "
    .$dateTime->format('H:i')." Uhr wieder für euch da.";