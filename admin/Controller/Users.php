<?php

    require_once '../Model/User.php';
    require_once '../../helpers/session_helper.php';

    class Users {

        private $userModel;
        
        public function __construct(){
            $this->userModel = new User;
        }

        public function register(){
            //Process form
            
            //Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //Init data
            $data = [
                'usersName' => trim($_POST['usersName']),
                'usersEmail' => trim($_POST['usersEmail']),
                'usersUid' => trim($_POST['usersUid']),
                'usersPwd' => trim($_POST['usersPwd']),
                'pwdRepeat' => trim($_POST['pwdRepeat'])
            ];

            //Validate inputs
            if(empty($data['usersName']) || empty($data['usersEmail']) || empty($data['usersUid']) || 
            empty($data['usersPwd']) || empty($data['pwdRepeat'])){
                flash("register", "Please fill out all inputs");
                redirect("../View/signupuser.php");
            }

            if(!preg_match("/^[a-zA-Z0-9]*$/", $data['usersUid'])){
                flash("register", "Invalid username");
                redirect("../View/signupuser.php");
            }

            if(!filter_var($data['usersEmail'], FILTER_VALIDATE_EMAIL)){
                flash("register", "Invalid email");
                redirect("../View/signupuser.php");
            }

            if(strlen($data['usersPwd']) < 6){
                flash("register", "Invalid password");
                redirect("../View/signupuser.php");
            } else if($data['usersPwd'] !== $data['pwdRepeat']){
                flash("register", "Passwords don't match");
                redirect("../View/signupuser.php");
            }

            //User with the same email or password already exists
            if($this->userModel->findUserByEmailOrUsername($data['usersEmail'], $data['usersName'])){
                flash("register", "Username or email already taken");
                redirect("../View/signupuser.php");
            }

            //Passed all validation checks.
            //Now going to hash password
            $data['usersPwd'] = password_hash($data['usersPwd'], PASSWORD_DEFAULT);

            //Register User
            if($this->userModel->register($data)){
                redirect("../View/loginuser.php");
            }else{
                die("Something went wrong");
            }
        }

    public function login(){
        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //Init data
        $data=[
            'name/email' => trim($_POST['name/email']),
            'usersPwd' => trim($_POST['usersPwd'])
        ];

        if(empty($data['name/email']) || empty($data['usersPwd'])){
            flash("login", "Please fill out all inputs");
            header("location: ../View/signupuser.php");
            exit();
        }

        //Check for user/email
        if($this->userModel->findUserByEmailOrUsername($data['name/email'], $data['name/email'])){
            //User Found
            $loggedInUser = $this->userModel->login($data['name/email'], $data['usersPwd']);
            if($loggedInUser){
                //Create session
                $this->createUserSession($loggedInUser);
            }else{
                flash("login", "Password Incorrect");
                redirect("../View/signupuser.php");
            }
        }else{
            flash("login", "No user found");
            redirect("../View/signupuser.php");
        }
    }

    public function createUserSession($user){
        $_SESSION['usersId'] = $user->usersId;
        $_SESSION['usersName'] = $user->usersName;
        $_SESSION['usersEmail'] = $user->usersEmail;
        redirect("../View/userindex.php");
    }

    public function logout(){
        unset($_SESSION['usersId']);
        unset($_SESSION['usersName']);
        unset($_SESSION['usersEmail']);
        session_destroy();
        redirect("../View/loginuser.php");
    }
}

    $init = new Users;

    //Ensure that user is sending a post request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        switch($_POST['type']){
            case 'register':
                $init->register();
                break;
            case 'login':
                $init->login();
                break;
            default:
            redirect("../View/userindex.php");
        }
        
    }else{
        switch($_GET['q']){
            case 'logout':
                $init->logout();
                break;
            default:
            redirect("../View/userindex.php");
        }
    }

    