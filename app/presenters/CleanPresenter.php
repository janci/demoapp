<?php

class CleanPresenter extends BasePresenter
{

    public function startup(){
        parent::startup();

    }

    public function actionDefault($page){
        //$page = $this->getParameter('page');
        //$parameters = $this->getParameter();
        $dt = DateTime::createFromFormat('d.m.Y','13.12.2011');
        $this->template->datum = $dt;

        $parameters = $this->getRequest()->getParameters();
        $this->template->page = isset($parameters['page'])? $parameters['page']:null;
        $this->template->page = $page;
    }

}
