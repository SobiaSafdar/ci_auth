<?php include 'header.php'; ?>


<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>



 <div class="login-box">
   
    <hr>
    
  <div class="input-box">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
           <?php echo form_open("auth/login");?>
            <div class="input-group form-group">
              <span class="input-group-addon"><i class='fa fa-user'></i></span>
                <?php echo form_input($identity,'form-control');?></div>
                
                <div class="input-group form-group">
                  <span class="input-group-addon"><i class='fa fa-key'></i></span>
                    <?php echo form_input($password);?>
                </div>
                
                <h5>  
                    <?php echo lang('login_remember_label', 'remember');?>
                    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> Forget Password?</h5>
            <div class="form-group">
                <button type="submit" class="btn  btn-block  btn-submit  pull-right" name="submit">Submit</button>
            </div>

            <?php echo form_close();?>
        </div>
        <!-- col -->
      </div>
      <!-- row -->
      <div class="row">
          <bR><br>
      </div>
         
    </div>


<?php include 'footer.php'; ?>
