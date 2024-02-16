<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "06_ringe.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [true, false, [
        "aufgaben" => [true, false, [
            "01_dreieck.py" => [".py", false],
            "02_rechteck.py" => [".py", false],
            "03_stern.py" => [".py", false],
            "04_rhombus.py" => [".py", false],
            "05_zufallsquadrat.py" => [".py", false],
            "06_ringe.py" => [".py", true]
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
                    das <b>vier farbige Ringe</b> aus der folgenden Skizze zeichnet:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 256px;">
                        <img src="https://turtle.ginf.ch/uebungen/04/07_skizze.png" alt="Vier Ringe">
                    </figure>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        Der <b>Radius</b> muss zwischen <b>50</b> und <b>75</b> liegen.
                    </li>
                    <li>
                        Der Radius wird mit der <b>Funktion</b> <code>randrange</code> aus dem Modul
                        <code>random</code> erzeugt.
                    </li>
                    <li>
                        Die Ringe bestehen aus <b>zwei verschiedenen Farben</b>. Der <b>erste und der dritte Ring</b>
                        sowie der <b>zweite und der vierte Ring</b> haben die gleiche Farbe.
                        <?php
                        include("$uebungenBasePath/hints.php");
                        $text = '
                          <ul class="my-0">
                            <li>
                                <p>
                                    Für Farben ist die <b>englische Bezeichnung</b> zu verwenden.
                                    <a href="https://trinket.io/docs/colors" target="_blank">Hier</a> finden Sie
                                    verschiedene
                                    Farbbezeichnungen.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Mit <code>turtle.circle(10)</code> können Sie einen Kreis mit Radius 10 zeichnen.
                                    Sie können den
                                    Integer auch durch eine Variable ersetzen.
                                </p>
                            </li>
                        </ul>
                        ';
                        echoHints($text);
                        ?>
                    </li>
                    <li>
                        Die beiden Farben werden mit der <b>Funktion</b> <code>choice</code> aus dem Modul
                        <code>random</code> erzeugt (mindestens <b>vier verschiedene Farben</b> verwenden). Mit
                        <code>choice</code> kann man aus einer Liste ein Element
                        zufällig auswählen.<br> Beispiel: <code>farbe = random.choice(["red", "green",
                            "blue"])</code>
                        <?php
                        /** @noinspection PhpIncludeInspection */
                        include("$uebungenBasePath/tastatur_eckige_klammern.php");

                        include("$uebungenBasePath/attention.php");
                        $text = "Beachten Sie die beiden <b>eckigen Klammern</b> <code>[</code> und <code>]</code>
                                <b>innerhalb</b> der runden Klammern <code>(</code> und <code>)</code>. Die <b>runden Klammern</b> gehören zum Funktionsaufruf,
                                die <b>eckigen Klammern</b> definieren in Python eine Liste.";
                        echoAttention($text);
                        ?>
                    </li>
                    <li>Die Variablenname<b>n</b> müssen <b>sinnvoll</b> gewählt sein (Clean Code).</li>
                </ul>
            </li>
            <li>
                <p>
                    Führen Sie das Programm anschliessend <b>mehrmals</b> aus.
                </p>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/pycharm_run_python_file.php");
                ?>
            </li>
        </ol>
    </div>
</div>