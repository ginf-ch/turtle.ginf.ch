<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "04_turtle_star.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [false, false, []],
    "05_schleifen" => [false, false, []],
    "06_rechnen" => [false, false, []],
    "07_benutzereingabe" => [true, false, [
        "aufgaben" => [true, false, [
            "01_stern.py" => [".py", false],
            "02_farbiger_stern.py" => [".py", false],
            "03_bunte_schraube.py" => [".py", false],
            "04_turtle_star.py" => [".py", true]
        ]],
        "farbiges_quadrat.py" => [".py", false],
        "quadrat.py" => [".py", false],
        "zufallsquadrat.py" => [".py", false]
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
                    das den <b>Turtle-Star</b> aus der <a
                            href="https://docs.python.org/3/library/turtle.html#module-turtle">Python-Dokumentation</a>
                    zeichnen kann. Die folgende Skizze zeigt ein Beispiel:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Skizze</div>
                    <figure class="image" style="max-width: 300px;">
                        <img src="https://turtle.ginf.ch/uebungen/07/07_skizze.png" alt="Turtle-Star">
                    </figure>
                    <p class="content">
                        Die Linienfarbe ist rot, die Füllfarbe ist gelb.
                    </p>
                </div>
                <p>
                    Damit eine <b>Fläche gefüllt</b> wird, müssen die Bewegungen zwischen den Funktionsaufrufen <code>t.begin_fill()</code>
                    und <code>t.end_fill()</code> durchgeführt werden. Sie können folgenden Code als Basis verwenden:
                </p>
                <div class="box mb-5">
                    <div class="title is-size-6">Listing</div>
                    <div class="content"><pre>
import turtle as t

a = 200
t.ht()
t.fillcolor("green")
t.pencolor("yellow")
t.begin_fill()
for _ in range(36):
    t.fd(a)
    t.lt(170)
t.end_fill()
t.done()
</pre>
                    </div>
                </div>
                <p>
                    Erweitern Sie den Code, sodass folgende Bedingungen eingehalten werden:
                </p>
                <ul class="mt-0">
                    <li>
                        <p class="my-0 mb-1">
                            Die <b>Streckenlänge</b> ist ein <b>Float</b> und muss durch den <b>Benutzer</b>
                            gewählt werden.
                        </p>
                        <ul class="mt-0">
                            <li>Fenstertitel: <code>Turtle-Star 1</code></li>
                            <li>Fensterinhalt: <code>Bitte Seitenlänge eingeben:</code></li>
                        </ul>
                    </li>
                    <li>
                        <p class="my-0 mb-1">
                            Die <b>Linienfarbe</b> ist ein <b>String</b> und muss durch den <b>Benutzer</b>
                            gewählt werden.
                        </p>
                        <ul class="mt-0">
                            <li>Fenstertitel: <code>Turtle-Star 2</code></li>
                            <li>Fensterinhalt: <code>Bitte Linienfarbe eingeben:</code></li>
                        </ul>
                    </li>
                    <li>
                        <p class="my-0 mb-1">
                            Die <b>Füllfarbe</b> ist ein <b>String</b> und muss durch den <b>Benutzer</b>
                            gewählt werden.
                        </p>
                        <ul class="mt-0">
                            <li>Fenstertitel: <code>Turtle-Star 3</code></li>
                            <li>Fensterinhalt: <code>Bitte Füllfarbe eingeben:</code></li>
                        </ul>
                    </li>
                    <li>
                        <p class="my-0 mb-1">
                            Die <b>Zeichengeschwindigkeit</b> ist ein <b>Integer</b> und muss durch den <b>Benutzer</b>
                            gewählt werden.
                        </p>
                        <ul class="mt-0">
                            <li>Fenstertitel: <code>Turtle-Star 4</code></li>
                            <li>Fensterinhalt: <code>Bitte die Zeichengeschwindigkeit eingeben:</code></li>
                        </ul>
                    </li>
                    <li>
                        Für die Zeichengeschwindigkeit soll der Standardwert 5 im Fenster angezeigt werden. Der Benutzer
                        soll minimal 0 und maximal 10 eingeben können. Schauen Sie in der Dokumentation nach (<a
                                href="https://docs.python.org/3/library/turtle.html">Turtle-Modul der
                            Python-Dokumentation</a>), wie Sie das bei <code>numinput</code> festlegen können.
                    </li>
                </ul>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/pycharm_reformat_code.php");
                ?>
            </li>
            <li>
                <p>
                    Führen Sie das Programm anschliessend aus. Wählen Sie eine <b>passende Benutzereingabe</b>.
                </p>
                <?php
                /** @noinspection PhpIncludeInspection */
                include("$uebungenBasePath/pycharm_run_python_file.php");
                ?>
            </li>
        </ol>
    </div>
</div>