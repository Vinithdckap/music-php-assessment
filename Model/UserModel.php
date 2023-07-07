<?php
class data
{
    public $db;
    public function __construct(){
        try {
            $this->db= new PDO
            ("mysql:host=localhost;dbname=music_application",
                "admin",
                "welcome");
//            echo "welcome";

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
class Model extends data{

    public function login_details($data){
        try {
            $email=$data['email'];
            $password=$data['password'];
            $query=$this->db->query("select * from login_details where email ='$email' and password ='$password'")->fetch(PDO::FETCH_OBJ);
            return $query;
        }
        catch (PDOException $e){
            die($e->getMessage());
        }
    }
    function showArtist(){
        $artist_name = $this->db->query("select * from artist")->fetchAll(PDO::FETCH_OBJ);
        return  $artist_name;
    }
    public  function  addPlaylist($song,$mp3Img){
        try {
            $song_name =$song['song_name'];
            $artist_name =$song['artist_name'];

            $this->db->query("Insert into playLists (playList_name,playList_artist,created_at) values ('$song_name','$artist_name',now())");
            $fetch=$this->db->query("select * from playLists order by id desc limit 1");
            $fetch=$fetch->fetch(PDO::FETCH_OBJ);

            $totalSongs = count($mp3Img['song']['name']);
            for( $i=0 ; $i < $totalSongs ; $i++ ) {
//                print_r($totalSongs[$i]);
                $newFilePath = "uploadedFiles".$mp3Img['song']['name'][$i];
                $tmpFilePath = $mp3Img['song']['tmp_name'][$i];
                move_uploaded_file($tmpFilePath, $newFilePath);
                $this->db->query("Insert into images (image_path,playlists_id) values ('$newFilePath','$fetch->id')");
            }
        }
        catch (PDOException $e){
            die($e->getMessage());
        }
    }
}