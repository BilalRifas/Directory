<?php

session_start(); //we need to start session in order to access it through CI

class YellowpagesController extends CI_Controller{
    
    public function Index(){
        // $this->load->view('australia');
        // $this->load->view('template/header.php');
        $this->load->helper('url');
        $this->load->view('header');
        // $this->load->view('home');
        $this->load->view('australia');
        $this->load->view('footer');

    }

    public function AddBusinessButton(){

      $addBusinessButton = $this->input->get('addBusinessButton');

      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('addbusiness', 'ab');
      $this->load->view('footer');

    } 

    public function SignInButton(){

      $signInButton = $this->input->get('signInButton');

      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('signin', 'sg');
      $this->load->view('footer');

    }  

    public function LoginButton(){

      $loginButton = $this->input->get('loginButton');

      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('login', 'lg');
      $this->load->view('footer');

      

    }
    public function RemoveTodos(){

        $removeChecked = $_POST['removeChecked'];
        $remove = $_POST['remove'];

        if(isset($remove)){
          if(!empty($removeChecked)){

              $this->load->model('MovieManager','mv');

              $todosRemoved = $this->mv->getBalanceTodos($removeChecked);

              $listTodos = $this->ShowTodos();
          }
        }
    }  

    public function ShowTodos(){

        $todos = $this->input->get('empty');

        $this->load->model('MovieManager','mv');

        $todosFound = $this->mv->getTodos($todos);
        
        // To show in the same page - movie page
        // $this->load->view('movie');

        $bagOfValues = array(
            'todosFound'=> $todosFound,
            'description'=> 'Hard coded value',
            'todos'=>$todos
          );

        $this->load->view('movieresult', $bagOfValues);


    }
        
    public function ShowDashboard(){

        $todoaction = $this->input->post('TODOACTION');

        // You can give your own variable name, as 2nd parameter ex: 'mv'
        $this->load->model('MovieManager','mv');

        $moviesFound = $this->mv->getMovieFound($todoaction);

        $this->load->view('movie');
    }
}

?>