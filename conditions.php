<?php
$note = 12;
if ($note > 15) {
    echo ' vous avez la mention tres bien';
} else {
    echo ' VOUS AVEZ LA MENTION BIEN' . "\n";
};

$moyenne = readline('ecriver votre moyenne  :');
if ($moyenne >= 10) {
    echo ' VOUS AVEZ DE LA MOYENNE ';
} else {
    echo ' VOUS N AVEZ PAS DE MOYENNE ';
}
