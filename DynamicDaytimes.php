<?php
// Zeigt die Sekunden seit Mitternacht von heute an.
$offset1 = 3600;
if (date('I'))
    $offset1 += 3600;

$elapsedTime = (time() + $offset1) % 86400;
$HOURS = 3600;

// Zeige je nach Tageszeit ein anderes Wort an.
if ($elapsedTime < 6*$HOURS)
    echo "Nacht-Aufenthalt";
elseif ($elapsedTime < 11*$HOURS)
    echo "Morgen";
elseif ($elapsedTime < 13*$HOURS)
    echo "Mittag";
elseif ($elapsedTime < 18*$HOURS)
    echo "Nachmittag";
elseif ($elapsedTime < 23*$HOURS)
    echo "Abend";
else
    echo "Spätabend";