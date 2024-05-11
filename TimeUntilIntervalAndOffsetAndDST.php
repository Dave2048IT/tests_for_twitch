<?php
// Zeigt die verbleibenden Sekunden bis zu einem gewissen Interval mit einer bestimmten Startzeit an.
// Und kann bei Bedarf auch auf Sommerzeit prüfen.
$interval1 = $_GET['interval'] ?? 86400;
$offset1 = $_GET['offset'] ?? 7200;
$checkDST1 = $_GET['checkDST'] ?? 0;

// Ist Sommerzeit UND soll das geprüft werden? Dann -1 Stunde.
if (date('I') && $checkDST1)
    $offset1 -= 3600;

echo $interval1 - (time() + $offset1) % $interval1;