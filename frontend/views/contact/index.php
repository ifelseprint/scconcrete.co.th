<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use frontend\assets\ContactAsset;
ContactAsset::register($this);
?>

<?php Pjax::begin(['id' => 'pjax-grid','timeout' => 0, 'enablePushState' => false]); ?>
<div id="loadingOverlay" class="loader-overlay" style="display: none;">
    <div class="loader-content loader-center">
        <div id="loading" class="loader"></div>
    </div>
</div>
<main class="main">
	<div class="contact-posts">
        <div class="contact-banner ">
        	<div class="container-iframe"> 
			  	<iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1520.7606675567872!2d101.18360883207434!3d12.983634990496379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3102dcddfc789491%3A0x19ba31a33f5174d4!2sSC%20Office%20Center!5e0!3m2!1sen!2sth!4v1605187012721!5m2!1sen!2sth" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

			</div>
        </div>
        <div class="contact-block">
        	<div class="container">
	    		<div class="row">
	    			<div class="col-12 col-md-5">
	    				<div class="contact-company">
		    				บริษัท ซุน คอนสตรัคชั่น แอนด์ เอ็นจิเนียริ่ง จำกัด<br>
							8899 M.4 Pluakdaeng, Rayong, 21140
						</div>
						<div class="contact-address">
							<div class="contact-address-bg">
								<table>
									<tr height="65">
										<td width="30"><img src="<?=Url::base(true);?>/img/icon-marker.png" width="100%"></td>
										<td width="75%">
											<div class="contact-company-inside">
							    				สาขาปลวกแดง<br>
												330 หมู่ 1 ต.ปลวกแดง อ.ปลวกแดง จ.ระยอง 21140
											</div>
										</td>
										<td width="100"><img src="<?=Url::base(true);?>/img/map_google.png" width="100%" style="border-radius: 7px;box-shadow: 0px 0px 5px #ccc;"></td>
									</tr>
									<tr height="65">
										<td width="30"><img src="<?=Url::base(true);?>/img/icon-marker.png" width="100%"></td>
										<td width="75%">
											<div class="contact-company-inside">
							    				สาขาปลวกแดง<br>
												330 หมู่ 1 ต.ปลวกแดง อ.ปลวกแดง จ.ระยอง 21140
											</div>
										</td>
										<td width="100"><img src="<?=Url::base(true);?>/img/map_google.png" width="100%" style="border-radius: 7px;box-shadow: 0px 0px 5px #ccc;"></td>
									</tr>
									<tr height="65">
										<td width="30"><img src="<?=Url::base(true);?>/img/icon-marker.png" width="100%"></td>
										<td width="75%">
											<div class="contact-company-inside">
							    				สาขาปลวกแดง<br>
												330 หมู่ 1 ต.ปลวกแดง อ.ปลวกแดง จ.ระยอง 21140
											</div>
										</td>
										<td width="100"><img src="<?=Url::base(true);?>/img/map_google.png" width="100%" style="border-radius: 7px;box-shadow: 0px 0px 5px #ccc;"></td>
									</tr>
									<tr height="65">
										<td width="30"><img src="<?=Url::base(true);?>/img/icon-marker.png" width="100%"></td>
										<td width="75%">
											<div class="contact-company-inside">
							    				สาขาปลวกแดง<br>
												330 หมู่ 1 ต.ปลวกแดง อ.ปลวกแดง จ.ระยอง 21140
											</div>
										</td>
										<td width="100"><img src="<?=Url::base(true);?>/img/map_google.png" width="100%" style="border-radius: 7px;box-shadow: 0px 0px 5px #ccc;"></td>
									</tr>
									<tr height="65">
										<td width="30"><img src="<?=Url::base(true);?>/img/icon-marker.png" width="100%"></td>
										<td width="75%">
											<div class="contact-company-inside">
							    				สาขาปลวกแดง<br>
												330 หมู่ 1 ต.ปลวกแดง อ.ปลวกแดง จ.ระยอง 21140
											</div>
										</td>
										<td width="100"><img src="<?=Url::base(true);?>/img/map_google.png" width="100%" style="border-radius: 7px;box-shadow: 0px 0px 5px #ccc;"></td>
									</tr>
									<tr height="65">
										<td width="30"><img src="<?=Url::base(true);?>/img/icon-marker.png" width="100%"></td>
										<td width="75%">
											<div class="contact-company-inside">
							    				สาขาปลวกแดง<br>
												330 หมู่ 1 ต.ปลวกแดง อ.ปลวกแดง จ.ระยอง 21140
											</div>
										</td>
										<td width="100"><img src="<?=Url::base(true);?>/img/map_google.png" width="100%" style="border-radius: 7px;box-shadow: 0px 0px 5px #ccc;"></td>
									</tr>
									<tr height="65">
										<td width="30"><img src="<?=Url::base(true);?>/img/icon-marker.png" width="100%"></td>
										<td width="75%">
											<div class="contact-company-inside">
							    				สาขาปลวกแดง<br>
												330 หมู่ 1 ต.ปลวกแดง อ.ปลวกแดง จ.ระยอง 21140
											</div>
										</td>
										<td width="100"><img src="<?=Url::base(true);?>/img/map_google.png" width="100%" style="border-radius: 7px;box-shadow: 0px 0px 5px #ccc;"></td>
									</tr>
									<tr height="65">
										<td width="30"><img src="<?=Url::base(true);?>/img/icon-marker.png" width="100%"></td>
										<td width="75%">
											<div class="contact-company-inside">
							    				สาขาปลวกแดง<br>
												330 หมู่ 1 ต.ปลวกแดง อ.ปลวกแดง จ.ระยอง 21140
											</div>
										</td>
										<td width="100"><img src="<?=Url::base(true);?>/img/map_google.png" width="100%" style="border-radius: 7px;box-shadow: 0px 0px 5px #ccc;"></td>
									</tr>
									<tr height="65">
										<td width="30"><img src="<?=Url::base(true);?>/img/icon-marker.png" width="100%"></td>
										<td width="75%">
											<div class="contact-company-inside">
							    				สาขาปลวกแดง<br>
												330 หมู่ 1 ต.ปลวกแดง อ.ปลวกแดง จ.ระยอง 21140
											</div>
										</td>
										<td width="100"><img src="<?=Url::base(true);?>/img/map_google.png" width="100%" style="border-radius: 7px;box-shadow: 0px 0px 5px #ccc;"></td>
									</tr>
									<tr height="65">
										<td width="30"><img src="<?=Url::base(true);?>/img/icon-marker.png" width="100%"></td>
										<td width="75%">
											<div class="contact-company-inside">
							    				สาขาปลวกแดง<br>
												330 หมู่ 1 ต.ปลวกแดง อ.ปลวกแดง จ.ระยอง 21140
											</div>
										</td>
										<td width="100"><img src="<?=Url::base(true);?>/img/map_google.png" width="100%" style="border-radius: 7px;box-shadow: 0px 0px 5px #ccc;"></td>
									</tr>
								</table>
							</div>
						</div>
						<div class="contact-service">
							<div style="font-size: 20px;">ศูนย์บริการเอสซีคอนกรีต</div>
							<div style="font-size: 24px;"><img src="<?=Url::base(true);?>/img/icon-tel2.png" style="display: inline-block; width: 40px;"> 038-029888</div>
							<div>
								<img src="<?=Url::base(true);?>/img/icon-website.png" style="display: inline-block; width: 20px;"> Fax. 038-029889
								<img src="<?=Url::base(true);?>/img/icon-line3.png" style="display: inline-block; width: 20px;"> @scen
								<img src="<?=Url::base(true);?>/img/icon-website.png" style="display: inline-block; width: 20px; "> www.scconcrete.co.th
							</div>
						</div>
	        		</div>
	        		<div class="col-12 col-md-1"></div>
	        		<div class="col-12 col-md-6">
	        			<div class="contact-form">
	    					<div class="title"><img src="<?=Url::base(true);?>/img/contact_us.png" width="250" style="margin: 0 auto;"></div>
	    					<div class="box">
	    						<?php if($Action=='view'){ ?>
	    						<?= $this->render('_form', ['ContactForm'=> $ContactForm]); ?>
	    						<?php }else{ ?>
								<div>
									<div>Thank you for your submission</div>
									<div>Send data successfully.</div>
								</div>
								<?php } ?>
	    					</div>
	    				</div>
	        		</div>
	        	</div>
	        </div>
        </div>
    </div>
</main>
<?php
$script = <<<JS
  $("document").ready(function(){

    $("#pjax-grid").on("pjax:start", function() {
      $('#loadingOverlay').show();
    });
    $("#pjax-grid").on("pjax:end", function() {
      $('#loadingOverlay').hide();
    });
  });
JS;
$this->registerJs($script);
?>
<?php Pjax::end(); ?>