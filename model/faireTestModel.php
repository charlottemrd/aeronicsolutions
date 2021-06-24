<?php

global $db;

$q = $db->prepare("INSERT INTO test(date,icode,frequency,temperature,tone,reflex) VALUES (:date,:icode,:frequency,:temperature,:tone,:reflex)");

$q->execute([
    'date' => $date,
    'icode' => $user['icode'],
    'frequency' => $captorValues[1],
    'temperature' => $captorValues[0],
    'tone' => 0,
    'reflex' => 0,
]); 
?>