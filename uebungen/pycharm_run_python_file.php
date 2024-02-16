<?php
global $pythonFilename;
global $isAnleitungOn;
if ($isAnleitungOn) {
    ?>
    <div class="mb-3">
        <button class="how-to-btn button is-primary is-outlined is-small is-fullwidth"
                data-how-to="run-python-file-how-to">
        <span class="icon">
            <i class="fa-solid fa-angles-down anleitung-btn-icon"></i>
        </span>
            <span class="is-clipped" style="text-overflow: ellipsis;"><b>PyCharm Anleitung</b>: Python-Datei/Python-Programm ausführen</span>
        </button>

        <article class="is-hidden message is-primary m-2 run-python-file-how-to">
            <div class="message-body">
                <ol class="mt-0">
                    <li>Im Editor (= geöffnete Python-Datei mit dem Python-Programm) irgendwo einen Rechtsklick machen.
                        <?php
                        include("os_right_click.php");
                        ?>
                    </li>
                    <li><code>Run '<?php echo $pythonFilename; ?>'</code> auswählen.</li>
                </ol>
            </div>
        </article>
    </div>
    <?php
}
?>