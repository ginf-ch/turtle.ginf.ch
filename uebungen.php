<?php
include("uebungen/config.php");
global $kapitel;
$anleitung = $_GET["anleitung"] ?? "on";
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Turtle-Programmierung | turtle.ginf.ch</title>
    <?php
    include("head.php");
    ?>
    <script>
        $(document).ready(
            function () {
                $(".how-to-btn").click(function () {
                    const id = $(this).attr("data-how-to");
                    console.log(id);
                    $(this).siblings("." + id).toggleClass("is-hidden");
                    const icon = $(this).find(".anleitung-btn-icon");
                    if (icon.hasClass("fa-angles-down")) {
                        icon.removeClass("fa-angles-down")
                        icon.addClass("fa-angles-up")
                    } else {
                        icon.addClass("fa-angles-down")
                        icon.removeClass("fa-angles-up")
                    }
                });
            }
        );
    </script>
</head>
<body class="has-navbar-fixed-top">
<header>
    <?php
    include("uebungen/header.php");
    ?>
</header>
<main>
    <section class="section is-small">
        <h1 class="title">Übungen</h1>
        <h1 class="subtitle">Kapitelübersicht</h1>
        <p class="content">
            Damit Sie bequem die Übungen sehen und die
            Programme in der Entwicklungsumgebung erstellen können, empfehlen wir den Bildschirm in zwei <q>Hälften</q>
            aufzuteilen.
        </p>
        <?php
        if ($anleitung == "on") {
            ?>
            <div class="mb-5">
                <button class="how-to-btn button is-primary is-outlined is-small is-fullwidth"
                        data-how-to="rename-how-to">
                <span class="icon">
                    <i class="fa-solid fa-angles-down anleitung-btn-icon"></i>
                </span>
                    <span class="is-clipped" style="text-overflow: ellipsis;"><b>macOS/Windows Anleitung</b>: Fenster nebeinander anordnen</span>
                </button>

                <article class="is-hidden message is-primary m-2 rename-how-to">
                    <div class="message-body content">
                        <ul class="mt-0" style="list-style: none;">
                            <li>
                            <span class="icon-text">
                                <span class="icon"><i class="fa-brands fa-apple"></i></span>
                                <span>Verwenden Sie das grüne Fenster-Icon</span>
                                <span class="icon">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center fa-rotate-90"></i>
                                </span>
                                <span>und klicken Sie auf <code>Fenster auf der rechten Bildschirmseite anordnen</code> bzw. <code>Fenster auf der linken Bildschirmseite anordnen</code>.&nbsp;</span>
                                <span>Siehe auch: <a
                                            href="https://support.apple.com/de-de/HT204948#:~:text=macOS%20Catalina%20oder%20neuer,diese%20Seite%20des%20Bildschirms%20ein.">Mit Split View zwei Mac-Apps nebeneinander anzeigen</a></span>
                            </span>
                            </li>
                            <li>
                            <span class="icon-text">
                                <span class="icon"><i class="fa-brands fa-windows"></i></span>
                                <span>Klicken Sie <b>in</b> das gewünschte Fenster und drücken Sie dann gleichzeitig die <code>Windows-Taste</code> und die <code>Pfeiltaste links</code> bzw. <code>Pfeilstaste rechts</code>.&nbsp;</span>
                                <span>Siehe auch: <a
                                            href="https://de.ccm.net/faq/2237-windows-zwei-fenster-nebeneinander-anzeigen">Windows: Zwei Fenster nebeneinander anzeigen</a></span>
                            </span>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
            <?php
        }

        $i = 0;
        foreach ($kapitel as $key => $value) {
            $titel = $value[0];
            $isLive = $value[1];
            $isTheory = False;
            if ($isLive) {
                $isTheory = $value[2];
            }
            if ($i % 3 == 0) {
                ?>
                <div class="tile is-ancestor">
                <?php
            }
            ?>
            <div class="tile is-parent is-4">
                <article class="tile is-child box">
                    <?php
                    if ($isLive && !$isTheory) {
                        echo "<a href='uebungen/uebung.php?kapitel=$key&uebung=0&anleitung=$anleitung'>";
                    } else {
                        echo "<div>";
                    }
                    ?>

                    <p class="title is-size-3-desktop is-size-4-tablet is-size-4-mobile">
                        <?php echo $key; ?>
                        <?php
                        if ($isLive and $isTheory) {
                            echo '<span class="tag is-light is-small is-pulled-right">Theorie! Aufgaben im Skript.</span>';
                        }
                        ?>
                    </p>
                    <p class="subtitle is-size-5-desktop is-size-6-tablet is-size-6-mobile"><?php echo $titel; ?></p>
                    <?php
                    if ($isLive) {
                        if (!$isTheory) {
                            echo "</a>";
                        }
                    } else {
                        echo '<figure class="has-text-centered m-5">';
                        echo '<img style="height: 50px;" src="images/coming_soon.png" alt="coming soon">';
                        echo '</figure>';
                        echo "</div>";
                    }
                    ?>
                </article>
            </div>
            <?php
            if ($i % 3 == 2) {
                ?>
                </div>
                <?php
            }
            $i++;
        }
        ?>
    </section>
</main>
<footer class="footer">
    <?php
    include("footer.php");
    ?>
</footer>
</body>
</html>