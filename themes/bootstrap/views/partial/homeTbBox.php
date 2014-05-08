<?php $box = $this->beginWidget(

				    'bootstrap.widgets.TbBox',

					array(

						'title'=>'You May Change',

						'headerIcon'=>'icon-bullhorn',

						//'content'=>'Lorem ipsum dollor sit amet',

						'headerButtons'=>array(

							array(

								'class'=>'bootstrap.widgets.TbButtonGroup',

								'buttons'=>array(

									array('label'=>'Agree', 'icon'=>'icon-heart','url'=>'#'),

									array('label'=>'Maybe', 'url'=>'#'),

									array('label'=>'Disagree', 'url'=>'#'),

								),

							),

						),

						'htmlOptions'=>array('class'=>'bootstrap-widget-table'),

					)

	); ?>

	

	<ul>

		You may change the content of this page by modifying the following two files:

	</ul>



<ul>

    <li>View file: </li>

    <li>Layout file: </li>

</ul>

	</div>

	<?php $this->endWidget(); ?>
