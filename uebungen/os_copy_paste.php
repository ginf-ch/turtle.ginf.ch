<?php
global $fileName;
global $destDirName;
global $isAnleitungOn;

if ($isAnleitungOn) {
    ?>
    <div class="mb-3">
        <button class="how-to-btn button is-primary is-outlined is-small is-fullwidth"
                data-how-to="new-directory-how-to">
        <span class="icon">
            <i class="fa-solid fa-angles-down anleitung-btn-icon"></i>
        </span>
            <span class="is-clipped" style="text-overflow: ellipsis;"><b>macOS/Windows Anleitung</b>: Datei kopieren und einfügen</span>
        </button>

        <article class="is-hidden message is-primary m-2 new-directory-how-to">
            <div class="message-body">
                <p>
                    <span class="icon"><i class="fa-brands fa-apple"></i></span>
                </p>
                <ol class="mt-0">
                    <li>Markieren Sie mit dem Finder im entsprechenden <b>Ordner</b> die Datei
                        <code><?php echo $fileName; ?></code>.
                    </li>
                    <li>Drücken Sie dann <code>cmd + c</code> auf Ihrer Tastatur.</li>
                    <li>Gehen Sie ins PyCharm, markieren Sie den Ordner <code><?php echo $destDirName; ?></code>.
                    </li>
                    <li>Drücken Sie dann <code>cmd + v</code> auf Ihrer Tastatur.</li>
                    <li>Bestätigen Sie den Vorgang mit einem Klick auf den Button <code>OK</code>.</li>
                </ol>
                <p>
                    <span class="icon"><i class="fa-brands fa-windows"></i></span>
                </p>
                <ol class="mt-0">
                    <li>Markieren Sie mit dem Explorer im entsprechenden <b>Ordner</b> die Datei
                        <code><?php echo $fileName; ?></code>.
                    </li>
                    <li>Drücken Sie dann <code>ctrl/strg + c</code> auf Ihrer Tastatur.</li>
                    <li>Gehen Sie ins PyCharm, markieren Sie den Ordner <code><?php echo $destDirName; ?></code>.
                    </li>
                    <li>Drücken Sie dann <code>ctrl/strg + v</code> auf Ihrer Tastatur.</li>
                    <li>Bestätigen Sie den Vorgang mit einem Klick auf den Button <code>OK</code>.</li>
                </ol>
            </div>
        </article>
    </div>
    <?php
}
?>