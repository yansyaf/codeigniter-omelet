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
if ($this->config->item('use_username', 'tank_auth')) {
    $login_label = 'Email or login';
} else {
    $login_label = 'Email';
}
?>
<div class="container">
    <?php echo form_open($this->uri->uri_string(), $form); ?>

    <div class="page-header">
        <h1>Forgot Password</h1>
    </div>        

    <div class="form-group">
        <div class="col-xs-2 control-label"><?php echo form_label($login_label, $login['id']); ?></div>
        <div class="col-xs-4"><?php echo form_input($login); ?></div>
        <div class="col-xs-4" style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']]) ? $errors[$login['name']] : ''; ?></div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <?php echo form_submit('reset', 'Get a new password', 'class="btn btn-default"'); ?>            
        </div>        
    </div>

    <?php echo form_close(); ?>

</div>    