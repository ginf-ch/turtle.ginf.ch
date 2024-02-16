<?php
$cssBasePath = "https://" . $_SERVER['SERVER_NAME'] . "/css/";
$faviconsBasePath = "https://" . $_SERVER['SERVER_NAME'] . "/favicons/";
?>
<link rel="stylesheet" href="<?php echo $cssBasePath . 'turtle_bulma_styles.css'; ?>">
<link rel="stylesheet" href="<?php echo $cssBasePath . 'custom_styles.css'; ?>">
<link href="https://fonts.googleapis.com/css2?family=Leckerli+One&amp;display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/e2766d4f6f.js" crossorigin="anonymous"></script>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $faviconsBasePath . 'apple-touch-icon.png'; ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $faviconsBasePath . 'apple-touch-icon.png'; ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $faviconsBasePath . 'apple-touch-icon.png'; ?>">
<link rel="manifest" href="<?php echo $faviconsBasePath . 'site.webmanifest'; ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
        integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {

        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Add a click event on each of them
        $navbarBurgers.forEach(el => {
            el.addEventListener('click', () => {

                // Get the target from the "data-target" attribute
                const target = el.dataset.target;
                const $target = document.getElementById(target);

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');
            });
        });

    });
</script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>