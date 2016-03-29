<?php
class Router{
      private $routes ;


       public function Router()
      //public function _construct()
      {
          //echo "Router _construct1 ";
          $routesPath =$_SERVER['DOCUMENT_ROOT'].'/config/routes.php';
          $this->routes = include($routesPath);
          //  print_r ($this->routes);
          //echo "Router _construct2 ";
      }

      /*
return reguest path
        */
      private function getUri()
      {
        if(!empty($_SERVER['REQUEST_URI']))
        {
            return trim($_SERVER['REQUEST_URI'],'/');
            //echo   'getUri() ';

        }



      }
      public function run()
      {
        //echo  'run()';
        $uri =   $this->getUri();
        //check path
        foreach ($this->routes as $uriPattern => $path) {//get dictionary
          if(preg_match("~$uriPattern~",$uri))
          {
            //echo $path;

//echo "~$uriPattern~";
//echo "-";
//echo $path;
//echo "-";
//echo $uri;
            $internalRoute = preg_replace("~$uriPattern~",$path,$uri);




            $segments = explode('/',$internalRoute);
array_shift($segments);//удалить index.php
            $controllerName = array_shift($segments).'Controller';
            $controllerName = ucfirst($controllerName );

            $actionName = 'action'.ucfirst(array_shift($segments));



              //echo  "<td>$controllerName</td>";
            //  echo  "<td>$actionName</td>";
            //  print_r($segments);
              //include file Controller
              $controllerFile = $_SERVER['DOCUMENT_ROOT'].'/controllers/'.$controllerName.'.php';
              if(file_exists($controllerFile))
              {
                include_once($controllerFile);
              }

              //create controller object
              $controllerObject = new $controllerName;
              $result = $controllerObject->$actionName($segments);//передача параметров
          }
        }



      }



}


 ?>
