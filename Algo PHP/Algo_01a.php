<?php
$a = random_int(0, 100);
echo $a;

//$nombre = readline('Entrez un nombre!');
while (true/* readline('Entrez un nombre!')!= $a */) {
    $nombre = readline('Entrez un nombre!');
    if ($nombre > $a) {
        echo 'Trop grand';
    } elseif ($nombre < $a) {
        echo 'Trop petit';
    } else {
        echo "Bravo! $nombre";
        break;
    }
}
