<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "ginf";
$directoryName = "03_analyse";
$withAufgabenDirectory = true;

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "03_analyse" => [true, true, [
        "aufgaben" => [false, true, []]
    ]]
];

/** @noinspection PhpIncludeInspection */
include("$uebungenBasePath/00_uebung_template.php");