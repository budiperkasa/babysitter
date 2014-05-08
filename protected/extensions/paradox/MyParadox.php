<?php

    class MyParadox extends CWidget{
		public function run()
			{
				$this->registerResources();
				
			return parent::run();
			}
       
		 public function registerResources(){
            $assets = dirname(__FILE__).'/assets';
            $basePath = Yii::app()->assetManager->publish($assets);            
            Yii::app()->clientScript->registerScriptFile($basePath.'/js/ui.js',  CClientScript::POS_END);
            Yii::app()->clientScript->registerScriptFile($basePath.'/js/easing.min.js',  CClientScript::POS_END);
            Yii::app()->clientScript->registerScriptFile($basePath.'/js/isotope.min.js',  CClientScript::POS_END);
            Yii::app()->clientScript->registerScriptFile($basePath.'/js/modernizr.custom.js',  CClientScript::POS_END);
            Yii::app()->clientScript->registerScriptFile($basePath.'/js/nicescroll.min.js',  CClientScript::POS_END);
            Yii::app()->clientScript->registerScriptFile($basePath.'/js/sticky.js',  CClientScript::POS_END);
            Yii::app()->clientScript->registerScriptFile($basePath.'/js/superfish.js',  CClientScript::POS_END);
            Yii::app()->clientScript->registerScriptFile($basePath.'/js/jflickrfeed.min.js',  CClientScript::POS_END);
            Yii::app()->clientScript->registerScriptFile($basePath.'/js/flexslider-min.js',  CClientScript::POS_END);
            Yii::app()->clientScript->registerScriptFile($basePath.'/js/jquery.themepunch.revolution.min.js',  CClientScript::POS_END);
            Yii::app()->clientScript->registerScriptFile($basePath.'/js/jquery.themepunch.plugins.min.js',  CClientScript::POS_END);
            Yii::app()->clientScript->registerScriptFile($basePath.'/js/_.js',  CClientScript::POS_END);
            Yii::app()->clientScript->registerCssFile($basePath.'/css/settings.css');
            Yii::app()->clientScript->registerCssFile($basePath.'/css/paradox.css');
			 }
        
        
    }
?>
