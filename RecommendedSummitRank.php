<?php
// Zeigt die verbleibenden Sekunden immer bis zum nächsten Mittwoch um 5 Uhr an.
// Verschiebe die Zeit immer um 22 Stunden.
$offset1 = 79200;
// Bei Sommerzeit: Ziehe 1 Stunde ab.
if (date('I'))
    $offset1 -= 3600;

$remainingTime = 604800 - (time() + $offset1) % 604800;
// Anschließend, berechne den geschätzten sicheren Rang basiernd zur verbleibenden Zeit.
// => Am Anfang auf Rang   854,
// => Nach 24 h auf Rang 1.195 usw. bis 9.000
$rank = round(9000 / pow(1.4, $remainingTime / 86400));
echo $rank;