<?php
$form = array(
    'method' => 'post',
    'class' => 'form-horizontal',
    'role' => 'form',
);
if ($use_username) {
    $username = array(
        'name' => 'username',
        'id' => 'username',
        'value' => set_value('username'),
        'maxlength' => $this->config->item('username_max_length', 'tank_auth'),
        'size' => 30,
        'class' => 'form-control',
    );
}
$email = array(
    'name' => 'email',
    'id' => 'email',
    'value' => set_value('email'),
    'maxlength' => 80,
    'size' => 30,
    'class' => 'form-control',
);
$password = array(
    'name' => 'password',
    'id' => 'password',
    'value' => set_value('password'),
    'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
    'size' => 30,
    'class' => 'form-control',
);
$confirm_password = array(
    'name' => 'confirm_password',
    'id' => 'confirm_password',
    'value' => set_value('confirm_password'),
    'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
    'size' => 30,
    'class' => 'form-control',
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
        <h1>Register</h1>
    </div>    

    <?php echo form_open($this->uri->uri_string(), $form); ?>
    <?php if ($use_username) { ?>
        <div class="form-group">
            <div class="col-xs-2 control-label"><?php echo form_label('Username', $username['id']); ?></div>
            <div class="col-xs-4"><?php echo form_input($username); ?></div>
            <div class="col-xs-4" style="color: red;"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']]) ? $errors[$username['name']] : ''; ?></div>        
        </div>
    <?php } ?>

    <div class="form-group">
        <div class="col-xs-2 control-label"><?php echo form_label('Email Address', $email['id']); ?></div>
        <div class="col-xs-4"><?php echo form_input($email); ?></div>
        <div class="col-xs-4" style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']]) ? $errors[$email['name']] : ''; ?></div>
    </div>

    <div class="form-group">
        <div class="col-xs-2 control-label"><?php echo form_label('Password', $password['id']); ?></div>
        <div class="col-xs-4"><?php echo form_password($password); ?></div>
        <div class="col-xs-4" style="color: red;"><?php echo form_error($password['name']); ?></div>
    </div>

    <div class="form-group">
        <div class="col-xs-2 control-label"><?php echo form_label('Confirm Password', $confirm_password['id']); ?></div>
        <div class="col-xs-4"><?php echo form_password($confirm_password); ?></div>
        <div class="col-xs-4" style="color: red;"><?php echo form_error($confirm_password['name']); ?></div>
    </div>

    <?php
    if ($captcha_registration) {
        if ($use_recaptcha) {
            ?>
            <div class="form-group">
                <span colspan="2">
                    <div id="recaptcha_image"></div>
                </span>

                <span>
                    <a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
                    <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
                    <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
                </span>
                <p></p>

                <span>
                    <div class="recaptcha_only_if_image">Enter the words above</div>
                    <div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
                </span>
                <span><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></span>
                <span style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></span>

                <?php echo $recaptcha_html; ?>

            </div>
        <?php } else { ?>
            <div class="form-group">
                <label class="col-xs-2 control-label">Enter the code exactly as it appears</label>
                <div class="col-xs-2">
                    <?php echo $captcha_html; ?>
                </div>                
            </div>

            <div class="form-group">
                <div class="col-xs-2 control-label"><?php echo form_label('Confirmation Code', $captcha['id']); ?></div>
                <div class="col-xs-4"><?php echo form_input($captcha); ?></div>
                <div class="col-xs-4" style="color: red;"><?php echo form_error($captcha['name']); ?></div>
            </div>
            <?php
        }
    }
    ?>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php echo form_submit('register', 'Register', 'class="btn btn-default"'); ?>
        </div>
    </div>

    <?php echo form_close(); ?>        

</div>
