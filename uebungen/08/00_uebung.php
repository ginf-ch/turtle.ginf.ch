<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "ginf";
$directoryName = "08_funktionen";
$withAufgabenDirectory = true;

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [false, false, []],
    "06_rechnen" => [false, false, []],
    "07_benutzereingabe" => [false, false, []],
    "08_funktionen" => [true, true, [
        "aufgaben" => [false, true, []]
    ]],
];

/** @noinspection PhpIncludeInspection */
include("$uebungenBasePath/00_uebung_template.php");