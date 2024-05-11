<?php
// Zeigt die Differenz der Zeit zwischen jetzt und dem Parameter "time1" an.
if (empty($_GET['time1'])) {
	echo "Bitte Uhrzeit angeben";
	die();
}
$time1 = new DateTimeImmutable($_GET['time1'] . " -2 hours");
$time2 = new DateTimeImmutable();

$interval = $time1->diff($time2);
$secs = $time2->getTimestamp() - $time1->getTimestamp();
echo $interval->format("%H:%I:%S (In seconds: $secs)"), "\n";
