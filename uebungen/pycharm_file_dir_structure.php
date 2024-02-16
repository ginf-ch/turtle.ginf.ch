<?php

function echoFolder($folderName, $isNew, $isOpen): void
{
    echo '<span class="icon-text">';
    echo '<span class="icon">';
    if ($isOpen) {
        echo '<i class="fa fa-folder-open"></i>';
    } else {
        echo '<i class="fa fa-folder"></i>';
    }
    echo '</span>';
    echo "<span>$folderName</span>";
    if ($isNew) {
        echo '<span class="tag ml-2 is-primary is-light is-rounded">Neu</span>';
    }
    echo "</span>";
}

function echoFolderOpen($folderOpenName, $isNew = false): void
{
    echoFolder($folderOpenName, $isNew, true);
}

function echoFolderClose($folderOpenName, $isNew = false): void
{
    echoFolder($folderOpenName, $isNew, false);
}

function echoPythonFile($pythonFilename, $isNew = false): void
{
    echo '<span class="icon-text">';
    echo '<span class="icon">';
    echo '<i class="fa-brands fa-python"></i>';
    echo '</span>';
    echo "<span>$pythonFilename</span>";
    if ($isNew) {
        echo '<span class="tag ml-2 is-primary is-light is-rounded">Neu</span>';
    }
    echo "</span>";
}

function echoFileDirStructure($structure): void
{
    echo '<div class="box my-5">';
    echo '<div class="title is-size-6">Datei- und Ordnerstruktur</div>';
    echo '<div class="tree is-family-monospace ml-5">';
    echo "<ul>";
    echo "<li>";
    echoFolderOpen("ginf");
    echo "<ul>";
    foreach ($structure as $key => $value) {
        echo "<li>";
        $isOpen = $value[0];
        $isNew = $value[1];
        if ($isOpen) {
            echoFolderOpen($key, $isNew);
        } else {
            echoFolderClose($key, $isNew);
        }
        $subdirs = $value[2];
        if (count($subdirs) != 0) {
            echo "<ul>";
            foreach ($subdirs as $key2 => $value2) {
                echo "<li>";
                if (count($value2) == 3) {
                    $isOpen = $value2[0];
                    $isNew = $value2[1];
                    if ($isOpen) {
                        echoFolderOpen($key2, $isNew);
                    } else {
                        echoFolderClose($key2, $isNew);
                    }
                    $subsubdirs = $value2[2];
                    echo "<ul>";
                    foreach ($subsubdirs as $key3 => $value3) {
                        if (count($value3) == 2) {
                            $fileExtension = $value3[0];
                            $isNew = $value3[1];
                            if ($fileExtension == ".py") {
                                echo "<li>";
                                echoPythonFile($key3, $isNew);
                                echo "</li>";
                            }
                        }
                    }
                    echo "</ul>";
                } else if (count($value2) == 2) {
                    $fileExtension = $value2[0];
                    $isNew = $value2[1];
                    if ($fileExtension == ".py") {
                        echoPythonFile($key2, $isNew);
                    }
                }
                echo "</li>";
            }
            echo "</ul>";
        }
        echo "</li>";
    }
    echo "</ul>";
    echo "</li>";
    echo "</ul>";
    echo "</div>";
    echo "</div>";
}