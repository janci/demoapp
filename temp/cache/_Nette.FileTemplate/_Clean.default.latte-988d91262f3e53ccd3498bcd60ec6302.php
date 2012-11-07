<?php //netteCache[01]000376a:2:{s:4:"time";s:21:"0.13551900 1351712808";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:54:"/home/weby/prednasky/app/templates/Clean/default.latte";i:2;i:1351712802;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: /home/weby/prednasky/app/templates/Clean/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '7y3ad58y3a')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbaa9281aecb_content')) { function _lbaa9281aecb_content($_l, $_args) { extract($_args)
?>Som na stranke <?php echo Nette\Templating\Helpers::escapeHtml($page, ENT_NOQUOTES) ?>

<?php echo Nette\Templating\Helpers::escapeHtml($template->date($datum, "d-m-Y"), ENT_NOQUOTES) ?>

<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("Homepage:deafult", array('datum'=>$datum->format('d-m-Y'))), ENT_NOQUOTES) ;
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
extract(array('page'=>1), EXTR_SKIP) ?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 