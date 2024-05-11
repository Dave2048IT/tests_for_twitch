<?php
// Zeige die Tage seit dem 24. April 2019 an, wo der Live Summit erstmals in The Crew 2 eingeführt wurde.
$now = time();
$your_date = strtotime("2019-04-24");
$days = floor(($now - $your_date) / 86400);
echo "Der erste Crew 2 Summit erschien vor $days Tagen, also ist das der ".(int) ($days / 7 + 1).". Summit.";