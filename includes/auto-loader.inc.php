<?php
spl_autoload_register("classLoader");

function classLoader($className)
{
    $path = "class/";
    $ext = ".class.php";
    $full_path = $path. $className. $ext;

    if(!file_exists($full_path))
    {
        return false;
    }
    else{
        include_once $full_path;
    }

}