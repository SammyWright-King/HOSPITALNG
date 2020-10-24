<?php
    include(__dir__. '/../includes/auto-loader.inc.php');
    $announcements = new Announcements();
    if(!isset($_SESSION['auth_status']))
    {
        header("Location: ../index.php?signinfirst");
        exit();
    }
?>
<?php require_once "sideMenu.dash.php";?>
<div class="container">
    ANNOUNCEMENTS
</div>