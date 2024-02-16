<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "05_quadrat.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "03_analyse" => [true, false, [
        "aufgaben" => [true, false, [
            "01_analyse.py" => [".py", false],
            "02_erfinder.py" => [".py", false],
            "03_shortcuts.py" => [".py", false],
            "04_hidden_icon.py" => [".py", false],
            "05_quadrat.py" => [".py", true]
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
                    Informieren Sie sich in der <b>Dokumentation des Turtle-Moduls</b> über die <b>Zeichengeschwindigkeit</b>
                    der
                    Turtle. Beantworten Sie die folgenden Fragen als Kommentar in der Python-Datei
                    <code><?php echo $pythonFilename; ?></code>:
                </p>
                <ul>
                    <li>
                        Mit welchem <b>Funktionsaufruf</b> können Sie die <b>Zeichengeschwindigkeit</b> der Turtle
                        beeinflussen?
                    </li>
                    <li>Welche <b>Stufen</b> gibt es? Listen Sie alle auf!</li>
                    <li>Müssen die <b>Argumente</b> des Funktionsaufrufs <b>Integers</b> oder <b>Strings</b> sein?</li>
                </ul>
            </li>
            <li>
                <p>
                    Erstellen Sie in der Python-Datei <code><?php echo $pythonFilename; ?></code> ein Python-Programm,
                    welches zwei <b>Quadrate</b> zeichnet.
                </p>
                <ul>
                    <li>Das <b>erste Quadrat</b> besitzt die <b>Seitenlänge 200</b>. Die Turtle benutzt dabei die
                        <b>kleinste Zeichengeschwindigkeit</b>. Verwenden Sie als Argument den passenden <b>Integer</b>.
                    </li>
                    <li>Das <b>zweite Quadrat</b> besitzt die <b>Seitenlänge 75</b>. Die Turtle benutzt dabei die
                        <b>grösste Zeichengeschwindigkeit</b>. Verwenden Sie als Argument den passenden <b>String</b>.
                    </li>
                </ul>
                <?php
                include("$uebungenBasePath/hints.php");
                $text = 'Sie müssen das <code>turtle</code>-Modul nur einmal importieren und können die beiden Quadrate nacheinander programmieren.';
                echoHints($text);
                ?>
            </li>
        </ol>
    </div>
</div>