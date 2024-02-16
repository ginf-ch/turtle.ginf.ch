<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "02_erfinder.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "03_analyse" => [true, false, [
        "aufgaben" => [true, false, [
            "01_analyse.py" => [".py", false],
            "02_erfinder.py" => [".py", true]
        ]],
        "bsp_1.py" => [".py", false]
    ]]
];
?>

<div class="block">
    <div class="title is-size-6">Beschreibung</div>
    <div class="content">
        <ol>
            <?php
            /** @noinspection PhpIncludeInspection */
            include("$uebungenBasePath/0x_uebung_template.php");
            ?>
            <li>
                <p>
                    Rufen Sie die <b>Python-Dokumentation</b> über den folgenden Link auf: <a
                            href="https://docs.python.org/3/"
                            target="_blank">https://docs.python.org/3/</a>.
                </p>
            </li>
            <li>
                <p>Speichern Sie sich die Website als <b>Lesezeichen</b>.</p>
            </li>
            <li>
                <p>
                    Navigieren Sie zur Dokumentation des <b>Turtle-Moduls</b>. Klicken Sie auf <b>Global Modul Index</b>
                    und dann unter <b>t</b> auf <b>turtle</b>.
                </p>
            </li>
            <li>
                <p>
                    Wer hat die Idee der Turtle-Programmierung erfunden? Schreiben Sie die Lösung als Satz mit der
                    Funktion <code>turtle.write()</code> in das Turtle-Fenster. Verwenden Sie die Python-Datei
                    <code><?php echo $pythonFilename; ?></code> für das Programm.
                </p>
            </li>
        </ol>
    </div>
</div>