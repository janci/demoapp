<?php

class FormPresenter extends BasePresenter
{
    public function createComponentContactForm(){
        $categories = array(
            '1' => 'Technická podpora',
            '2' => 'Softvérová podpora',
            '3' => 'Manažment'
        );
        $form = new \Nette\Application\UI\Form();

        $form->addText('nameSurname',"Meno a priezvisko");
        $form->addText('email','Email');
        $form->addSelect('category','Kategória', $categories);
        $form->addTextArea('text', 'Popis problému');
        $form->addButton('reset', 'Vymazať formulár');
        $form->addSubmit('submit', 'Odoslať formulár');

        return $form;
    }

}
