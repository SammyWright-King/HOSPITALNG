<?php
    
    if(isset($_POST['logout-submit']))
    {
        require_once 'contr/Logout.contr.php';
        $logout = new Logout();
    }
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="form-inline my-2 my-lg-0">
    <button class="btn btn-outline-success my-2 my-sm" type="submit" name="logout-submit">LOGOUT</button>
</form>