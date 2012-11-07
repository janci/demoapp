<?php

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

    public function __construct(\Nette\DI\Container $container, DemoService $demoserv=null) {
        parent::__construct($container) ;
        dump($demoserv->getAppName());
        die();
    }

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';

	}

}
