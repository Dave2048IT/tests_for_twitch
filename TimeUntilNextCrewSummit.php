<?php
// Zeigt die verbleibenden Sekunden immer bis zum nächsten Mittwoch um 5 Uhr an.
// Verschiebe die Zeit immer um 22 Stunden.
$offset1 = 79200;
// Bei Sommerzeit: Ziehe 1 Stunde ab.
if (date('I'))
    $offset1 -= 3600;

echo 604800 - (time() + $offset1) % 604800;