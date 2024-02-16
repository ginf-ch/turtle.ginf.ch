<?php

function echoCleanCode($msg): void
{
    echo <<<EOL
    <article class="message is-info my-5">
        <div class="message-header">
            <span class="icon-text">
            <span class="icon">
                <i class="fa-solid fa-broom"></i>
            </span>
            <span>Clean Code!</span>
        </div>
        <div class="message-body">
            $msg
        </div>
    </article>
    EOL;
}