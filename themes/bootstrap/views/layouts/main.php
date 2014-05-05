<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<!-- php Yii::app()->bootstrap->register(); -->
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
	//'type'=>'inverse',
	'collapse'=>true,
	'brand'=>'Baby Sitter',
	'brandUrl'=>'index.php',
	'brandOptions'=>array('class'=>'logo'),
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Beranda', 'icon'=>'fa fa-home', 'url'=>array('/site/index')),
                array('label'=>'Tentang Kami', 'icon'=>'fa fa-bookmark', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Hubungi Kami', 'icon'=>'fa fa-envelope', 'url'=>array('/site/contact')),
                array('label'=>'Dropdown', 'icon'=>'fa fa-star-o', 'url'=>array('#'), 'items'=>array(
					array('label'=>'Menu1', 'icon'=>'fa fa-star', 'url'=>array('#')),
					array('label'=>'Menu2', 'icon'=>'fa fa-star', 'url'=>array('#')),
					array('label'=>'Menu3', 'icon'=>'fa fa-star', 'url'=>array('#')),
					'---',
					array('label'=>'Sub Menu'),
					array('label'=>'SubMenu1', 'url'=>array('#')),
					array('label'=>'Submenu2', 'url'=>array('#')),
                )),
                array('label'=>'Login', 'icon'=>'fa fa-lock', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'icon'=>'fa fa-unlock-alt', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="span4"><img src="<?php echo Yii::app()->baseUrl; ?>/images/logo3.png"></div>
				<div class="span4">
				<h1 class="widget-title">About Us</h1>
							<p>
							Babysitter.co.id adalah partner Anda dalam mencari, memilih dan menemukan Asisten Rumah Tangga dan tenaga kerja lain yang tepat, sesuai dengan kebutuhan rumah tangga Anda. Kami mendidik serta menyalurkan seperti:<br>							
							[<a href="#"> Read More </a>]</p>
				</div>
				<div class="span4">
					<h1 class="widget-title">Contact Us</h1>
                        	<div class="contact-widget">
                            	<i class="fa fa-home fa-2x"></i>
                                <p>Jl.Raya Krukut (H.Umar VII) nO.77A Rt.002/001 Krukut, Limo - Depok</p>
                                <div class="clearfix"></div>
                                <i class="fa fa-phone fa-2x"></i>
                               <p>Phone: +62219883-2533, 9668-2688, 6883-1779<br> Mobile: +62813-8254-2228, +62817-4852-228<br> Blackberry: 2A0314DF</p>
                            <div class="clearfix"></div>

				</div>
			</div>
		</div>
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php $this->widget('ext.toTop.ToTop'); ?>
	</div><!-- footer -->

</div><!-- page -->

<!--[if lt IE 9]> <script type="text/javascript" src="js/html5.js"></script> <![endif]-->
</body>
</html>
