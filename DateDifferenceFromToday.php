<?php
// Zeigt die Differenz der Zeit zwischen jetzt und dem Parameter "date1" an.
if (empty($_GET['date1'])) {
	echo "Bitte Datum angeben";
	die();
}
$date1 = new DateTimeImmutable($_GET['date1'] . " -2 hours");
$date2 = new DateTimeImmutable();

$interval = $date1->diff($date2);
$secs = $date2->getTimestamp() - $date1->getTimestamp();
// Jahre, Monate, Tage, Stunden, Minuten, Sekunden, Volle Tage, Ganze Sekunden
echo $interval->format("%yy %mM %dT, %H:%I:%S (Full days: %a / In seconds: $secs)"), "\n";
