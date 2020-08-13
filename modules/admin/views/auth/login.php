<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <?php use yii\widgets\ActiveForm;

            $form = ActiveForm::begin()  ?>

            <?= $form->field(
                    $model,
                    'username',
                    [
                            'template' =>
                                "<div class= 'input-group-append'>
{input}<span class=\"fas fa-envelope\"></span>
<div>{error}</div></div>",])->textInput(['placeholder' => 'Login'])  ?>

<?= $form->field(
                    $model,
                    'password',
                    [
                            'template' =>
                                "<div class= 'form-group has-feedback'>
{input}<span class=\"glyphicon glyphicon-lock form control-feedback\"></span>
<div>{error}</div></div>",])->passwordInput(['placeholder' => 'Password'])  ?>


            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <?= $form->field($model, 'rememberMe')->checkbox([
                                'template' => "{label} {input}"
                        ]) ?>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <?= \yii\helpers\Html::submitButton('Login', ['class' => 'btn btn-primary btn-block btn-flat',
                        'name' => 'login-button']) ?>
                </div>
                <!-- /.col -->
            </div>


            <?php ActiveForm::end()  ?>





            <p class="mb-1">
                <a href="forgot-password.html">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="register.html" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->