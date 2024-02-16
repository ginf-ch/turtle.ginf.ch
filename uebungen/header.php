<?php
global $kapitel;
$query = $_GET;
// replace parameter(s)
if (!key_exists("anleitung", $query)) {
    $query["anleitung"] = "off";
} else {
    if ($query["anleitung"] == "off") {
        $query["anleitung"] = "on";
    } else {
        $query["anleitung"] = "off";
    }
}
$query_result = http_build_query($query);
$href = $_SERVER["PHP_SELF"] . "?" . $query_result;
$anleitung = $_GET["anleitung"] ?? "on";
?>
<header>
    <nav class="navbar is-primary is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://turtle.ginf.ch">
            <span style="font-family: 'Leckerli One', cursive; font-size: 20px;">
                turtle.ginf.ch
            </span>
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMain">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarMain" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item" href="<?php echo $href; ?>">
                    <span class="icon-text">
                        <span class="icon">
                            <i class="fa-solid fa-toggle-off"></i>
                        </span>
                        <?php
                        if (!isset($_GET["anleitung"]) or $_GET["anleitung"] == "on") {
                            echo "<span>Anleitungen ausschalten</span>";
                        } else {
                            echo "<span>Anleitungen anschalten</span>";
                        }
                        ?>
                    </span>
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                    <span class="icon-text">
                        <span class="icon">
                            <i class="fa-solid fa-list-check"></i>
                        </span>
                        <span>Kapitel</span>
                    </span>
                    </a>

                    <div class="navbar-dropdown is-right">
                        <?php
                        foreach ($kapitel as $key => $value) {
                            $titel = $value[0];
                            $isLive = $value[1];
                            $isTheory = False;
                            if ($isLive) {
                                $isTheory = $value[2];
                            }
                            if ($isLive) {
                                $href = "https://turtle.ginf.ch/uebungen/uebung.php?kapitel=$key&uebung=0&anleitung=$anleitung";
                                if($isTheory) {
                                    $style = "navbar-item is-hidden";
                                } else {
                                    $style = "navbar-item";
                                }
                                ?>
                                <a class="<?php echo $style; ?>" href="<?php echo $href; ?>">
                                    <?php
                                    echo $key . " - " . $titel;
                                    ?>
                                </a>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>