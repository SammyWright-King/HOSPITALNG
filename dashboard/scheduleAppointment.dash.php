<?php
    include(__dir__. '/../includes/auto-loader.inc.php');
    $appointment = new ScheduleAppointment();
    if(!isset($_SESSION['auth_status']))
    {
        header("Location: ../index.php?signinfirst");
        exit();
    }
?>
<?php require_once "sideMenu.dash.php";?>
<div class="container">
    SCHEDULE APPOINTMENT
</div>