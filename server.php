<?php
require __DIR__ . '/database.php';

$selected_genre = $_GET['genre'];

if(empty($selected_genre)) {
    // Se genere è vuoto o non definito stampo tutti i dischi
    $json = json_encode($database);
} else {
    // Se invece il genere mi viene passato:
    // filtro i dischi
    $filtered_discs = [];
    foreach($database as $disc) {
        // Pusho il disco nell'array dei dischi filtrati solo se il genere corrisponde
        if($disc['genre'] === $selected_genre) {
            $filtered_discs[] = $disc;
        }
    }

    $json = json_encode($filtered_discs);
}

header('Content-Type: application/json');

echo $json;
?>