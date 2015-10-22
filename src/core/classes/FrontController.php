<?php

class FrontController{

    function bootstrapt()
    {
        //include("\\src\\core\\classes\\Config.php");
        $Config = new Config();
        $admin = $Config->getParam('admin');
        $password = $Config->getParam('password');
        $arrFileUrl = array(
            "C:\\xampp\\htdocs\\lesson3\\index.php",
            "C:\\xampp\\htdocs\\lesson3\\config.php",
            "C:\\xampp\\htdocs\\lesson3\\src\\core\\classes\\Config.php",
            "C:\\xampp\\htdocs\\lesson3\\src\\core\\classes\\Request.php",
            "C:\\xampp\\htdocs\\lesson3\\.htaccess"
        );
        foreach($arrFileUrl as $value)
        {
            if(file_exists($value))
            {
                //var_dump("asdasd");
                continue;
            }
            else
            {
                die('Структура сайта не подлежит формату');
            }
        }

    return $this;


    }

    function handlerRequest()
    {
        //require_once("C:\\xampp\\htdocs\\lesson3\\src\\core\\classes\\Request.php");
        //require_once("C:\\xampp\\htdocs\\lesson3\\src\\core\\classes\\Routing.php");
        var_dump("gtyftyftftf");
        $request = new Request();
        var_dump($request->getController());

        Routing::run($request);

    }
}

?>




