<?php
/*
    This config file is not for the files in this folder
     but those in the root folder

**/
spl_autoload_register('router');

function myAutoLoader($className)
{
    $path = "classes/";
    $ext = ".class.php";
    $fullpath = $path. $className. $ext;

    include_once $fullpath;
}

function router($className)
{
    $path = getcwd();
    $path = str_replace("view", "contr", $path);
    $ext = ".php";
    include_once  $path. $className. $ext;
}