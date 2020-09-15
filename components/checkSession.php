<?php

session_name("SESS_KEY");
session_start();

if (isset($_SESSION["user"]))
{
    if ($_SESSION["user-agent"] == $_SERVER['HTTP_USER_AGENT'] /*&&
        $_SESSION["ip-adds"] == $_SERVER['REMOTE_ADDR']*/)
    {
        return true;
    }
    else
    {
        exit("Wrong browser");

        return false;
    }
}
else
{
    session_destroy();

    return false;
}
