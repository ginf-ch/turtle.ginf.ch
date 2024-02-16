<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "03_stacheliges_quadrat.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [true, false, [
        "aufgaben" => [true, false, [
            "01_dreieck.py" => [".py", false],
            "02_sechseck.py" => [".py", false],
            "03_stacheliges_quadrat.py" => [".py", true]
        ]],
        "quadrat_loop.py" => [".py", false]
    ]],
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
                <p class="mb-2">
                    Erstellen Sie in der Python-Datei <code><?php echo $pythonFilename; ?></code> ein Python-Programm,
                    das das <b>stachlige Quadrat</b> aus der folgenden Skizze zeichnet:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 256px;">
                        <img src="https://turtle.ginf.ch/uebungen/05/04_skizze.png" alt="Stacheliges Quadrat">
                    </figure>
                    <p class="content">
                        &alpha;&nbsp;=&nbsp;135&#176;
                    </p>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        Alle Seiten sind gleich lang.
                    </li>
                    <li>
                        Die <b>Seitenlänge</b> beträgt <b>100</b>.
                    </li>
                    <li>
                        Alle Befehle <b>zum Zeichnen</b> müssen im <b>Schleifenkörper</b> notiert werden.
                    </li>
                    <li>
                        Der Schleifenkörper muss <b>vier Mal</b> ausgeführt werden.
                    </li>
                </ul>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/tastatur_tabulator.php");
                ?>
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