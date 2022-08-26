<?php
// RECUPERO L'ARRAY
include __DIR__ . '/../db.php';



// CONTROLLO SE NELLA CHIAMATA AXIOS ESISTE IL PARAMETRO 'GENRE'
if (isset($_GET['genre']) && $_GET['genre'] != '') {
    //    CREO LA VAR $filteredAlbums PER INDICARE IL NUOVO ARRAY DELLA CHIAMATA
    $filteredAlbums = [];
    // FACCIO UN CICLO FOREACH PER RECUPERARE TUTTI GLI ALBUM PRESENTI NELL'ARRAY
    foreach ($music as $album) {
        // POI FACCIO UN IF PER VEDERE SE IL GENERE DALL'ARRAY è PRESENTE NELLA RICHIESTA
        if ($album['genre'] == $_GET['genre']) {
            // SE E PRESENTE ASSOCCIO IL $filteredAlbums A L'ALBUM AVENTI IL GENRE = ALLA RICHIESTA
            array_push($filteredAlbums, $album);
        }
    }
} else {
    // SE NON E' VERIFICATA ASSOCIO IL $filteredAlbums DIRETTAMENTE ALL'ARRAY
    $filteredAlbums = $music;
}
// INDICO AL CHIAMANTE DI CONTROLL.PHP CHE CIO' CHE ARRIVERA' E' UN JSON
header('content-type: application/json');

echo json_encode($filteredAlbums);
