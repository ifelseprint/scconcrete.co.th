<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div style="padding: 40px 0px;background: #fff;">
    <div class="container">
        <div class="row" style="padding: 30px 0px;">
            <div class="col-xs-12 col-lg-4" style="text-align: center;">
                <img src="img/reference_project.png" width="250" style="display: inline;">
            </div>
            <div class="col-xs-12 col-lg-8">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut finibus enim gravida enim convallis, a interdum tellus lobortis. Integer ullamcorper mattis lectus, nec sagittis diam fringilla sed. Vivamus sit amet auctor velit. Maecenas eget velit eu felis tincidunt aliquam. Ut a laoreet nisi. Vestibulum eleifend nisl quis orci lobortis hendrerit.
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-lg-12">
                <img src="img/customer.png" width="250">
                <div style="padding: 15px 0px;">
                  <div class="owl-carousel owl-simple carousel-with-shadow owl-loaded owl-drag" data-toggle="owl" data-owl-options='{
                    "nav": false, 
                    "dots": true,
                    "items": 4,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":1
                        },
                        "600": {
                            "items":2
                        },
                        "992": {
                            "items":4
                        }
                    }
                    }'>
                    <style type="text/css">
                      .entry-display:hover .entry-media-content{
                        display: flex;
                      }

                      .entry-media-content{
                        display: none;
                        position: absolute;
                        top: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(0,0,0,0.4);
                        color: #fff;
                        justify-content: center;
                        align-items: center;
                        font-size: 40px;
                      }
                    </style>
                      <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0.4s ease 0s; width: 1188px;">
                          <div class="owl-item active" style="width: 376px; margin-right: 20px;">
                            <article class="entry entry-display">
                              <figure class="entry-media">
                                <a href="#">
                                  <img src="<?=Url::base(true);?>/img/pic-product1.jpg" alt="image desc">
                                </a>
                              </figure><!-- End .entry-media -->
                              <div class="entry-media-content">
                                HLP2-4
                              </div>
                            </article>
                          </div>
                          <div class="owl-item active" style="width: 376px; margin-right: 20px;">
                            <article class="entry entry-display">
                              <figure class="entry-media">
                                <a href="#">
                                  <img src="<?=Url::base(true);?>/img/pic-product2.jpg" alt="image desc">
                                </a>
                              </figure><!-- End .entry-media -->
                              <div class="entry-media-content">
                                HLP2-4
                              </div>
                            </article>
                          </div>
                          <div class="owl-item active" style="width: 376px; margin-right: 20px;">
                            <article class="entry entry-display">
                              <figure class="entry-media">
                                <a href="#">
                                  <img src="<?=Url::base(true);?>/img/pic-product3.jpg" alt="image desc">
                                </a>
                              </figure><!-- End .entry-media -->
                              <div class="entry-media-content">
                                HLP2-4
                              </div>
                            </article>
                          </div>
                          <div class="owl-item active" style="width: 376px; margin-right: 20px;">
                            <article class="entry entry-display">
                              <figure class="entry-media">
                                <a href="#">
                                  <img src="<?=Url::base(true);?>/img/pic-product4.jpg" alt="image desc">
                                </a>
                              </figure><!-- End .entry-media -->
                              <div class="entry-media-content">
                                HLP2-4
                              </div>
                            </article>
                          </div>
                          <div class="owl-item active" style="width: 376px; margin-right: 20px;">
                            <article class="entry entry-display">
                              <figure class="entry-media">
                                <a href="#">
                                  <img src="<?=Url::base(true);?>/img/pic-product5.jpg" alt="image desc">
                                </a>
                              </figure><!-- End .entry-media -->
                              <div class="entry-media-content">
                                HLP2-4
                              </div>
                            </article>
                          </div>
                          <div class="owl-item active" style="width: 376px; margin-right: 20px;">
                            <article class="entry entry-display">
                              <figure class="entry-media">
                                <a href="#">
                                  <img src="<?=Url::base(true);?>/img/pic-product6.jpg" alt="image desc">
                                </a>
                              </figure><!-- End .entry-media -->
                              <div class="entry-media-content">
                                HLP2-4
                              </div>
                            </article>
                          </div>
                          <div class="owl-item active" style="width: 376px; margin-right: 20px;">
                            <article class="entry entry-display">
                              <figure class="entry-media">
                                <a href="#">
                                  <img src="<?=Url::base(true);?>/img/pic-product7.jpg" alt="image desc">
                                </a>
                              </figure><!-- End .entry-media -->
                              <div class="entry-media-content">
                                HLP2-4
                              </div>
                            </article>
                          </div>
                        </div>
                      </div>
                      <div class="owl-nav disabled">
                        <button type="button" role="presentation" class="owl-prev">
                          <i class="icon-angle-left"></i>
                        </button>
                        <button type="button" role="presentation" class="owl-next">
                          <i class="icon-angle-right"></i>
                        </button>
                      </div>
                      <div class="owl-dots disabled">
                        <button role="button" class="owl-dot active"><span></span></button>
                      </div>
                  </div><!-- End .owl-carousel -->
                </div>
            </div>
        </div>
    </div>
</div>
