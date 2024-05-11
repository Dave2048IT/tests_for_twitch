<?php
// Eine Test-Lotterie zum Ausprobieren
$name1 = $_GET['name'] ?? "Name_eintragen";
$name1 .= " ";
$choices = 6;
$in_pot = 49;
$lucky_factor = 1;

// Durchlaufe bis zu 6-mal
while ($choices) {
	$lucky3 = 3;
	// Gib 3 Chancen, damit der Gewinn etwas wahrscheinlicher ist
	while ($lucky3--) {
		$is_lucky = (rand() & 32767) < $choices / $in_pot * 32768;
        // Wenn du Glück hast, breche die 3er-Schleife ab.
		if ($is_lucky)
        	break;
	}
    // Wenn du Pech hast, breche das ganze Spiel ab
    // => und $lucky_factor bestimmt deinen Gewinn.
	if (!$is_lucky)
        break;

    // Zuerst 1      * 49 / 6
    // Dann   8,1667 * 48 / 5 usw.
    $lucky_factor *= $in_pot / $choices;
    $choices--;
    $in_pot--;
}

$lucky_factor--;
echo $name1 . ", die Lotterie verlangt 111 Razor Coins.";
echo "\nDu hast ". (6 - $choices) ." richtige Kugel(n) gezogen und verdienst ". number_format($lucky_factor, 0, ',', '.')." Razor Coins. => " . round($lucky_factor - 111);
if ($choices < 6)
    echo "\n\n /\ ". ($_GET['creator'] ?? "Hey Admin") .", hier der Befehl: \n!addpoints ". $name1 . round($lucky_factor);
