<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "03_stern.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [true, false, [
        "aufgaben" => [true, false, [
            "01_dreieck.py" => [".py", false],
            "02_rechteck.py" => [".py", false],
            "03_stern.py" => [".py", true]
        ]],
        "quadrat_var.py" => [".py", false]
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
                    das den <b>farbigen Stern</b> aus der folgenden Skizze zeichnet:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 256px;">
                        <img src="https://turtle.ginf.ch/uebungen/04/04_skizze.png" alt="Zweifarbiger Stern">
                    </figure>
                    <p class="content">
                        Farbiger Stern mit &alpha;&nbsp;=&nbsp;120&#176; und &beta;&nbsp;=&nbsp;48&#176;.
                        Als <b>Startpunkt</b> eignet sich der linke Randpunkt der waagerechten Linie.
                    </p>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>Insgesamt gibt es <b>drei Variablen</b>. Folgendes wird gespeichert:
                        <ol class="is-lower-roman mt-0">
                            <li>Seitenlänge in <code>seitenlaenge</code></li>
                            <li>Erste Farbe in <code>farbe_1</code></li>
                            <li>Zweite Farbe in <code>farbe_2</code></li>
                        </ol>
                    </li>
                    <li>Alle Seiten sind <b>gleich</b> lang.</li>
                    <li>Die <b>gespeicherten Werte</b> müssen Sie selbst wählen.</li>
                </ul>
                <?php
                include("$uebungenBasePath/hints.php");
                $text = '
                 <ul class="my-0">
                    <li>
                        <p>
                            Für Farben ist die <b>englische Bezeichnung</b> zu verwenden.
                            <a href="https://trinket.io/docs/colors" target="_blank">Hier</a> finden Sie
                            verschiedene Farbbezeichnungen.
                        </p>
                    </li>
                    <li>
                        <p>
                            Sie können auch einen <b>String</b> in einer Variablen speichern: <code>farbe =
                                "red"</code>.
                        </p>
                    </li>
                    <li>
                        <p>
                            Mit <code>turtle.pencolor(farbe)</code> können Sie die <b>Stiftfarbe</b> ändern.
                            Die Turtle wird dann <b>automatisch diese Farbe zum Zeichnen</b> verwenden, bis Sie
                            die Stiftfarbe wieder ändern.
                        </p>
                    </li>
                 </ul>
                ';
                echoHints($text);
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