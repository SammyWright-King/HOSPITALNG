<?php
    /* session_start();
   
    if(!isset($_SESSION['auth_status']))
    {
        header("Location: ../index.php?signinfirst");
        exit();
    } */
    include(__dir__. '/../includes/auto-loader.inc.php');
    $patientRegistration = new PatientRegistration();
    if(!isset($_SESSION['auth_status']))
    {
        header("Location: ../index.php?signinfirst");
        exit();
    }
?>
<?php require_once "sideMenu.dash.php"; ?>
<div class="container">
    PATIENT REGISTRATION
</div>