<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Login';
?>
<p class="login-box-msg">เข้าสู่ระบบการใช้งานเพื่อจัดการเนื้อหาและข้อมูลในเว็บไซต์</p>

<?php $form = ActiveForm::begin([
  'method' => 'post',
  'action' => ['login/index'],
  'options' => ['id' => 'formLogin', 'class' => 'form-horizontal' ],
  'enableClientValidation' => true,
  'fieldConfig' => [
    'template' => "{input} {error}",
    'inputOptions' => ['class' => 'form-control form-control-sm'],
    'options' => [
      'data-pjax' => true,
      'tag' => false,
    ],
  ],
]);
?>
<label class="col-form-label-sm">ชื่อผู้ใช้งาน :</label>
<div class="mb-3">
  <?= $form->field($model, 'login_username')->textInput(['class' => 'form-control ','id'=>'login_usernam','required' => true,'data-msg' => 'คุณยังไม่ได้ระบุชื่อผู้ใช้งาน'])?>
</div>
<label class="col-form-label-sm">รหัสผ่านผู้ใช้งาน :</label>
<div class="mb-3">
  <?= $form->field($model, 'login_password')->passwordInput(['class' => 'form-control','id'=>'login_password','required' => true,'data-msg' => 'คุณยังไม่ได้ระบุรหัสผ่านผู้ใช้งาน'])?>
</div>
<div class="row">
    <div class="col-8" id="msg-error" style="color: #dc3545;font-size: 10px;"></div>
    <!-- /.col -->
    <div class="col-4">
      <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block submit-login', 'name' => 'login-button']) ?>
    </div>
    <!-- /.col -->
</div>

<?php ActiveForm::end(); ?>


