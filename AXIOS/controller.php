<?php
// RECUPERO L'ARRAY
include __DIR__ . '/../db.php';

// INDICO AL CHIAMANTE DI CONTROLL.PHP CHE CIO' CHE ARRIVERA' E' UN JSON
header('content-type: application/json');

// TRASFORMO L'ARRAY PASSATO IN UN JSON
echo json_encode($music);
