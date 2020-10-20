<?php
    require_once('contr/Login.contr.php');

    //running the login method from the login class in controller
    $Login = new Login();
    $Response = [];
    if (isset($_POST) && count($_POST) > 0){
        $Response = $Login->login($_POST);
    }
?>
<form class="form-inline my-2 my-lg-0" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input class="form-control mr-sm-2" type="search" placeholder="Username/Email" aria-label="Search" name="email">
    <input type="password" class="form-control mr-sm-2" placeholder="Password.." name="password">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >LOGIN</button>
</form>
    
<div class="nav-item">
    <a href="signup.php" class="nav-link">SIGNUP</a>
</div>