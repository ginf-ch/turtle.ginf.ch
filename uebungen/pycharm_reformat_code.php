<?php
global $isAnleitungOn;
if ($isAnleitungOn) {
    ?>
    <div class="mb-3">
        <button class="how-to-btn button is-primary is-outlined is-small is-fullwidth"
                data-how-to="reformat-code-how-to">
        <span class="icon">
            <i class="fa-solid fa-angles-down anleitung-btn-icon"></i>
        </span>
            <span class="is-clipped" style="text-overflow: ellipsis;"><b>PyCharm Anleitung</b>: Reformat Code</span>
        </button>

        <article class="is-hidden message is-primary m-2 reformat-code-how-to">
            <div class="message-body">
                <ul class="mt-0" style="list-style: none;">
                    <li>
                        <span class="icon-text">
                            <span class="icon"><i class="fa-brands fa-apple"></i></span>
                            <span><code>Code</code> im oberen Menü auswählen und dann auf <code>Reformat Code</code> klicken.</span>
                        </span>
                    </li>
                    <li>
                        <span class="icon-text">
                            <span class="icon"><i class="fa-brands fa-windows"></i></span>
                            <span><q>Burger-Menü</q> (<span class="icon"><i class="fa-solid fa-bars"></i></span>) auswählen, im oberen Menü auf <code>Code</code> klicken und dann <code>Reformat Code</code> auswählen.</span>
                        </span>
                        <div class="mt-3 has-text-centered">
                            <img src="https://turtle.ginf.ch/images/menu_windows.png" alt="Menu Windows">
                        </div>
                    </li>
                </ul>
            </div>
        </article>
    </div>
    <?php
}
?>