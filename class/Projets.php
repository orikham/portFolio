<?php

class Chat {
    private $id_projet;
    private $title;
    private $thumbnail;
    private $resume;
    private $created_at;
    private $link;
    

    public function __construct(array $post){
        $this->hydrate($post);
    }

    private function hydrate(array $post){
        foreach($post as $key => $value){
            $method = 'set' . ucfirst($key);

            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    
    //GETTERS
    public function getId_projet(){
        return $this->id_projet;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getId_rental(){
        return $this->thumbnail;
    }

    public function getResume(){
        return $this->resume;
    }

    public function getCreated_at(){
        return $this->created_at;
    }

    public function getLink(){
        return $this->link;
    }



    //SETTERS
    public function setId_projet(int $id_projet){
        $this->id_projet = $id_projet;
    }

    public function setTitle(String $title){
        $this->title = $title;
    }

    public function setThumbnail(String $thumbnail){
        $this->thumbnail = $thumbnail;
    }

    public function setResume(String $resume){
        $this->resume = $resume;
    }

    public function setCreated_at(String $created_at){
        $this->created_at = $created_at;
    }

    public function setLink(String $link){
        $this->link = $link;
    }

}