<?php
require ("Model/UserModel.php");

class Controller {
    private $model;
    public function __construct() {
        $this->model = new Model();
    }
    public function home(){
        require "views/home.php";
    }

    public function login($data){
        if ($data){
            $check= $this->model->login_details($data);
            if ($check){
                $_SESSION['name']=$check->user_name;
                $this->home();
            }
            else{
                $session['error']='User not found';
                require "views/login.php";
            }
        }
        else{
            require "views/login.php";
        }
    }
    public function logout(){
        session_destroy();
        $this->home();
    }


    public function addPlaylist($data,$mp3Img){
        if ($data and $mp3Img){
            $this->model->addPlaylist($data,$mp3Img);
        }
        else{
            $artist_name =$this->model->showArtist();
            require "views/addPlaylist.php";
        }
    }

    public function addArtist($artist,$image){
        if ($artist and $image){
            $this->model->addArtist($artist,$image);
            $this->home();

        }
        else{
            require "";
        }

    }

    public function listArtist($datas,$imgPath){
//        print_r($datas);
//        print_r($path);

        $song =$datas['song_name'];
        $image = $imgPath['song'];

         $path= "views/uploadedFiles/";
         $images = $path.$image['name'];
         move_uploaded_file($image['tmp_name'],$images);

         $alldetails = $this->model->songUploading($song,$images);
    }
}