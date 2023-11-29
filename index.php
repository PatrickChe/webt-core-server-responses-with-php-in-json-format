<?php
include 'src/OST.php';
include 'src/Song.php';
include 'src/Seeder.php';

// Überprüfen, ob OST-ID in der Anfrage vorhanden ist
if (isset($_GET['ID'])) {
    // OST-Informationen abrufen
    $ostId = $_GET['ID'];
    $seeder = new Seeder();
    $allOSTs = $seeder->getTracks();

    function retrieveOSTById($ostId, $allOSTs) {
        foreach ($allOSTs as $ost) {
            if ($ost->ID == $ostId) {
                return $ost;
            }
        }
    }

    function retrieveAllOSTs($allOSTs) {
        return $allOSTs;
    }

    $ost = retrieveOSTById($ostId, $allOSTs);

    // Überprüfen, ob OST gefunden wurde
    if ($ost) {
        // OST-Daten in JSON umwandeln und ausgeben
        header('Content-Type: application/json');
        echo json_encode($ost, JSON_PRETTY_PRINT);
        exit;
    } else {
        // OST nicht gefunden
        header('HTTP/1.0 404 Not Found');
        echo json_encode(['error' => 'OST nicht gefunden']);
        exit;
    }
} else {
    // Überprüfen, ob die Anfrage alle OSTs betrifft
    if (isset($_GET['all_osts'])) {
        $seeder1 = new Seeder();
        // Initialisiere $allOSTs, bevor die Funktion aufgerufen wird
        $allOSTs = $seeder1->getTracks();

        // Überprüfen, ob OSTs gefunden wurden
        if ($allOSTs) {
            // Das OST-Array in JSON umwandeln und ausgeben
            header('Content-Type: application/json');
            echo json_encode($allOSTs, JSON_PRETTY_PRINT);
            exit;
        } else {
            // Keine OSTs gefunden
            header('HTTP/1.0 404 Not Found');
            echo json_encode(['error' => 'Keine OSTs gefunden']);
            exit;
        }
    }
}
?>

