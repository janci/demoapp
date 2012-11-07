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

   public function handleSetjsval(){
       $this->payload->odpoved = "Jo, jo, ty ale jses.";
       $this->invalidateControl();
   }

   public function actionDefault(){

   }
}
