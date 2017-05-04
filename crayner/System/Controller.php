<?php
namespace System;
use System\CraynerCore;
use System\Config_Handler;
/**
*
*		@author Ammar Faizi <ammarfaizi2@gmail.com>
*		@license RedAngel PHP Concept
*
*/
class Controller extends CraynerCore
{
	public function __construct()
	{
		/**
		* Autoload
		*/
		$this->autoload(Config_Handler::iq()->autoload());
		
		/**
		*		Loader
		*/
		$this->load = $this;
	}
	
	protected function model($model,$as=null)
	{
		$as = $as===null?$model:$as;
		$model = "App\\Models\\{$model}";
		$this->$as = new $model();
	}
	private function autoload($autoload)
	{
		
	}
	public function view($view,$___)
	{
		foreach($___ as $____ => $__){
			$$____ = $__;
		}
		require __DIR__.'/../App/Views/'.$view.'.tpl.php';
	}
	public function helper($helper)
	{
		require __DIR__.'/Helper/'.$helper.'.php';
	}
}