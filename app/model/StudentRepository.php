<?php

class StudentRepository
{
    private $arr;

    public function __construct(){
        $this->arr = array(
            '1' => 'John Doe',
            '2' => 'Jane Doe',
            '3' => 'Petr Poe',
            '4' => 'David Grudl'
        );
    }

    public function changeName($id, $newName){
        #$this->arr = array();
        $this->arr[$id] = $newName;
    }
    public function getStudentsByClassIA(){
        return  $this->arr;
    }

}
