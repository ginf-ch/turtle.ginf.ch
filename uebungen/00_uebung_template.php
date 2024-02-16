<?php
global $rightClickOn;
global $directoryName;
global $withAufgabenDirectory;
global $isAnleitungOn;
global $structure;

$withAufgabenDirectory = $withAufgabenDirectory ?? true;
$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
?>
<div class="block">
    <div class="title is-size-6">Beschreibung</div>
    <div class="content">
        <ol>
            <li>
                <p>
                    Erstellen Sie, falls noch nicht vorhanden, im Projektordner
                    <code><?php echo $rightClickOn; ?></code>
                    einen neuen Ordner mit dem Namen <code><?php echo $directoryName; ?></code>.
                </p>
                <?php
                /** @noinspection PhpIncludeInspection */
                if ($isAnleitungOn) {
                    /** @noinspection PhpIncludeInspection */
                    include("$uebungenBasePath/pycharm_new_directory.php");
                }
                ?>
            </li>
            <?php
            if ($withAufgabenDirectory) {
                ?>
                <li>
                    <p>
                        Erstellen Sie im Ordner <code><?php echo $directoryName; ?></code> einen neuen Ordner mit dem
                        Namen <code>aufgaben</code>.
                    </p>
                    <?php
                    /** @noinspection PhpIncludeInspection */
                    $tmp1 = $rightClickOn;
                    $tmp2 = $directoryName;
                    $rightClickOn = $directoryName;
                    $directoryName = "aufgaben";
                    if ($isAnleitungOn) {
                        /** @noinspection PhpIncludeInspection */
                        include("$uebungenBasePath/pycharm_new_directory.php");
                    }
                    $rightClickOn = $tmp1;
                    $directoryName = $tmp2;
                    ?>
                </li>
                <?php
            }
            ?>
            <li>
                <p>
                    Überprüfen Sie, ob die Datei- und Ordnerstruktur mit der folgenden Abbildung übereinstimmt.
                    Korrigieren Sie ggf. Abweichungen.
                </p>
                <?php
                if ($isAnleitungOn) {
                    /** @noinspection PhpIncludeInspection */
                    include("$uebungenBasePath/pycharm_rename.php");
                }
                /** @noinspection PhpIncludeInspection */
                include($uebungenBasePath . "/pycharm_file_dir_structure.php");
                echoFileDirStructure($structure);
                ?>
            </li>
        </ol>
    </div>
</div>