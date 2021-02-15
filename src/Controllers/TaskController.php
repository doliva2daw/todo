<?php
    namespace App\Controllers;
    
    use App\Controller;
    use App\Request;
    use App\Session;

    class TaskController extends Controller{

        public function __construct(Request $request,Session $session){
            parent::__construct($request,$session);
        }

        public function index(){
                //task list for user

                //$tasks=$this->selectAll();
                $this->render();
        }

        public function new(){
            $this->render(null,'newtask');
        }
        public function add(){
            $description=filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
            $datetime=filter_input(INPUT_POST,'due_date',FILTER_SANITIZE_SPECIAL_CHARS);
            $id=$this->session->get('user')['id'];
            $db=$this->getDB();
            if($db->insert('tasks',['description'=>$description,'user'=>$id,'due_date'=>$datetime])){
                header('Location:/user/dashboard');
            }else{
                header('Location:/task/new');
            }
        }
    }
