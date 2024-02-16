<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "ginf";
$directoryName = "01_mein_erstes_programm";
$withAufgabenDirectory = false;

$structure = [
    "01_mein_erstes_programm" => [false, true, []]
];

/** @noinspection PhpIncludeInspection */
include("$uebungenBasePath/00_uebung_template.php");