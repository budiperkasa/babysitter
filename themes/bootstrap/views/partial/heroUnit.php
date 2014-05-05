<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(

			'heading'=>CHtml::encode(Yii::app()->name),

			'htmlOptions'=>array('class'=>'home'),

			'headingOptions'=>array('class'=>'heading'),

			//'encodeHeading'=>true,

			)); ?>

				<p>Congratulations! You have successfully created your Yii application.</p>

			<?php $this->endWidget(); ?>
