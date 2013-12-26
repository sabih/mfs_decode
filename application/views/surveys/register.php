<h2 class="text-center">Register</h2>

<?php    
    $attributes = array('class' => 'form-horizontal', 'id' => 'form_register', 'autocomplete' => 'off');
    echo form_open($base_url.'surveys/login', $attributes);
?>
    
    <div class="form-group">
        <label for="txt_fname" class="col-sm-4 control-label">First Name</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="txt_fname" autofocus="" required="" placeholder="First Name">
        </div>
    </div>
    
    <div class="form-group">
        <label for="txt_lname" class="col-sm-4 control-label">Last Name</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="txt_lname" required="" placeholder="Last Name">
        </div>
    </div>
    
    <div class="form-group">
        <label for="txt_uname" class="col-sm-4 control-label">Username</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="txt_uname" required="" placeholder="Username">
        </div>
    </div>
    
    <div class="form-group">
        <label for="txt_email" class="col-sm-4 control-label">Email</label>
        <div class="col-sm-4">
          <input type="email" class="form-control" name="txt_email" required="" placeholder="Email">
        </div>
    </div>
    
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" name="txt_password" required="" placeholder="Password">
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4">          
            
            <?php
                $attributes = array(
                    'class' => 'btn btn-lg btn-primary btn-block',
                    'name' => 'btn_register',
                    'value' => 'Register'
                );
                echo form_submit($attributes);
            ?>            
            
        </div>
    </div>
</form>