<?php

function echoTags($href, $tagTitle, $tagIcon): void
{
    echo <<<EOL
    <div class="tags has-addons">
        <a href="$href" class="tag is-primary">$tagTitle</a>
        <span class="tag has-addons is-primary is-light">
            <i class="fas fa-lg $tagIcon" aria-hidden="true"></i>
        </span>
    </div>
    EOL;
}

function echoKontaktTags(): void
{
    echoTags("https://kontakt.ginf.ch", "Kontakt", "fa-at");
}

function echoImpressumTags(): void
{
    echoTags("https://impressum.ginf.ch", "Impressum", "fa-balance-scale");
}

function echoDatenschutzTags(): void
{
    echoTags("https://datenschutz.ginf.ch", "Datenschutz", "fa-user-shield");
}

?>

<div class="content has-text-centered">
    <p>
        <strong>turtle.ginf.ch</strong> <br> ist ein Teil von <a href="https://ginf.ch">ginf.ch</a>.
        <br>
        Der Inhalt der Website ist lizenziert <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA
            4.0</a>.
        <br>
        Letzte Aktualisierung: 2023-11-30
    </p>
</div>
<div class="columns is-centered is-hidden-mobile">
    <div class="field is-grouped is-grouped-multiline">
        <div class="control">
            <?php
            echoKontaktTags();
            ?>
        </div>
        <div class="control">
            <?php
            echoImpressumTags();
            ?>
        </div>
        <div class="control">
            <?php
            echoDatenschutzTags();
            ?>
        </div>
    </div>
</div>
<div class="columns is-mobile is-centered is-hidden-tablet m-2">
    <?php
    echoKontaktTags();
    ?>
</div>
<div class="columns is-mobile is-centered is-hidden-tablet m-2">
    <?php
    echoImpressumTags();
    ?>
</div>
<div class="columns is-mobile is-centered is-hidden-tablet m-2">
    <?php
    echoDatenschutzTags();
    ?>
</div>