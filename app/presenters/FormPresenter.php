<?php
use Nette\Forms\Form;

class FormPresenter extends BasePresenter
{
    public function createComponentContactForm(){
        $categories = array(
            '1' => 'Technická podpora',
            '2' => 'Softvérová podpora',
            '3' => 'Manažment'
        );
        $form = new \Nette\Application\UI\Form();

        $form->addText('nameSurname',"Meno a priezvisko")
            ->addRule(Form::FILLED, "Vyplnte povinné položky.");

        $form->addText('email','Email')
            ->addRule(Form::FILLED, "Vyplnte povinné položky.")
            ->addRule(Form::EMAIL, "Email nemá povolený formát");

        $form->addSelect('category','Kategória', $categories);
        $form->addTextArea('text', 'Popis problému')
            ->addRule(Form::FILLED, "Vyplnte povinné položky.");

        $form->addButton('reset', 'Vymazať formulár');
        $form->addSubmit('submit', 'Odoslať formulár');

        $form->onSuccess[] = array($this, 'sendEmail');
        //$form['nameSurname']->addRule();

        return $form;
    }

    public function sendEmail(Form $form){
        $values = $form->getValues();
        dump($values->nameSurname);
        dump($values['nameSurname']);
        dump($values);
    }

}
