<?php
class Router {

    private $routes;
    
    public function __construct() {
        $this->routes = include ROOT.'/config/routes.php';
    }
    
    public function dispatch() {
        $uri = $this->getURI();
        
        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {

                // Получаем внутренний путь из внешнего согласно правилу.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                
                $segments = explode('/', $internalRoute);
                
                $controllerName = ucfirst(array_shift($segments)).'Controller';
                $actionName = 'action'.ucfirst(array_shift($segments));
                
                $parameters = $segments;
                
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }
                
                $controllerObject = new $controllerName;
                
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                
                if ($result != null) {
                    break;
                }
            }
        }
    }
    
    /**
     * Returns request string
     * @return string
     */
    private function getURI() {
         if (!empty($_SERVER['REQUEST_URI'])) {
             return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
}
