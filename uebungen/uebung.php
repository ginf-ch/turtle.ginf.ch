<?php
include("config.php");
global $kapitel;

$kapitelnummer = $_GET["kapitel"] ?? "1";
$kapiteltitel = $kapitel[$kapitelnummer][0];

$uebungnummer = $_GET["uebung"] ?? "0";

$anleitung = $_GET["anleitung"] ?? "on";

$kapitelFolderName = $kapitelnummer < 10 ? "0" . $kapitelnummer : $kapitelnummer;
$uebungFilenames = [];
if (file_exists($kapitelFolderName)) {
    $files = scandir($kapitelFolderName);
    foreach ($files as $file) {
        if (!is_dir($kapitelFolderName . "/" . $file) and str_ends_with($file, ".php")) {
            $uebungFilenames[] = $file;
        }
    }
}
$anzahlUebungen = count($uebungFilenames);

if (isset($_GET["anleitung"])) {
    $tmp = $_GET["anleitung"];
    if ($tmp == "on") {
        $isAnleitungOn = True;
    } else {
        $isAnleitungOn = False;
    }
} else {
    $isAnleitungOn = True;
}

$hrefPrevious = "";
$isPreviousDisabled = False;
if ($uebungnummer == 0) {
    $isPreviousDisabled = True;
} else {
    $previous = $uebungnummer - 1;
    $hrefPrevious = "uebung.php?kapitel=$kapitelnummer&uebung=$previous&anleitung=$anleitung";
}

$hrefNext = "";
$isNextDisabled = False;
if ($uebungnummer == $anzahlUebungen - 1) {
    $isNextDisabled = True;
} else {
    $next = $uebungnummer + 1;
    $hrefNext = "uebung.php?kapitel=$kapitelnummer&uebung=$next&anleitung=$anleitung";
}

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Turtle-Programmierung | turtle.ginf.ch</title>
    <?php
    include("../head.php");
    ?>
    <script>
        $(document).ready(
            function () {
                $(".how-to-btn").click(function () {
                    const id = $(this).attr("data-how-to");
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

                $("#openSidebar").click(function () {
                    $("#sidebar").removeClass("is-hidden");
                });

                $("#closeSidebar").click(function () {
                    $("#sidebar").addClass("is-hidden");
                });
            }
        );
    </script>
</head>
<body class="has-navbar-fixed-top">
<?php
include("header.php");
?>
<main>
    <section class="section is-small">
        <?php
        ?>
        <div class="block">
            <nav class="level is-mobile">
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Kapitel</p>
                        <p class="title is-size-4-mobile"><?php echo $kapitelnummer; ?></p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Titel</p>
                        <p class="title is-size-4-mobile"><?php echo $kapiteltitel; ?></p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Übung</p>
                        <p class="title is-size-4-mobile"><?php echo "$uebungnummer/" . $anzahlUebungen - 1; ?></p>
                    </div>
                </div>
            </nav>
            <div class="columns is-vcentered is-mobile">
                <div class="column">
                    <progress class="progress is-small is-primary"
                              value="<?php echo intval((($uebungnummer + 1) / $anzahlUebungen) * 100) ?>"
                              max="100">
                    </progress>
                </div>
                <div class="column is-narrow">
                    <div class="buttons is-centered">
                        <a href="<?php echo $hrefPrevious; ?>"
                           class="button is-small is-primary is-outlined" <?php echo $isPreviousDisabled ? "disabled" : "" ?>>
                            <span class="icon is-small">
                              <i class="fa-solid fa-angle-left"></i>
                            </span>
                        </a>
                        <button id="openSidebar" class="button is-small is-primary is-outlined">
                            <span class="icon is-small">
                              <i class="fa-solid fa-ellipsis-vertical"></i>
                            </span>
                        </button>
                        <a href="<?php echo $hrefNext; ?>"
                           class="button is-small is-primary is-outlined" <?php echo $isNextDisabled ? "disabled" : "" ?>>
                            <span class="icon is-small">
                              <i class="fa-solid fa-angle-right is-outlined"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="columns">
                <div class="column is-1 is-hidden-tablet-only is-hidden-mobile">
                    <figure class="image is-64x64">
                        <?php
                        $imageFilename = $uebungnummer < 10 ? "0" . $uebungnummer : $uebungnummer;
                        ?>
                        <img class="is-rounded" src="../images/<?php echo $imageFilename; ?>.jpg"
                             alt="<?php echo "Übung" . $uebungnummer ?>">
                    </figure>
                </div>
                <div class="column">
                    <div class="title is-size-5 is-uppercase"><?php echo "Übung $uebungnummer" ?></div>
                    <?php
                    $filename = $uebungnummer < 10 ? "0" . $uebungnummer : $uebungnummer;
                    $uebungFilePath = "$kapitelFolderName/$filename" . "_uebung.php";
                    if (file_exists($uebungFilePath)) {
                        include($uebungFilePath);
                    }
                    ?>
                </div>
            </div>
            <div class="tabs is-fullwidth block mt-6">
                <ul>
                    <li>
                        <?php
                        if ($isPreviousDisabled) {
                            ?>
                            <a style="cursor: not-allowed;" class="has-text-grey-light">
                                <span class="icon"><i class="fas fa-angle-left" aria-hidden="true"></i></span>
                                <span>Zurück</span>
                            </a>
                            <?php
                        } else {
                            ?>
                            <a href="<?php echo $hrefPrevious; ?>">
                                <span class="icon"><i class="fas fa-angle-left" aria-hidden="true"></i></span>
                                <span>Zurück</span>
                            </a>
                            <?php
                        }
                        ?>
                    </li>
                    <li>
                        <a href='<?php echo "/uebungen.php?anleitung=$anleitung"; ?>'>
                            <span class="icon"><i class="fas fa-angle-up" aria-hidden="true"></i></span>
                            <span>Kapitelübersicht</span>
                        </a>
                    </li>
                    <li>
                        <?php
                        if ($isNextDisabled) {
                            ?>
                            <a style="cursor: not-allowed;" class="has-text-grey-light">
                                <span>Weiter</span>
                                <span class="icon"><i class="fas fa-angle-right" aria-hidden="true"></i></span>
                            </a>
                            <?php
                        } else {
                            ?>
                            <a href="<?php echo $hrefNext; ?>">
                                <span>Weiter</span>
                                <span class="icon"><i class="fas fa-angle-right" aria-hidden="true"></i></span>
                            </a>
                            <?php
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <div id="sidebar" class="sidebar is-hidden" style="width: 50%; max-width: 300px;">
        <div class="p-3">
            <div class="has-text-right">
                <button id="closeSidebar" class="delete is-medium"></button>
            </div>
            <aside class="menu">
                <p class="menu-label has-text-white">
                    Übungen
                </p>
                <ul class="menu-list">
                    <?php
                    for ($i = 0; $i < $anzahlUebungen; $i++) {
                        $uebungFilename = $uebungFilenames[$i];

                        $href = "uebung.php?kapitel=$kapitelnummer&uebung=$i&anleitung=$anleitung";
                        ?>
                        <li>
                            <?php
                            $tmp = $uebungnummer < 10 ? "0" . $uebungnummer : $uebungnummer;
                            $displayText = "Übung $i";
                            if (str_starts_with($uebungFilename, $tmp)) {
                                echo "<a href='$href' class='is-active'>$displayText</a>";
                            } else {
                                echo "<a class='has-text-black' href='$href'>$displayText</a>";
                            }
                            ?>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </aside>
        </div>
    </div>
</main>
<footer class="footer">
    <?php
    include("../footer.php");
    ?>
</footer>
</body>
</html>