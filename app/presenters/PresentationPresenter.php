<?php

class PresentationPresenter extends BasePresenter
{
   public function handleSetmyname(){
        $this->template->name = "Ján Švantner";
       $this->invalidateControl("changeName");
   }

   public function handleClearmyname(){
       unset($this->template->name);
       $this->invalidateControl("changeName");
   }

   public function actionDefault(){

   }
}
