<?php

class PresentationPresenter extends BasePresenter
{
   private $userSession;
   private $studentRepository;

   public function __construct(\Nette\DI\Container $container, StudentRepository $sr){
        parent::__construct($container);
        $this->studentRepository = $sr;
   }

   public function handleChangeStudent(){
       $this->studentRepository->changeName(2, 'Lukáš Malý');
       $this->invalidateControl('students');
   }

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

    public function renderDefault(){
        $this->template->students = $this->studentRepository->getStudentsByClassIA();
    }
}
