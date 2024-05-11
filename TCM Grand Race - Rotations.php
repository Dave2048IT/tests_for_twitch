<?php
// Das sind die aktuellen Möglichkeiten, die in einem Grand Race von Motorfest vorkommen können
$rotations = [
    "1 Kaena Point:  ST1, RR, Rally X",
    "2 Nuuanu Punchbowl:  Drift, ST1, Racing",
    "3 Haleiwa:  Motocross, AGP, Hypercar",
    "4 Mauna Pele:  RR, ST1, Hypercar",
    "5 Diamonds Head: ST1, ST2, Hypercar (neu / Achtung Offroad in ST2 möglich)",
    "6 Wahiawa Fields:  AGP, ST2, Hypercar",
    "7 Kahuku:  Racing, RR, ST2 (Rally X Änderung auf RR)",
    "8 Kaneohe: RR, ST1, Racing (Regen Playlist)",
    "9 Kalaeloa:  AGP, Hypercar, ST2",
    "10 Ma'akua Black Beach:  ST2, RR, Racing",
    "11 Nuuanu Punchbowl:  Rally X, RR / Planes, Rally X",
    "12 Haleiwa:  Hypercar, ST2, AGP",
    "13 Kaena Point:  Hypercar, Racing, ST2 (Regen Playlist)",
    "14 Waikiki:  ST1, Hypercar, RR",
    "15 Kaneohe:  Hypercar, Rally X, ST2",
    "16 Mauna Pele:  Racing, AGP, ST2",
    "17 Wahiawa Fields:  Hypercar, Racing, RR",
    "18 Kahuku:  Monster, Rally X, RR",
    "19 Ma'akua Black Beach:  Racing, Hypercar, ST2",
    "20 Kalaeloa:  Rally X, RR / Planes, Drift",
    "21 Diamond Heads: Hypercar, ST2, AGP (neu / Achtung Offroad in ST2 möglich)",
    "22 Waikiki:  Racing, AGP, ST2",
];

// Es wechselt alle 30 Minuten
// Die 1. Rotation wiederholt sich alle 11 Stunden.
// Verschiebe um 10 Std.  45 Min.  12 Sek.
$offset1 = 38712; // oder -888
$rot_index = (int) ((time() + $offset1) % 39600 / 1800);
$rem_time = 1800 - (time() + $offset1) % 1800;
$seconds = ($rem_time % 60 | 0);

echo "Alle Infos unter: https://discord.com/channels/698609109217312808/1185147900876050443 --- Jetzt: ";
echo $rotations[$rot_index];
echo " --- Nächstes: ";
echo $rotations[($rot_index + 1) % 22];
echo " --- in: ";
// Verbleibende Zeit bis zur nächsten "Rotation".
echo ($rem_time / 60 | 0).":".($seconds < 10 ? "0" : "").$seconds;