<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "01_mein_erstes_programm";
$pythonFilename = "quadrat.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, [
        "quadrat.py" => [".py", true]
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
                    Erstellen Sie in der Python-Datei <code><?php echo $pythonFilename; ?></code> ein Python-Programm,
                    welches das <b>Quadrat</b> aus der folgenden Skizze zeichnet. Sie finden den Code dafür im Skript.
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image is-256x256">
                        <img src="https://turtle.ginf.ch/uebungen/01/01_skizze.png" alt="Quadrat mit Seitenlänge 100">
                    </figure>
                </div>
            </li>
            <li>
                <p>
                    Führen Sie das Programm anschliessend aus.
                </p>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/pycharm_run_python_file.php");
                ?>
            </li>
        </ol>
    </div>
</div>