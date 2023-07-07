<?php

class router
{
    public $router = [];
    public $controller;

    public function __construct()
    {
        $this->controller = new Controller();
    }


    public function get($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET',
        ];
        return $this;
    }
    public function post($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST',
        ];
        return $this;
    }
    public function delete($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'DELETE',
        ];
        return $this;
    }
    public function patch($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'PATCH',
        ];
        return $this;
    }


    public function routing()
    {
        foreach ($this->router as $router) {
            if ($router['uri']==$_SERVER['REQUEST_URI']){
                if ($router['action']) {
                    switch ($router['action']) {
                        case'login':
                            $this->controller->login($_POST);
                            break;
                        case'logout':
                            $this->controller->logout($_POST);
                            break;
                        case'addPlaylist':
                            $this->controller->addPlaylist($_POST,$_FILES);
                            break;
                        case 'addArtist':
                            $this->controller->addArtist($_POST,$_FILES);
                            break;
                        default:
                            $this->controller->home();
                    }

                } else {
                    $this->controller->home();
                }

            }

        }

    }
}

