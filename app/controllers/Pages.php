<?php

class Pages extends Controller {

    public function __construct() {
        session_start();
        $this->content = $this->model('Pages_');
        $this->menus = $this->model('Menus_');
        $this->testimonials = $this->model('Testimonials_');
        $this->Contact = $this->model('Contact_');
        $this->Feedback = $this->model('Feedback_');
        $this->Signup = $this->model('Signup_');
        $this->Login = $this->model('Login_');

 
    }
    
    function index(){
    
        $data = [
            'menus'=> $this->menus->getMenus()   
        ];
        
        $this->view('index',$data);  
    }

        function about(){

            $data = [   
                    'content'=> $this->content->getcontent(1),
                    'menus'=> $this->menus->getMenus(),
                    'testimonials'=> $this->testimonials->gettestimonials()

                ];
                $this->view('pages/About',$data);
            }


    function Contact(){
        $data = [];

        if(!empty($_POST['FNAME']) && !empty($_POST['Email']) && !empty($_POST['Message'])) {

            if($this->Contact->addContact($_POST['FNAME'], $_POST['Email'], $_POST['Message'] )) {
                
                $data = [
                    "ctitle" => "Thank you for Contacting Us",
                    'content'=> $this->content->getcontent(2),
                    'menus'=> $this->menus->getMenus()
                ];
            } else {
                die('SOMETHING WENT WRONG!');
            }

        } else {
            $data = [
                "ctitle" => "Contact Us",
                'content'=> $this->content->getcontent(2),
                'menus'=> $this->menus->getMenus()
         
            ];
        }
      
   
        $this->view('pages/Contact',$data);
    }

    function FAQs(){
        $data = [];

        if(!empty($_POST['FNAME']) && !empty($_POST['LNAME']) && !empty($_POST['Email']) && !empty($_POST['Rating']) && !empty($_POST['Message'])) {
            if($this->Feedback->addFeedback($_POST['FNAME'], $_POST['LNAME'], $_POST['Email'], $_POST['Rating'], $_POST['Message'])) {
                $data = [
                    "ftitle" => "Thank you for you feedback",
                    'content'=> $this->content->getcontent(3),
                    'menus'=> $this->menus->getMenus() 
                ];
            } else {
                die('SOMETHING WENT WRONG!');
            }
        } else {
            $data = [
                "ftitle" => "Feedback Form",
                'content'=> $this->content->getcontent(3),
                'menus'=> $this->menus->getMenus() 
            ];
        }

      
        $this->view('pages/FAQs',$data);
    } 


    function signup(){
        $data = [];

        if(!empty($_POST['User_Name']) && !empty($_POST['Email']) && !empty($_POST['Password'])) {

            if($this->Signup->addSignup($_POST['User_Name'], $_POST['Email'], $_POST['Password'] )) {
                
                $data = [
                    "title" => "Thank you for Signing up",
                    'menus'=> $this->menus->getMenus()
                ];
            } else {
                die('SOMETHING WENT WRONG!');
            }

        } else {
            $data = [

                "title" => "Sign Up",
                'menus'=> $this->menus->getMenus()

            ];
        }
        $this->view('index',$data);
    }
    
    
    function login(){

     
        $data = [

            "ltitle" => "Log In",
            'menus'=> $this->menus->getMenus()
        ];

        if(!empty($_POST['User_Name']) &&  !empty($_POST['Password'])) {
        // print_r($this->Login->getLogin($_POST['User_Name'], $_POST['Password'] ));
            if(!empty($this->Login->getLogin($_POST['User_Name'], $_POST['Password'] ))) {
                    $_SESSION['User_Name'] = $_POST['User_Name'];
            } else{
                $data = [

                    "title" => "Login failed",
                    'menus'=> $this->menus->getMenus()
                ];
            }
        } 
            

        $this->view('index',$data);

    }

    function Logout(){

        $data = [

            'menus'=> $this->menus->getMenus()
        ];

        unset($_SESSION["User_Name"]);
        $this->view('index',$data);

    }
   
}


?>            