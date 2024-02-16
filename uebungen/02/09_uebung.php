<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "07_maze.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [true, false, [
        "aufgaben" => [true, false, [
            "01_rechteck.py" => [".py", false],
            "02_pyramide.py" => [".py", false],
            "03_hi.py" => [".py", false],
            "04_dreieck.py" => [".py", false],
            "05_rhombus.py" => [".py", false],
            "06_stern.py" => [".py", false],
            "07_maze.py" => [".py", true]
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
                <p class="mb-2">
                    Erstellen Sie in der Python-Datei <code><?php echo $pythonFilename; ?></code> ein Python-Programm,
                    welches mit der <b>Turtle</b>, den Weg durch das <b>Labyrinth</b> zeichnet. Gehen Sie wie folgt vor:
                </p>
                <ol class="is-lower-roman mt-0">
                    <li class="mb-1">
                        <p>
                            <b>Speichern</b> Sie das <a href="#bild">Bild des Labyrinths</a> auf Ihrem Computer.
                        </p>
                        <div id="bild" class="box my-5">
                            <div class="title is-size-6">Bild</div>
                            <figure class="image is-256x256">
                                <img src="https://turtle.ginf.ch/uebungen/02/maze.png" alt="Labyrinth">
                            </figure>
                            <p class="content">
                                Der Eingang ist oben, der Ausgang ist unten.
                            </p>
                        </div>
                        <?php
                        /** @noinspection PhpIncludeInspection */
                        include("$uebungenBasePath/browser_save_image.php");
                        ?>
                    </li>
                    <li class="mb-1">
                        <p>
                            <b>Kopieren</b> Sie das Bild in PyCharm in den Ordner
                            <code><?php echo $rightClickOn; ?></code>.
                        </p>
                        <?php
                        /** @noinspection PhpIncludeInspection */
                        $fileName = "maze.png";
                        $destDirName = "aufgaben";
                        include("$uebungenBasePath/os_copy_paste.php");
                        $fileName = $pythonFilename;
                        ?>
                    </li>
                    <li class="mb-1">
                        <p>
                            <b>Kopieren</b> Sie den Code aus dem <a href="#listing">Listing</a> in die
                            Python-Datei
                            <code><?php echo $pythonFilename; ?></code>. Lesen Sie den Code und führen Sie das Programm
                            aus. Das Labyrinth sollte angezeigt werden.
                        </p>
                        <div id="listing" class="box mb-5">
                            <div class="title is-size-6">Listing</div>
                            <div class="content"><pre>
import turtle

# Verwendet das Bild, welches in maze.png gespeichert ist, als Hintergrund.
turtle.bgpic("maze.png")
# Die folgenden Zeilen bringen die Turtle zum Eingang des Labyrinth (Maze).
turtle.penup()
turtle.left(90)
turtle.forward(150)
turtle.right(180)
turtle.pendown()
# Benutze einen roten Stift.
turtle.pencolor("red")
# Benutze die Stiftbreite 2.
turtle.pensize(2)

# TODO: Weg durch das Maze programmieren.
#  Verwenden Sie nur 50 und 100 als Schrittgrösse
#  Code direkt nach diesem Kommentar einfügen!

turtle.done()
</pre>
                            </div>
                        </div>
                    </li>
                    <li class="mb-1">
                        <p>
                        Fügen Sie vor <code>turtle.done()</code> den <b>entsprechenden Python-Code</b>
                        hinzu, damit <b>die Turtle den Ausgang des Labyrinths</b> erreicht.
                        </p>
                        <div id="bild" class="box my-5">
                            <div class="title is-size-6">Gewünschtes Ergebnis</div>
                            <figure class="image is-256x256">
                                <img src="https://turtle.ginf.ch/uebungen/02/maze_solution.png" alt="Weg durch das Labyrinth">
                            </figure>
                            <p class="content">
                                Die rote Linie zeigt den Weg durch das Labyrinth. Die Turtle soll ihn zeichnen.
                            </p>
                        </div>
                    </li>
                </ol>
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