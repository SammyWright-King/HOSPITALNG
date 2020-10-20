<?php

class Dashboard extends Controller{
    public $active = 'dashboard'; // the current active link
    private $dashboardModel;

    //check if user session is set and create a new instance
    public function __construct()
    {
        if(!isset($_SESSION['auth_status']))
        {
            header("Location:./view/index.php");
        }
        $this->dashboardModel = new DashboardModel();
    }

}