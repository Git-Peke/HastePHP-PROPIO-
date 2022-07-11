<?php

class actions{

    public function new(){
        $text = json_decode(file_get_contents("php://input"));
    if(isset($text->text)){
        if(strlen($text->text) < 7000 && strlen($text->text) > 1){
            $hash = $this->urlunique();

            file_put_contents(__DIR__.'/../../assets/db/'.$hash.'.txt',$text->text);
            echo '{"status":"OK","message":"'.$hash.'"}';
        }
        else{
            echo '{"status":"error","message":"EL MAXIMO DE CARACTERES SON 2000!"}';
        }
    }
    else{
        echo '{"status":"error","message":"EL MINIMO DE CARACTERES ES 1!"}';
    }
}
    public function load($loader){
        if($this->rawexi($loader)){
            $d = file_get_contents(__DIR__.'/../../assets/db/'.$loader.'.txt');
            require_once __DIR__.'/../views/viewer.php';
        }
        else{
            header('location: /');
        }
    }
    public function rawload($loader){
        if($this->rawexi($loader)){
            $d = file_get_contents(__DIR__.'/../../assets/db/'.$loader.'.txt');
            require_once __DIR__.'/../views/raw_viewer.php';
        }
        else{
            header('location: /');
        }
    }

    private function rawexi($loader){
        if(file_exists(__DIR__.'/../../assets/db/'.$loader.'.txt')){
            return true;
        }
        else{
            return false;
        }
    }
    private function urlunique(){
        return $bytes = bin2hex(random_bytes(6));
    }

}


