<?php
$page = $_SERVER['PHP_SELF'];
?>

<header class="page-header container">
    <a href="/index.php">
        <button class = "header-icon-container <?php echo (stripos($page,"index") !== false)?'active':'inactive'; ?>">
            <img class = "header-img<?php echo (stripos($page,"index") !== false)?'-active':''; ?>" src = "images/icons/icon_person_<?php echo (stripos($page,"index") !== false)?'white':'grey'; ?>.png" alt="">
        </button>
    </a>
    <a href="/code.php">
        <button class = "header-icon-container <?php echo (stripos($page,"code") !== false)?'active':'inactive'; ?>">
            <img class = "header-img<?php echo (stripos($page,"code") !== false)?'-active':''; ?>" src = "images/icons/icon_code_<?php echo (stripos($page,"code") !== false)?'white':'grey'; ?>.png" alt="">
        </button>
    </a>
    <a href="/gallery.php">
        <button class = "header-icon-container <?php echo (stripos($page,"gallery") !== false)?'active':'inactive'; ?>">
            <img class = "header-img<?php echo (stripos($page,"gallery") !== false)?'-active':''; ?>" src = "images/icons/icon_screen_<?php echo (stripos($page,"gallery") !== false)?'white':'grey'; ?>.png" alt="">
        </button>
    </a>
    <a href="/career.php">
        <button class = "header-icon-container <?php echo (stripos($page,"career") !== false)?'active':'inactive'; ?>">
            <img class = "header-img<?php echo (stripos($page,"career") !== false)?'-active':''; ?>" src = "images/icons/icon_star_<?php echo (stripos($page,"career") !== false)?'white':'grey'; ?>.png" alt="">
        </button>
    </a>
    <a href="/contact.php">
        <button class = "header-icon-container <?php echo (stripos($page,"contact") !== false)?'active':'inactive'; ?>">
            <img class = "header-img<?php echo (stripos($page,"contact") !== false)?'-active':''; ?>" src = "images/icons/icon_message_<?php echo (stripos($page,"contact") !== false)?'white':'grey'; ?>.png" alt="">
        </button>
    </a>

</header>
