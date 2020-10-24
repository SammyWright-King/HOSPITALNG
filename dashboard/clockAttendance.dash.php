<?php
    include(__dir__. '/../includes/auto-loader.inc.php');
    $attendance = new Attendance();
    if(!isset($_SESSION['auth_status']))
    {
        header("Location: ../index.php?signinfirst");
        exit();
    }
?>
<?php require_once "sideMenu.dash.php";?>
<div class="container">
    CLOCK ATTENDANCE
</div>