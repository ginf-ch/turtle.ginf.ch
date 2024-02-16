<?php
global $rightClickOn;
global $pythonFilename;
?>
<div class="mb-3">
    <button class="how-to-btn button is-primary is-outlined is-small is-fullwidth" data-how-to="new-python-file-how-to">
        <span class="icon">
            <i class="fa-solid fa-angles-down anleitung-btn-icon"></i>
        </span>
        <span class="is-clipped"
              style="text-overflow: ellipsis;"><b>PyCharm Anleitung</b>: Python-Datei erstellen</span>
    </button>

    <article class="is-hidden message is-primary m-2 new-python-file-how-to">
        <div class="message-body">
            <ol class="mt-0">
                <li>Rechtsklick auf den Ordner <code><?php echo $rightClickOn; ?></code>.
                    <?php
                    include("os_right_click.php");
                    ?>
                </li>
                <li><code>New</code> &gt; <code>Python-File</code> auswählen.</li>
                <li>Im Textfeld den neuen Python-Dateinamen <code><?php echo $pythonFilename; ?></code> eingeben und mit
                    <q>Enter</q> bestätigen.
                </li>
            </ol>
        </div>
    </article>
</div>