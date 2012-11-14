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
            ->addRule(Form::FILLED, "Vyplnte povinné položky.")
            ->getLabelPrototype()->addStyle('color', 'red');

        $form->addText('email','Email')
            ->addRule(Form::FILLED, "Vyplnte povinné položky.")
            ->addRule(Form::EMAIL, "Email nemá povolený formát");

        $form->addSelect('category','Kategória', $categories);
        $form->addTextArea('text', 'Popis problému')
            ->addRule(Form::FILLED, "Vyplnte povinné položky.");

        $form->addButton('reset', 'Vymazať formulár')
            ->getControlPrototype()->setType('reset');

        $form->addSubmit('submit', 'Odoslať formulár');

        $form->onSuccess[] = array($this, 'sendEmail');
        //$form['nameSurname']->addRule();

        return $form;
    }

    public function sendEmail(Form $form){
        $values = $form->getValues();
        $options = array(
            'host' => 'smtp.gmail.com',
            'username' => 'prednaska@janci.net',
            'password' => 'mrkvaAHrasok',
            'secure' => 'ssl'
        );

        $smtpMailer = new \Nette\Mail\SmtpMailer();

        $email = new \Nette\Mail\Message();
        $email->setMailer($smtpMailer);
        $email->setFrom('prednaska@janci.net');
        $email->addTo("posta.janci@gmail.com");
        $email->setHtmlBody('<b>Tento email je odomna</b>');
        $email->send();
        //$email->
    }

}
