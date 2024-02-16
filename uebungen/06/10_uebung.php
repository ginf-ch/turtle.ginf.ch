<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = " 08_quadrate.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [false, false, []],
    "06_rechnen" => [true, false, [
        "aufgaben" => [false, false, [
            "01_dreiecke.py" => [".py", false],
            "02_verschachtelte_quadrate.py" => [".py", false],
            "03_drei_quadrate.py" => [".py", false],
            "04_farbiger_stern.py" => [".py", false],
            "05_zackige_sterne.py" => [".py", false],
            "06_schraube.py" => [".py", false],
            "07_wirbel.py" => [".py", false],
            "08_quadrate.py" => [".py", true]
        ]],
        "kreise.py" => [".py", false],
        "linien.py" => [".py", false],
        "rechteck.py" => [".py", false],
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
                    das die <b>Quadrate</b> aus der folgenden Skizze zeichnet:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 256px;">
                        <img src="https://turtle.ginf.ch/uebungen/06/10_skizze.png" alt="Quadrate">
                    </figure>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        Das Icon der Turtle ist nicht sichtbar.
                    </li>
                    <li>
                        Stellen Sie die Turtle auf die <b>maximale Zeichengeschwindigkeit</b>. Verwenden Sie den
                        passenden <b>String</b>!
                    </li>
                    <li>
                        Die Variable <code>a</code> speichert zu Beginn einen <b>zufälligen</b> Integer aus dem Bereich
                        300 bis 350.
                    </li>
                    <li>
                        Die Variable <code>faktor</code> speichert einen der drei folgenden <b>Floats</b>: 0.95, 0.9
                        oder 0.85.
                        Die Auswahl erfolgt <b>zufällig</b>.
                    </li>
                    <li>
                        Es sollen nun <b>50</b> Quadrate gezeichnet werden. Das erste Quadrat besitzt die Seitenlänge
                        <code>a</code>. Anschliessend wird die Seitenlänge <b>verkleinert</b>. Die neue Seitenlänge ist
                        <code>faktor</code> mal kleiner als die alte Seitenlänge.
                    </li>
                    <li>
                        Sie müssen eine passende <b>arithmetische Operation</b> im Schleifenkörper verwenden.
                    </li>
                </ul>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/pycharm_reformat_code.php");
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