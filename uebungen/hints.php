<?php

function echoHints($msg): void
{
    echo <<<EOL
    <article class="message is-success my-5">
        <div class="message-header">
            <span class="icon-text">
            <span class="icon">
                <i class="fa-solid fa-lightbulb"></i>
            </span>
            <span>Tipps</span>
        </div>
        <div class="message-body">
            $msg
        </div>
    </article>
    EOL;
}