<?php
global $isAnleitungOn;
if ($isAnleitungOn) {
    ?>
    <div class="mb-3">
        <button class="how-to-btn button is-primary is-outlined is-small is-fullwidth"
                data-how-to="new-python-file-how-to">
        <span class="icon">
            <i class="fa-solid fa-angles-down anleitung-btn-icon"></i>
        </span>
            <span class="is-clipped"
                  style="text-overflow: ellipsis;"><b>Browser Anleitung</b>: Bild speichern</span>
        </button>

        <article class="is-hidden message is-primary m-2 new-python-file-how-to">
            <div class="message-body">
                <ul class="mt-0" style="list-style: none;">
                    <li>
                     <span class="icon-text">
                         <span class="icon">
                             <i class="fa-brands fa-safari"></i>
                         </span>
                         <span>Rechtsklick auf das Bild und dann <code>Bild sichern in "Downloads"</code> auswählen.</span>
                     </span>
                    </li>
                    <li>
                     <span class="icon-text">
                         <span class="icon">
                             <i class="fa-brands fa-chrome"></i>
                         </span>
                         <span>Rechtsklick auf das Bild und dann mit <code>Bild speichern unter...</code> den <q>Downloads</q>-Ordner auswählen.</span>
                     </span>
                    </li>
                    <li>
                     <span class="icon-text">
                         <span class="icon">
                             <i class="fa-brands fa-firefox-browser"></i>
                         </span>
                         <span>Rechtsklick auf das Bild und dann mit <code>Grafik speichern unter..</code> den <q>Downloads</q>-Ordner auswählen.</span>
                     </span>
                    </li>
                </ul>
                <?php
                include("os_right_click.php");
                ?>
            </div>
        </article>
    </div>
    <?php
}
?>