<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

								<?php $this->widget('bootstrap.widgets.TbAlert', array(
									'alerts'=>array('contact'),
								)); ?>

					
							<?php endif; ?>

<?php echo $this->renderPartial('/partial/paralax');?>	
<?php $this->widget('ext.paradox.MyParadox'); ?>
<div class="container"> 
<div class="home-badge">
	<div class="content-badge">
			<div class="row">
				<div class="span8">
					<?php echo $this->renderPartial('/partial/headingHome');?>	
				</div>	
				<div class="span3">
				
					<div class="button-wrap"><!--Button-wrap start-->
						<?php $this->beginWidget(
							'bootstrap.widgets.TbModal',
							array('id'=>'modalHomePage')
						); ?>	
						<div class="modal-header"><!--Modal-header start-->
							<a class="close" data-dismiss="modal">&times;</a>
							<h4>Contact Us</h4>

						</div><!--Modal-header end-->
						<div class="modal-body"><!--Modal-body start-->
							<div class="form">
							<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
								'id'=>'contact-form',
								'type'=>'vertical',
								'enableClientValidation'=>true,
								'clientOptions'=>array(
									'validateOnSubmit'=>true,
								),
							)); ?>
								<p class="note">Fields with <span class="required">*</span> are required.</p>
								<?php echo $form->errorSummary($model); ?>
								<?php echo $form->textFieldRow($model,'name'); ?>
								<?php echo $form->textFieldRow($model,'email'); ?>
								<?php echo $form->textFieldRow($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
								<?php echo $form->textAreaRow($model,'body',array('rows'=>6, 'class'=>'span5')); ?>
								<?php if(CCaptcha::checkRequirements()): ?>
									<?php echo $form->captchaRow($model,'verifyCode',array(
										'hint'=>'Please enter the letters as they are shown in the image above.<br/>Letters are not case-sensitive.',
									)); ?>
								<?php endif; ?>
							</div><!-- form -->							
						</div><!--Modal-body end-->
						<div class="modal-footer"><!--Modal footer start-->

															
									<?php $this->widget('bootstrap.widgets.TbButton',array(
										'buttonType'=>'submit',
										'type'=>'primary',
										'label'=>'Submit',
									)); ?>
								

							<?php $this->endWidget(); ?>

							<?php $this->widget(

								'bootstrap.widgets.TbButton',

								array(

									'label' => 'Close',

									'url' => '#',

									'htmlOptions' => array('data-dismiss' => 'modal'),

								)

							); ?>

						</div><!--Modal footer end-->
						<?php $this->endWidget(); ?>
						
							<div class="btn-toolbar"><!--Button toolbar start-->
							<?php 
							$this->widget('bootstrap.widgets.TbButtonGroup', array(
								'type'=>'info', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
								'size'=>'large',
								'buttons'=>array(
												array(  'label'=>'Hubungi Kami', 
														//'icon'=>'icon-envelope',
														'htmlOptions' => array(
														'data-toggle' => 'modal',
														'data-target' => '#modalHomePage',
															),
														),
												array('items'=>array(
													array(

														'label'=>'Email',

														'url'=>'mail:admin@pramuwisma.com'

														),

													array(
														'label'=>'Telepon', 
														'url'=>'tlp:02189606000'),
													array(
														'label'=>'Yahoo Massanger', 
														'url'=>'ym:pramuwisma@yahoo.com'),
													'---',
													array('label'=>'Blackberry Massanger', 'url'=>'bbm:28149D3B'),
												)),
								),
							)); ?>
						</div><!--Button toolbar end-->
					</div><!--Button-wrap end-->
				
				</div>    
			</div>
	</div>
	<div class="badge-bottom">
		<img alt="Shadow" src="images/shadow.png">
	</div>
</div>
</div>
<div class="container">	 
	<div class="entrytitle">
		<h4>Our Service</h4>
		<p>Kami Selalu Memberikan Pelayanan Terbaik untuk Kepuasan Pelanggan Kami.</p>
	</div>
</div>
<?php $this->widget('ext.animation.MyAnimation'); ?>
        <div class="fullblock padding50">
            <div class="portfolio_blocks_wrap" id="carousel">
                <div class="item">
                	<div class="image-wrap">
                    	<div class="maskImage">
                            <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=site/page&view=tukang_kebun"><span><i class="fa fa-link"></i></span></a>
                        </div>
                        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=site/page&view=tukang_kebun"><img src="img/trash/garden1.jpg" alt="BabySitter" /></a>
                    </div>
                    <div class="title_holder">
                        <h1><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=site/page&view=tukang_kebun">Gardener / Tukang Kebun</a></h1>
                    </div>
                </div> 
                <div class="item">
                	<div class="image-wrap">
                    	<div class="maskImage">
                            <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=site/page&view=nany"><span><i class="fa fa-link"></i></span></a>
                        </div>
                        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=site/page&view=nany"><img src="img/trash/bs.jpg" alt="BabySitter" /></a>
                    </div>
                    <div class="title_holder">
                        <h1><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=site/page&view=nany">Nanny / Perawat</a></h1>
                    </div>
                </div>
                
                <div class="item">
                	<div class="image-wrap">
                    	<div class="maskImage">
                            <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=site/page&view=baby_sitter"><span><i class="fa fa-link"></i></span></a>
                        </div>
                        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=site/page&view=baby_sitter"><img src="img/trash/bs2.jpg" alt="BabySitter" /></a>
                    </div>
                    <div class="title_holder">
                        <h1><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=site/page&view=baby_sitter">Baby Sitter</a></h1>
                    </div>
                </div> 
                <div class="item">
                	<div class="image-wrap">
                    	<div class="maskImage">
                            <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=site/page&view=supir"><span><i class="fa fa-link"></i></span></a>
                        </div>
                        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=site/page&view=supir"><img src="img/trash/driver.jpg" alt="BabySitter" /></a>
                    </div>
                    <div class="title_holder">
                        <h1><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=site/page&view=supir">Driver / Supir</a></h1>
                    </div>
                </div>   
                <div class="item">
                	<div class="image-wrap">
                    	<div class="maskImage">
                    		<a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=site/page&view=pembantu"><span><i class="fa fa-link"></i></span></a>
                        </div>
                        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=site/page&view=pembantu"><img src="img/trash/maid3.jpg" alt="BabySitter" /></a>
                    </div>
                    <div class="title_holder">
                        <h1><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=site/page&view=pembantu">Maid / Pembantu </a></h1>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>      
<?php 
$this->widget('ext.carouFredSel.ECarouFredSel', array(
    'id' => 'carousel',
    'target' => '#carousel',
	'config'=> array(
		'width' => '100%',
		'items'=> null,
		'scroll' => array(
            'items' => 1,
            'easing' => 'elastic',
            'duration' => 900,                      
            'pauseDuration' => 4000,    
            'pauseOnHover' => true,
        ),
	),
));
?>
