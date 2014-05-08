<div class="button-wrap">

						<?php $this->beginWidget(

							'bootstrap.widgets.TbModal',

							array('id'=>'modalHomePage')

						); ?>	

						<div class="modal-header">

							<a class="close" data-dismiss="modal">&times;</a>

							<h4>Modal header</h4>

						</div>

						<div class="modal-body">

							<p>Body Modal</p>

						</div>

						<div class="modal-footer">

							<?php $this->widget(

								'bootstrap.widgets.TbButton',

								array(

									'type' => 'primary',

									'label' => 'Save changes',

									'url' => '#',

									'htmlOptions' => array('data-dismiss' => 'modal'),

								)

							); ?>

							<?php $this->widget(

								'bootstrap.widgets.TbButton',

								array(

									'label' => 'Close',

									'url' => '#',

									'htmlOptions' => array('data-dismiss' => 'modal'),

								)

							); ?>

						</div>

						<?php $this->endWidget(); ?>

						<div class="btn-toolbar">

						<?php 

						$this->widget('bootstrap.widgets.TbButtonGroup', array(

							'type'=>'info', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'

							'size'=>'large',
							'buttons'=>array(

											array(  'label'=>'Hubungi Kami', 

													'loadingText'=>'Memuat laman...',

													//'icon'=>'icon-envelope',

													'htmlOptions' => array(

													'id'=>'buttonStateful',

													'data-toggle' => 'modal',

													'data-target' => '#modalHomePage',

														),

													),

											array('items'=>array(

												array(

													'label'=>'Email',

													'url'=>'mail:admin@babysitter.com'

													),

												array(
													'label'=>'Telepon', 
													'url'=>'tlp:0218908900'),
												array(
													'label'=>'Yahoo Massanger', 
													'url'=>'ym:babysitter@yahoo.com'),
												'---',
												array('label'=>'Blackberry Massanger', 'url'=>'bb:0898AT88'),
											)),
							),
						)); ?>
					</div>

					</div>
