<?php

include ("mapconn.php");
try {
    $query = "SELECT * FROM markers";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $filename = "point.xml";
    if (file_exists($filename)) {
        unlink($filename);
    } else {
        echo "fichier xml existe pas";
    }
    $xml = '<?xml version="1.0" encoding="utf8" ?>';
    $xml.= '<markers>';
    while ($point = $stmt->fetch(PDO::FETCH_OBJ)) {
        var_dump($point);
        $xml.= "<marker id='" . $point->id . "' name='" . $point->name . "' lat='" . $point->lat . "' lng='" . $point->lng . "' address='" . $point->address . "' scene='" . $point->scene . "'/>";
    }
    $xml.= '</markers>';
    file_put_contents("$filename", $xml);
} catch (PDOException $e) {
    echo "extraction KO: " . $e->getMessage();
}
$conn = null;
