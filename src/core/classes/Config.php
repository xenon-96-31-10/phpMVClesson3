<?php
class Config
{
    private $admin;
    private $password;

    function __construct()
    {
        $config = include("C:\\xampp\\htdocs\\lesson3\\config.php");
        $this->admin = $config['user'];
        $this->password = $config['password'];
    }

    function getParam($type)
    {
        if($type == "admin")
        {
            return $this->admin;
        }
        if($type == "password")
        {
            return $this->password;
        }
    }



}
?>




