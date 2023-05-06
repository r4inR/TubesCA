<?php
    class Login extends Controller{
        public function index()
        {       
            $data['judul'] ='Login'; 
            $this->view('login/index', $data);
        }

        public function login(){
            $data = $this->model('Login_model')->getUser($_POST['username'], $_POST['password'], $_POST['role']);
            
            if (isset($data[0])){
                if ($data[0]['role'] == 'Laboran') {
                    session_start();
                    $_SESSION["username"] = $data['username'];
                    $_SESSION["role"] = $data['role'];
                    Flasher::setFlash('Berhasil', 'Anda Berhasil Login', 'success');
                    header("Location: " . BASEURL . "/dashboard");
    
                } else {
                    echo 'Hi, ' . $data["username"] . ' | ' . $data['role'] . ' | ' . $data["password"];
                    session_start();
                    $_SESSION["username"] = $data['username'];
                    $_SESSION["role"] = $data['role'];
                    header("Location: " . BASEURL . "/mahasiswa");
                   
                }
            } else {
                        Flasher::setFlash('Gagal', 'nama_user / Password Salah', 'danger');
                        header("Location: " . BASEURL . "/login");
            }
        }
        
        public function logout(){
            
            unset($_SESSION["user"]);
            session_destroy();
            header("Location: " . BASEURL);
        }
    }  