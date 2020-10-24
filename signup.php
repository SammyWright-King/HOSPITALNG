<?php require_once "header.php";?>
<?php
    require_once('contr/Register.contr.php');
    $Register = new Register();
    $Response = [];
    if (isset($_POST) && count($_POST) > 0)
    {
        $Response = $Register->register($_POST);
    }
?>

<body>
<br><br>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form class="form-group my-2 my-lg-0" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="text" class="form-control mr-sm-2" placeholder="Username"  name="Username"><br>
                <input type="text" class="form-control mr-sm-2" placeholder="E-mail" name="Email"><br>
                <input type="password" class="form-control mr-sm-2" placeholder="Password.." name="Password"><br>
                <input type="password" class="form-control mr-sm-2" placeholder="Re-enter Password" name="Re_password"><br>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="signup-submit">REGISTER</button>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</body>