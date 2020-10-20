<?php
    //session_start();
   
    if(!isset($_SESSION['auth_status']))
    {
        header("Location: ../index.php?signinfirst");
        exit();
    }
?>
<?php require "sideMenu.dash.php"; ?>
<div class="container">
    <section>
        <div class="">
            <ol class="breadcrumb">
                <li>DASHBOARD / <a href=""><?php if( isset($_SESSION['auth_status'])){ echo strtoupper($_SESSION['data']['username']) ;} else{ header("Location: ../signup.php"); exit();}?></a></li>
            </ol>
        </div>
    </section>
    <p>WELCOME TO THE DASHBOARD</p>
    <section>
        <div class="row no-gutter">
            <div class="col-3">
                <div class="card border-secondary" style="margin-bottom:1cm;">
                    <div class="card-body ">
                    <a href="PatientRegistration.dash.php" class="card-title "><p>Patient Registration</p></a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card border-secondary" >
                    <div class="card-body ">
                    <a href="ScheduleAppointment.dash.php" class="card-title "><p>Schedule Appointment</p></a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card border-secondary" >
                    <div class="card-body ">
                    <a href="BookTheatre.dash.php" class="card-title "><p>Book Theatre</p></a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card border-secondary" >
                    <div class="card-body ">
                    <a href="PatientRecords.dash.php" class="card-title "><p>Patient Records</p></a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card border-secondary" >
                    <div class="card-body ">
                    <a href="ClockAttendance.dash.php" class="card-title "><p>Clock Attendance</p></a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card border-secondary" >
                    <div class="card-body ">
                    <a href="Holidays.dash.php" class="card-title "><p>Holidays & Special Days</p></a>
                    </div>
                </div>
            </div> 
            <div class="col-3">
                <div class="card border-secondary" >
                    <div class="card-body ">
                    <a href="Ninjas.dash.php" class="card-title "><p>Ninjas</p></a>
                    </div>
                </div>
            </div> 
            <div class="col-3">
                <div class="card border-secondary" >
                    <div class="card-body ">
                    <a href="Announcements.dash.php" class="card-title "><p>Announcements</p></a>
                    </div>
                </div>
            </div> 
            
            
    </section>
</div>