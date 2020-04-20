<?php
require_once '../classes/dbconnect.class.php';
require_once '../classes/client.class.php';

$client = new client();
// $_REQUEST['mode'] = 'loadOne';
// $_REQUEST['id'] = 1;

if ($_REQUEST['mode'] == 'load') {
    $ListClt = $client->readAllsevice();
    $row = $ListClt->fetchAll();
    echo json_encode($row);
} else if ($_REQUEST['mode'] == 'loadOne') {
    $client = $client->readSpecificclient($_REQUEST['num']);
    $row = $client->fetch();
    echo json_encode($row);
} else if ($_REQUEST['mode'] == 'insert') {
    $client->createclient($_REQUEST['nom_prenom'], $_REQUEST['prenom'], $_REQUEST['dataN'], $_REQUEST['adresse'], $_REQUEST['tel']);
} else if ($_REQUEST['mode'] == 'update') {
    $client->createclient($_REQUEST['num'], $_REQUEST['nom_prenom'], $_REQUEST['prenom'], $_REQUEST['dataN'], $_REQUEST['adresse'], $_REQUEST['tel']);
} else if ($_REQUEST['mode'] == 'delete') {
    $client->createclient($_REQUEST['num']);
}