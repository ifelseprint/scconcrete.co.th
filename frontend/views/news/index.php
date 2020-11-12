<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\NewsAsset;
NewsAsset::register($this);
?>
<main class="main">
	<div class="news-posts">

        <div class="news-block">
        	<div class="container">
        		<div class="row">
					<div class="col-lg-4">
						<img src="<?=Url::base(true);?>/img/news.jpg" width="100%">
					</div>
					<div class="col-lg-8" style="text-align: right;">
						<a href="#" class="btn-lookmore">Look more →</a>
					</div>
        		</div>
        		<div class="row" style="padding: 20px 0px;">
        			<div class="col-lg-12">
        				<table border="0" cellspacing="0" cellpadding="0">
        					<tr>
        						<td width="30%" align="center" style="background: #cc0001;color: #fff;">
        							<div class="title">
	        							กิจกรรม</br>
	        							ช่วยเหลือสังคม
	        						</div>
        						</td>
        						<td>
        							<img src="<?=Url::base(true);?>/img/news_banner1.jpg" width="100%">
        						</td>
        					</tr>
        				</table>
        			</div>
        		</div>
        		<div class="row news-list">
        			<div class="col-lg-4">
        				<div class="news-list-image">
        					<a href="#">
	        					<img src="<?=Url::base(true);?>/img/news1.jpg" width="100%">
	        					<div class="overlay">
								    <div class="text">อ่านเพิ่มเติม</div>
								 </div>
							</a>
        				</div>
        				<div class="news-list-title">CSR กิจกรรมเลี้ยงอาหารเด็กและบริจาคสิ่งของจำเป็น</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="news-list-image">
        					<a href="#">
	        					<img src="<?=Url::base(true);?>/img/news2.jpg" width="100%">
	        					<div class="overlay">
								    <div class="text">อ่านเพิ่มเติม</div>
								 </div>
							</a>
        				</div>
        				<div class="news-list-title">CSR กิจกรรมเลี้ยงอาหารเด็กและบริจาคสิ่งของจำเป็น</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="news-list-image">
        					<a href="#">
	        					<img src="<?=Url::base(true);?>/img/news3.jpg" width="100%">
	        					<div class="overlay">
								    <div class="text">อ่านเพิ่มเติม</div>
								 </div>
							</a>
        				</div>
        				<div class="news-list-title">CSR กิจกรรมเลี้ยงอาหารเด็กและบริจาคสิ่งของจำเป็น</div>
        			</div>
        		</div>
	        </div>
        </div>

        <div class="activity-block">
        	<div class="container">
        		<div class="row">
					<div class="col-lg-8"></div>
					<div class="col-lg-4" style="text-align: right;">
						<a href="#" class="btn-lookmore">Look more →</a>
					</div>
        		</div>
        		<div class="row" style="padding: 20px 0px;">
        			<div class="col-lg-12">
        				<table border="0" cellspacing="0" cellpadding="0">
        					<tr>
        						<td>
        							<img src="<?=Url::base(true);?>/img/activity.jpg" width="100%">
        						</td>
        						<td width="30%" align="center" style="background: #cc0001;color: #fff;">
        							<div class="title">
	        							กิจกรรม</br>
	        							ของบริษัท
	        						</div>
        						</td>
        					</tr>
        				</table>
        			</div>
        		</div>
        		<div class="row activity-list">
        			<div class="col-lg-4">
        				<div class="activity-list-image">
        					<a href="#">
	        					<img src="<?=Url::base(true);?>/img/activity1.jpg" width="100%">
	        					<div class="overlay">
								    <div class="text">อ่านเพิ่มเติม</div>
								 </div>
							</a>
        				</div>
        				<div class="activity-list-title">CSR กิจกรรมเลี้ยงอาหารเด็กและบริจาคสิ่งของจำเป็น</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="activity-list-image">
        					<a href="#">
	        					<img src="<?=Url::base(true);?>/img/activity2.jpg" width="100%">
	        					<div class="overlay">
								    <div class="text">อ่านเพิ่มเติม</div>
								 </div>
							</a>
        				</div>
        				<div class="activity-list-title">CSR กิจกรรมเลี้ยงอาหารเด็กและบริจาคสิ่งของจำเป็น</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="activity-list-image">
        					<a href="#">
	        					<img src="<?=Url::base(true);?>/img/activity3.jpg" width="100%">
	        					<div class="overlay">
								    <div class="text">อ่านเพิ่มเติม</div>
								 </div>
							</a>
        				</div>
        				<div class="activity-list-title">CSR กิจกรรมเลี้ยงอาหารเด็กและบริจาคสิ่งของจำเป็น</div>
        			</div>
        		</div>
	        </div>
        </div>
    </div>
</main>