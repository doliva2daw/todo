<?php

namespace App;

   use App\Request;
   use App\Session;

   final class App{
        static protected $action;
        static protected $req;

        public static function run(){

            $session=new Session();
            $routes=self::getRoutes();
            
            
            // obtener tres parámetros: controlador, accion,[parametros]
            // url friendly :  http://app/controlador/accion/param1/valor1/param2/valor2
            self::$req=new Request;
            $controller=self::$req->getController();
            
        
            self::$action=self::$req->getAction();
            self::dispatch($controller,$routes,$session);

        }
        
        private static function dispatch($controller,$routes,$session):void 
        {
            
            try{
                if(in_array($controller,$routes)){
                   // nombre del controlador
                   // instancia del controlador
                   // llamada a la función accion
                   // dispatcher
                   $nameController='\\App\Controllers\\'.ucfirst($controller).'Controller';
                   $objContr=new $nameController(self::$req,$session);
                   
                   //comprobar si existe la acción como método en el objeto
                   if (is_callable([$objContr,self::$action])){
                       call_user_func([$objContr,self::$action]);
                   }else{
                       call_user_func([$objContr,'error']);
                   }

               }else{
                    throw new \Exception("Ruta no disponible");
                }
           }catch(\Exception $e){
               die($e->getMessage());
           }
        }
        /**
         *  @return array
         *  returns registered route array
         */
        static function getRoutes(){
            $dir=__DIR__.'/Controllers';
            $handle=opendir($dir);
            while(false !=($entry=readdir($handle))){
               if($entry!="." && $entry!=".."){
                   $routes[]=strtolower(substr($entry,0,-14));
               }
               
            } 
            return $routes;
        }
           
    
   }