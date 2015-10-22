<?php
class autoloader{
    public function __construct() {
        $classFileUrl = array(
            "C:\\xampp\\htdocs\\lesson3\\src\\core\\classes\\Config.php",
            "C:\\xampp\\htdocs\\lesson3\\src\\core\\classes\\Request.php",
            "C:\\xampp\\htdocs\\lesson3\\src\\core\\classes\\FrontController.php",
            "C:\\xampp\\htdocs\\lesson3\\src\\core\\classes\\Roting.php"
        );
        foreach($classFileUrl as $value)
        {
            if(file_exists($value))
            {
                require_once($value);
                continue;
            }
            else
            {
                die('Не все классы присутствуют');
            }
        }

    }

}

?>