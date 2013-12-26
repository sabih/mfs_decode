<!--<div class="container">-->
    
    <?php
        $attributes = array('class' => 'form-signin', 'id' => 'form_login');
        echo form_open($base_url.'surveys/verify_login', $attributes);
    ?>
        <h2 class="form-signin-heading">Please sign in</h2>
        <input class="form-control" type="text" name="txt_email" autofocus="" required="" placeholder="Email address">
        <input class="form-control" type="password" name="txt_password" required="" placeholder="Password">
        <label class="checkbox align-left">
            <input type="checkbox" value="remember-me">
            Remember me        
        </label>
        <label class="align-right">
            <a href="register">Register</a>
        </label>
        
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="btn_login" value="Sign in">
    </form>
<!--</div>-->