<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\JoinAsset;
JoinAsset::register($this);
?>
<main class="main">
	<div class="join-posts">
		<div class="container">
			<?= $this->render('_banner', ['Banner'=> $Banner]); ?>
			<div class="row" style="padding: 35px 0px;">
				<div class="col-xs-12 col-lg-6" style="text-align: left;">
					<img src="<?=Url::base(true);?>/img/join_us.png" width="300" style="display: inline-block;">
				</div>
				<div class="col-xs-12 col-lg-6" style="text-align: right;">
					<img src="<?=Url::base(true);?>/img/join_us2.png" width="300" style="display: inline-block;">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-lg-4 box-left">
					<div class="join-content">
						<div class="join-content-box">
							<div class="join-title-header">
								<span class="text-header">ตำแหน่งงาน</span>
							</div>
							<div class="join-apply">
								<ul>
									<li><a href="#">QC</a></li>
									<li><a href="#" class="active">วิศวกรโยธา</a></li>
									<li><a href="#">ตำแหน่งอื่นๆ</a></li>
								</ul>
							</div>
							<hr>
							<div class="join-title-contact">
								<span class="text-header">ติดต่อฝ่ายบุคคล</span>
								<div>บริษัท ซุน คอนสตรัคชั่น แอนด์ เอ็นจิเนียริ่ง จำกัด</div>
								<div>ที่อยู่ 8899 หมู่ 4 ต.ปลวกแดง อ.ปลวกแดง จ.ระยอง</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-lg-8 box-right">
					<div class="join-description">
						<p>
							<b>คุณสมบัติทั่วไป</b><br>
							- อายุ 18-35 ปี<br>
							- จบปริญญาตรี สาขาใดก็ได้<br>
							- มีความขยัน อดทน ตั้งใจทำงาน รักงานบริการ<br>
							- มีมนุษยสัมพันธ์ดี<br>
							- มีประสบการณ์ ธุรกิจค้าปลีก จะพิจารณาเป็นพิเศษ<br><br>
							<b>สวัสดิการ และรายได้</b><br>
							- ค่าครองชีพ<br>
							- กองทุนสำรองเลี้ยงชีพ<br>
							- ค่ารักษาพยาบาล<br>
							- ตรวจสุขภาพประจำปี<br>
							- ค่านั่งเครื่องแคชเชียร์<br>
							- เงินรางวัลจากยอดขาย (Incentive)<br>
							- วันลาพิเศษ<br>
							- เงินช่วยเหลือต่างๆ<br>
							- ค่าครองชีพ<br>
							- กองทุนสำรองเลี้ยงชีพ<br>
							- ค่ารักษาพยาบาล<br>
							- ตรวจสุขภาพประจำปี<br>
							- ค่านั่งเครื่องแคชเชียร์<br>
							- เงินรางวัลจากยอดขาย (Incentive)<br>
							- วันลาพิเศษ<br>
							- เงินช่วยเหลือต่างๆ<br>
							ส่งใบสมัครด้วยตัวเองมาที่ อีเมล hr@wehomemart.com<br>
						</p>
						<hr>
						<div style="text-align: center;">
							<a href="#" class="btn-join">สมัครงาน</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<img src="<?=Url::base(true);?>/img/banner_footer_jobs.jpg" width="100%">
				</div>
			</div>
		</div>
	</div>

</main>