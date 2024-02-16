<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "06_zehn_quadrate.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [true, false, [
        "aufgaben" => [true, false, [
            "01_dreieck.py" => [".py", false],
            "02_sechseck.py" => [".py", false],
            "03_stacheliges_quadrat.py" => [".py", false],
            "04_stern.py" => [".py", false],
            "05_zackiger_stern.py" => [".py", false],
            "06_zehn_quadrate.py" => [".py", true]
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
                    das die <b>zehn Quadrate</b> aus der folgenden Skizze zeichnet:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 512px;">
                        <img src="https://turtle.ginf.ch/uebungen/05/07_skizze.png" alt="Zehn Quadrate">
                    </figure>
                    <p class="content">
                        Die Figur hat 10 gleich grosse Quadrate.
                    </p>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        Der <b>Schleifenkopf</b> benutzt die <b><code>range</code>-Funktion</b>.
                    </li>
                    <li>
                        Alle Quadrate sind gleich gross.
                    </li>
                    <li>
                        Die <b>Seitenlänge</b> ist <b>25</b> und wird in einer Variablen gespeichert.
                    </li>
                    <li>Der Variablenname muss <b>sinnvoll</b> gewählt sein (Clean Code).</li>
                    <li>
                        Alle Befehle <b>zum Zeichnen</b> müssen im <b>Schleifenkörper</b> notiert werden.
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
            <li>
                <p>
                    Eine weitere Herausforderung (optional):
                </p>
                <article class="message my-5">
                    <div class="message-header">
                        <span class="icon-text">
                        <span class="icon">
                            <i class="fa-solid fa-medal"></i>
                        </span>
                        <span>Challenge</span>
                    </div>
                    <div class="message-body">
                        Schaffen Sie das Programm noch kompakter zu gestalten? Verwenden Sie dafür im Schleifenkörper
                        eine weitere Schleife!
                    </div>
                </article>
            </li>
        </ol>
    </div>
</div>