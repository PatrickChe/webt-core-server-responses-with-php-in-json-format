<?php
include 'OST.php';
include 'Song.php';
include 'Seeder.php';

// Überprüfen, ob OST-ID in der Anfrage vorhanden ist
if (isset($_GET['ost_id'])) {
    // OST-Informationen abrufen
    $ostId = $_GET['ost_id'];
    $ost= $ostId;

    // Überprüfen, ob OST gefunden wurde
    if ($ost) {
        // OST-Daten in JSON umwandeln und ausgeben
        header('Content-Type: application/json');
        echo json_encode($ost, JSON_PRETTY_PRINT);
        exit;
    } else {
        // OST nicht gefunden
        header('HTTP/1.0 404 Not Found');
        echo json_encode(['error' => 'OST not found']);
        exit;
    }
} else {
    // OST-ID nicht in der Anfrage vorhanden
    header('HTTP/1.0 400 Bad Request');
    echo json_encode(['error' => 'OST ID not provided']);
    exit;
}
?>