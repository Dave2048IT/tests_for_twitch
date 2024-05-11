<?php
// Zeigt die Sekunden seit Mitternacht von heute an.
$offset1 = 3600;
if (date('I'))
    $offset1 += 3600;

echo (time() + $offset1) % 86400;