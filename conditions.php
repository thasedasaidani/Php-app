<?php
$note = 12;
if ($note > 15) {
    echo ' vous avez la mention tres bien';
} else {
    echo ' VOUS AVEZ LA MENTION BIEN' . "\n";
};

$moyenne = (int)readline('ecriver votre moyenne  :');
if ($moyenne === 10) {
    echo 'vous avez juste la moyenne ' . "\n";
} elseif ($moyenne > 10) {
    echo ' VOUS AVEZ DE LA MOYENNE ' . "\n";
} else {
    echo ' VOUS N AVEZ PAS DE MOYENNE'  . "\n";
};


// switch
$action  = (int)readline("Écrivez votre action : (1 : j'attaque, 2 : je défends, 3 : je me soigne) : ");

switch ($action) {
    case 1:
        echo "j'attaque" . "\n";
        break;
    case 2:
        echo "je défends" . "\n";
        break;
    case 3:
        echo "je me soigne " . "\n";
        break;
    default:
        echo "je ne fais rien " . "\n";
};

// exemple heure 
$heure = (int)readline('entrez une heure :');
if (($heure >= 8 && $heure < 12) || ($heure >= 14 && $heure < 18)) {
    echo ' le magasin est ouvert ';
} else {
    echo ' le magasin est ferme';
}
