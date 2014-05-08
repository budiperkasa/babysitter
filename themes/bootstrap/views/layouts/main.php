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
	'brand'=>'Pramuwisma.com',
	'brandUrl'=>'index.php',
	'brandOptions'=>array('class'=>'logo'),
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Beranda', 'icon'=>'fa fa-home', 'url'=>array('/site/index')),
                array('label'=>'Services', 'icon'=>'fa fa-star-o', 'url'=>array('/site/page', 'view'=>'services'), 'items'=>array(
					array('label'=>'Maid/PRT', 'icon'=>'fa fa-check-square-o', 'url'=>array('/site/page', 'view'=>'pembantu')),
					array('label'=>'Baby Sitter', 'icon'=>'fa fa-check-square-o', 'url'=>array('/site/page', 'view'=>'baby_sitter')),
					array('label'=>'Nany', 'icon'=>'fa fa-check-square-o', 'url'=>array('/site/page', 'view'=>'nany')),
					array('label'=>'Perawat Lansia', 'icon'=>'fa fa-check-square-o', 'url'=>array('/site/page', 'view'=>'perawat_lansia')),
					array('label'=>'Gardener/Tukang Kebun', 'icon'=>'fa fa-check-square-o', 'url'=>array('/site/page', 'view'=>'tukang_kebun')),
					
					'---',
					array('label'=>'Tautan Cepat'),
					array('label'=>'Syarat Majikan', 'icon'=>'fa fa-info-circle', 'url'=>array('/site/page', 'view'=>'syarat_majikan')),
					array('label'=>'Pemesanan', 'icon'=>'fa fa-paste', 'url'=>array('/site/page', 'view'=>'pemesanan')),
                )),
                array('label'=>'Tentang Kami', 'icon'=>'fa fa-bookmark', 'url'=>array('/site/page', 'view'=>'tentang_kami')),
                array('label'=>'Hubungi Kami', 'icon'=>'fa fa-envelope', 'url'=>array('/site/contact')),
                array('label'=>'Login Admin', 'icon'=>'fa fa-lock', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
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
				<h1 class="widget-title">Tentang Kami</h1>
							<p>
							Pramuwisma.com adalah partner Anda dalam mencari, memilih dan menemukan Asisten Rumah Tangga dan tenaga kerja lain yang tepat, sesuai dengan kebutuhan rumah tangga Anda. Kami mendidik serta menyalurkan seperti:<br>							
							[<a href="#"> Read More </a>]</p>
				</div>
				<div class="span4">
					<h1 class="widget-title">Hubungi Kami</h1>
                        	<div class="contact-widget">
                            	<i class="fa fa-home fa-2x"></i>
                                <p>Komplek Ruko Silagati No. A2, Jalan Pasar Kecapi No. 99A, Bekasi 17414.</p>
                                <div class="clearfix"></div>
                                <i class="fa fa-phone fa-2x"></i>
                               <p>Phone: 021 8960-6000. <br/>Mobile: 0812 131 5108, 0812 131 5104. <br/>Blackberry: 28149D3B</p>
                            <div class="clearfix"></div>

				</div>
			</div>
		</div>
		<p>Copyright &copy; <?php echo date('Y'); ?> by <a href="<?php echo Yii::app()->baseUrl; ?>"><?php echo CHtml::encode(Yii::app()->name); ?></a>.</p>
		
		<?php $this->widget('ext.toTop.ToTop'); ?>
	</div><!-- footer -->

</div><!-- page -->
<!--[if lt IE 9]> <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/customM.js"></script> <![endif]-->  
<!--[if lt IE 9]> <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/html5.js"></script> <![endif]-->
</body>
</html>
