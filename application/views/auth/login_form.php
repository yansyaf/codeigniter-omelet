<?php
$form = array(
    'method' => 'post',
    'class' => 'form-horizontal',
    'role' => 'form',
);
$login = array(
    'name' => 'login',
    'id' => 'login',
    'value' => set_value('login'),
    'maxlength' => 80,
    'size' => 30,
    'class' => 'form-control',
);
if ($login_by_username AND $login_by_email) {
    $login_label = 'Email or username';
} else if ($login_by_username) {
    $login_label = 'Login';
} else {
    $login_label = 'Email';
}
$password = array(
    'name' => 'password',
    'id' => 'password',
    'size' => 30,
    'class' => 'form-control',
);
$remember = array(
    'name' => 'remember',
    'id' => 'remember',
    'value' => 1,
    'checked' => set_value('remember'),
//    'style' => 'margin:0;padding:0',
);
$captcha = array(
    'name' => 'captcha',
    'id' => 'captcha',
    'maxlength' => 8,
    'class' => 'form-control',
);
?>

<div class="container">

    <div class="page-header">
        <h1>Login</h1>
    </div>        

    <?php echo form_open($this->uri->uri_string(), $form); ?>
    <div class="form-group">
        <div class="col-xs-2 control-label"><?php echo form_label($login_label, $login['id']); ?></div>
        <div class="col-xs-4"><?php echo form_input($login); ?></div>
        <div class="col-xs-4" style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']]) ? $errors[$login['name']] : ''; ?></div>
    </div>
    <div class="form-group">
        <div class="col-xs-2 control-label"><?php echo form_label('Password', $password['id']); ?></div>
        <div class="col-xs-4"><?php echo form_password($password); ?></div>
        <div class="col-xs-4" style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']]) ? $errors[$password['name']] : ''; ?></div>
    </div>

    <?php
    if ($show_captcha) {
        if ($use_recaptcha) {
            ?>
            <div class="form-group">
                <td colspan="2">
                    <div id="recaptcha_image"></div>
                </td>
                <td>
                    <a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
                    <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
                    <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
                </td>
            </div>

            <div class="form-group">
                <td>
                    <div class="recaptcha_only_if_image">Enter the words above</div>
                    <div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
                </td>
                <td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
                <td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
                <?php echo $recaptcha_html; ?>
            </div>

        <?php } else { ?>
            <div class="form-group">
                <td colspan="3">
                    <p>Enter the code exactly as it appears:</p>
                    <?php echo $captcha_html; ?>
                </td>
            </div>

            <div class="form-group">
                <td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
                <td><?php echo form_input($captcha); ?></td>
                <td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
            </div>
            <?php
        }
    }
    ?>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <div class="checkbox">
                <label>
                    <?php echo form_checkbox($remember); ?>
                    <!--<input type="checkbox"> Remember me-->
                    <?php echo form_label('Remember me', $remember['id']); ?>
                </label>
            </div>
        </div>
    </div>    

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <?php echo form_submit('submit', 'Let me in', 'class="btn btn-default"'); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <span style="margin-right: 10px;"><?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?></span>
            <span><?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register'); ?></span>
        </div>    
    </div>    

    <?php echo form_close(); ?>    

</div>
