<?php

class DemoService
{
    private $appName;
    public function getName(){
        return "Test";
    }

    public function setAppName($appName){
        $this->appName = $appName;
        return $this;
    }

    public function getAppName(){
        return $this->appName;
    }

}
