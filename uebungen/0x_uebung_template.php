<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

global $rightClickOn;
global $pythonFilename;
global $isAnleitungOn;
global $structure;

$uebungenBasePath = $_SERVER["DOCUMENT_ROOT"] . "/ginf/turtle/uebungen";
?>
<li>
    <p>
        Erstellen Sie im Ordner <code><?php echo $rightClickOn; ?></code> eine neue Python-Datei mit dem
        Namen <code><?php echo $pythonFilename; ?></code>.
    </p>
    <?php
    if ($isAnleitungOn) {
        /** @noinspection PhpIncludeInspection */
        include("$uebungenBasePath/pycharm_new_python_file.php");
    }
    ?>
</li>
<li>
    <p>
        Überprüfen Sie, ob die Datei- und Ordnerstruktur mit der folgenden Abbildung übereinstimmt. Korrigieren Sie
        ggf. Abweichungen.
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