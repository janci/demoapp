<?php

class PresentationPresenter extends BasePresenter
{
   private $userSession;
   public function startup(){
       parent::startup();
       $this->userSession = $this->getSession('user');
   }

   public function handleSetmyname(){
       $this->template->name = "Ján Švantner";
       $this->userSession->name = $this->template->name;
       $this->invalidateControl("changeName");
   }

   public function handleClearmyname(){
       unset($this->template->name);
       unset($this->userSession->name);

       $this->invalidateControl("changeName");
   }

   public function handleSetjsval(){
       $this->payload->odpoved = "Jo, jo, ty ale jses.";
       $this->invalidateControl();
   }

   public function actionDefault(){
       if(isset($this->userSession->name))
        $this->template->name = $this->userSession->name;
   }
}
