<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "03_hi.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [true, false, [
        "aufgaben" => [true, false, [
            "01_rechteck.py" => [".py", false],
            "02_pyramide.py" => [".py", false],
            "03_hi.py" => [".py", true]
        ]],
        "bsp_1.py" => [".py", false],
        "bsp_2.py" => [".py", false]
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
                    welches die <b>beiden Buchstaben</b> aus der folgenden Skizze zeichnet.
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image is-256x256">
                        <img src="https://turtle.ginf.ch/uebungen/02/05_skizze.png" alt="Hi">
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