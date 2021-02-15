<?php

    namespace App;
    use App\View;
    use App\Model;
    use App\DB;
    use App\Session;

    abstract class Controller implements View,Model{
        protected $request;
        protected $session;

        function __construct($request, $session){
            $this->request=$request;
            $this->session=$session;
        }

        function error($string){
            $this->render(['error'=>$string],'error');
        }
        
        function render(?array $dataview=null,?string $template=null){
            if($dataview){
                extract($dataview,EXTR_OVERWRITE);
            }
            if ($template!=null){
                include 'templates/'.$template.'.tpl.php';
            }else{
                include 'templates/'.$this->request->getController().'.tpl.php';
            }
        }

        function getDB(){
            return DB::singleton();
        }
    }