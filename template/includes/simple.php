<?php
/**
 * simple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * simple.php provides a typical feedback form for a website
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php  
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>
	<!-- START HTML FORM -->
<fieldset>
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10"  cols="65" autofocus/>
		</label>
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" cols="65"/>
		</label>
		<label>
			Comments:<br /><textarea name="Comments" cols="55" rows="6" placeholder="Your comments are important to me!" tabindex="40"></textarea>
		</label>
    	<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div> 
		<input type="submit" value="SUBMIT">
	</form>
</fieldset>
	<!-- END HTML FORM -->
