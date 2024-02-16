<?php
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
$rightClickOn = "aufgaben";
$pythonFilename = "04_rhombus.py";

$structure = [
    "01_mein_erstes_programm" => [false, false, []],
    "02_turtle-grundlagen" => [false, false, []],
    "04_variablen" => [true, false, [
        "aufgaben" => [true, false, [
            "01_dreieck.py" => [".py", false],
            "02_rechteck.py" => [".py", false],
            "03_stern.py" => [".py", false],
            "04_rhombus.py" => [".py", true]
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
                    das den <b>Code</b> aus dem folgenden Listing mit <b>Variablen</b> ausstattet:
                </p>
                <div class="box my-5">
                    <div class="title is-size-6">Listing</div>
                    <div class="content"><pre><code>import turtle

turtle.fd(100)
turtle.lt(120)
turtle.fd(100)
turtle.lt(60)
turtle.fd(100)
turtle.lt(120)
turtle.fd(100)
turtle.lt(60)
turtle.done()
</code></pre>
                    </div>
                </div>
                <p>
                    Dabei sind folgende <b>Bedingungen</b> einzuhalten:
                </p>
                <ul class="mt-0">
                    <li>
                        Insgesamt gibt es <b>drei Variablen</b>. Die <b>Seitenlänge</b> und die <b>beiden
                            Winkel</b> werden gespeichert.
                    </li>
                    <li>Das Programm muss weiterhin einen <b>Rhombus</b> zeichnen.</li>
                    <li>Die <b>Variablennamen</b> müssen <b>sinnvoll</b> gewählt sein (Clean Code).</li>
                </ul>
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