<?php
class MyAnimation extends cWidget {
		
		public function run()
		{
			$this->registerResources();
			
		return parent::run();
		}
		 public function registerResources(){
            $assets = dirname(__FILE__).'/assets';
            $basePath = Yii::app()->assetManager->publish($assets);            
            Yii::app()->clientScript->registerScriptFile($basePath.'/js/waypoints.js',  CClientScript::POS_END);
            Yii::app()->clientScript->registerScriptFile($basePath.'/js/waypoints-config.js',  CClientScript::POS_END);
            Yii::app()->clientScript->registerCssFile($basePath.'/css/animation.css');
			 }
	}
?>
