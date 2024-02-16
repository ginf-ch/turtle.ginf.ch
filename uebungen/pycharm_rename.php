<div class="mb-3">
    <button class="how-to-btn button is-primary is-outlined is-small is-fullwidth"
            data-how-to="rename-how-to">
        <span class="icon">
            <i class="fa-solid fa-angles-down anleitung-btn-icon"></i>
        </span>
        <span class="is-clipped" style="text-overflow: ellipsis;"><b>PyCharm Anleitung</b>: Ordner oder Datei umbenennen</span>
    </button>

    <article class="is-hidden message is-primary m-2 rename-how-to">
        <div class="message-body">
            <ol class="mt-0">
                <li>Rechtsklick auf die Datei oder den Ordner.
                    <?php
                    include("os_right_click.php");
                    ?>
                </li>
                <li><code>Refactor</code> &gt; <code>Rename</code> auswählen.</li>
                <li>Name anpassen und mit einem Klick auf <code>Refactor</code> umbenennen.</li>
            </ol>
        </div>
    </article>
</div>