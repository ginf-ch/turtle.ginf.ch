<?php

function echoAttention($msg): void
{
    echo <<<EOL
    <article class="message is-danger my-5">
        <div class="message-header">
            <span class="icon-text">
            <span class="icon">
                <i class="fa-solid fa-triangle-exclamation"></i>
            </span>
            <span>Achtung!</span>
        </div>
        <div class="message-body">
            $msg
        </div>
    </article>
    EOL;
}