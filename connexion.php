<?php

// echo"1";
if(isset($_POST['login']))
{
    if($_POST['username'] == 'Admin' && $_POST['password'] == 'AdminRoot')
    {
        
        header('Location: home1.php');
        exit();
    }
    else
    {
        header('Location: index.php');
    }
}