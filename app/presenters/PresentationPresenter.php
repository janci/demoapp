<?php

class PresentationPresenter extends BasePresenter
{
   public function handleSetmyname(){
        $this->template->name = "Ján Švantner";
   }

   public function handleClearmyname(){
       unset($this->template->name);
   }

   public function actionDefault(){

   }
}
