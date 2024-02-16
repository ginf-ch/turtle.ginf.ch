<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "ginf";
$directoryName = "02_turtle-grundlagen";
$withAufgabenDirectory = true;

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [true, true, [
        "aufgaben" => [false, true, []]
    ]]
];

/** @noinspection PhpIncludeInspection */
include("$uebungenBasePath/00_uebung_template.php");