<?php
class Request
{
    private $host;
    private $controller;
    private $action;
    private $params;
    function __constuct()
    {
        $url = explode("/",$_SERVER['REQUEST_URI']);
        if(!empty($url[0]))
        {
            $this->host = $url[0];
        }
        if(!empty($url[1]))
        {
            $this->controller = $url[1];
        }
        if(!empty($url[2]))
        {
            $this->action = $url[2];
        }
        if(!empty($url[3]))
        {
            $this->action = $url[2];
        }
        $this->params = $_REQUEST;

        //дописать: должен разбить данный на хост, контроллер и возвращать их чере get
        //написать две функции getParams( должен вывести на экран $params)

        //конструктор
        // getGetParam( получать параметры по ключу, который возвращает либо null либо ошибку
        //getPostParam

    }
    public function  getParams($key)
    {
        if(!empty($this->params[$key]))
        return $this->params[$key];
    }

    public  function getController()
    {
        return $this->controller;
    }

    public  function getAction()
    {
        return $this->action;
    }
     /*function  getGetParam($id)
     {
         return $this->params['get'][$id];
     }*/

}
?>




