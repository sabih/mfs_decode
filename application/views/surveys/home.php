<h1>
<?php echo "Welcome ".$username; ?>!
</h1>
<a href="logout" name="sign_out">Sign Out</a>


<?php
        $attributes = array('class' => 'form-signin', 'id' => 'form_details');
        echo form_open($base_url.'surveys/details', $attributes);
    ?>
    <input class="btn btn-lg btn-primary btn-block" type="submit" name="btn_details" value="Show Details">
    </form>