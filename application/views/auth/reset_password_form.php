<?php
$form = array(
    'method' => 'post',
    'class' => 'form-horizontal',
    'role' => 'form',
);
$new_password = array(
    'name' => 'new_password',
    'id' => 'new_password',
    'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
    'size' => 30,
    'class' => 'form-control',
);
$confirm_new_password = array(
    'name' => 'confirm_new_password',
    'id' => 'confirm_new_password',
    'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
    'size' => 30,
    'class' => 'form-control',
);
?>
<div class="container">
    <?php echo form_open($this->uri->uri_string(), $form); ?>

    <div class="page-header">
        <h1>Reset Password</h1>
    </div>    

    <div class="form-group">
        <div class="col-xs-2 control-label"><?php echo form_label('New Password', $new_password['id']); ?></div>
        <div class="col-xs-4"><?php echo form_password($new_password); ?></div>
        <div class="col-xs-4" style="color: red;"><?php echo form_error($new_password['name']); ?><?php echo isset($errors[$new_password['name']]) ? $errors[$new_password['name']] : ''; ?></div>
    </div>
    <div class="form-group">
        <div class="col-xs-2 control-label"><?php echo form_label('Confirm New Password', $confirm_new_password['id']); ?></div>
        <div class="col-xs-4"><?php echo form_password($confirm_new_password); ?></div>
        <div class="col-xs-4" style="color: red;"><?php echo form_error($confirm_new_password['name']); ?><?php echo isset($errors[$confirm_new_password['name']]) ? $errors[$confirm_new_password['name']] : ''; ?></div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-4">
            <?php echo form_submit('change', 'Change Password', 'class="btn btn-default"'); ?>            
        </div>
    </div>

    <?php echo form_close(); ?>
</div>