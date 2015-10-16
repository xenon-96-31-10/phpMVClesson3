<?php

class Routing{
    public static function run(Request $request)
    {

        $nameController = $request->getController() . "Controller";
        $action = $request->getAction() . "Action";
        $filePath = "\\src\\controller\\" . $nameController . ".php";
        var_dump($filePath);
        $className = $nameController;
        if(file_exists($filePath)){
            require_once($filePath);
            if(class_exists($className)){
                $controller = new $nameController();
                if(method_exists($controller, $action)){
                    call_user_func(array($controller, $action));
                }else{
                    var_dump("Не существеует экшена" . $action);
                }
            } else{
                var_dump("Структура сайта не соотвествует фреймоврку");
            }

        }else {
            die("Controller doesn't exist");
        }

    }

}
?>
